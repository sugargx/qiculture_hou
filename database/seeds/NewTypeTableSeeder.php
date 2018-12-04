<?php

use Illuminate\Database\Seeder;

class NewTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $arr = [
            '通知公告',
            '研究动态',
            '新闻动态',
            '学术交流',
            '文化资讯',
            '成果展台',
            '管子学刊'
        ];
        foreach ($arr as $item){
            $type = new \App\Http\Model\NewType();
            $type->name = $item;
            $type->flag = $item;
            $type->save();
        }
        factory(\App\Http\Model\NewType::class,5)->create();
    }
}
