<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result = array();
        $data = file_get_contents(__DIR__."/categories.json");
        if(!$data) return;
        $itemsList = json_decode($data);
        foreach ($itemsList as $value) {
            $result[] = array(
                'name'=> $value->name?$value->name:"noname", 
                'parent'=>$value->parent, 
                'id'=>$value->id
            );
        }
        DB::table('categories')->insert($result);
    }
}
