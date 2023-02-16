<?php

namespace Database\Seeders;

use App\Models\Listing;
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
        \App\Models\User::factory(5)->create();
        Listing::create([
            'title'=>'FullStack web developer',
            'tags'=>'html,css,js,php',
            'company'=>'Happysterdam',
            'location'=>'Algiers Algeria',
            'email'=>'ouadijh@mail.com',
            'website'=>'https://ouadjihboudraa.vercel.app',
            'description'=>'lorem ipisumlorem ipisumlorem ipisumlorem
            ipisumlorem ipisumlorem ipisumlorem
             ipisumlorem ipisumlorem ipisum'
        ]);
        Listing::create([
            'title'=>'Graphic Designer',
            'tags'=>'adobe ps ae xd...,figma,ux/ui',
            'company'=>'Happysterdam',
            'location'=>'Algiers Algeria',
            'email'=>'ouadijh@happysterdam.dz',
            'website'=>'ouadjihboudraa.vercel.app',
            'description'=>'lorem ipisumlorem ipisumlorem ipisumlorem ipisumlorem ipisumlorem ipisumlorem ipisumlorem ipisumlorem ipisum'
        ]);
        Listing::factory(5)->create();

    }
}
