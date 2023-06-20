<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Listing;

class ListingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'The Underwater Room',
                'location' => 'Central district',
                'price' => 120,
                'rating' => 4.9,
                'reviews' => 325,
                'image' => 'https://cdn-2.matterport.com/apifs/models/Shctie5LdZj/images/KfEEUxb8vwE/03.08.2017_12.35.49.jpg?t=2-0c46dbcb715466b147adfa6df52e5595af4c32ef-1685723220-1&k=apifs%2Fmodels%2FShctie5LdZj%2Fimages%2FKfEEUxb8vwE%2F03.08.2017_12.35.49.jpg&width=1920&height=1080&fit=crop&disable=upscale',
                'modelId' => 'Shctie5LdZj',
                'details' => 'The Underwater Room in Pemba, Tanzania features a bedroom located 4 meters below the surface of the Indian Ocean.',
            ],
            // Add more data if needed
        ];

        foreach ($data as $item) {
            Listing::create($item);
        }
    }
}
