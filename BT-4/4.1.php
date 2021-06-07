<?php
$blog = array(
     array(

        'id' => 1,
        'name' => 'post_1',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio nihil quo nulla aspernatur quidem voluptate eveniet qui ex, in magni id dignissimos eaque error eligendi aperiam fuga excepturi nisi modi?',
        'images' => 'a/post1.jpg'
    ),
     array(

        'id' => 1,
        'name' => 'post_2',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio nihil quo nulla aspernatur quidem voluptate eveniet qui ex, in magni id dignissimos eaque error eligendi aperiam fuga excepturi nisi modi?',
        'images' => 'a/post2.jpg'
    ),
     array(

        'id' => 1,
        'name' => 'post_3',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio nihil quo nulla aspernatur quidem voluptate eveniet qui ex, in magni id dignissimos eaque error eligendi aperiam fuga excepturi nisi modi?',
        'images' => 'a/post3.jpg'
    ),
     array(

        'id' => 1,
        'name' => 'post_4',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio nihil quo nulla aspernatur quidem voluptate eveniet qui ex, in magni id dignissimos eaque error eligendi aperiam fuga excepturi nisi modi?',
        'images' => 'a/post4.jpg'
    ),
     array(

        'id' => 1,
        'name' => 'post_5',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio nihil quo nulla aspernatur quidem voluptate eveniet qui ex, in magni id dignissimos eaque error eligendi aperiam fuga excepturi nisi modi?',
        'images' => 'a/post5.jpg'
    ),
);

#Hiện thị toàn bộ thông tin
echo'<pre>';
print_r($blog);
echo'</pre>';


#In ra post-title của post_1 -> post-5
foreach ($blog as $item){
    echo "title: {$item['name']} <br>";
}


#In ra các mảng chẵn của blog
for ($i=0; $i<count($blog); $i++) {
    if ($i%2 == 0) {
        echo '<pre>';
        print_r($blog[$i]);
    }
}