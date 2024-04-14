<?php

namespace App\Services;

use App\Http\Requests\User\UserStoreRequest;
use App\Models\User;
use App\Services\Abstract\IUserService;
use Illuminate\Http\Request;

class UserService implements IUserService
{
    public function index()
    {
        return User::all();
    }

    public function create()
    {

    }

    public function store(array $input)
    {
        return User::query()->create($input);
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
//
    }
}
