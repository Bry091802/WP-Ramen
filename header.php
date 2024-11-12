<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Michi Ramen</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
    <?php wp_head() ?>
  </head>
  <body>


  <?php if(is_front_page()){ ?>
  <div style="background-image:url('<?php the_field('banner_background') ?>'); background-size: cover" class="bg-banner bg-cover bg-no-repeat">

   <header class="header pt-4  text-white">
      <div class="container">
        <div class="header__wrapper">
          <div class="header__nav">
            <div class="header__logo">
              <?php the_custom_logo() ?>
            </div>
            <ul class="navigation">
              <li><a href="">Menu</a></li>
              <li><a href="">Locations</a></li>
              <li><a href="">About</a></li>
              <li><a href="">Blog</a></li>
              <a class="btn order" href="">Order Online</a>
            </ul>
            <div class="toggle__menu">
              <span></span><span></span><span></span>
            </div>
            <div class="transparent bg-banner">
              <ul class="navigation right-[100%] top-[6.3rem] flex flex-col p-10 gap-10">
                <li><a href="">Menu</a></li>
                <li><a href="">Locations</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Blog</a></li>
                <a class="btn order" href="">Order Online</a>
              </ul>
            </div>
          </div>

          <div class="header__content">
            <div class="content__text">
              <h1 class="text-[clamp(30px,5vw,100px)] tracking-widest">
                <?php the_field('banner_title') ?>
              </h1>
              <h4 class="text-[21.5px] tracking-widest">
                <?php the_field('banner_text') ?>
              </h4>
            </div>
            <div class="content__image">
              <img src="<?php the_field('banner_hero') ?>" alt="" />
            </div>
          </div>
        </div>
      </div>
    </header>
    
    <?php } else{ ?>

       <div style="background-color: #433D3C;">

        <header class="header py-4  text-white">
      <div class="container">
        <div class="header__wrapper">
          <div class="header__nav">
            <div class="header__logo">
              <?php the_custom_logo() ?>
            </div>
            <ul class="navigation">
              <li><a href="">Menu</a></li>
              <li><a href="">Locations</a></li>
              <li><a href="">About</a></li>
              <li><a href="">Blog</a></li>
              <a class="btn order" href="">Order Online</a>
            </ul>
            <div class="toggle__menu">
              <span></span><span></span><span></span>
            </div>
            <div class="transparent bg-banner">
              <ul class="navigation right-[100%] top-[6.3rem] flex flex-col p-10 gap-10">
                <li><a href="">Menu</a></li>
                <li><a href="">Locations</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Blog</a></li>
                <a class="btn order" href="">Order Online</a>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    
      <?php } ?>
    
    <!-- HEADER -->
   