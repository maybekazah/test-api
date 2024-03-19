<?php

namespace App\Http\Resources\V1;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 *
 * @mixin User
 */
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

            'id' => $this->id,
            'login' => $this->login,
            'name' => $this->name,
            'email' => $this->email,
            'image' => $this->image,
            'about' => $this->about,
            'type' => $this->type,
            'github' => $this->github,
            'city' => $this->city,
            'is_finished' => $this->is_finished,
            'phone' => $this->phone,
            'birthday' => $this->birthday,

        ];
    }
}
