<?php

include '../inc_header.php';

$page = 'page6.1';

?>

<section id="banner" class="img">

   <img src="http://<?php echo $url ?>images/content/banner/mediabanner-rev1.jpg" alt="Banner Media"/>

   <!--<div class="wrapper_12"><div class="banner_caption">Media</div></div>-->

</section>

<section id="breadcrumb">

   <div class="wrapper_12">

      <a class="icon_home" href="http://<?php echo $url ?>"><img src="http://<?php echo $url ?>images/material/icon-home.png" alt="Logo Japfa"/></a> <span class="b_arrow">&rsaquo;</span>

      <a href="http://<?php echo $url ?>media/news-clippings.php">Media</a> <span class="b_arrow">&rsaquo;</span> <span>News &amp; Clippings</span>

   </div>

</section>

<!-- end breadcrumb -->



<section id="middle">

   <div class="wrapper_12">

      <aside class="minor_side">

         <?php include 'sidemenu.php';?>

      </aside>

      <!-- end minor_side -->

      <aside id="mainSide">

         <h1 class="content_title">News &amp; Clippings</h1>

         <ul class="list_article ver">

            <li>

               <div class="img"><img src="http://<?php echo $url ?>images/content/news/sgx_Page_1.jpg" alt=""/></div>

               <div class="la_content">

                  <div class="la_date">July 30, 2014</div>

                  <h4><a href="http://<?php echo $url ?>media/news-clippings-detail-sgx.php">Japfa to Offer Shares at an Indicative Price of 75-87 Cents</a></h4>

                  <div class="la_intro">JAPFA Limited seeking to list its shares on the main board of Singapore Exchange.</div>

               </div>

            </li>

            <li>

               <div class="img"><img src="http://<?php echo $url ?>images/content/news/news-detail.jpg" alt=""/></div>

               <div class="la_content">

                  <div class="la_date">June 6, 2014</div>

                  <h4><a href="http://<?php echo $url ?>media/news-clippings-detail.php">Japfa Comfeed Buys 2 Cattle Farms in Australia</a></h4>

                  <div class="la_intro">JAKARTA - PT Santosa Agrindo (Santori), a wholly owned arm of PT Japfa Comfeed Indonesia Tbk on 1 October 2013 has completed the purchase process for two cattle farms in Australia.</div>

               </div>

            </li>



         </ul>
		 <!-- start paging -->

         <!--<p>&nbsp;</p><p>&nbsp;</p>

         <div class="paging">

            <ul>

               <li><a class="pag_prev" href="">&#9664;</a></li>

               <li><a class="active" href="">1</a></li>

               <li><a href="">2</a></li>

               <li><a href="">3</a></li>

               <li><a href="">4</a></li>

               <li><a href="">5</a></li>

               <li><a href="">6</a></li>

               <li><a href="">7</a></li>

               <li><a href="">8</a></li>

               <li><a href="">9</a></li>

               <li><a class="pag_next" href="">&#9654;</a></li>

            </ul>

         </div>-->

         <p>&nbsp;</p><p>&nbsp;</p>

      </aside>

      <!-- end mainSide -->

   </div>

   <div class="clear"></div>

</section><!-- end middle -->

<?php include '../inc_footer.php'; ?>