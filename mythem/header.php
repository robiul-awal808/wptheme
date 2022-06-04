<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <script src="assets/js/jquery-3.5.1.min.js"></script>

   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?> 

   <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#primary">Skip to content</a>

      <header id="masthead" class="site-header">
         <div class="container">

            <div class="site-branding">
               <a href="#" class="custom-logo-link"><img src="assets/images/logo.png" alt="Logo"></a>
            </div>

            <button id="menu-toggle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"/></svg></button>

            <nav id="site-navigation" class="main-navigation">
               <ul class="menu">
                  <li><a href="index.html#about">About</a></li>
                  <li class="menu-item-has-children">
                     <a href="index.html#services">Services<span class="dropdown-menu-toggle"></span></a>
                     <ul class="sub-menu">
                        <li><a href="#">Service Item 1</a></li>
                        <li><a href="#">Service Item 2</a></li>
                        <li><a href="#">Service Item 3</a></li>
                        <li><a href="#">Service Item 4</a></li>
                        <li><a href="#">Service Item 5</a></li>
                     </ul>
                  </li>
                  <li><a href="index.html#portfolio">Portfolio</a></li>
                  <li class="menu-item-has-children">
                     <a href="elements.html">Elements<span class="dropdown-menu-toggle"></span></a>
                     <ul class="sub-menu">
                        <li><a href="elements.html#text-formatting">Text Formatting</a></li>
                        <li class="menu-item-has-children">
                           <a href="elements.html#table">HTML Table<span class="dropdown-menu-toggle"></span></a>
                           <ul class="sub-menu">
                              <li><a href="#">Sub Sub Item 1</a></li>
                              <li><a href="#">Sub Sub Item 2</a></li>
                              <li><a href="#">Sub Sub Item 3</a></li>
                              <li><a href="#">Sub Sub Item 4</a></li>
                              <li><a href="#">Sub Sub Item 5</a></li>
                           </ul>
                        </li>
                        <li><a href="elements.html#iframes">HTML Iframes</a></li>
                        <li><a href="elements.html#audio">HTML Audio</a></li>
                        <li><a href="elements.html#video">HTML Video</a></li>
                     </ul>
                  </li>
                  <li><a href="index.html#contact">Contact</a></li>
                  <li><a href="jquery.html">jQuery</a></li>
               </ul>
            </nav><!-- #site-navigation -->
         </div>
      </header><!-- #masthead -->

      <div id="content" class="site-content">
         <div class="container">