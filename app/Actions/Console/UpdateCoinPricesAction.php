<?php

namespace App\Actions\Console;

use App\Models\Coin;
use http\Client\Response;
use Illuminate\Support\Facades\Http;

class UpdateCoinPricesAction
{
    public function handle()
    {
        $response = $this->makeRequest();
        $data = $this->createDataArray($response);
        Coin::upsert($data, ['coingecko_id']);
    }

    private function makeRequest() : array
    {
        return Http::get('https://api.coingecko.com/api/v3/coins/markets', [
            'vs_currency' => 'usd',
            'per_page' => 10,
//            'order' => 'current_price_desc', the api doesn't seem to support ordering by current_price
        ])->json();
    }

    private function createDataArray(array $response): array
    {
        $data = [];

        foreach ($response as $item) {
            $data[] = [
                'coingecko_id' => $item['id'],
                'name' => $item['name'],
                'symbol' => $item['symbol'],
                'current_price' => $item['current_price'],
                'price_change_24h' => $item['price_change_24h'],
                'price_change_percentage_24h' => $item['price_change_percentage_24h'],
            ];
        }

        return $data;
    }

}
