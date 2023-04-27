<?php

namespace App\Services;

use GuzzleHttp\Client;

class ChatGPTService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.chatgpt.com/v1/',
            'headers' => [
                // 'Authorization' => 'Bearer ' . env('CHATGPT_API_KEY'),
                'Authorization' => 'Bearer ' . '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',
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    public function sendMessage($message)
    {
        $response = $this->client->request('POST', 'chat', [
            'json' => [
                'message' => $message,
            ],
        ]);

        return json_decode($response->getBody(), true);
    }
}
