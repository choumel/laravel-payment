<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies= [
            'eur',
            'usd',
            'gbp',
            'xfa'
        ];

        foreach ($currencies as $currency){
            Currency::create([
                'iso'=> $currency,
            ]);
        }
    }
}
