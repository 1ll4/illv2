<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\News;

class PageController extends Controller
{
    public function index($pageNumber): void
    {
        $news = new News();

        $newsData = $news->getPage($pageNumber);
        if (empty($newsData))
        {
            http_response_code(404);
            return;
        }
        $this->view('page', [
            'news' => $newsData,
            'currentPage' => $pageNumber,
            'pageCount' => $news->getPagesCount(),
            'title' => 'News',
            'lastNews' => $news->getLastNews(),
        ]);
    }
}