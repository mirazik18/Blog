<?php

namespace Core\Abstracts;

use Core\Config;
use Core\Interfaces\ControllerInterface;
use Core\RenderEngine;

abstract class Controller implements ControllerInterface {

    protected $layout;

    public function render($template_name, $variables = [])
    {
        if ($this->layout !== null) {
            $variables["template"] = $template_name . Config::main("template_extension");
            $template_name = "layout/" . $this->layout;
        }

        $e = RenderEngine::get();

        if ($variables)
            foreach ($variables as $key => $value)
                $e->assign($key, $value);

        return $e->display($template_name . Config::main("template_extension"));

    }

}