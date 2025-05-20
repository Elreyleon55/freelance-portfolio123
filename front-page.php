<?php

/**
 * Template Name: Custom Homepage
 */
get_header();
?>

<main id="primary" class="front-page">
  <div class="front-page-design" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/media/right-side-design.svg');
  background-size: 100%;
  background-repeat: no-repeat;">

    <section id="#about" class="about-section" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/media/background-about-section.svg');
      background-size: 100%;
      background-repeat: no-repeat">
      <div class="about-conatiner">
        <?php
        if (have_rows('about_section')):
          while (have_rows('about_section')) : the_row();
        ?>
            <h2>
              <?php echo get_sub_field('header_for_about_sectioon'); ?>
            </h2>

            <p>
              <?php echo get_sub_field('inner_text_for_about_section'); ?>
            </p>
            <ul>
              <li>
                <?php echo get_sub_field('gmail_info'); ?>
              </li>
            </ul>
        <?php
          endwhile;
        else :
          echo '<p>No content found</p>';
        endif;
        ?>
      </div>
    </section>
    <section id="services" class="services-section">
      <div></div>
    </section>
    <section id="portfolio" class="portfolio-section">
      <div></div>
    </section>
  </div>


</main><!-- #main -->

<?php

get_footer();
