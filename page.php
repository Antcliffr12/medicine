<?php 

get_header();
?>
<section id="content">
    <div class="main">
        <h1>Main Wrapper</h1>
        <?php the_post(); ?>
        <?php the_content(); ?>
    </div>
</section>
<?php 
get_footer();