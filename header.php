<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <view id="load" class="load">
    <div class="circle"></div>
  </view>

  <header class="header main_typ" id="header">

    <!-- NAVIGATION BAR -->

    <svg class="logo header_logo" width="438" height="438" viewBox="0 0 438 438" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M437.8 218.9C437.8 339.8 339.8 437.8 218.9 437.8C98 437.8 0 339.8 0 218.9C0 98 98 0 218.9 0C339.8 0.1 437.8 98.1 437.8 218.9Z" fill="#FFCC00"/>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M222.767 437.767L121 336L310 96L437.747 223.747C435.198 341.124 340.269 435.732 222.767 437.767Z" fill="black" fill-opacity="0.3"/>
      <path d="M130.5 336.5L61 267L130.5 299V336.5Z" fill="black" fill-opacity="0.3"/>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M119 110C119 101.163 126.163 94 135 94H303C311.837 94 319 101.163 319 110V328C319 336.837 311.837 344 303 344H135C126.163 344 119 336.837 119 328V294C160.421 294 194 260.421 194 219C194 177.579 160.421 144 119 144V110ZM218.5 320C222.642 320 226 316.642 226 312.5C226 308.358 222.642 305 218.5 305C214.358 305 211 308.358 211 312.5C211 316.642 214.358 320 218.5 320Z" fill="black"/>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M119 294C77.5786 294 44 260.421 44 219C44 177.579 77.5786 144 119 144V164C88.6243 164 64 188.624 64 219C64 249.376 88.6243 274 119 274V294Z" fill="white"/>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M119 294C160.421 294 194 260.421 194 219C194 177.579 160.421 144 119 144V164C149.376 164 174 188.624 174 219C174 249.376 149.376 274 119 274V294Z" fill="#FFCC00"/>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M119 294C160.421 294 194 260.421 194 219C194 177.579 160.421 144 119 144V164C149.376 164 174 188.624 174 219C174 249.376 149.376 274 119 274V294Z" fill="black" fill-opacity="0.3"/>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M119 274C149.376 274 174 249.376 174 219C174 188.624 149.376 164 119 164V274Z" fill="black"/>
    </svg>


    <?php
    $args = array(
      'theme_location' => 'nav-bar',
      'depth' => 0,
      'container'	=> false,
      'fallback_cb' => false,
      'menu_class' => 'main_nav_bar',
    );
    wp_nav_menu($args);
    ?>



    <?php include 'social_media.php'; ?>



  </header>
