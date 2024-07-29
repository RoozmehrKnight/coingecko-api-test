<?php

use App\Actions\Console\UpdateCoinPricesAction;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('update-coin-prices', function (UpdateCoinPricesAction $updateCoinPricesAction){
    $updateCoinPricesAction->handle();
    $this->comment("Coin prices updated successfully");
})->purpose('Updates the price and other details of top ten crypto coins')->everyMinute();
