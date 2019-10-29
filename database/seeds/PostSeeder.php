<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result = array();
        $result[] = array(
            'tittle'=>'tittle',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, dolor dicta quisquam laboriosam doloremque, voluptatum ipsam pariatur impedit dolorem voluptate unde officia asperiores voluptas. Autem cumque iusto aspernatur corrupti beatae?',
            'image'=>'1.png',
            'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, dolor dicta quisquam laboriosam doloremque, voluptatum ipsam pariatur impedit dolorem voluptate unde officia asperiores voluptas. Autem cumque iusto aspernatur corrupti beataeLorem ipsum dolor sit amet consectetur adipisicing elit. Modi, dolor dicta quisquam laboriosam doloremque, voluptatum ipsam pariatur impedit dolorem voluptate unde officia asperiores voluptas. Autem cumque iusto aspernatur corrupti beataeLorem ipsum dolor sit amet consectetur adipisicing elit. Modi, dolor dicta quisquam laboriosam doloremque, voluptatum ipsam pariatur impedit dolorem voluptate unde officia asperiores voluptas. Autem cumque iusto aspernatur corrupti beataeLorem ipsum dolor sit amet consectetur adipisicing elit. Modi, dolor dicta quisquam laboriosam doloremque, voluptatum ipsam pariatur impedit dolorem voluptate unde officia asperiores voluptas. Autem cumque iusto aspernatur corrupti beatae',
            'created_at'=> new DateTime('now')
        );
        $result[] = array(
            'tittle'=>'tittle',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, dolor dicta quisquam laboriosam doloremque, voluptatum ipsam pariatur impedit dolorem voluptate unde officia asperiores voluptas. Autem cumque iusto aspernatur corrupti beatae?',
            'image'=>'2.png',
            'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, dolor dicta quisquam laboriosam doloremque, voluptatum ipsam pariatur impedit dolorem voluptate unde officia asperiores voluptas. Autem cumque iusto aspernatur corrupti beataeLorem ipsum dolor sit amet consectetur adipisicing elit. Modi, dolor dicta quisquam laboriosam doloremque, voluptatum ipsam pariatur impedit dolorem voluptate unde officia asperiores voluptas. Autem cumque iusto aspernatur corrupti beataeLorem ipsum dolor sit amet consectetur adipisicing elit. Modi, dolor dicta quisquam laboriosam doloremque, voluptatum ipsam pariatur impedit dolorem voluptate unde officia asperiores voluptas. Autem cumque iusto aspernatur corrupti beataeLorem ipsum dolor sit amet consectetur adipisicing elit. Modi, dolor dicta quisquam laboriosam doloremque, voluptatum ipsam pariatur impedit dolorem voluptate unde officia asperiores voluptas. Autem cumque iusto aspernatur corrupti beatae',
            'created_at'=> new DateTime('now')
        );
        $result[] = array(
            'tittle'=>'tittle',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, dolor dicta quisquam laboriosam doloremque, voluptatum ipsam pariatur impedit dolorem voluptate unde officia asperiores voluptas. Autem cumque iusto aspernatur corrupti beatae?',
            'image'=>'3.png',
            'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, dolor dicta quisquam laboriosam doloremque, voluptatum ipsam pariatur impedit dolorem voluptate unde officia asperiores voluptas. Autem cumque iusto aspernatur corrupti beataeLorem ipsum dolor sit amet consectetur adipisicing elit. Modi, dolor dicta quisquam laboriosam doloremque, voluptatum ipsam pariatur impedit dolorem voluptate unde officia asperiores voluptas. Autem cumque iusto aspernatur corrupti beataeLorem ipsum dolor sit amet consectetur adipisicing elit. Modi, dolor dicta quisquam laboriosam doloremque, voluptatum ipsam pariatur impedit dolorem voluptate unde officia asperiores voluptas. Autem cumque iusto aspernatur corrupti beataeLorem ipsum dolor sit amet consectetur adipisicing elit. Modi, dolor dicta quisquam laboriosam doloremque, voluptatum ipsam pariatur impedit dolorem voluptate unde officia asperiores voluptas. Autem cumque iusto aspernatur corrupti beatae',
            'created_at'=> new DateTime('now')
        );
        DB::table('posts')->insert($result);
    }
}
