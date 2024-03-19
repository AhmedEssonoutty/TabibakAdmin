<?php

namespace App\Repositories\SQL;

use App\Constants\FileConstants;
use App\Models\Article;
use App\Repositories\Contracts\ArticleContract;
use App\Repositories\Contracts\FileContract;

class ArticleRepository extends BaseRepository implements ArticleContract
{
    /**
     * ArticleRepository constructor.
     * @param Article $model
     */
    public function __construct(Article $model)
    {
        parent::__construct($model);
    }

    public function syncRelations($model, $attributes)
    {
        if (isset($attributes['main_image'])) {
            $file = resolve(FileContract::class)->create(['file' => $attributes['main_image'],
                'type' => FileConstants::FILE_TYPE_ARTICLE_MAIN_IMAGE->value]);
            $model->mainImage()->save($file);
        }
        if (isset($attributes['images'])) {
            $images = collect($attributes['images'])->map(function ($image) {
                return ['file' => $image, 'type' => FileConstants::FILE_TYPE_ARTICLE_IMAGE->value];
            })->toArray();
            $files = resolve(FileContract::class)->createMany($images);
            foreach ($files as $file)
                $model->images()->save($file);
        }
        return $model;
    }

}
