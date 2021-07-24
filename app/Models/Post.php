<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizky Fajriawan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo fuga eveniet eius,
            provident suscipit deserunt soluta, deleniti quas quod omnis quidem earum porro quam enim,
            officia aliquam dolorem! Inventore, facilis quod placeat magnam modi incidunt officiis maiores
            culpa commodi labore iste cupiditate aspernatur ab perferendis! A hic atque corporis cupiditate quas?
            Ipsum beatae dolorem culpa accusamus ea possimus. Debitis impedit beatae non blanditiis magnam eos aut?
            Assumenda earum consequatur nam dignissimos accusantium vero at impedit, ducimus dolore corporis.
            Eos optio corrupti assumenda pariatur doloribus impedit quia qui, labore veritatis possimus laudantium
            maiores doloremque odio quibusdam delectus provident, illum repudiandae autem."
        ],

        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Reza Gilang",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo fuga eveniet eius,
            provident suscipit deserunt soluta, deleniti quas quod omnis quidem earum porro quam enim,
            officia aliquam dolorem! Inventore, facilis quod placeat magnam modi incidunt officiis maiores
            culpa commodi labore iste cupiditate aspernatur ab perferendis! A hic atque corporis cupiditate quas?
            Ipsum beatae dolorem culpa accusamus ea possimus. Debitis impedit beatae non blanditiis magnam eos aut?
            Assumenda earum consequatur nam dignissimos accusantium vero at impedit, ducimus dolore corporis.
            Eos optio corrupti assumenda pariatur doloribus impedit quia qui, labore veritatis possimus laudantium
            maiores doloremque odio quibusdam delectus provident, illum repudiandae autem."
        ],

        [
            "title" => "Judul Post Ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Kris Priyagi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo fuga eveniet eius,
            provident suscipit deserunt soluta, deleniti quas quod omnis quidem earum porro quam enim,
            officia aliquam dolorem! Inventore, facilis quod placeat magnam modi incidunt officiis maiores
            culpa commodi labore iste cupiditate aspernatur ab perferendis! A hic atque corporis cupiditate quas?
            Ipsum beatae dolorem culpa accusamus ea possimus. Debitis impedit beatae non blanditiis magnam eos aut?
            Assumenda earum consequatur nam dignissimos accusantium vero at impedit, ducimus dolore corporis.
            Eos optio corrupti assumenda pariatur doloribus impedit quia qui, labore veritatis possimus laudantium
            maiores doloremque odio quibusdam delectus provident, illum repudiandae autem."
        ]
        ];


        public static function all(){
            return collect(self::$blog_posts);
        }

public static function find($slug){
    $posts = static::all();
        return $posts -> firstWhere('slug', $slug);
}
}
