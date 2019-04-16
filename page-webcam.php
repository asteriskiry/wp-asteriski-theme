<?php
/**
 * The template for displaying webcam
 */

get_header();

?>
<header class="page-header">
    <div class="overlay-dark"></div>
    <div class="container breadcrumbs-wrapper">
        <div class="breadcrumbs d-flex flex-column justify-content-center">
            <h3><?php wp_title(''); ?></h3>
        </div>
    </div>
</header>

<section class="white-section blog-section single-post-section">
    <div class="container">
        <div class="row">
            <div class="col single-post-wrapper">
        <script>
            var timeout = 2000;
            var timeout2 = 5000;
            function refresh() {
                for(var index=1;index<3;index++){
                    var cam = document.getElementById("cam" + index);
                    if(cam != null && cam.getAttribute("class") != "hideCam") {
                        cam.setAttribute("src", "https://old.digit.fi/webcam/webcam" +index+".jpg?"+(new Date()).getTime());
                    }
                }
                setTimeout('refresh()',timeout);
            }
            setTimeout('refresh()',timeout2);

            function viewCam(x) {
                for(var index=1;index<3;index++){
                    var cam = document.getElementById("cam"+index);
                    var camDiv = document.getElementById("Cam"+index);
                    if(cam != null){
                        if(index == x){
                            if (index == 1) {
                              document.getElementById("Cam2").setAttribute("class", "hideCam");
                            } else {
                              document.getElementById("Cam1").setAttribute("class", "hideCam");
                            }
                            cam.setAttribute("class","viewCam");
                            camDiv.setAttribute("class","col-lg-12 col-sm-12");
                            cam.setAttribute("onclick","javascript:hideCam("+index+");");
                        } else {
                            cam.setAttribute("class","hideCam");
                        }
                    }
                }
            }
            function hideCam(x) {
                for(var index=1;index<3;index++){
                    var cam = document.getElementById("cam"+index);;
                    var camDiv = document.getElementById("Cam"+index);
                    if(cam != null) {
                            if (index == 1) {
                              document.getElementById("Cam2").setAttribute("class", "col-lg-6 col-sm-12");
                            } else {
                              document.getElementById("Cam1").setAttribute("class", "col-lg-6 col-sm-12");
                            }
                        cam.setAttribute("class","webCam");
                        camDiv.setAttribute("class","col-lg-6 col-sm-12");
                        if(index == x){
                            cam.setAttribute("onclick","javascript:viewCam("+index+");");
                        }
                    }
                }
            }
        </script>
            <div class="container">
              <div class="row">
              <div class="col-lg-6 col-sm-12" id="Cam1">
                <img class="webCam" src="https://old.digit.fi/webcam/webcam1.jpg" id="cam1" onclick="javascript:viewCam(1);">
              </div>
              <div class="col-lg-6 col-sm-12" id="Cam2">
                <img class="webCam" src="https://old.digit.fi/webcam/webcam2.jpg" id="cam2" onclick="javascript:viewCam(2);">
              </div>
              </div>
            </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
