<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller
{

    function search($url_id)
    {
        return response()->json([
            'time_remaining' => '10m',
        ]);
    }
}
