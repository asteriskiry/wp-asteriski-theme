
<?php
/**
 * The template for Asteriski 48v annual celebration page
 */

get_header();

?>
<header>
</header>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/tonsky/FiraCode@1.207/distr/fira_code.css">
<section class="white-section blog-section single-post-section vuosi" style="min-height: 100%;">
<style>
@font-face {
   font-family: pixel;
   src: url('/wp-content/themes/wp-asteriski-theme/assets/fonts/pixel.ttf');
}
@font-face {
   font-family: bigblue;
   src: url('/wp-content/themes/wp-asteriski-theme/assets/fonts/bigblue.ttf');
}
@font-face {
   font-family: hvd;
   src: url('/wp-content/themes/wp-asteriski-theme/assets/fonts/hvd.ttf');
}
@font-face {
   font-family: ohsnap;
   src: url('/wp-content/themes/wp-asteriski-theme/assets/fonts/ohsnap.ttf');
}
@font-face {
   font-family: profont;
   src: url('/wp-content/themes/wp-asteriski-theme/assets/fonts/profont.ttf');
}
@font-face {
   font-family: proggy;
   src: url('/wp-content/themes/wp-asteriski-theme/assets/fonts/proggy.ttf');
}
@font-face {
   font-family: retro;
   src: url('/wp-content/themes/wp-asteriski-theme/assets/fonts/retro.ttf');
}
@font-face {
   font-family: shure;
   src: url('/wp-content/themes/wp-asteriski-theme/assets/fonts/shure.ttf');
}
@font-face {
   font-family: terminess;
   src: url('/wp-content/themes/wp-asteriski-theme/assets/fonts/terminess.ttf');
}
html {
    height: 100%;
}
body {
    height: 100%;
}
footer {
    display: none;
}
.vuosijuhlat-content a {
    color: #00ff66;
    font: 1.3rem ohsnap;
    text-decoration: underline;
}
.vuosijuhlat-content a:hover {
    color: #00ff66;
    text-decoration: underline;
}
.vuosi {
  background-color: black;
  background-image: radial-gradient(
    rgba(0, 80, 0, 0.75), black 120%
  );
  color: white;
  font: 1.3rem ohsnap;
  padding-top: 10rem;
  text-shadow: 0 0 5px #C8C8C8;
  &::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background: repeating-linear-gradient(
      0deg,
      rgba(black, 0.15),
      rgba(black, 0.15) 1px,
      transparent 1px,
      transparent 2px
    );
    pointer-events: none;
  }
}
::selection {
  background: #0080FF;
  text-shadow: none;
}
pre {
  margin: 0;
}
</style>
    <div class="vuosijuhlat-content">
        <div class="row">
            <div class="col single-post-wrapper">
                <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                <div class="content-page">
                    <div class="page-content">
                        <?php if(has_post_thumbnail()) : ?>
                        <div class="post-thumb-wrapper">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <?php endif; ?>
                        <?php the_content(); ?>
                        <?php
                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html__('Pages: ', 'asteriski' ),
                            'after'  => '</div>',
                        ) );
                        ?>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
