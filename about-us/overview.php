<?php

include '../inc_header.php';

$page = 'page1.1';

?>

<section id="banner" class="img">

   <img src="http://<?php echo $url ?>images/content/banner/banner-1.jpg" alt="Banner about us"/>

   <div class="wrapper_12"><div class="banner_caption">About Us</div></div>

</section>

<section id="breadcrumb">

   <div class="wrapper_12">

      <a class="icon_home" href=""><img src="http://<?php echo $url ?>images/material/icon-home.png" alt="Logo Japfa"/></a> <span class="b_arrow">&rsaquo;</span>

      <a href="http://<?php echo $url ?>">About Us</a> <span class="b_arrow">&rsaquo;</span> <span>Overview</span>

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

         <!--<div class="content_intro">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, 

            nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. 

            Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. </div>

         <img src="http://<?php echo $url ?>images/content/pabrik.jpg" alt=""/>-->

         <p>&nbsp;</p>

         <p>We are a leading, industrial agri-food company with a diversified portfolio of dairy, livestock and consumer food products and over 40 years of operational history in high-growth, emerging Asian countries. </p>

         <p>We specialize in producing healthy, quality animal protein products for millions of Asian consumers with the underlying purpose of raising nutritional standards wherever we are.  </p>

         <p>Headquartered in Singapore, we employ over 20,000 people who operate an integrated network of farms, industrial processing and distribution facilities located in Indonesia, China, India, Vietnam, Myanmar and Australia. </p>

         <p>Our business activities span the entire animal protein food chain and are grouped into three segments; Dairy, Animal Protein (poultry, beef, swine and aquaculture) and Consumer Food.   This integrated approach across all our business segments has enabled us to grow with significant changes in population increase and protein consumption in emerging Asia.  It will also enable us to meet future consumer demand for increasingly sophisticated, high-protein food that is traceable and locally produced.  </p>

         

      </aside>

      <!-- end mainSide -->

   </div>

   <div class="clear"></div>

</section><!-- end middle -->

<?php include '../inc_footer.php'; ?>