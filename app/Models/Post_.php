<?php

namespace App\Models;

class Post
{
    private static  $blog_posts = [
        [
            'title' => 'Ramadhan 2023',
            'slug' => 'ramadhan2023',
            'author' =>'Edo Handoko',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem optio laudantium laborum?
            Magni facilis suscipit quae blanditiis exercitationem, velit illo, dolorum aliquid voluptatum tempora,
            neque veniam praesentium debitis veritatis alias inventore cupiditate provident harum architecto?
            Veniam rem accusamus ab quis voluptatum reprehenderit, in voluptate illo natus minus et vero? Est,
            modi omnis aliquid ipsum eaque magni a esse ut quae rerum voluptates totam cumque harum cupiditate facilis,
            excepturi quam dolore optio eveniet odit assumenda eos? Nam non sequi autem magnam.'
        ],
        [
            'title' => 'Sejarah Bulan Ramadhan',
            'slug' => 'sejarah-bulan-ramadhan',
            'author' => 'Edo Handoko',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem optio laudantium laborum?
            Magni facilis suscipit quae blanditiis exercitationem, velit illo, dolorum aliquid voluptatum tempora,
            neque veniam praesentium debitis veritatis alias inventore cupiditate provident harum architecto?
            Veniam rem accusamus ab quis voluptatum reprehenderit, in voluptate illo natus minus et vero? Est,
            modi omnis aliquid ipsum eaque magni a esse ut quae rerum voluptates totam cumque harum cupiditate facilis,
            excepturi quam dolore optio eveniet odit assumenda eos? Nam non sequi autem magnam.'
        ],
];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
