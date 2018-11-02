<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return User[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        $users = User::all();

        return $users;
    }

    /**
     * Store a newly created resource in storage
     *
     * @param UserRequest $request
     *
     * @return User
     */
    public function store(UserRequest $request)
    {
        $data = $request->only('name', 'email', 'password');

        $user = new User($data);

        $user->save($data);

        return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  User $user
     *
     * @return User
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UserRequest $request
     * @param  User        $user
     *
     * @return User
     */
    public function update(UserRequest $request, User $user)
    {
        $data = $request->only('name', 'email', 'password');

        $user->update($data);

        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     *
     * @return User
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $user->delete();

        return $user;
    }
}
