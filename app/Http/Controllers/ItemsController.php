<?php

namespace App\Http\Controllers;

use App\URL;
use Illuminate\Http\Request;

class ItemsController extends Controller
{

    function search($url_uuid)
    {
        /** @var URL $url */
        $exists = URL::where('uuid', $url_uuid)->get()->count();

        if (!$exists) {
            return redirect('/');
        }

        return view('items.show');
    }
}
