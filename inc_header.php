<?php
$url = $_SERVER['SERVER_NAME'] . "/japfa/";

$page = "page0";
?>
<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="keyword" content=""/>
      <meta name="viewport" content="width=device-width">
        <meta name="description" content=""/>
        <meta name="google-site-verification" content=""/>
        <meta name="robots" content="all,index,follow"/>
        <meta name="googlebot" content="all,index,follow"/>
        <meta name="allow-search" content="yes"/>
        <meta name="robots" content="index, follow" />
        <meta name="revisit-after" content="3 days" />
        <meta name="copyright" content="© 2013 Web Architect Jakarta, Indonesia"/>
        <meta name="author" content="Web Architect"/>
        <meta name="distribution" content="global"/>
        <link rel="icon" href="http://<?php echo $url ?>favicon.ico">
        <title>Japfa</title>
        <link rel="stylesheet" type="text/css" href="http://<?php echo $url ?>css/reset.css"/>	
        <link rel="stylesheet" type="text/css" href="http://<?php echo $url ?>css/style.css"/>
        <link rel="stylesheet" type="text/css" href="http://<?php echo $url ?>css/embed_font.css"/>
        <link rel="stylesheet" type="text/css" href="http://<?php echo $url ?>css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="http://<?php echo $url ?>css/bootstrap-responsive.css"/>
        <link rel="stylesheet" type="text/css" href="http://<?php echo $url ?>css/responsiveslides.css"/>
        <link rel="stylesheet" type="text/css" href="http://<?php echo $url ?>css/popup/videolightbox.css"/>
        <link rel="stylesheet" type="text/css" href="http://<?php echo $url ?>css/popup/overlay-minimal.css"/>
        <link rel="stylesheet" type="text/css" href="http://<?php echo $url ?>css/jquery.fancybox.css?v=2.1.5" media="screen" />
        <link rel="stylesheet" type="text/css" href="http://<?php echo $url ?>css/jquery.jscrollpane.css" media="all" />
        <link rel="stylesheet" type="text/css" href="http://<?php echo $url ?>css/flexslider.css" media="screen" />
        <?php
        $uri = $_SERVER['REQUEST_URI'];
        if (!empty($uri))
        {
           $uri = trim(substr($uri,strrpos($uri,'/')),'/');
           
           if (substr($uri,0,1) == '.')
           {
              echo '<script>var tabClass = "', $uri , '";</script>';
           }
        }
        
        
        ?>
   </head>
   <body>
      <header id="header">
         <section id="headerTop">
            <div class="wrapper_12">
               <ul id="menuTop">
                  <li><a class="mt_1" href="http://<?php echo $url ?>">Home</a></li>
                  <li><a class="mt_2" href="mailto:investorcontact@japfa.com">Investor Contact</a></li>
                  <li><a href="http://<?php echo $url ?>sitemap.php">Sitemap</a></li>
                  <li><a href="http://<?php echo $url ?>disclaimer.php">Disclaimer</a></li>
               </ul>
            </div>
         </section>
         <div class="wrapper_12">
            <div class="navbar navbar-fixed-top" role="navigation">
               <div class="navbar-inner">
                  <div class="container">
                     <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                     </button>
                     <a class="brand img" href="http://<?php echo $url;?>"><img class="" src="http://<?php echo $url;?>images/material/logo-1.jpg" alt="Logo Japfa" /></a>
                     <div class="nav-collapse collapse">
                        <ul class="nav">
                           <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">About Us</a>
                              <ul class="dropdown-menu">
                                 <li class="one-col"><a <?php if ($page == "page1.1") echo "class='active'"; ?> href="http://<?php echo $url ?>about-us/overview.php">Overview</a></li>
                                 <li class="one-col"><a <?php if ($page == "page1.2") echo "class='active'"; ?> href="http://<?php echo $url ?>about-us/our-history.php">Our History</a></li>
                                 <li class="one-col"><a <?php if ($page == "page1.3") echo "class='active'"; ?> href="http://<?php echo $url ?>about-us/our-people.php">Our People</a></li>
                                 <li class="one-col"><a <?php if ($page == "page1.4") echo "class='active'"; ?> href="http://<?php echo $url ?>about-us/board-of-director.php">Board of Directors</a></li>
                              </ul>
                           </li>
                           <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Our Business</a>
                              <ul class="dropdown-menu">
                                 <li class="one-col"><a <?php if ($page == "page2.1") echo "class='active'"; ?> href="http://<?php echo $url ?>our-business/overview.php">Overview</a></li>
                                 <li class="one-col"><a <?php if ($page == "page2.2") echo "class='active'"; ?> href="http://<?php echo $url ?>our-business/dairy.php">Dairy</a></li>
                                 <li class="one-col"><a <?php if ($page == "page2.3") echo "class='active'"; ?> href="http://<?php echo $url ?>our-business/animal-protein.php">Animal Protein</a></li>
                                 <li class="one-col"><a <?php if ($page == "page2.4") echo "class='active'"; ?> href="http://<?php echo $url ?>our-business/consumer-food.php">Consumer Food</a></li>
                              </ul>
                           </li>
                           <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Regional Network</a>
                              <ul class="dropdown-menu">
                                 <li class="one-col"><a <?php if ($page == "page3.1") echo "class='active'"; ?> href="http://<?php echo $url ?>regional-network/overview.php">Overview</a></li>
                                 <li class="one-col"><a <?php if ($page == "page3.2") echo "class='active'"; ?> href="http://<?php echo $url ?>regional-network/dairy.php">Dairy</a></li>
                                 <li class="one-col"><a <?php if ($page == "page3.3") echo "class='active'"; ?> href="http://<?php echo $url ?>regional-network/animal-protein.php">Animal Protein</a></li>
                                 <li class="one-col"><a <?php if ($page == "page3.4") echo "class='active'"; ?> href="http://<?php echo $url ?>regional-network/consumer-food.php">Consumer Food</a></li>
                              </ul>
                           </li>
                           <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Our Values</a>
                              <ul class="dropdown-menu">
                                 <li class="one-col"><a <?php if ($page == "page4.1") echo "class='active'"; ?> href="http://<?php echo $url ?>our-values/growing-towards-mutual-prosperity.php">Growing Towards Mutual Prosperity</a></li>
                                 <li class="one-col"><a <?php if ($page == "page4.2") echo "class='active'"; ?> href="http://<?php echo $url ?>our-values/japfa4kids.php">Japfa4Kids</a></li>
                              </ul>
                           </li>
                           <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Investors</a>
                              <ul class="dropdown-menu pull-right">
                                 <li class="one-col"><a <?php if ($page == "page5.1") echo "class='active'"; ?> href="http://<?php echo $url ?>investors/corporate-governance.php">Corporate Governance</a></li>
                                 <li class="one-col"><a <?php if ($page == "page5.2") echo "class='active'"; ?> href="http://<?php echo $url ?>investors/group-structure.php">Group Structure</a></li>
                                 <li class="one-col"><a <?php if ($page == "page5.3") echo "class='active'"; ?> href="http://<?php echo $url ?>investors/financial-reports-and-disclosures.php">Financial Reports &amp; Disclosures</a></li>
                                 <li class="one-col"><a <?php if ($page == "page5.4") echo "class='active'"; ?> href="http://<?php echo $url ?>investors/analyst-coverage.php">Analyst Coverage</a></li>
                                 <li class="one-col"><a <?php if ($page == "page5.5") echo "class='active'"; ?> href="http://<?php echo $url ?>investors/financial-press.php">Financial Press</a></li>
                                 <li class="one-col"><a <?php if ($page == "page5.6") echo "class='active'"; ?> href="http://<?php echo $url ?>investors/investor-relations-contact.php">Investor Relations Contact</a></li>
                              </ul>
                           </li>
                           <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Media</a>
                              <ul class="dropdown-menu pull-right">
                                 <li class="one-col"><a <?php if ($page == "page6.1") echo "class='active'"; ?> href="http://<?php echo $url ?>media/news-clippings.php">News &amp; Clippings</a></li>
                                 <li class="one-col"><a <?php if ($page == "page6.2") echo "class='active'"; ?> href="http://<?php echo $url ?>media/video-library.php">Video Library</a></li>
                                 <li class="one-col"><a <?php if ($page == "page6.3") echo "class='active'"; ?> href="http://<?php echo $url ?>media/download.php">Download</a></li>
                              </ul>
                           </li>
                        </ul>
                     </div><!--/.nav-collapse -->
                  </div>
               </div>
            </div>
            
         </div>
      </header>
   
