<?php get_header() ?>
<section id="banner" style="background-image: url(<?= get_template_directory_uri() . '/photos/bali.jpg' ?>);">
    <div class="container">
        <h1>All Articles</h1>
    </div>
</section>
<section id="article">
    <div class="container">
        <?php $articles = get_posts() ?>
        
        <?php foreach($articles as $article) : ?>
            <div class="article">
                <h2><?= $article->post_title ?></h2>
                <p><?=  $article->post_content ?></p>
            </div>
            <?php endforeach ?>
    </div>
</section>
<?php get_footer() ?>