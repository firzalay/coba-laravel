<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use PhpParser\Node\Stmt\Catch_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        User::create([
            'name'=> 'Sandhika galih',
            'username' => 'firzalay',
            'email' => 'firza7004@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name'=> 'Doddy Firmnsyah',
        //     'email' => 'doddy@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis omnis temporibus beatae aut nobis quasi, alias, enim sed cum facere facilis ratione molestias qui nemo amet ipsam eaque suscipit sit consequuntur sunt nostrum magnam voluptatibus! Accusamus asperiores iure saepe deserunt soluta in, non veritatis possimus incidunt sed velit id distinctio illo pariatur necessitatibus, perspiciatis inventore quae rem officia aliquam eligendi vel praesentium. Explicabo quaerat dolor dolorum, voluptatibus velit adipisci a animi exercitationem obcaecati incidunt dolore recusandae aut omnis provident minima, et illo doloremque facere eum. Ipsa minima non, maxime unde eos aut excepturi laborum rem, perferendis et dolorum ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis omnis temporibus beatae aut nobis quasi, alias, enim sed cum facere facilis ratione molestias qui nemo amet ipsam eaque suscipit sit consequuntur sunt nostrum magnam voluptatibus! Accusamus asperiores iure saepe deserunt soluta in, non veritatis possimus incidunt sed velit id distinctio illo pariatur necessitatibus, perspiciatis inventore quae rem officia aliquam eligendi vel praesentium. Explicabo quaerat dolor dolorum, voluptatibus velit adipisci a animi exercitationem obcaecati incidunt dolore recusandae aut omnis provident minima, et illo doloremque facere eum. Ipsa minima non, maxime unde eos aut excepturi laborum rem, perferendis et dolorum vitae voluptate.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis omnis temporibus beatae aut nobis quasi, alias, enim sed cum facere facilis ratione molestias qui nemo amet ipsam eaque suscipit sit consequuntur sunt nostrum magnam voluptatibus! Accusamus asperiores iure saepe deserunt soluta in, non veritatis possimus incidunt sed velit id distinctio illo pariatur necessitatibus, perspiciatis inventore quae rem officia aliquam eligendi vel praesentium. Explicabo quaerat dolor dolorum, voluptatibus velit adipisci a animi exercitationem obcaecati incidunt dolore recusandae aut omnis provident minima, et illo doloremque facere eum. Ipsa minima non, maxime unde eos aut excepturi laborum rem, perferendis et dolorum',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis omnis temporibus beatae aut nobis quasi, alias, enim sed cum facere facilis ratione molestias qui nemo amet ipsam eaque suscipit sit consequuntur sunt nostrum magnam voluptatibus! Accusamus asperiores iure saepe deserunt soluta in, non veritatis possimus incidunt sed velit id distinctio illo pariatur necessitatibus, perspiciatis inventore quae rem officia aliquam eligendi vel praesentium. Explicabo quaerat dolor dolorum, voluptatibus velit adipisci a animi exercitationem obcaecati incidunt dolore recusandae aut omnis provident minima, et illo doloremque facere eum. Ipsa minima non, maxime unde eos aut excepturi laborum rem, perferendis et dolorum vitae voluptate.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis omnis temporibus beatae aut nobis quasi, alias, enim sed cum facere facilis ratione molestias qui nemo amet ipsam eaque suscipit sit consequuntur sunt nostrum magnam voluptatibus! Accusamus asperiores iure saepe deserunt soluta in, non veritatis possimus incidunt sed velit id distinctio illo pariatur necessitatibus, perspiciatis inventore quae rem officia aliquam eligendi vel praesentium. Explicabo quaerat dolor dolorum, voluptatibus velit adipisci a animi exercitationem obcaecati incidunt dolore recusandae aut omnis provident minima, et illo doloremque facere eum. Ipsa minima non, maxime unde eos aut excepturi laborum rem, perferendis et dolorum',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis omnis temporibus beatae aut nobis quasi, alias, enim sed cum facere facilis ratione molestias qui nemo amet ipsam eaque suscipit sit consequuntur sunt nostrum magnam voluptatibus! Accusamus asperiores iure saepe deserunt soluta in, non veritatis possimus incidunt sed velit id distinctio illo pariatur necessitatibus, perspiciatis inventore quae rem officia aliquam eligendi vel praesentium. Explicabo quaerat dolor dolorum, voluptatibus velit adipisci a animi exercitationem obcaecati incidunt dolore recusandae aut omnis provident minima, et illo doloremque facere eum. Ipsa minima non, maxime unde eos aut excepturi laborum rem, perferendis et dolorum vitae voluptate.',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis omnis temporibus beatae aut nobis quasi, alias, enim sed cum facere facilis ratione molestias qui nemo amet ipsam eaque suscipit sit consequuntur sunt nostrum magnam voluptatibus! Accusamus asperiores iure saepe deserunt soluta in, non veritatis possimus incidunt sed velit id distinctio illo pariatur necessitatibus, perspiciatis inventore quae rem officia aliquam eligendi vel praesentium. Explicabo quaerat dolor dolorum, voluptatibus velit adipisci a animi exercitationem obcaecati incidunt dolore recusandae aut omnis provident minima, et illo doloremque facere eum. Ipsa minima non, maxime unde eos aut excepturi laborum rem, perferendis et dolorum',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis omnis temporibus beatae aut nobis quasi, alias, enim sed cum facere facilis ratione molestias qui nemo amet ipsam eaque suscipit sit consequuntur sunt nostrum magnam voluptatibus! Accusamus asperiores iure saepe deserunt soluta in, non veritatis possimus incidunt sed velit id distinctio illo pariatur necessitatibus, perspiciatis inventore quae rem officia aliquam eligendi vel praesentium. Explicabo quaerat dolor dolorum, voluptatibus velit adipisci a animi exercitationem obcaecati incidunt dolore recusandae aut omnis provident minima, et illo doloremque facere eum. Ipsa minima non, maxime unde eos aut excepturi laborum rem, perferendis et dolorum vitae voluptate.',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);

    }
}
