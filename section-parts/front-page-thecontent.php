<?php
// To display The Content section on front page
if(have_posts()) :
    while(have_posts()) : the_post();
if(get_the_content()!= "")
{
?>
<section>
    <div class="container">
        <div class="row">
            <?php the_content(); ?>
        </div>
    </div>
</section>
<?php
}
endwhile;
endif; ?>
