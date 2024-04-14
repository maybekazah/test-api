<?php

namespace App\Services\Abstract;

use App\Http\Requests\User\UserStoreRequest;
use App\Http\Requests\User\UserUpdateRequest;

interface IUserService
{
    public function index();

    public function create();

    public function store(array $input);

    public function show(string $id);

    public function edit(string $id);

    public function update(array $input, string $id);

    public function destroy(string $id);
}
