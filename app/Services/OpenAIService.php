<?php

namespace App\Services;

use OpenAI;

class OpenAIService
{
    protected $client;

    public function __construct()
    {
        $this->client = OpenAI::client(env('OPENAI_API_KEY'));
    }

    public function generateText($prompt)
    {
        $response = $this->client->chat()->create([
            'model' => 'gpt-3.5-turbo', // or 'gpt-3.5-turbo'
            'messages' => [
                ['role' => 'system', 'content' => 'You are a helpful assistant.'],
                ['role' => 'user', 'content' => $prompt],
            ],
        ]);

        return $response->choices[0]['message']['content'] ?? 'No response';
    }
}
