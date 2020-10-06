<?php

use App\Television;
use Illuminate\Database\Seeder;

class TelevisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Television::class, 25) -> create();
    }
}
