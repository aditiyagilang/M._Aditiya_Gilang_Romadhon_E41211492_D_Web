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

Route::get('/dashboard', function () {
    return view('dashboard', 
    ["judul" => "dashboard"]);
});

Route::get('/profile', function () {
    return view('profile', 
    ["judul" => "profile"]);
});

Route::get('/blog', function () {
    $blog_konten = [
        [
            "judul" => "Judul Blog Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Wishal Azharyan Al Hisyam",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et omnis delectus id ex veniam ratione molestiae debitis 
            obcaecati beatae at, officiis aliquid modi odit maiores. Similique accusantium suscipit, error reiciendis esse porro incidunt
            delectus mollitia alias fugiat excepturi quisquam illum saepe amet atque autem qui laudantium dolor eaque dicta? Blanditiis 
            laborum tenetur expedita recusandae, ducimus mollitia dignissimos, soluta rerum officiis nulla dolore perferendis repellat nemo 
            neque doloribus pariatur error quis fugiat natus! Perferendis alias suscipit dolore exercitationem sunt, perspiciatis accusantium 
            labore facere ipsum quo inventore porro hic earum, ad atque dicta ipsa? Commodi qui accusamus vitae iste facilis aspernatur alias."
        ],
        [
            "judul" => "Judul Blog Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Lusy Damayanti",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia laudantium voluptate ex cupiditate dolor deserunt sapiente
             id minima recusandae itaque consequuntur repellat praesentium officiis voluptates quisquam libero minus odio repudiandae necessitatibus cum,
             repellendus dolores. Accusamus tenetur numquam dignissimos placeat minima iste asperiores necessitatibus ipsa, eum quaerat esse, itaque
             dolorum qui nam error perspiciatis recusandae consequuntur magni facilis sunt harum! Nihil dolorem consequuntur optio at unde nostrum 
             deleniti repellendus dicta blanditiis assumenda vero harum, et iure reprehenderit voluptates, quibusdam expedita iste. Necessitatibus, 
             aut hic non tenetur iusto corrupti, perferendis animi, commodi odio voluptates porro molestiae facilis! Sunt sit laudantium id excepturi
             obcaecati quia. Possimus doloribus, dolor ducimus aliquid neque non mollitia suscipit deserunt dolores nobis est. Repellendus nulla vero cum?
             Excepturi consequatur quasi eius. Unde similique, iusto illum magni voluptatem cupiditate fugit ipsam at rem, soluta voluptate quaerat 
             dolore illo. Similique odio magni voluptas saepe aliquid porro nostrum eveniet inventore accusantium!"
        ],
        [
            "judul" => "Judul Blog Ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Karen Novita Rahmadhani",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt et recusandae eos, hic enim quod explicabo aut exercitationem 
             perferendis dicta necessitatibus corrupti eum optio animi unde omnis sit nisi! At hic reprehenderit, similique, molestias sed assumenda modi 
             maiores cupiditate soluta ab exercitationem explicabo? Quis accusantium corrupti cupiditate inventore veritatis, mollitia non sapiente earum 
             ducimus amet reiciendis harum quisquam. Voluptates nostrum, eligendi earum aperiam, fugiat itaque similique iure, tempora error praesentium 
             soluta obcaecati cupiditate sapiente perspiciatis explicabo. Obcaecati deleniti autem odio praesentium dolor dolores, atque, ab libero, nisi 
             odit quam id. Molestiae officiis laborum aspernatur fuga neque itaque facere omnis, deserunt vero eius eos obcaecati, eveniet odit ad sunt soluta
             rerum exercitationem voluptates dignissimos. Harum praesentium perferendis tempore nisi odio earum adipisci quasi dolorem sunt aperiam. Perspiciatis 
             itaque aliquid illo odio architecto consectetur nobis ipsum, exercitationem, molestiae nemo earum nesciunt quis ab. Sunt maxime quidem beatae officia. 
             Deleniti beatae suscipit sunt expedita minus minima fuga assumenda, optio pariatur voluptatem tempora libero illo vero quos deserunt commodi inventore 
             ipsam dolorem? Ducimus velit corrupti, provident ut, quae molestiae repudiandae ratione doloremque eveniet ullam sed debitis veniam? Omnis asperiores 
             optio aliquam dolor corrupti ipsum beatae, aperiam error, dicta itaque ut repellendus, harum odio cumque?"
        ],
        
        ];
    return view('blog', 
    ["judul" => "blog",
     "post" => $blog_konten
    ]);
});

Route::get('/about', function () {
    return view('about', 
    ["judul" => "about"]);
});

//route single post
Route::get('blog/{slug}', function($slug) {
    $blog_konten = [
        [
            "judul" => "Judul Blog Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Wishal Azharyan Al Hisyam",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et omnis delectus id ex veniam ratione molestiae debitis 
            obcaecati beatae at, officiis aliquid modi odit maiores. Similique accusantium suscipit, error reiciendis esse porro incidunt
            delectus mollitia alias fugiat excepturi quisquam illum saepe amet atque autem qui laudantium dolor eaque dicta? Blanditiis 
            laborum tenetur expedita recusandae, ducimus mollitia dignissimos, soluta rerum officiis nulla dolore perferendis repellat nemo 
            neque doloribus pariatur error quis fugiat natus! Perferendis alias suscipit dolore exercitationem sunt, perspiciatis accusantium 
            labore facere ipsum quo inventore porro hic earum, ad atque dicta ipsa? Commodi qui accusamus vitae iste facilis aspernatur alias."
        ],
        [
            "judul" => "Judul Blog Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Lusy Damayanti",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia laudantium voluptate ex cupiditate dolor deserunt sapiente
             id minima recusandae itaque consequuntur repellat praesentium officiis voluptates quisquam libero minus odio repudiandae necessitatibus cum,
             repellendus dolores. Accusamus tenetur numquam dignissimos placeat minima iste asperiores necessitatibus ipsa, eum quaerat esse, itaque
             dolorum qui nam error perspiciatis recusandae consequuntur magni facilis sunt harum! Nihil dolorem consequuntur optio at unde nostrum 
             deleniti repellendus dicta blanditiis assumenda vero harum, et iure reprehenderit voluptates, quibusdam expedita iste. Necessitatibus, 
             aut hic non tenetur iusto corrupti, perferendis animi, commodi odio voluptates porro molestiae facilis! Sunt sit laudantium id excepturi
             obcaecati quia. Possimus doloribus, dolor ducimus aliquid neque non mollitia suscipit deserunt dolores nobis est. Repellendus nulla vero cum?
             Excepturi consequatur quasi eius. Unde similique, iusto illum magni voluptatem cupiditate fugit ipsam at rem, soluta voluptate quaerat 
             dolore illo. Similique odio magni voluptas saepe aliquid porro nostrum eveniet inventore accusantium!"
        ],
        [
            "judul" => "Judul Blog Ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Karen Novita Rahmadhani",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt et recusandae eos, hic enim quod explicabo aut exercitationem 
             perferendis dicta necessitatibus corrupti eum optio animi unde omnis sit nisi! At hic reprehenderit, similique, molestias sed assumenda modi 
             maiores cupiditate soluta ab exercitationem explicabo? Quis accusantium corrupti cupiditate inventore veritatis, mollitia non sapiente earum 
             ducimus amet reiciendis harum quisquam. Voluptates nostrum, eligendi earum aperiam, fugiat itaque similique iure, tempora error praesentium 
             soluta obcaecati cupiditate sapiente perspiciatis explicabo. Obcaecati deleniti autem odio praesentium dolor dolores, atque, ab libero, nisi 
             odit quam id. Molestiae officiis laborum aspernatur fuga neque itaque facere omnis, deserunt vero eius eos obcaecati, eveniet odit ad sunt soluta
             rerum exercitationem voluptates dignissimos. Harum praesentium perferendis tempore nisi odio earum adipisci quasi dolorem sunt aperiam. Perspiciatis 
             itaque aliquid illo odio architecto consectetur nobis ipsum, exercitationem, molestiae nemo earum nesciunt quis ab. Sunt maxime quidem beatae officia. 
             Deleniti beatae suscipit sunt expedita minus minima fuga assumenda, optio pariatur voluptatem tempora libero illo vero quos deserunt commodi inventore 
             ipsam dolorem? Ducimus velit corrupti, provident ut, quae molestiae repudiandae ratione doloremque eveniet ullam sed debitis veniam? Omnis asperiores 
             optio aliquam dolor corrupti ipsum beatae, aperiam error, dicta itaque ut repellendus, harum odio cumque?"
        ],
        ];
$new_post = [];
foreach($blog_konten as $post){
    if($post["slug"] === $slug) {
        $new_post = $post;
    }
}
    return view('post', [ 
        "judul" => "Single Post",
        "post" => $new_post
        ]);
});