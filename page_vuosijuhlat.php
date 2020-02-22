
<?php
/**
 * Template Name: Vuosijuhlat
 * The template for Asteriski 48v annual celebration page
 */

get_header();

?>
<header>
</header>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/tonsky/FiraCode@1.207/distr/fira_code.css">
<section class="white-section blog-section single-post-section vuosi" style="min-height: 100%;" id="vuosi">
<style>
@font-face {
   font-family: bigblue;
   src: url('/wp-content/themes/wp-asteriski-theme/assets/fonts/bigblue.ttf');
}
@font-face {
   font-family: ohsnap;
   src: url('/wp-content/themes/wp-asteriski-theme/assets/fonts/ohsnap.ttf');
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
    color: #7FFF00;
    font: 1.3rem bigblue;
    text-decoration: underline;
}
.vuosijuhlat-content a:hover {
    color: #7FFF00;
    text-decoration: underline;
}
.vuosi {
  background-color: black;
  background-image: radial-gradient(
    rgba(0, 80, 0, 0.75), black 120%
  );
  color: white;
  font: 1.3rem bigblue;
  padding-top: 140px;
  text-shadow: 0 0 5px #C8C8C8;
      animation: textShadow 1.6s infinite;
}
  .vuosi::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100%;
    background: repeating-linear-gradient(
      0deg,
      rgba(0, 0, 0, 0.15),
      rgba(0, 0, 0, 0.15) 1px,
      transparent 1px,
      transparent 2px
    );
    pointer-events: none;
        animation: flicker 0.15s infinite;
  }
::selection {
  background: #0080FF;
  text-shadow: none;
}
pre {
  margin: 0;
}
.typewriter {
  border-right: .35em solid #7FFF00;
  font: 1.3rem ohsnap;
  margin: 0 auto;
  margin-bottom: 20px;
  letter-spacing: .05em;
  color: #7FFF00;
  font-size: 30px;
  animation: 
    blink-caret .75s step-end infinite;
}
  @keyframes textShadow {
  0% {
    text-shadow: 0.4389924193300864px 0 1px rgba(0,30,255,0.5), -0.4389924193300864px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  5% {
    text-shadow: 2.7928974010788217px 0 1px rgba(0,30,255,0.5), -2.7928974010788217px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  10% {
    text-shadow: 0.02956275843481219px 0 1px rgba(0,30,255,0.5), -0.02956275843481219px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  15% {
    text-shadow: 0.40218538552878136px 0 1px rgba(0,30,255,0.5), -0.40218538552878136px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  20% {
    text-shadow: 3.4794037899852017px 0 1px rgba(0,30,255,0.5), -3.4794037899852017px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  25% {
    text-shadow: 1.6125630401149584px 0 1px rgba(0,30,255,0.5), -1.6125630401149584px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  30% {
    text-shadow: 0.7015590085143956px 0 1px rgba(0,30,255,0.5), -0.7015590085143956px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  35% {
    text-shadow: 3.896914047650351px 0 1px rgba(0,30,255,0.5), -3.896914047650351px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  40% {
    text-shadow: 3.870905614848819px 0 1px rgba(0,30,255,0.5), -3.870905614848819px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  45% {
    text-shadow: 2.231056963361899px 0 1px rgba(0,30,255,0.5), -2.231056963361899px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  50% {
    text-shadow: 0.08084290417898504px 0 1px rgba(0,30,255,0.5), -0.08084290417898504px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  55% {
    text-shadow: 2.3758461067427543px 0 1px rgba(0,30,255,0.5), -2.3758461067427543px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  60% {
    text-shadow: 2.202193051050636px 0 1px rgba(0,30,255,0.5), -2.202193051050636px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  65% {
    text-shadow: 2.8638780614874975px 0 1px rgba(0,30,255,0.5), -2.8638780614874975px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  70% {
    text-shadow: 0.48874025155497314px 0 1px rgba(0,30,255,0.5), -0.48874025155497314px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  75% {
    text-shadow: 1.8948491305757957px 0 1px rgba(0,30,255,0.5), -1.8948491305757957px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  80% {
    text-shadow: 0.0833037308038857px 0 1px rgba(0,30,255,0.5), -0.0833037308038857px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  85% {
    text-shadow: 0.09769827255241735px 0 1px rgba(0,30,255,0.5), -0.09769827255241735px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  90% {
    text-shadow: 3.443339761481782px 0 1px rgba(0,30,255,0.5), -3.443339761481782px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  95% {
    text-shadow: 2.1841838852799786px 0 1px rgba(0,30,255,0.5), -2.1841838852799786px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  100% {
    text-shadow: 2.6208764473832513px 0 1px rgba(0,30,255,0.5), -2.6208764473832513px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
}

  @keyframes flicker {
  0% {
  opacity: 0.27861;
  }
  5% {
  opacity: 0.34769;
  }
  10% {
  opacity: 0.23604;
  }
  15% {
  opacity: 0.90626;
  }
  20% {
  opacity: 0.18128;
  }
  25% {
  opacity: 0.83891;
  }
  30% {
  opacity: 0.65583;
  }
  35% {
  opacity: 0.67807;
  }
  40% {
  opacity: 0.26559;
  }
  45% {
  opacity: 0.84693;
  }
  50% {
  opacity: 0.96019;
  }
  55% {
  opacity: 0.08594;
  }
  60% {
  opacity: 0.20313;
  }
  65% {
  opacity: 0.71988;
  }
  70% {
  opacity: 0.53455;
  }
  75% {
  opacity: 0.37288;
  }
  80% {
  opacity: 0.71428;
  }
  85% {
  opacity: 0.70419;
  }
  90% {
  opacity: 0.7003;
  }
  95% {
  opacity: 0.36108;
  }
  100% {
  opacity: 0.24387;
  }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: #00ff2b; }
}

.notransition  {
  -webkit-transition: none !important;
  -moz-transition: none !important;
  -o-transition: none !important;
  transition: none !important;
   animation: none !important;
       text-shadow: none !important;
}

.notransition::after  {
  -webkit-transition: none !important;
  -moz-transition: none !important;
  -o-transition: none !important;
  transition: none !important;
   animation: none !important;
       text-shadow: none !important;
}

<?php
if ( is_user_logged_in() ) {
?>
@media only screen and (max-width: 1120px) {
    .switch {
        position: fixed;
        top: 102px;
        left: 20px;
        z-index: 999;
    }
}
@media only screen and (min-width: 1121px) {
    .switch {
        position: fixed;
        top: 122px;
        left: 20px;
        z-index: 999;
    }
}
<?php
} else {
?>
@media only screen and (max-width: 1120px) {
    .switch {
        position: fixed;
        top: 62px;
        left: 20px;
        z-index: 999;
    }
}
@media only screen and (min-width: 1121px) {
    .switch {
        position: fixed;
        top: 82px;
        left: 20px;
        z-index: 999;
    }
}

<?php
}
?>


.onoffswitch {
    position: relative; width: 72px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}
.onoffswitch-checkbox {
    display: none;
}
.onoffswitch-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 2px solid #525252; border-radius: 10px;
}
.onoffswitch-inner {
    display: block; width: 200%; margin-left: -100%;
    transition: margin 0.3s ease-in 0s;
}
.onoffswitch-inner:before, .onoffswitch-inner:after {
    display: block; float: left; width: 50%; height: 21px; padding: 0; line-height: 21px;
    font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    box-sizing: border-box;
}
.onoffswitch-inner:before {
    content: "ON";
    padding-left: 10px;
    background-color: #000000; color: #00FF2B;
    text-shadow: 2px green;
}
.onoffswitch-inner:after {
    content: "OFF";
    padding-right: 10px;
    background-color: #000000; color: #999999;
    text-align: right;
}
.onoffswitch-switch {
    display: block; width: 11px; margin: 5px;
    background: #949494;
    position: absolute; top: 0; bottom: 0;
    right: 47px;
    border: 2px solid #525252; border-radius: 10px;
    transition: all 0.3s ease-in 0s; 
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
    margin-left: 0;
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
    right: 0px; 
    background-color: #00FF2B; 
    box-shadow: 0px 0px 5px #00FF2B;
}
</style>
    <div class="vuosijuhlat-content container">
        <div class="switch">
        <div class="onoffswitch">
            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="effects" checked onclick="toggleAnimations()">
            <label class="onoffswitch-label" for="effects">
                <span class="onoffswitch-inner"></span>
                <span class="onoffswitch-switch"></span>
            </label>
        </div>
        </div>
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
                <p class="typewriter" id="typewriter"style="width: 300px;"></p>

                <p style="margin: auto; width: 300px; margin-top: 50px; color: #7FFF00; font: 1.8rem bigblue;">Yhteistyössä</p>
                <div class="company-logos row">
                    <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 company-logo">
                        <a href="https://houston-inc.com/"><img src="/wp-content/themes/wp-asteriski-theme/vujulogot/houston.png"></a>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 company-logo">
                        <a href="https://anders.fi/"><img src="/wp-content/themes/wp-asteriski-theme/vujulogot/anders.png"></a>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 company-logo">
                        <a href="https://reaktor.com/"><img src="/wp-content/themes/wp-asteriski-theme/vujulogot/reaktor.png"></a>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 company-logo">
                        <a href="https://sofokus.fi/"><img src="/wp-content/themes/wp-asteriski-theme/vujulogot/sofokus.png"></a>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 company-logo">
                        <a href="https://solita.fi/"><img src="/wp-content/themes/wp-asteriski-theme/vujulogot/solita.png"></a>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 company-logo">
                        <a href="https://arado.fi/"><img src="/wp-content/themes/wp-asteriski-theme/vujulogot/arado.png"></a>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 company-logo">
                        <a href="https://tek.fi/"><img src="/wp-content/themes/wp-asteriski-theme/vujulogot/tek.png"></a>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 company-logo">
                        <a href="https://tivia.fi/"><img src="/wp-content/themes/wp-asteriski-theme/vujulogot/tivia.png"></a>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 company-logo">
                        <a href="https://vincit.fi/"><img src="/wp-content/themes/wp-asteriski-theme/vujulogot/vincit.png"></a>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 company-logo">
                        <a href="https://vstky.fi/"><img src="/wp-content/themes/wp-asteriski-theme/vujulogot/vstky.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
var i = 0;
var txt = '[riski@vujut] $';
var speed = 30;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("typewriter").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
typeWriter()

function toggleAnimations() {
  var checkBox = document.getElementById("effects");
  var mainContainer = document.getElementById("vuosi");
  if (checkBox.checked == true){
    mainContainer.classList.remove('notransition');
  } else {
    mainContainer.classList.add('notransition');
  }
}
</script>
<?php get_footer(); ?>
