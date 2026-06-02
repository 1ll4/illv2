<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\News;

class NewsController extends Controller
{
    public function index($newsId = 1): void
    {
        $news = new News();
        $newsData = $news->getById($newsId);

        if ($newsData === null) {
            http_response_code(404);
            return;
        }

        $this->view('news', [
            'title' => $newsData['title'],
            'newsData' => $newsData
        ]);
    }
}