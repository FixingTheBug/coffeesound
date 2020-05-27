<?php

use Illuminate\Database\Seeder;
use App\Set;
use App\Sound;

class SetSoundSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $sets = Set::all();
    $sounds = Sound::all();

    foreach($sets as $set) {
      foreach($sounds as $sound) {
        DB::table('set_sound')->insert(
          [
            [
              'set_id' => $set->id,
              'sound_id' => $sound->id,
              'volume' => 0
            ],
          ]
        );
      }
    }
  }
}
