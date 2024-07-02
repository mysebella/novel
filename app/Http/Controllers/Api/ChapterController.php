<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TextBlock;

class ChapterController extends Controller
{

    public function getNewChapter()
    {
        $datas =
            TextBlock::select('title', 'chapter', 'status', 'volume', 'slug', 'created_at', 'novel_id')
            ->with(['novel' => function ($query) {
                $query->select('id', 'title', 'slug');
            }])
            ->limit(15)
            ->get();

        if (count($datas) <= 0) {
            return $this->respondNotFound("data not found");
        }

        return $this->respondWithSuccess($datas);
    }

    public function getDetailChapter(string $slug)
    {
        $data = TextBlock::with('novel')->where('slug', $slug)->first();

        if (count($data) <= 0) {
            return $this->respondNotFound("data not found");
        }

        return $this->respondWithSuccess($data);
    }
}
