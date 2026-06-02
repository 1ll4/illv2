<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\News;
class HomeController extends Controller
{
    public function index(): void
    {
        $news = new News();
        $all = $news->getPage(1);
        $this->view('home', [
            'news' => $all,
            'title' => 'News',
            'pageCount' => $news->getPagesCount(),
            'currentPage' => 1,
        ]);
    }
}