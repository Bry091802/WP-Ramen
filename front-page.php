

    <?php get_header() ?>
</div>
    <!-- HOW TO ORDER -->
    <section class="order py-20 bg-[#FBF4EC]">
      <div class="container">
        <div class="order__wrapper items-center text-center">
          <div class="order__title">
            <h3
              class="text-secondary uppercase font-bold text-[40px] tracking-widest"
            >
              <?php the_field('order_title') ?>
            </h3>
          </div>
          <div
            class="order__content flex lg:flex-row flex-col lg:gap-[5rem] justify-center items-center lg:pt-8"
          >
            <div class="order__card grid place-items-center">
              <div class="order__img">
                <img src="<?php the_field('order_image_1') ?>" alt="" />
              </div>
              <div class="order__text">
                <p
                  class="uppercase font-semibold font-economica text-[30px] text-center items-center text-dark"
                >
                  <?php the_field('order_title_1') ?>
                </p>
              </div>
            </div>

            <i
              class="fa-solid fa-chevron-down text-3xl text-secondary lg:rotate-[270deg]"
            ></i>
            <div class="order__card grid place-items-center mt-6">
              <div class="order__img">
                <img src="<?php the_field('order_image_2') ?>" alt="" />
              </div>
              <div class="order__text">
                <p
                  class="uppercase font-semibold font-economica text-[30px] text-center items-center text-dark"
                >
                  <?php the_field('order_title_2') ?>
                </p>
              </div>
            </div>

            <i
              class="fa-solid fa-chevron-down text-3xl text-secondary lg:rotate-[270deg]"
            ></i>
            <div class="order__card grid place-items-center mt-[0.8rem]">
              <div class="order__img">
                <img src="<?php the_field('order_image_3') ?>" alt="" />
              </div>
              <div class="order__text">
                <p
                  class="uppercase font-semibold font-economica text-[30px] text-center items-center text-dark"
                >
                  <?php the_field('order_title_3') ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- MENU -->
    <section style="background-image:url('<?php the_field('menu_background') ?>')" class="menu py-20 bg-menu bg-repeat">
      <div class="container">
        <div
          class="menu__wrapper grid place-items-center gap-20 items-center text-center"
        >
          <div class="menu__title">
            <h2 class="uppercase font-bold text-[60px] text-white">
              ramen menu
            </h2>
          </div>
          <div
            class="menu__content lg:grid lg:grid-cols-2 gap-20 items-center justify-center"
          >

          <?php

          $args = array(
            'post_type'      => 'Ramen',
            'posts_per_page' => -1,
            
          );
          $newQuery = new WP_Query($args);
          ?>

          <?php if($newQuery->have_posts()) :while($newQuery->have_posts()) :$newQuery->the_post(); ?>


            <div class="menuItem grid place-items-center">
              <div>
                <div class="itemDesc flex text-justify items-start gap-8">
                  <div>
                    <h3
                      class="font-economica text-dark text-[50px] font-bold uppercase"
                    >
                      <?php the_title(); ?>
                    </h3>
                    <p class="text-2xl font-bold text-secondary mb-2"><?php the_field('item_price') ?></p>
                    <ul class="text-white font-bold mb-8">
<?php the_field('item_ingredients') ?>
                    </ul>
                  </div>
                  <?php
              if(has_post_thumbnail()) :
                the_post_thumbnail();
              endif;
              ?>
                </div>
                <div
                  class="uppercase flex items-start text-[25px] font-coming font-black text-dark"
                >
                  <?php the_excerpt(); ?>
            </div>
              </div>
            </div>

            <?php
          endwhile;
          else :
            echo "No Available Content";
          endif;
          wp_reset_postdata();
          ?>

          </div>
          <a
            class="btn menu uppercase text-white font-bold"
            href="http://localhost/ramen/index.php/menu/"
            target="_blank"
            >view our full menu</a
          >
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="cta pt-16 bg-[#FBF4EC]">
      <div class="cta__wrapper text-center">
        <div class="cta__title pb-16">
          <h3
            class="text-[40px] text-secondary font-bold uppercase tracking-widest"
          >
            <?php the_field('cta_title') ?>
          </h3>
          <h4
            class="text-[22px] font-bold text-primary uppercase tracking-widest"
          >
            <?php the_field('cta_text') ?>
          </h4>
        </div>

        <div class="cta__content flex lg:flex-row flex-col items-center">
          <img class="w-[40rem]" src="<?php the_field('cta_img_1') ?>" alt="" />
          <img class="w-[40rem]" src="<?php the_field('cta_img_2') ?>" alt="" />
          <img class="w-[45rem] h-[30.6rem]" src="<?php the_field('cta_img_3') ?>" alt="" />
        </div>
      </div>
    </section>

    <?php get_footer() ?>

    <!-- SCRIPT -->
    <script src="./js/toggleMenu.js"></script>
  </body>
</html>
