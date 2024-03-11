<?php

namespace App\Http\Resources;


use \Illuminate\Http\Request;

class ComplaintResource extends BaseResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray(Request $request) : array
    {
        $this->micro = [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
        ];
        $this->mini = [
            'created_at' => $this->created_at?->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at?->format('Y-m-d H:i:s'),
        ];
        $this->full = [
        ];
        $this->relations = [
            'user' => $this->relationLoaded('user') ? new UserResource($this->user) : null,
        ];
        return $this->getResource();
    }
}
