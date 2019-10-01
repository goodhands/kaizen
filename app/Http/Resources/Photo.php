<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use BeyondCode\Comments\Comment;

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

        $comment = $this->comments;
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'title' => $this->title,
            'user' => [
                'id' => $this->user->id,
                'firstname' => $this->user->firstname,
                'lastname' => $this->user->lastname,
                'username' => $this->user->username,
                'profession' => $this->user->profession,
                'avatar' => $this->user->avatar
                //I want the microservice to fetch the other infomation such as comments, tags, colors, etc.
            ],
            'tags' => $this->tags,
            'comments' => $this->comments,
            'category' => $this->category,
            'asset_url' => $this->asset_url,
            'asset_description' => $this->description,
        ];
    }
}
