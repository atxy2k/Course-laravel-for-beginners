<?php 

$blog_items = [
    [
        'background' => '/template/assets/images/blog/1.jpg',
        'author' => 'TIM NORTON',
        'author_image' => '/template/assets/images/blog/b6.jpg',
        'title' => 'Make your team a Design driven company',
        'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard."
    ],
    [
        'background' => '/template/assets/images/blog/2.jpg',
        'author' => 'GUADALUPE TUN',
        'author_image' => '/template/assets/images/blog/b6.jpg',
        'title' => 'The newest web framework that changed the world',
        'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard."
    ],
    [
        'background' => '/template/assets/images/blog/3.jpg',
        'author' => 'TIM NORTON',
        'author_image' => '/template/assets/images/blog/b6.jpg',
        'title' => '5 ways to improve user retention for your startup',
        'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard."
    ]
];

function printBlogItem($item){ ?>

    <div class="col-lg-4 col-md-6 col-12">
            <!-- Single News -->
        <div class="single-news">
        <div class="image">
            <a href="javascript:void(0)"><img class="thumb" src="<?= isset($item['background']) ? $item['background'] : '' ?>" alt="Blog" /></a>
            <div class="meta-details">
            <img class="thumb" src="<?= isset($item['author_image']) ? $item['author_image'] : 'Not available' ?>" alt="Author" />
            <span>BY <?= isset($item['author']) ? $item['author'] : 'Not available' ?></span>
            </div>
        </div>
        <div class="content-body">
            <h4 class="title">
            <a href="javascript:void(0)"> <?= isset($item['title']) ? $item['title'] : '' ?> </a>
            </h4>
            <p><?= isset($item['description']) ? $item['description'] : '' ?></p>
        </div>
        </div>
        <!-- End Single News -->
    </div>


<?php 
}

foreach($blog_items as $item){
    printBlogItem($item);
}
?>
