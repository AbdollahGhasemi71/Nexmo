<?php


namespace Nexmo\User\repositories;


use Nexmo\User\Models\User;

class UserRepo
{

    public function findByEamil($email)
    {
        return User::query()->where('email', $email)->first();
    }

}
