<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class ApiClient
{
    const DOMAIN = 'https://sq1-api-test.herokuapp.com';

    /**
     * @return Collection
     */
    public function getLastPosts(): Collection
    {
        $rawCollection = Http::get(self::DOMAIN . '/posts')->collect('data');

        return $rawCollection->map(function ($rawPost) {
            return [
                'title' => $rawPost['title'],
                'description' => $rawPost['description'],
                'publication_date' => Carbon::createFromFormat('Y-m-d H:i:s', $rawPost['publication_date'])
            ];
        });
    }
}
