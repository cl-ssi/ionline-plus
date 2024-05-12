<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::create([
            'type' => 'news',
            'title' => 'Lorem ipsum dolor sit amet',
            'image' => 'https://fastly.picsum.photos/id/421/766/400.jpg?hmac=jH8r8gpN-OaGe3eLoYqGLJ7hrFMveNCup3pCMpU5R0A',
            'body' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat',
            'publication_date_at' => now(),
            'until_at' => now()->addDays(90),
            'user_id' => 12345678,
        ]);
    }
}
