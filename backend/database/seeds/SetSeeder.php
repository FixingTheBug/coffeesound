<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('sets')->insert(
        [
          [
            'name' => 'day',
            'created_at' => Carbon::now()
          ],
          [
            'name' => 'night',
            'created_at' => Carbon::now()
          ]
        ]
      );
    }
}
