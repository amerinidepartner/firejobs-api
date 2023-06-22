<?php

namespace App\Services;

use GuzzleHttp\Client;

class GreenhouseService
{
    protected $apiUrl;
    protected $apiKey;
    protected $client;

    public function __construct()
    {
        $this->apiUrl = 'https://harvest.greenhouse.io/v1/jobs';
        $this->apiKey = '';
        $this->client = new Client(['base_uri' => $this->apiUrl]);
    }

    public function getJobs()
    {
        $response = $this->client->request('GET', 'jobs', [
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode($this->apiKey . ':'),
                'Content-Type' => 'application/json',
            ],
            'query' => [
                'status' => request('status'),
                'department_id' => request('department_id'),
                'custom_field_option_id' => request('custom_field_option_id'),
                'office_id' => request('office_id'),
            ]
        ]);
        return json_decode($response->getBody(), true);
    }

    public function getTypes()
    {
        $response = $this->client->request('GET', 'custom_fields/job', [
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode($this->apiKey . ':'),
                'Content-Type' => 'application/json',
            ],
        ]);
        return json_decode($response->getBody(), true);
    }

    public function getDepartments()
    {
        $response = $this->client->request('GET', 'departments', [
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode($this->apiKey . ':'),
                'Content-Type' => 'application/json',
            ],
        ]);
        return json_decode($response->getBody(), true);
    }

    public function getOffices()
    {
        $response = $this->client->request('GET', 'offices', [
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode($this->apiKey . ':'),
                'Content-Type' => 'application/json',
            ],
        ]);
        return json_decode($response->getBody(), true);
    }
}