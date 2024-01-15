<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserOrders;
use App\Models\Users;

class UserOrdersTableSeeder extends Seeder
{
    public function run()
    {
        $numberOfOrders = 20;
        $users = Users::inRandomOrder()->take(5)->get();

        foreach ($users as $user) {

            UserOrders::create([
                'id_user' => $user->id,
                'state_order' => 'not_placed',
                'state_date' => now(),
            ]);

            UserOrders::create([
                'id_user' => $user->id,
                'state_order' => 'placed',
                'state_date' => $this->generateRandomDate(),
            ]);
        }

        $additionalOrders = $numberOfOrders - count($users) * 2;

        for ($i = 0; $i < $additionalOrders; $i++) {
            $user = $users->random();

            UserOrders::create([
                'id_user' => $user->id,
                'state_order' => 'placed',
                'state_date' => $this->generateRandomDate(),
            ]);
        }
    }

    private function generateRandomDate()
    {
        $startDate = strtotime('2022-01-01');
        $endDate = strtotime(now());

        $randomTimestamp = mt_rand($startDate, $endDate);

        return date('Y-m-d H:i:s', $randomTimestamp);
    }
}
