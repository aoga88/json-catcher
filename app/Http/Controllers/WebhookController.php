<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebhookController extends Controller
{
    public function save(Request $request) {
        $jsonData = json_decode($request->getContent());
        Log::info(
            json_encode($jsonData)
        );

        return response()->json($jsonData);
    }
}