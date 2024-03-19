<?php

namespace App\Http\Resources\V1;

use App\DTO\AuthRegisterDto;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 *
 * @mixin AuthRegisterDto
 */
class AuthResource extends JsonResource
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
            'user' => UserResource::make($this->user),
            'password' => $this->password,
        ];
    }
}
