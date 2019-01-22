<?php

namespace App\Http\Controllers;

use App\URL;
use Illuminate\Http\Request;

class ItemsController extends Controller
{

    function search($url_uuid)
    {
        $url = URL::where('uuid', $url_uuid);
        
        if ($url->get()->count() < 1) {
            return redirect('/');
        }

        return view('items.show', ['url' => $url->first()]);
    }
}
