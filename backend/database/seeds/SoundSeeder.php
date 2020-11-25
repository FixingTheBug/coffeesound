<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SoundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('sounds')->insert(
        [
          [
            'name' => 'white-noise',
            'icon' => 'https://i.ibb.co/4Mz2V79/white-noise.jpg',
            'file' => 'https://srv-file14.gofile.io/download/jt352H/white-noise.mp3',
            'created_at' => Carbon::now()
          ],
          [
            'name' => 'starbucks',
            'icon' => 'https://i.ibb.co/23z5J49/starbucks.jpg',
            'file' => 'https://srv-file14.gofile.io/download/jt352H/coffee-shop.mp3',
            'created_at' => Carbon::now()
          ],
          [
            'name' => 'fire',
            'icon' => 'https://i.ibb.co/3WMS0Hc/fire.jpg',
            'file' => 'https://srv-file14.gofile.io/download/jt352H/fire.mp3',
            'created_at' => Carbon::now()
          ],
          [
            'name' => 'lake',
            'icon' => 'https://i.ibb.co/ZJWcF5f/lake.jpg',
            'file' => 'https://srv-file14.gofile.io/download/jt352H/lake.mp3',
            'created_at' => Carbon::now()
          ],
          [
            'name' => 'tokyo',
            'icon' => 'https://i.ibb.co/HgY78Vz/tokyo.jpg',
            'file' => 'https://srv-file14.gofile.io/download/jt352H/akihabara.mp3',
            'created_at' => Carbon::now()
          ]
        ]
      );
    }
}