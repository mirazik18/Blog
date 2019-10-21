<?php

namespace Controllers\Admin;

use Core\Abstracts\Controller;
use Klein\Request;
use Models\Tables\Categories;
use Models\Tables\Posts;

class CategoriesController extends Controller {

    function show() {

        return $this->render("admin/categories", [
            "categories" => (new Categories())->select()
        ]);

    }

    function create() {
        return $this->render("admin/forms/categories_form", [
            "action" => "create"
        ]);
    }

    function update($id) {
        return $this->render("admin/forms/categories_form", [
            "action" => "update",
            "category" => (new Categories())->getById($id)
        ]);
    }

    function postCreate(Request $request) {
        $table = new Categories();
        return $table->insert([
            "name" => $request->param("name")
        ]);
    }

    function postUpdate(Request $request) {
        $table = new Categories();
        return $table->update([
            "name" => $request->param("name")
        ], [
            "id" => $request->param("id")
        ]);
    }

    function postDelete(Request $request) {
        $table = new Categories();
        return $table->delete(["id" => $request->param("id")]);
    }

}