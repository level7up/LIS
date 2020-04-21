<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'item' => $this->item,
            'category_id' => $this->category_id,
            'description' => $this->description,
            'location' => $this->location,
            'status' => $this->status,
            'name' => $this->name,
            'contact_number' => $this->contact_number,
            'image' => $this->image,
            // 'updated_at' => $this->updated_at,

            
          ];
    }
}
