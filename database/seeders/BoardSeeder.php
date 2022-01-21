<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Board;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 마이그레이션 하고 나서 DB에 데이터 넣는 역할을 하는 곳
        // 글 10개 만들어서 넣기
        Board::factory(10)->create();
    }
}
