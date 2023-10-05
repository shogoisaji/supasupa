<?php

namespace App\Services;

use GuzzleHttp\Client;

class GoogleBooksClient
{
  public function searchBooks(string $keyword)
  {

    $client = new Client();

    $keyword = '4480426426';

    $res = $client->request('GET', 'https://www.googleapis.com/books/v1/volumes', [
      'query' => [
        'q' => sprintf('isbn:%s', $keyword),

      ]
    ]);

    $data = json_decode($res->getBody()->getContents());

    return $data->items;
  }

}