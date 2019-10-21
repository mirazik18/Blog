<?php

namespace Controllers\Api;


use Core\Abstracts\ApiController;
use Models\Auth;
use Models\Hash;
use Models\Tables\Users;

class TokenController extends ApiController
{

    const NO_USERNAME_PASSWORD = 1;

    function generate($username, $password) {

        if (!Auth::login($username, $password, true))
            return $this->render([], self::NO_USERNAME_PASSWORD);

        $token = Hash::token();

        $users = new Users();
        $users->update([
            "token" => $token
        ], [
            "username" => $username
        ]);

        return $this->render([
            "token" => $token
        ], 0);

    }

    function check($token) {

    }

}