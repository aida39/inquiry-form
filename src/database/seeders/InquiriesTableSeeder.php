<?php

namespace Database\Seeders;

use App\Models\Inquiry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InquiriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inquiry::create([
            'category_id' => 1,
            'first_name' => '山田',
            'last_name' => '太郎',
            'gender' => 0,
            'email' => 'taro@example.com',
            'tell' => '09012345678',
            'address' => '東京都千代田区永田町1-7-1',
            'building' => '永田町ビル',
            'detail' => '商品が届いていません。',
        ]);
        Inquiry::create([
            'category_id' => 2,
            'first_name' => '山田',
            'last_name' => '花子',
            'gender' => 1,
            'email' => 'hanako@example.com',
            'tell' => '09012345678',
            'address' => '東京都千代田区永田町1-1-1',
            'building' => '',
            'detail' => 'サイズが合わないので交換してほしいです。',
        ]);
    }
}
