<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Photo extends JsonResource
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
            'slug' => $this->slug,
            'title' => $this->title,
            'user' => [
                'firstname' => $this->user->firstname,
                'lastname' => $this->user->lastname,
                'username' => $this->user->username,
                'profession' => $this->user->profession,
                //I want the microservice to fetch the other infomation such as comments, tags, colors, etc.
            ],
            'tags' => [

            ],
            'asset_url' => $this->asset_url,
            'asset_description' => $this->description,
        ];
    }
}
