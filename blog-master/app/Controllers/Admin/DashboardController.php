<?php

namespace Controllers\Admin;

use Core\Abstracts\Controller;
use Models\Tables\Posts;

class DashboardController extends Controller {

    function show() {

        $table = new Posts();
        $posts = $table->select();
        $posts = $table->map($posts);

        return $this->render("admin/dashboard", [
            "posts" => $posts
        ]);
    }

}