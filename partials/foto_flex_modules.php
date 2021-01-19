<div class="flexible-content">

<?php if( have_rows('content') ): ?>
  <?php while( have_rows('content') ): the_row(); ?>
    <!-- MODUŁ A -->
    <?php if( get_row_layout() == 'module_a' ): $big_image = get_sub_field('a_big_image'); $small_image = get_sub_field('a_small_image'); ?>

      <div class="module-a" data-aos="fade-up" data-aos-delay="100">
        <img class="enlarge-hover" src="<?= $small_image['sizes']['medium'] ?>" alt="<?= $small_image['alt'] ?>">
        <img class="enlarge-hover" src="<?= $big_image['sizes']['large'] ?>" alt="<?= $big_image['alt'] ?>">
      </div>

    <!-- MODUŁ B -->
    <?php elseif( get_row_layout() == 'module_b' ): $big_image = get_sub_field('b_big_image'); $small_image_left = get_sub_field('b_small_image_left'); $small_image_right = get_sub_field('b_small_image_right'); ?>

      <div class="module-b" data-aos="fade-up" data-aos-delay="100">
        <img class="enlarge-hover" src="<?= $big_image['sizes']['large'] ?>" alt="<?= $big_image['alt'] ?>">

        <div class="module-b__bottom">
          <img class="enlarge-hover" src="<?= $small_image_left['sizes']['medium'] ?>" alt="<?= $small_image_left['alt'] ?>">
          <img class="enlarge-hover" src="<?= $small_image_right['sizes']['medium'] ?>" alt="<?= $small_image_right['alt'] ?>">
        </div>
      </div>

    <!-- MODUŁ C -->
    <?php elseif( get_row_layout() == 'module_c' ): $big_image = get_sub_field('c_big_image'); $text = get_sub_field('c_text'); $form_shortcode = get_sub_field('c_form_shortcode'); ?>

      <div class="module-c" data-aos="fade-up" data-aos-delay="100">
        <img class="enlarge-hover" src="<?= $big_image['sizes']['large'] ?>" alt="<?= $big_image['alt'] ?>">

        <div class="module-c__text" data-aos="fade-up" data-aos-delay="300">
          <?= $text ?>

          <?php echo do_shortcode( $form_shortcode ) ?>
        </div>
      </div>

    <!-- MODUŁ D -->
    <?php elseif( get_row_layout() == 'module_d' ): $big_image = get_sub_field('d_big_image'); $small_image = get_sub_field('d_small_image'); ?>

      <div class="module-d" data-aos="fade-up" data-aos-delay="100">
        <img class="enlarge-hover" src="<?= $big_image['sizes']['large'] ?>" alt="<?= $big_image['alt'] ?>">
        <img class="enlarge-hover" src="<?= $small_image['sizes']['medium'] ?>" alt="<?= $small_image['alt'] ?>">
      </div>

    <!-- MODUŁ E -->
    <?php elseif( get_row_layout() == 'module_e' ): $left_image = get_sub_field('e_left_image'); $right_image = get_sub_field('e_right_image'); ?>

      <div class="module-e" data-aos="fade-up" data-aos-delay="100">
        <img class="enlarge-hover" src="<?= $left_image['sizes']['medium'] ?>" alt="<?= $left_image['alt'] ?>">
        <img class="enlarge-hover" src="<?= $right_image['sizes']['large'] ?>" alt="<?= $right_image['alt'] ?>">
      </div>

    <!-- MODUŁ F -->
    <?php elseif( get_row_layout() == 'module_f' ): $left_image = get_sub_field('f_left_image'); $right_image = get_sub_field('f_right_image'); ?>

      <div class="module-f" data-aos="fade-up" data-aos-delay="100">
        <img class="enlarge-hover" src="<?= $left_image['sizes']['large'] ?>" alt="<?= $left_image['alt'] ?>">
        <img class="enlarge-hover" src="<?= $right_image['sizes']['large'] ?>" alt="<?= $right_image['alt'] ?>">
      </div>

    <!-- MODUŁ 1 -->
    <?php elseif( get_row_layout() == 'module_1' ): $image = get_sub_field('1_image'); ?>

      <div class="module-1" data-aos="fade-up" data-aos-delay="100">
        <img class="enlarge-hover" src="<?= $image['sizes']['hd'] ?>" alt="<?= $image['alt'] ?>">
      </div>

    <!-- MODUŁ 2 -->
    <?php elseif( get_row_layout() == 'module_2' ): $image = get_sub_field('2_image'); ?>

      <div class="module-2" data-aos="fade-up" data-aos-delay="100">
        <img class="enlarge-hover" src="<?= $image['sizes']['hd'] ?>" alt="<?= $image['alt'] ?>">
      </div>

    <!-- MODUŁ 3 -->
    <?php elseif( get_row_layout() == 'module_3' ): $images = get_sub_field('3_images'); ?>

      <div class="module-3" data-aos="fade-up" data-aos-delay="100">
        <?php if ($images) : foreach ($images as $img) : ?>
        <img class="enlarge-hover" src="<?= $img['sizes']['medium'] ?>" alt="<?= $img['alt'] ?>">
        <?php endforeach; endif; ?>
      </div>

    <!-- TEXT DUO -->
    <?php elseif( get_row_layout() == 'text_duo' ): $text_left = get_sub_field('text_duo_left'); $text_right = get_sub_field('text_duo_right'); ?>

      <div class="text-duo">
        <div data-aos="fade-up" data-aos-delay="100">
          <?php echo $text_left ?>
        </div>

        <div data-aos="fade-up" data-aos-delay="200">
          <?php echo $text_right ?>
        </div>
      </div>

    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>

</div>