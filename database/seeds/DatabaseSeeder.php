<?php

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
        DB::table('books')->truncate();
        DB::table('books')->insert([
            [
                'title' => 'Sách tiếng Nhật',
                'ISBN' => 'Java',
                'available' => 2,

            ],
            [
                'title' => 'Sách tiếng Nhật',
                'ISBN' => 'HTML',
                'available' => 1,
            ],
            [
                'title' => 'Sách tiếng Nhật',
                'ISBN' => 'Dot Net',
                'available' => 2,
            ],
            [
                'title' => 'Sách tiếng Nhật',
                'ISBN' => 'C Sharp',
                'available' => 1,
            ],
            [
                'title' => 'Sách tiếng Nhật',
                'ISBN' => 'Toán Cấp 1',
                'available' => 2,
            ],
        ]);
    }
}
