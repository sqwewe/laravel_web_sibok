<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPlaceController extends Controller
{
    public function information() {
        return 'This is information';
    }
    public function main() {
        return 'This is main';
    }
    public function shop() {
        return 'This is shop';
    }
    public function local() {
        return 'This is local';
    }
}
