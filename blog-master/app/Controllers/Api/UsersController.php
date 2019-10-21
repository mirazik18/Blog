<?php

namespace Controllers\Api;

use Core\Abstracts\ApiController;
use Models\Tables\Users;

class UsersController extends ApiController {

    function getAll() {

        $users = new Users();

        return $this->render($users->select(["id", "username"]), 0);

    }

}