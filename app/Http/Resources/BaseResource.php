<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class BaseResource extends JsonResource
{
    // Param. name for scope type in query string
    public const REQUEST_SCOPE_PARAM = 'scope';
    public const REQUEST_WITHOUT_RELATION_PARAM = 'withoutRelation';
    public const REQUEST_RELATION_MODELS_SCOPE = 'relationsModelsScope';

    // Scope types
    public const SCOPE_MICRO = 'micro';
    public const SCOPE_MINI  = 'mini';
    public const SCOPE_CUSTOM  = 'custom';
    public const SCOPE_FULL  = 'full';

    public const DATE_FORMAT = 'd-m-Y H:i A';

    protected string $scope;
    protected bool $withoutRelation = true;

    protected array $micro     = [];
    protected array $mini      = [];
    protected array $full      = [];
    protected array $relations = [];

    /**
     * Create a new resource instance.
     *
     * @param mixed $resource
     * @return void
     */
    public function __construct($resource)
    {
        // Ensure you call the parent constructor
        parent::__construct($resource);
        $this->settScope();
        $this->setWithoutRelation();
    }

    public function settScope()
    {
        $this->scope = request(self::REQUEST_SCOPE_PARAM) ?? "";
    }

    public function refreshScope()
    {
        $relationsModelsScope = request(Self::REQUEST_RELATION_MODELS_SCOPE) ?? [];

        foreach ($relationsModelsScope as $relationModel => $scope) {

            $modelClassArr = explode("\\", get_class($this->resource));
            $relationModelClass = end($modelClassArr);

            if ($relationModel === $relationModelClass) {

                request()->merge(['scope' => $scope]);

                $this->settScope();
            }
        }
    }

    public function setWithoutRelation()
    {
        if (request(self::REQUEST_WITHOUT_RELATION_PARAM) == "true")
        {
            $this->withoutRelation = false;
        }
    }

    public function getScope(): string
    {
        return $this->scope;
    }

    public function getMicro(): array
    {
        return $this->micro;
    }

    public function getMini(): array
    {
        return array_merge($this->getMicro(), $this->mini);
    }

    public function getCustom(): array
    {
        return $this->custom;
    }

    public function getFull(): array
    {
        return array_merge($this->getMini(), $this->full);
    }

    public function getResource(): array
    {
        $this->refreshScope(); // to refresh $this->scope value

        $data = match ($this->getScope()) {
            self::SCOPE_MICRO => $this->getMicro(),
            self::SCOPE_MINI => $this->getMini(),
            self::SCOPE_CUSTOM => $this->getCustom(),
            default => $this->getFull()
        };
        return $this->withoutRelation ? $this->getAttributesWithRelations($data) : $data;
    }

    public function getAttributesWithRelations($attributes): array
    {
        return array_merge($this->relations, $attributes);
    }

}
