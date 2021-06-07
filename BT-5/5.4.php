<?php
$blog = array(
    'post_1' => array(

        'id' => 1,
        'name' => 'post_1',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio nihil quo nulla aspernatur quidem voluptate eveniet qui ex, in magni id dignissimos eaque error eligendi aperiam fuga excepturi nisi modi?',
        'images' => 'a/post1.jpg'
    ),
    'post_2' => array(

        'id' => 1,
        'name' => 'post_2',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio nihil quo nulla aspernatur quidem voluptate eveniet qui ex, in magni id dignissimos eaque error eligendi aperiam fuga excepturi nisi modi?',
        'images' => 'a/post2.jpg'
    ),
    'post_3' => array(

        'id' => 1,
        'name' => 'post_3',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio nihil quo nulla aspernatur quidem voluptate eveniet qui ex, in magni id dignissimos eaque error eligendi aperiam fuga excepturi nisi modi?',
        'images' => 'a/post3.jpg'
    ),
    'post_4' => array(

        'id' => 1,
        'name' => 'post_4',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio nihil quo nulla aspernatur quidem voluptate eveniet qui ex, in magni id dignissimos eaque error eligendi aperiam fuga excepturi nisi modi?',
        'images' => 'a/post4.jpg'
    ),
    'post_5' => array(

        'id' => 1,
        'name' => 'post_5',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio nihil quo nulla aspernatur quidem voluptate eveniet qui ex, in magni id dignissimos eaque error eligendi aperiam fuga excepturi nisi modi?',
        'images' => 'a/post5.jpg'
    ),
);

function get_item($blog, $key)
{

    foreach ($blog as $item) {
        echo "<h3>{$item[$key]} </h3>";
    }
}
get_item($blog, 'images');
function show_image($key)
{
    switch ($key) {
        case ('post_1') :
            echo '<a href="a/post1.jpg">Post 1</a>';
        case ('post_2'):
            echo '<a href="a/post2.jpg">Post 2</a>';
        case ('post_2'):
            echo '<a href="a/post3.jpg">Post 3</a>';
        case ('post_2'):
            echo '<a href="a/post4.jpg">Post 4</a>';
        case ('post_2'):
            echo '<a href="a/post5.jpg">Post 5</a>';
        default:
            echo 'không tồn tại';

    }
}
show_image('post_2');
