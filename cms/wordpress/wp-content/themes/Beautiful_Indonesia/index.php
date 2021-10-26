<?php get_header() ?>

<section id="hero" style="background-image: url(<?= get_template_directory_uri() . '/photos/bali1.jpg' ?>)">
    <h1><?= bloginfo('title') ?></h1>
    <h4><?= bloginfo('description') ?></h4>
</section>

<section id="about">
    <div class="container">
        <div class="about-content">
            <h1>About Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur sunt, recusandae saepe consequuntur doloribus porro, vero commodi harum omnis dolor ut enim ex non nostrum deleniti esse natus exercitationem facilis!</p>
        </div>
        <div class="about-image">
            <img src="<?= get_template_directory_uri() . '/photos/bali.jpg' ?>" alt="">
            <img src="<?= get_template_directory_uri() . '/photos/bali1.jpg' ?>" alt="">
        </div>
    </div>
</section>

<section id="best-places">

</section>

<?php get_footer() ?>