<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Novel;

class NovelController extends Controller
{

    public function getRangkingNovel()
    {
        $datas = Novel::orderBy('views', 'desc')->limit(5)->get();

        if (count($datas) <= 0) {
            return $this->respondNotFound("data not found");
        }

        return $this->respondWithSuccess($datas);
    }

    public function getNovelByTitle(string $title)
    {
        $datas = Novel::where('title', 'LIKE', '%' . $title . '%')->get();

        if (count($datas) <= 0) {
            return $this->respondNotFound("data not found");
        }

        return $this->respondWithSuccess($datas);
    }

    public function getDetailNovel(string $slug)
    {
        $data = Novel::with('content')->orderBy('id', 'desc')->where('slug', $slug)->first();

        if ($data == null) {
            return $this->respondNotFound("data not found");
        }

        return $this->respondWithSuccess($data);
    }
}
