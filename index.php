<?php
include_once ('header.php');
?>
<!-- Page header with logo and tagline-->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Вітаємо на нашому сайті!</h1>
                <h2> Каталог фільмів </h2>
        </div>
    </div>
</header>
<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2>Весь каталог</h2>
                <!-- Blog post-->
                <?php $news = get_news()?>
                <?php foreach ($news as $new):?>
                <div class="card mb-4">
                    <a href="#!"><img class="card-img-top" src="<?=$new['image']?>" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted"><?=$new['datetime']=date('d.m.Y', strtotime($new['datetime']));?></div>
                        <h2 class="card-title h4"><?=$new['title']?></h2>
                        <p class="card-text"><?=mb_substr($new['content'],0,150,'utf-8').'...'?></p>
                        <a class="btn btn-primary" href="post.php?post_id=<?=$new['id']?>">Більше →</a>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
            <div class="col-lg-4">
                <h2>Віджети</h2>
                <div class="card mb-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                        </div>
                    </div>
                </div>
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="https://sorokav.page.gd/category.php?category_id=1">Фантастика</a></li>
                                    <li><a href="https://sorokav.page.gd/category.php?category_id=2">Комедії</a></li>
                                    <li><a href="https://sorokav.page.gd/category.php?category_id=3">Бойовик</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="https://sorokav.page.gd/category.php?category_id=4">Драми</a></li>
                                    <li><a href="https://sorokav.page.gd/category.php?category_id=5">Мультфільми</a></li>
                                    <li><a href="https://sorokav.page.gd/category.php?category_id=6">Серіали</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Side Widget</div>
                    <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                </div>

            </div>
        </div>
    </div>
</section>
<?php
    require_once('footer.php');
?>