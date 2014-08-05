<?php
$page = "page0";
include 'inc_header.php';
include 'inc_slider.php';
?>

<section id="middle">
   <div id="overview" class="wrapper_12">
      <div class="ov_grid">
         <div class="ov_space">
            <div class="ov_title">Japfa at a glance <div class="img"><img src="http://<?php echo $url ?>images/material/logo-2.png" alt="" /></div></div>
            <div class="ov_img img">
               <img src="http://<?php echo $url ?>images/content/untitled-1.jpg" alt="" />
            </div>
            <div class="left">
               <!--<h3 class="">Japfa at a glance</h3>-->
               <div class="ov_intro">We are a leading, industrial agri-food company with a diversified portfolio of dairy, livestock and consumer food products and over 40 years of operational history in high-growth, emerging Asian countries. <br/>
               We specialize in producing healthy, quality animal protein products for millions of Asian consumers with the underlying purpose of raising nutritional standards wherever we are.  </div>
 </div>
            </div>
         <p class="clear">&nbsp;</p>
         <div class="bg_btn">
            <div class="pointing_arrow"><img src="http://<?php echo $url ?>images/material/arrow-btn.png" alt="" /></div>
            <a class="" href="http://<?php echo $url ?>about-us/overview.php">explore</a>
         </div>
      </div>
      <div class="ov_grid omega">
         <div class="ov_space">
            <div class="ov_title">Regional Network <div class="img"><img src="http://<?php echo $url ?>images/material/logo-2.png" alt="" /></div></div>
            <!--<div class="ov_intro">Learn more about our locations and operations.</div>-->
            <div class="tabs tabs_animate tab_small">
               <ul class="vertical right">
                  <li><a class="tab_1" href="#rnTab-1"><img src="http://<?php echo $url ?>images/material/arrow-right-blue.png" alt="" />Dairy</a></li>
                  <li><a class="tab_2" href="#rnTab-2"><img src="http://<?php echo $url ?>images/material/arrow-right-yellow.png" alt="" />Animal Protein</a></li>
                  <li><a class="tab_3" href="#rnTab-3"><img src="http://<?php echo $url ?>images/material/arrow-right-green.png" alt="" />Consumer Food</a></li>
               </ul>
               <div id="rnTab-1">
                  <div class="tab_content">
                     <img src="http://<?php echo $url ?>images/content/mapdairy.jpg" alt="" />
                  </div>
               </div>
               <div id="rnTab-2">
                  <div class="tab_content">
                     <img src="http://<?php echo $url ?>images/content/mapanimal.jpg" alt="" />
                  </div>
               </div>
               <div id="rnTab-3">
                  <div class="tab_content">
                     <img src="http://<?php echo $url ?>images/content/mapconsumer.jpg" alt="" />
                  </div>
               </div>
            </div>
         </div>
         <p class="clear">&nbsp;</p>
         <div class="bg_btn">
            <div class="pointing_arrow"><img src="http://<?php echo $url ?>images/material/arrow-btn.png" alt="" /></div>
            <a class="" href="http://<?php echo $url ?>regional-network/overview.php">explore japfa locations</a>
         </div>
      </div>
      <p class="clear">&nbsp;</p>
   </div>

   <section id="businessSegment">
      <div class="tabs tabs_animate tab_big">
         <ul class="horizontal">
            <li><a href="#tab-1">Dairy</a></li>
            <li><a href="#tab-2">Animal Protein</a></li>
            <li><a href="#tab-3">Consumer Food</a></li>
         </ul>
         <div id="tab-1">
            <div class="tab_content">
               <div class="tab_center upfix_4">
                  <a class="btn " href="our-business/dairy.php">Explore</a>
               </div>
            </div>
         </div>
         <div id="tab-2"><div class="tab_content">
               <div class="tab_center text_center upfix_4">
                  <a class="btn " href="our-business/animal-protein.php">Explore</a>
               </div>
            </div>
         </div>
         <div id="tab-3">
            <div class="tab_content">
               <div class="tab_center text_right upfix_4">
                  <a class="btn " href="our-business/consumer-food.php">Explore</a>
               </div>
               <!--<div class="wrapper_10">
                  <img class="append-left-2 append-right-2" src="http://<?php echo $url ?>images/content/product-1.png" width="145" height="196" alt="product-1"/>
                  <img class="append-left-2 append-right-2" src="http://<?php echo $url ?>images/content/product-2.png" width="158" height="185" alt="product-2"/>
                  <img class="append-left-2 append-right-2" src="http://<?php echo $url ?>images/content/product-3.png" alt="product-3"/>
                  <img class="append-left-2 append-right-2" src="http://<?php echo $url ?>images/content/product-4.png" width="145" height="194" alt="product-4"/>
               </div>-->
            </div>
         </div>
      </div><!--tabs-->
   </section>
</section><!-- end middle -->
<?php include 'inc_footer.php'; ?>
