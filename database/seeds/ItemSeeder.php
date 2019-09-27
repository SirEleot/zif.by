<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result = array();
        $data = file_get_contents(__DIR__."/items.json");
        if(!$data) return;
        $itemsList = json_decode($data);
        foreach ($itemsList as $key => $value) {
            $result[] = array(
                'name'=> $value->name?$value->name:"noname", 
                'price'=>$value->price, 
                'image'=>$value->image,
                'factory'=>$value->produces,
                'series'=>$value->series,
                'description'=>json_encode($value->characteristics), 
                'category_id'=> DB::table('categories')->where('name',$value->subcategory)->value('id')
            );
        }
        DB::table('items')->insert($result);
    }
}
