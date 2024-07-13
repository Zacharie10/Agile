<?php

namespace App\Services;

use GuzzleHttp\Client;

class HuggingFaceService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('HUGGINGFACE_API_KEY');
    }

    public function getEmbeddings($text)
    {
        $response = $this->client->post('https://api-inference.huggingface.co/models/sentence-transformers/all-MiniLM-L6-v2', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'inputs' => $text
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
