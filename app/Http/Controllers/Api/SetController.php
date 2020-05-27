<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Set;

class SetController extends Controller
{
    public function index(Response $response) {

      $sets = Set::with('sounds')->get();

      return response($sets, $response->status());
    }
}
