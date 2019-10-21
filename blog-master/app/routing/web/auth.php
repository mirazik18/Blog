<?php

use Controllers\LoginController;
use Core\Helpers;
use Klein\Request;
use Klein\Response;
use Models\Auth;

$router->with("/login", function () use ($router) {

    $controller = new LoginController();

    $router->get("/?", function (Request $request, Response $response) use ($controller) {

        if (Auth::isLogin()) {
            $response->redirect(Helpers::url("admin"))->send();
            exit();
        }

        return $controller->show();
    });

    $router->post("/?", function (Request $request, Response $response) use ($controller) {

        if (Auth::isLogin()) {
            $response->redirect(Helpers::url("admin"))->send();
            exit();
        }

        $username = $request->param("username");
        $password = $request->param("password");

        if ($controller->make($username, $password)) {
            $url = Helpers::url("admin");
        } else {
            $url = Helpers::url("login");
        }

        return $response->redirect($url)->send();

    });

});
$router->get("/logout/?", function (Request $request, Response $response) {

    Auth::logout();

    return $response->redirect(Helpers::url("login"))->send();

});