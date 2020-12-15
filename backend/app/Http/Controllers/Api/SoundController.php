<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Set;
use Illuminate\Http\Response;

class SoundController extends Controller
{
    public function changeVolume(Request $request, Response $response) {
      $body = json_decode($request->getContent(), true);

      $pivot = Set::find($body['set'])->sounds()->find($body['sound'])->pivot;

      $pivot->volume = $body['volume'];

      $pivot->save();

      $sets = Set::with('sounds')->get();

      return response($sets, $response->status());

    }
}
