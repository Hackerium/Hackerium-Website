<?php

namespace App\Http\Controllers;

use App\Hackerium;
use Illuminate\Http\Request;

class HackeriumController extends Controller
{
    public function showPost(Hackerium $hackeria)
    {
        return $hackeria;
    }
}
