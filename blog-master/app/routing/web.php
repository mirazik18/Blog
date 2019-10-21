<?php

use Controllers\PostsController;
use Klein\Klein;
use Klein\Request;

$router = new Klein();

$router->get("/?", function () {
    $controller = new PostsController();
    return $controller->getByPage(1);
});

$router->get("/page/[i:page]/?", function (Request $request) {
    $controller = new PostsController();
    return $controller->getByPage($request->param("page"));
});

$router->get("/post/[i:id]/?", function () {

});

include "web/auth.php";
include "web/admin.php";
include "api.php";

$router->dispatch();