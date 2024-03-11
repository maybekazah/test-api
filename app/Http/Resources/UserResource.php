<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
            'token' => $this->token,
            'user' => [
                'id' => $this->user->id,
                'login' => $this->user->login,
                'name' => $this->user->name,
                'email' => $this->user->email,
                'image' => $this->user->image,
                'about' => $this->user->about,
                'type' => $this->user->type,
                'github' => $this->user->github,
                'city' => $this->user->city,
                'is_finished' => $this->user->is_finished,
                'phone' => $this->user->phone,
                'birthday' => $this->user->birthday,
            ],
            'password' => $this->password,
        ];
    }
}
