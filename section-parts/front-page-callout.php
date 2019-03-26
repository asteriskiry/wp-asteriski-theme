    <?php
    $asteriski_contact_section_hideshow = get_theme_mod('asteriski_contact_section_hideshow','hide');
    if ($asteriski_contact_section_hideshow =='show') { ?>
    <?php $asteriski_ctah_btn_text = get_theme_mod('asteriski_ctah_btn_text1'); ?>
    <?php $asteriski_ctah_btn_url = get_theme_mod('asteriski_ctah_btn_url1'); ?>     
    <?php $asteriski_ctah_callout_text = get_theme_mod('asteriski_ctah_heading'); ?> 
    <section id="looking-consultant">
      <div class="container">
        <!-- Start Row -->
        <div class="row">
          <div class="col-lg-8 col-md-8">
            <div class="submit-ticket">
              <h2>
                <?php echo esc_html($asteriski_ctah_callout_text); ?>
              </h2>
            </div>
          </div>
          <div class="col-lg-4 col-md-4   responsive-pt-50">
            <?php if (!empty($asteriski_ctah_btn_text)) { ?>
            <div class="submit-ticket text-right">
              <a href="<?php echo esc_url($asteriski_ctah_btn_url); ?>" class="btn submit-ticket-btn">
                <?php echo esc_html($asteriski_ctah_btn_text); ?>
              </a>
            </div>
            <?php } ?>
          </div>
        </div>
        <!-- End Row -->
      </div>
    </section>
    <?php } ?>