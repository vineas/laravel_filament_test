<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class StatusController extends Controller
{
        public function index() : View
    {
        $statuses = Status::latest()->paginate(3);


        return view('statuses.index', compact('statuses'));
    }
}
