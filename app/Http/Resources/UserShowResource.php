<?php

namespace App\Http\Resources;

use App\DTO\AuthRegisterDto;
use App\DTO\AuthShowUserDto;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 *
 * @mixin AuthShowUserDtoDto
 */
class UserShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
            'user' => UserResource::make($this->user),
        ];
    }
}
