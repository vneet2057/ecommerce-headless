<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ChatGPTService;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    protected $chatGPTService;

    public function __construct(ChatGPTService $chatGPTService)
    {
        $this->chatGPTService = $chatGPTService;
    }

    public function sendMessage(Request $request)
    {
        $message = $request->input('message');

        $response = $this->chatGPTService->sendMessage($message);

        return response()->json([
            'response' => $response['response'],
        ]);
    }


    function index(){
        return view('admin.index');
    }
}
