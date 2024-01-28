<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OvertimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('overtimes')->insert([
            'employee_id' => 1,
            'team' => 'Java',
            'date' => '2023-01-01',
            'duration' => '2 hours',
            'reason' => 'Perbaiki Error ASAP',
            'task' => 'Memperbaiki error pada kalkulasi pembelian',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('overtimes')->insert([
            'employee_id' => 1,
            'team' => 'Php',
            'date' => '2023-02-01',
            'duration' => '1 hours',
            'reason' => 'Perbaiki Error ASAP',
            'task' => 'Memperbaiki error pada kalkulasi accounting',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
