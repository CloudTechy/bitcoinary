<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TestimonialResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'image' => empty($this->image) ? 'anonymous.jpg' : $this->image,
            'company' => $this->company,
            'content' => $this->content,
            'heading' => $this->heading,
            'request' => $this->request,
            'country' => $this->country,
            'designation' => $this->designation,
            'name' => $this->name,
            'rank' => (int) $this->rank,
            'rating' => (int) $this->rating,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at->format('Y-m-d'),
        ];
    }
}
