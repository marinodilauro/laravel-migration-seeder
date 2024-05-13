<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = [
            [
                'company' => 'Trenitalia',
                'train_type' => 'Frecciarossa',
                'departure_station' => 'Napoli Centrale',
                'arriving_station' => 'Roma Termini',
                'departure_time' => '2024-05-13 09:30:00',
                'arriving_time' => '2024-05-13 12:30:00',
                'train_code' => 'FR 43556',
                'carriages' => null,
                'in_time' => 1,
                'cancelled' => 0
            ],
            [
                'company' => 'Trenitalia',
                'train_type' => 'Intercity',
                'departure_station' => 'Napoli Centrale',
                'arriving_station' => 'Milano Centrale',
                'departure_time' => '2024-05-13 13:00:00',
                'arriving_time' => '2024-05-13 21:00:00',
                'train_code' => 'IC 78901',
                'carriages' => null,
                'in_time' => 1,
                'cancelled' => 0
            ],
            [
                'company' => 'Trenitalia',
                'train_type' => 'Intercity',
                'departure_station' => 'Napoli Centrale',
                'arriving_station' => 'Milano Centrale',
                'departure_time' => '2024-05-13 13:00:00',
                'arriving_time' => '2024-05-13 21:00:00',
                'train_code' => 'IC 78901',
                'carriages' => null,
                'in_time' => 1,
                'cancelled' => 0
            ],
            [
                'company' => 'Trenitalia',
                'train_type' => 'Intercity',
                'departure_station' => 'Roma Termini',
                'arriving_station' => 'Napoli Centrale',
                'departure_time' => '2024-05-13 14:00:00',
                'arriving_time' => '2024-05-13 18:00:00',
                'train_code' => 'IC 78902',
                'carriages' => null,
                'in_time' => 1,
                'cancelled' => 0
            ],
            [
                'company' => 'Trenitalia',
                'train_type' => 'Intercity',
                'departure_station' => 'Roma Termini',
                'arriving_station' => 'Napoli Centrale',
                'departure_time' => '2024-05-13 14:00:00',
                'arriving_time' => '2024-05-13 18:00:00',
                'train_code' => 'IC 78902',
                'carriages' => null,
                'in_time' => 1,
                'cancelled' => 0
            ],
            [
                'company' => 'Trenitalia',
                'train_type' => 'Intercity',
                'departure_station' => 'Roma Termini',
                'arriving_station' => 'Bari Centrale',
                'departure_time' => '2024-05-13 15:00:00',
                'arriving_time' => '2024-05-13 20:00:00',
                'train_code' => 'IC 78903',
                'carriages' => null,
                'in_time' => 1,
                'cancelled' => 0
            ],
            [
                'company' => 'Trenitalia',
                'train_type' => 'Intercity',
                'departure_station' => 'Milano Centrale',
                'arriving_station' => 'Roma Termini',
                'departure_time' => '2024-05-13 10:00:00',
                'arriving_time' => '2024-05-13 16:00:00',
                'train_code' => 'IC 78904',
                'carriages' => null,
                'in_time' => 1,
                'cancelled' => 0
            ]
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->company = $train['company'];
            $newTrain->train_type = $train['train_type'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arriving_station = $train['arriving_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arriving_time = $train['arriving_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->carriages = $train['carriages'];
            $newTrain->in_time = $train['in_time'];
            $newTrain->cancelled = $train['cancelled'];
            // Save new trains
            $newTrain->save();
        }
    }
}
