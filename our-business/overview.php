<?php

include '../inc_header.php';

$page = 'page2.1';

?>

<section id="banner" class="img">

   <img src="http://<?php echo $url ?>images/content/banner/banner_business.jpg" alt="Banner Business"/>

   <!--<div class="wrapper_12"><div class="banner_caption">Our Business</div></div>-->

</section>

<section id="breadcrumb">

   <div class="wrapper_12">

      <a class="icon_home" href=""><img src="http://<?php echo $url ?>images/material/icon-home.png" alt="Logo Japfa"/></a> <span class="b_arrow">&rsaquo;</span>

      <a href="http://<?php echo $url ?>">Our Business</a> <span class="b_arrow">&rsaquo;</span> <span>Overview</span>

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

         <h1 class="content_title">Overview</h1>

         <div class="content_intro">Japfa is a leading, agri-food producer with a diversified portfolio of animal protein and consumer food products targeting high-growth, emerging Asian markets.   With headquarters in Singapore, we employ over 20,000 people in the Asia region.    
 </div>


         <p>Our business consists of three segments – Dairy, Animal Protein (poultry, beef & swine) and Consumer Food.  We nourish millions of consumers in emerging Asia with healthy, quality animal protein products by adopting advanced production processes. </p>
         
         <p>For over 40 years, we have established an industrial network of farms, manufacturing and distribution facilities in Indonesia, China, Vietnam, Myanmar, India and Australia.  We consistently focus on scale, integration and quality to become leaders in multiple product segments in our target markets where protein consumption is fuelled by population expansion and urban development. </p>

         

         <div class="ob_content">

            <div class="img left"><img src="http://<?php echo $url ?>images/content/dairy.jpg" alt=""/></div>

            <div class="ob_cleft">

               <h3 class="ob_title">Dairy</h3>

               We are a leading dairy company operating in China and Indonesia. We produce premium, top of the range raw milk and branded dairy products.  <br/>
We have a total of 6 world class dairy farms and a processing plant that have been designed, equipped and managed to meet and exceed international standards in productivity and bio-security.  We believe that great milk comes from happy cows. Therefore, our operational environment and quality standards are driven first and foremost by the comfort and welfare of our cow herd.  


               <p>&nbsp;</p>

               <a class="btn" href="http://<?php echo $url ?>our-business/dairy.php">Explore</a>

            </div>

         </div>

         <div class="ob_content">

            <div class="img right"><img src="http://<?php echo $url ?>images/content/animal-protein.jpg" alt=""/></div>

            <div class="ob_cright">

               <h3 class="ob_title">Animal Protein</h3>

               Our animal protein segment consists of poultry, swine, beef and aquaculture.   For over 40 years, we have consistently adopted an industrialized supply chain model which has enabled us to become market leaders in multiple proteins.  Our operations are vertically integrated from animal feed manufacturing, breeding to producing commercial livestock and aquaculture products for further processing


               <p>&nbsp;</p>

               <a class="btn" href="http://<?php echo $url ?>our-business/animal-protein.php">Explore</a>

            </div>

         </div>

         <div class="ob_content">

            <div class="img left"><img src="http://<?php echo $url ?>images/content/consumer-food.jpg" alt=""/></div>

            <div class="ob_cleft">

               <h3 class="ob_title">Consumer Food</h3>

               In the year 2000, we launched consumer food to cater to the growing number of middle income consumers in Indonesia. We process quality ingredients sourced directly from our upstream animal protein operations into a wide range of branded ready-to-eat, ready-to-cook packaged food. The trend towards urbanization and subsequent adoption of westernized diets in emerging Asia will continue to fuel our expansion in this sector.  

               <p>&nbsp;</p>

               <a class="btn" href="http://<?php echo $url ?>our-business/consumer-food.php">Explore</a>

            </div>

         </div>

      </aside>

      <!-- end mainSide -->

   </div>

   <div class="clear"></div>

</section><!-- end middle -->

<?php include '../inc_footer.php'; ?>