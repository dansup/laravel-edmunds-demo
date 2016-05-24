<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests, EdmundsApi;

class VinDecoderController extends Controller
{
    public function attempt(Request $request)
    {
      $this->validate($request, [
        'vin'   => 'required|alpha_num|min:17|max:17'
        ]);

      $vin = $request->input('vin');
      $data = json_encode(EdmundsApi::decodeVin($vin), JSON_PRETTY_PRINT);

      return view('decoded', compact('data', 'vin'));
    }
}
