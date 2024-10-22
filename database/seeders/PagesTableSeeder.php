<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;
use Illuminate\Support\Str;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'menu_title' => [
                    'az' => 'Ana səhifə',
                    'tr' => 'Anasayfa',
                ],
                'menu_url' => Str::slug('Home'),
                'order' => 1,
                'isPrimary' => 1,
                'active' => 1,
            ],
            [
                'menu_title' => [
                    'az' => 'Bloqlar',
                    'tr' => 'Bloglar',
                ],
                'menu_url' => Str::slug('Blogs'),
                'order' => 2,
                'isPrimary' => 0,
                'active' => 1,
            ],
            [
                'menu_title' => [
                    'az' => 'Qalereya',
                    'tr' => 'Galeri',
                ],
                'menu_url' => Str::slug('Gallery'),
                'order' => 3,
                'isPrimary' => 0,
                'active' => 1,
            ],
            [
                'menu_title' => [
                    'az' => 'Tez-tez soruşulan suallar',
                    'tr' => 'SSS',
                ],
                'menu_url' => Str::slug('FAQ'),
                'order' => 4,
                'isPrimary' => 0,
                'active' => 1,
            ],
            [
                'menu_title' => [
                    'az' => 'Haqqımızda',
                    'tr' => 'Hakkımızda',
                ],
                'menu_url' => Str::slug('About Us'),
                'order' => 5,
                'isPrimary' => 0,
                'active' => 1,
            ],
            [
                'menu_title' => [
                    'az' => 'Əlaqə',
                    'tr' => 'İletişim',
                ],
                'menu_url' => Str::slug('Contact'),
                'order' => 6,
                'isPrimary' => 0,
                'active' => 1,
            ],
        ];

        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}
