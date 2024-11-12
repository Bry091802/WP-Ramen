<?php
/**
 *  Template Name: menu
 */
?>
<?php wp_head() ?>


<?php get_header() ?>

</div>

    <!-- ANNOUNCEMENT -->
    <section class="announcement bg-secondary">
      <div class="container">
        <div class="announcement__wrapper text-center">
          <p class="text-[25px] text-white uppercase font-bold tracking-widest">
            michi ramen • teusday - sunday 11am-midnight • happy hour 9pm-11pm
          </p>
        </div>
      </div>
    </section>


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
            'tax_query'      => array(
              array(
              'taxonomy' => 'category',
              'field'    => 'slug',
              'terms'    => 'ramen'
              )
            )
            
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
        </div>
      </div>
    </section>

     <!-- TOPPINGS IMAGE -->
    <section class="imageToppings">
      <img class="w-full" src="<?php the_field('toppings_img') ?>" alt="" />
    </section>

    <!-- RAMEN TOPPINGS -->
    <section class="toppings py-12 bg-[#FBF4EC]">
      <div class="container">
        <div class="toppings__wrapper w-[1200px] mx-auto lg:grid lg:grid-cols-1">
          <div class="toppings__title lg:items-center ml-[3rem] lg:ml-0 flex flex-col items-start text-center pb-16">
            <h2 class="uppercase font-bold text-[40px] lg:text-[60px] text-secondary pb-4">
              ramen toppings
            </h2>
            <h3 class="text-primary font-bold text-2xl uppercase">
              broth & noodles <span class="text-black">$6.50</span>
            </h3>
            <small class="opacity-60 font-bold text-[1rem]"
              >Great for kids or to build your own</small
            >
          </div>
          <div class="toppings__content lg:grid lg:grid-cols-2 lg:gap-x-[10rem]">

          <?php

          $args = array(
            'post_type'      => 'Ramen',
            'posts_per_page' => -1,
            'tax_query'      => array(
              array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => 'toppings'
              )
            ) 
            
          );
          $newQuery = new WP_Query($args);
          ?>

          <?php if($newQuery->have_posts()) :while($newQuery->have_posts()) :$newQuery->the_post(); ?>

            <div class="toppingsItem">
              <div>
                <div class="toppingsDesc flex justify-between">
                  <div>
                    <h3 class="text-dark font-bold text-2xl uppercase">
                      <?php the_title() ?>
                    </h3>
                    <ul class="text-dark font-bold mb-8 text-[1rem]">
                      <li><?php the_excerpt() ?></li>
                    </ul>
                  </div>
                  <p class="text-dark text-2xl font-semibold"><?php the_field('item_price') ?></p>
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
        </div>
      </div>
    </section>sssn

    <!-- DESSERT IMAGE -->
    <section class="imageDesserts">
      <img class="w-full" src="<?php the_field('dessert_img') ?>" alt="" />
    </section>

    <!-- SIDES AND DESSERTS -->
    <section class="desserts py-12 bg-[#FBF4EC]">
      <div class="container">
        <div class="desserts__wrapper w-[1200px] mx-auto">
          <div class="desserts__title lg:items-center ml-[3rem] lg:ml-0 flex flex-col items-start text-center pb-16">
            <h2 class="uppercase font-bold text-[40px] lg:text-[60px] text-secondary pb-4">
              sides & desserts
            </h2>
          </div>
          <div class="desserts__content lg:grid lg:grid-cols-2 gap-x-[10rem]">


            <div class="dessertsItem">
              <div>
                <div class="dessertsDesc flex justify-between">
                  <div>
                    <h3 class="text-dark font-bold text-2xl uppercase">
                      edamame
                    </h3>
                    <ul class="text-dark font-bold mb-8 text-[1rem]">
                      <li>boiled and salted soybean pods</li>
                    </ul>
                  </div>
                  <p class="text-dark text-2xl font-semibold">$3.50</p>
                </div>
              </div>
            </div>
            <div class="dessertsItem">
              <div>
                <div class="dessertsDesc flex justify-between">
                  <div>
                    <h3 class="text-dark font-bold text-2xl uppercase">
                      TORITEN
                    </h3>
                    <ul class="text-dark font-bold mb-8 text-[1rem]">
                      <li>chicken tempura with dipping sauce</li>
                    </ul>
                  </div>
                  <p class="text-dark text-2xl font-semibold">$4.50</p>
                </div>
              </div>
            </div>
            <div class="dessertsItem">
              <div>
                <div class="dessertsDesc flex justify-between">
                  <div>
                    <h3 class="text-dark font-bold text-2xl uppercase">
                      SEAWOOD SALAD
                    </h3>
                    <ul class="text-dark font-bold mb-8 text-[1rem]">
                      <li>
                        mix of seaweed, woodear mushrooms, sesame oil and chili
                        flakes
                      </li>
                    </ul>
                  </div>
                  <p class="text-dark text-2xl font-semibold">$3.50</p>
                </div>
              </div>
            </div>
            <div class="dessertsItem">
              <div>
                <div class="dessertsDesc flex justify-between">
                  <div>
                    <h3 class="text-dark font-bold text-2xl uppercase">
                      mentaiko
                    </h3>
                    <ul class="text-dark font-bold mb-8 text-[1rem]">
                      <li>
                        spicy pollock roe with side of takana and steamed rice
                      </li>
                    </ul>
                  </div>
                  <p class="text-dark text-2xl font-semibold">$5.50</p>
                </div>
              </div>
            </div>
            <div class="dessertsItem">
              <div>
                <div class="dessertsDesc flex justify-between">
                  <div>
                    <h3 class="text-dark font-bold text-2xl uppercase">
                      CALAMARI SALAD
                    </h3>
                    <ul class="text-dark font-bold mb-8 text-[1rem]">
                      <li>
                        mix of squid, bamboo shoots, woodear mushrooms and
                        ginger
                      </li>
                    </ul>
                  </div>
                  <p class="text-dark text-2xl font-semibold">$3.50</p>
                </div>
              </div>
            </div>
            <div class="dessertsItem">
              <div>
                <div class="dessertsDesc flex justify-between">
                  <div>
                    <h3 class="text-dark font-bold text-2xl uppercase">
                      chashu don
                    </h3>
                    <ul class="text-dark font-bold mb-8 text-[1rem]">
                      <li>
                        burnt ends over steamed rice topped with green onions
                        and bonito flakes
                      </li>
                    </ul>
                  </div>
                  <p class="text-dark text-2xl font-semibold">$6.50</p>
                </div>
              </div>
            </div>
            <div class="dessertsItem">
              <div>
                <div class="dessertsDesc flex justify-between">
                  <div>
                    <h3 class="text-dark font-bold text-2xl uppercase">
                      GYOZA
                    </h3>
                    <ul class="text-dark font-bold mb-8 text-[1rem]">
                      <li>
                        five homemade pan-fried pork, chives and cabbage
                        dumplings
                      </li>
                    </ul>
                  </div>
                  <p class="text-dark text-2xl font-semibold">$4.50</p>
                </div>
              </div>
            </div>
            <div class="dessertsItem">
              <div>
                <div class="dessertsDesc flex justify-between">
                  <div>
                    <h3 class="text-dark font-bold text-2xl uppercase">
                      CURRY RICE
                    </h3>
                    <ul class="text-dark font-bold mb-8 text-[1rem]">
                      <li>
                        tonkotsu curry with chashu, peas, carrots and bed of
                        rice
                      </li>
                    </ul>
                  </div>
                  <p class="text-dark text-2xl font-semibold">$7.50</p>
                </div>
              </div>
            </div>
            <div class="dessertsItem">
              <div>
                <div class="dessertsDesc flex justify-between">
                  <div>
                    <h3 class="text-dark font-bold text-2xl uppercase">
                      BURNT ENDS
                    </h3>
                    <ul class="text-dark font-bold mb-8 text-[1rem]">
                      <li>
                        our take on the BBQ delicacy' bite-size pieces of chashu
                      </li>
                    </ul>
                  </div>
                  <p class="text-dark text-2xl font-semibold">$4.50</p>
                </div>
              </div>
            </div>
            <div class="dessertsItem">
              <div>
                <div class="dessertsDesc flex justify-between">
                  <div>
                    <h3 class="text-dark font-bold text-2xl uppercase">
                      VEGGIE CURRY RICE
                    </h3>
                    <ul class="text-dark font-bold mb-8 text-[1rem]">
                      <li>
                        veggie curry with broccoli, peas, carrots and bed of
                        rice
                      </li>
                    </ul>
                  </div>
                  <p class="text-dark text-2xl font-semibold">$7.50</p>
                </div>
              </div>
            </div>
            <div class="dessertsItem">
              <div>
                <div class="dessertsDesc flex justify-between">
                  <div>
                    <h3 class="text-dark font-bold text-2xl uppercase">
                      TATSUTA AGE
                    </h3>
                    <ul class="text-dark font-bold mb-8 text-[1rem]">
                      <li>marinated boneless fried chicken</li>
                    </ul>
                  </div>
                  <p class="text-dark text-2xl font-semibold">$4.50</p>
                </div>
              </div>
            </div>
            <div class="dessertsItem">
              <div>
                <div class="dessertsDesc flex justify-between">
                  <div>
                    <h3 class="text-dark font-bold text-2xl uppercase">
                      MOCHI ICE CREAM
                    </h3>
                    <ul class="text-dark font-bold mb-8 text-[1rem]">
                      <li></li>
                    </ul>
                  </div>
                  <p class="text-dark text-2xl font-semibold">2 for $3</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- DRINKS IMAGE -->
    <section class="imageDrinks">
      <img class="w-full" src="<?php the_field('drinks_img') ?>" alt="" />
    </section>

    <!-- DRINKS -->
    <section class="drinks pb-20">
      <!-- <img src="./img/drinks.png" class="w-full" alt="" /> -->
      <div class="container">
        <div class="mt-20 grid place-items-center">
          <h2 class="text-center font-bold text-[60px] text-primary uppercase">
            drinks
          </h2>
          <h2
            class="text-center font-bold text-[40px] text-customGray uppercase mb-4"
          >
            join us for happy hour
          </h2>
          <p class="uppercase font-bold text-center text-[18px] mb-16">
            3-6pm / 9-11pm • $1 off all beer | wednesday 5-11pm • $2 sake
            caraffes
          </p>
        </div>
        <div class="grid place-items-center mb-16">
          <ul
            class="drinksType uppercase flex items-center gap-20 [&>li]:text-[55px] font-bold font-economica [&>li]:cursor-pointer py-8"
          >

          <?php

          $args = array(
            'post_type'      => 'drinks',
            'posts_per_page' => -1, 
            
          );
          $newQuery = new WP_Query($args);
          ?>

          <?php if($newQuery->have_posts()) :while($newQuery->have_posts()) :$newQuery->the_post(); ?>


            <li id="drinkTypeItem-<?php the_field('drink_id') ?>" class="drinkNav"><?php the_title() ?></li>

          <?php
          endwhile;
          else :
            echo "No Available Content";
          endif;
          wp_reset_postdata();
          ?>



          </ul>
        </div>
        <div class="wrapper w-[1000px] mx-auto">

          <?php

          $args = array(
            'post_type'      => 'drinks',
            'posts_per_page' => -1, 
            
          );
          $newQuery = new WP_Query($args);
          ?>

          <?php if($newQuery->have_posts()) :while($newQuery->have_posts()) :$newQuery->the_post(); ?>





          <div id="drinkTypeItem-<?php the_field('drink_id') ?>-content" class="drinkGroup hidden">

            <?php if(have_rows('drink_type')): ?>
            <?php while(have_rows('drink_type')) : the_row() ?>

            <div>
              <p class="uppercase text-center text-xl font-bold mb-4"><?php the_sub_field('group_name') ?></p>

            <?php if(have_rows('drink_group')): ?>
            <?php while(have_rows('drink_group')) : the_row() ?>


              <div class="toppingsItem text-customGray mb-4">
                <div class="flex justify-between">
                  <div class="toppingsName">
                    <p class="uppercase text-2xl font-bold"><?php the_sub_field('name') ?></p>
                    <p class="text-sm font-semibold">
                      <?php the_sub_field('description') ?>
                    </p>
                  </div>
                  <div class="thePrice">
                    <p class="text-2xl font-bold"><?php the_sub_field('price') ?></p>
                  </div>
                </div>
              </div>


            <?php endwhile; ?>
            <?php endif ?>


            </div>

          <?php endwhile; ?>
          <?php endif ?>

          </div>



          <?php
          endwhile;
          else :
            echo "No Available Content";
          endif;
          wp_reset_postdata();
          ?>

        </div>
      </div>
    </section>


    

    <?php get_footer() ?>

        <!-- SCRIPT -->
    <script src="./js/drinks.js"></script>
    <script src="./js/toggleMenu.js"></script>
  </body>
</html>