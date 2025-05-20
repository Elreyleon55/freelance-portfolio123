<?php

/**
 * Template Name: Custom Homepage
 */
get_header();
?>

<main id="primary" class="front-page">
  <section class="intro-art">
    <div class="inner-intro-art-left">
      <?php get_template_part('./media/Intro-art-left'); ?>
    </div>
    <div class="inner-intro-art-right">
      <?php get_template_part('./media/intro-art-right'); ?>
    </div>
  </section>

  <section class="about-section">
    <div class="text-about-left">
      <?php
      if (have_rows('about_section')):

        // Loop through rows.
        while (have_rows('about_section')) : the_row();

          // Load sub field value.
          $header = get_sub_field('header_for_about_sectioon');
          $innerText = get_sub_field('inner_text_for_about_section');
          $link = get_sub_field('gmail_info');

          // Do something, but make sure you escape the value if outputting directly...
      ?>
          <h3><?php echo esc_html($header); ?></h3>
          <p><?php echo wp_kses_post($innerText); ?></p>
          <a href=""><?php echo $link ?></a>
      <?php

        // End loop.
        endwhile;

      // No value.
      else :
      // Do something...
      endif;
      ?>
    </div>
    <div class="promo-text-right">
      <div class="inner-text-right-container-desktop">
        <?php get_template_part('./media/catch-frase'); ?>
      </div>
      <div class="inner-text-right-container-mobile">
        <?php get_template_part('./media/catch-frase-mobile'); ?>
      </div>
    </div>
  </section>

  <section class="show-case-work">
    <div class="inner-container-items">
      <div class="computer-mobile-display">
        <img src="<?php echo get_template_directory_uri(); ?>/media/mobile-computer-display.png" alt="Mobile Computer Display">
      </div>
      <div class="white-circle">
        <?php get_template_part('./media/background-circle'); ?>
      </div>
    </div>
  </section>

  <section class="services">
    <div class="inner-container-backdrop"
      style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/media/backdrop-for-services.svg'); ?>');
      background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
    height: 100%;
">
      <?php
      // Check if the PARENT repeater has rows
      if (have_rows('services_section')) :
        while (have_rows('services_section')) : the_row();
          // Get PARENT repeater values
          $parent_header = get_sub_field('header_for_services');
          $parent_description = get_sub_field('text_for_services_header');

          // Display PARENT section
      ?>
          <div class="services-tittle">
            <h2><?php echo esc_html($parent_header); ?></h2>
            <p><?php echo esc_html($parent_description) ?></p>

            <?php
            // Check if the CHILD repeater (nested inside parent) has rows
            if (have_rows('actual_services')) :
              while (have_rows('actual_services')) : the_row();
                // Get CHILD repeater values
                $child_text = get_sub_field('name_of_service');
                $child_description = get_sub_field('description_of_service');
            ?>
          </div>

          <!-- Display CHILD repeater content -->
          <div class="services-container">
            <div class="actual-services">
              <h3><?php echo esc_html($child_text); ?></h3>
              <div class="description">
                <?php echo wpautop(esc_textarea($child_description)); ?>
              </div>
          <?php
              endwhile; // End CHILD repeater loop
            else :
              echo '<p>No child items found.</p>';
            endif;
          ?>
      <?php
        endwhile; // End PARENT repeater loop
      else :
        echo '<p>No parent items found.</p>';
      endif;
      ?>
            </div>
          </div>


          <div class="extra-services">
            <p>Got a different project in mind? No Problem get in contact today and we will find a way to do it</p>
          </div>

    </div>
    <div class="errow">
      <?php get_template_part("/media/dropdown-icon") ?>
    </div>
  </section>
  <section class="contact-from">
    <?php
    the_content();
    ?>
  </section>


</main><!-- #main -->

<?php

get_footer();
