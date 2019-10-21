<?php

namespace Models\Tables;

use Models\Table;

class Posts extends Table {

    protected static $table_name = "posts";

    function map($array) {

        foreach ($array as &$item) {

            $categories = new Categories();
            $users = new Users();

            $id = $item["category_id"];

            $item["category"] =
                $categories
                    ->get("*", ["id" => $id]);

            $item["author"]= $users->get("*", ["id" => $item["user_id"]]);

        }

        return $array;

    }

}