<?php

namespace App\Services;

use App\Enums\RoleEnum;
use App\Http\Requests\User\UserStoreRequest;
use App\Models\User;
use App\Services\Abstract\IUserService;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

class UserService implements IUserService
{
    public function index()
    {
        return User::all();
    }

    public function create()
    {
//        return RoleEnum::values();

    }

    public function store(array $input)
    {

        $user = User::query()->create($input);
        $user->roles()->sync($input['roles'] ?? []);
        return $user;
    }

    public function show(string $id)
    {
        return User::query()->findOrFail($id);
    }

    public function edit(string $id)
    {
        return User::query()->findOrFail($id);
    }

    public function update(array $input, string $id)
    {

        User::query()->where('id', $id)->update($input);
        return User::query()->findOrFail($id);
    }

    public function destroy(string $id)
    {
        return User::destroy($id);
    }
}
