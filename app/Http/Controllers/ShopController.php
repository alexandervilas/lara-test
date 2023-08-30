<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

class ShopController extends Controller
{
    public function categores()
    {
        $topics_array = [];
        foreach (Topic::all() as $topic) {
            $topics_array[] = $topic->topicname;
        }

        return view('shop_page', compact('topics_array'));
    }
}
