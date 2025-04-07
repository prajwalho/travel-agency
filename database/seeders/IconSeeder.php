<?php

namespace Database\Seeders;

use App\Models\Icon;
use Illuminate\Database\Seeder;

class IconSeeder extends Seeder
{
    public function run()
    {
        $iconData = [
            ['name' => 'Wifi', 'icon' => 'bi bi-wifi'],
            ['name' => 'Fan', 'icon' => 'bi bi-fan'],
            ['name' => 'Tv', 'icon' => 'bi bi-tv'],
            ['name' => 'Bath', 'icon' => 'fa-solid fa-bath'],
            ['name' => 'Bed', 'icon' => 'fa-solid fa-bed'],
            ['name' => 'Utensils', 'icon' => 'fa-solid fa-utensils'],
            ['name' => 'Person', 'icon' => 'fa-solid fa-person'],
            ['name' => 'Elevator', 'icon' => 'fa-solid fa-elevator'],
            ['name' => 'Heart Circle Bolt', 'icon' => 'fa-solid fa-heart-circle-bolt'],
            ['name' => 'People Roof', 'icon' => 'fa-solid fa-people-roof'],
            ['name' => 'Users', 'icon' => 'fa-solid fa-users'],
            ['name' => 'Users Rectangle', 'icon' => 'fa-solid fa-users-rectangle'],
            ['name' => 'Location', 'icon' => 'fa-solid fa-location-dot'],
            ['name' => 'Telephone Outbound', 'icon' => 'fa-solid fa-phone-volume'],
            ['name' => 'Envelope Open', 'icon' => 'fa-solid fa-envelope-open'],
        ];

        foreach ($iconData as $icon) {
            Icon::create([
                'name' => $icon['name'],
                'icon' => $icon['icon'],
            ]);
        }
    }
}
