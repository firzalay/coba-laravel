<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fatahillah Firzalay",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas, totam. Dolores ad recusandae labore fuga. Voluptas quam a tenetur consectetur, id, quibusdam, nobis nam perferendis repellat temporibus unde? Reprehenderit iure ullam, architecto nisi quasi nam eaque excepturi similique eius animi voluptatem, repudiandae distinctio totam, commodi libero aspernatur quis earum tempore non ab? Blanditiis aliquam earum laboriosam distinctio et ab a doloribus magnam sunt temporibus quia fuga impedit eos atque, iste laudantium dolor ut ipsum vel incidunt consequuntur odio minus? Exercitationem?"
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ahmad Afif",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate numquam consectetur nemo, tenetur deleniti labore. Eligendi accusantium quibusdam ipsam hic obcaecati modi laudantium quo alias ad, sed harum deserunt sit incidunt quidem! Dolorum, laudantium neque possimus explicabo accusantium cum reiciendis? Non saepe pariatur tempora nostrum officiis ducimus rerum ratione quidem odit reiciendis. Corporis necessitatibus eos consequuntur quo reiciendis aut, vel quasi ex quaerat aliquam ratione, est nam beatae? At alias voluptatum explicabo molestiae nobis culpa optio, qui sequi voluptatibus cupiditate iste, totam adipisci blanditiis! Pariatur fugiat reiciendis quidem totam veritatis qui. Vitae, harum provident. Quod accusamus libero a magni voluptatibus!"
        ],

    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();

        // $post = [];

        // foreach ($posts  as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }


        return $posts->firstWhere('slug', $slug);
    }

   
}

