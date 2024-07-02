<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{

    public function getNews()
    {
        $datas = News::limit(10)->get();

        if (count($datas) <= 0) {
            return $this->respondNotFound("data not found");
        }

        return $this->respondWithSuccess($datas);
    }

    public function getDetailNews(string $slug)
    {
        $data = News::where('slug', $slug)->first();

        if (count($data) <= 0) {
            return $this->respondNotFound("data not found");
        }

        return $this->respondWithSuccess($data);
    }
}
