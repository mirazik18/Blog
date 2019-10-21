<?php

namespace Controllers\Admin;

use Core\Abstracts\Controller;
use Klein\Request;
use Models\Cookies;
use Models\Tables\Categories;
use Models\Tables\Posts;
use Models\Tables\Users;

class PostsController extends Controller {

    function show() {

    }

    function create() {

        $users = new Users();
        $categories = new Categories();

        return $this->render("admin/forms/posts_form", [
            "action" => "create",
            "user" => $users->get(["id"], ["hash" => Cookies::get("auth")]),
            "categories" => $categories->select()
        ]);
    }

    function update($id) {

        $posts = new Posts();
        $users = new Users();
        $categories = new Categories();

        if (!$posts->has(["id" => $id]))
            return false;

        return $this->render("admin/forms/posts_form", [
            "action" => "update",
            "post" => $posts->getById($id),
            "user" => $users->get(["id"], ["hash" => Cookies::get("auth")]),
            "categories" => $categories->select()
        ]);
    }

    function postCreate(Request $request) {

        $posts = new Posts();

        return $posts->insert([
            "title" => $request->param("title"),
            "content" => $request->param("content"),
            "user_id" => $request->param("user_id"),
            "category_id" => $request->param("category_id"),
        ]);

    }

    function postUpdate(Request $request) {

        $posts = new Posts();

        return $posts->update([
            "title" => $request->param("title"),
            "content" => $request->param("content"),
            "user_id" => $request->param("user_id"),
            "category_id" => $request->param("category_id"),
        ], [
            "id" => $request->param("id")
        ]);

    }

    function postDelete(Request $request) {
        $posts = new Posts();

        return $posts->delete([
            "id" => $request->param("id")
        ]);

    }

}