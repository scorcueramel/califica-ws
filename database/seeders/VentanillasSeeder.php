<?php

namespace Database\Seeders;

use App\Models\Ventanilla;
use Illuminate\Database\Seeder;

class VentanillasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ventanillas = [
            '01',
            '02',
            '03',
            '04',
            '05',
            '06',
            '07',
            '08',
            '09',
            '10',
            '11',
            '12',
            '13',
            '14',
            '15',
            '16',
            '17',
            '18',
            '19',
            '20',
            '21',
            '22',
            '23',
            '24',
            '25',
        ];

        foreach ($ventanillas as $v) {
            Ventanilla::create([
                'numero'=>$v
            ]);
        }

    }
}
