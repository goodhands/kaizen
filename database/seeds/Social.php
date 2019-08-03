<?php

// use App\Social;
use Illuminate\Database\Seeder;

class Social extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Social::class, 10)->create();
    }
}
