<?php

namespace App\Core;

class Controller
{
    protected function view(string $view, array $data = [])
    {
        extract($data);

        require "../app/Views/layouts/header.php";
        require "../app/Views/$view.php";
        require "../app/Views/layouts/footer.php";
    }
}