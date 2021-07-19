<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Rizky Fajriawan",
        "email" => "fajriawan.183040037@mail.unpas.id",
        "image" => "img/1.jpg"
    ]);
});




Route::get('/blog', function () {
    $blog_posts = [
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
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//Halaman Singel Post
route::get('posts/{slug}',function($slug){
    $blog_posts = [
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


        $new_post = [];
        foreach($blog_posts as $post){
            if($post["slug"] === $slug){
                $new_post = $post;
            }
        }

    return view('post', [
        "title" => "Singel Post",
        "post" => $new_post
    ]);
});
