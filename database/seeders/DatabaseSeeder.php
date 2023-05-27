<?php

namespace Database\Seeders;

use App\Models\EconomicAccount;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();


        EconomicAccount::create(
            [
                'acc_code' => '100000',
                'acc_name' => 'Asset',

            ]);
        EconomicAccount::create(
            [
                'acc_code' => '200000',
                'acc_name' => 'Liabilities',
            ]);
        EconomicAccount::create(
            [
                'acc_code' => '300000',
                'acc_name' => 'Income',
            ]);
        EconomicAccount::create(
            [
                'acc_code' => '400000',
                'acc_name' => 'Expenditure',
            ]
        );
    }
}
