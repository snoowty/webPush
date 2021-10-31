<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SelectController extends Controller
{
    //
    public function index(Request $request)
    {
        $items_all = DB::select('SELECT * FROM push_message_content');
        dump($items_all);
        $items = DB::select('SELECT * FROM push_message_content WHERE del_flg is NULL 
                             AND current_timestamp BETWEEN start_date AND end_date');
        dump($items);
        return view('hello.index', ['items_all' => $items_all, 'items' => $items]);
    }
}
