<?php
include '../inc_header.php';
$page = 'page1.3';
?>
<section id="banner" class="img">
   <img src="http://<?php echo $url ?>images/content/banner/banner-1.jpg" alt="Banner about us"/>
   <div class="wrapper_12"><div class="banner_caption">About Us</div></div>
</section>
<section id="breadcrumb">
   <div class="wrapper_12">
      <a class="icon_home" href="http://<?php echo $url ?>"><img src="http://<?php echo $url ?>images/material/icon-home.png" alt="Logo Japfa"/></a> <span class="b_arrow">&rsaquo;</span>

      <a href="http://<?php echo $url ?>about-us/overview.php">About Us</a> <span class="b_arrow">&rsaquo;</span> <span>Our People</span>
   </div>
</section>
<!-- end breadcrumb -->

<section id="middle">
   <div class="wrapper_12">
      <aside class="minor_side">
         <?php include 'sidemenu.php'; ?>
      </aside>
      <!-- end minor_side -->
      <aside id="mainSide">
         <h1 class="content_title">Our People</h1>
         <div class="content_intro">We have over 20,000 multi-national employees operating farms, manufacturing facilities and offices in 7 countries across Asia.  </div>
         <img src="http://<?php echo $url ?>images/content/office.jpg" alt=""/>
         <p>&nbsp;</p>
         <p>As we grew in scale, products and geographical locations; our industry know-how has also expanded from animal feed to livestock breeding, commercial farming, dairy and consumer food production.   </p>
         <p>Our corporate culture is a key contributing factor to our success in building agri-food infrastructure in some of the most challenging emerging markets.</p>
         
         <p>For over four decades, we have abided by a set of founding values based on integrity, mutual benefit, and cohesiveness in achieving common goals.  These values that are handed down from one generation of Japfa employees to another have shaped our approach to product quality, business and community relations.  </p>
         <p>&nbsp;</p>
         <!--<h2 class="content_title">Key Management Team</h2>
         <div class="grid_pstructure person_1 gs_l">
            <div class="img"><img src="http://<?php echo $url ?>images/content/person-1.jpg" alt=""/></div>
            <div class="name_of">Bryan Simon</div>
            <div class="occ">Directors</div>
            <div class="box_person_history">
               <ul class="person_history">
                  <li><span>Appointed  to the board on 1999 date</span></li>
                  <li><span>Started his career in 2000</span></li>
                  <li><span>Joined xxx co as xxx executive</span></li>
                  <li><span>2001 years of experience in xxx  industry</span></li>
               </ul>
            <div class="click_more">&#9662;</div>
         </div>
            <div class="ph_desc phd_1">
               Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. 
               Duis sed odio sit amet nibh vulputate cursus a sit amet Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, 
               nisi elit consequat This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, 
               nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. 
               Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. 
               Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
               <div class="close_more">&#9652;</div>
            </div>
         </div>
         <div class="grid_pstructure person_2 gs_c">
            <div class="img"><img src="http://<?php echo $url ?>images/content/person-1.jpg" alt=""/></div>
            <div class="name_of">Bryan Simon</div>
            <div class="occ">Directors</div>
            <div class="box_person_history">
               <ul class="person_history">
                  <li><span>Appointed  to the board on 1999 date</span></li>
                  <li><span>Started his career in 2000</span></li>
                  <li><span>Joined xxx co as xxx executive</span></li>
                  <li><span>2001 years of experience in xxx  industry</span></li>
               </ul>
            <div class="click_more">&#9662;</div>
         </div>
            <div class="ph_desc phd_2">
               Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. 
               Duis sed odio sit amet nibh vulputate cursus a sit amet Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, 
               nisi elit consequat This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, 
               nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. 
               Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. 
               Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
               <div class="close_more">&#9652;</div>
            </div>
         </div>
         <div class="grid_pstructure person_3 gs_r">
            <div class="img"><img src="http://<?php echo $url ?>images/content/person-1.jpg" alt=""/></div>
            <div class="name_of">Bryan Simon</div>
            <div class="occ">Directors</div>
            <div class="box_person_history">
               <ul class="person_history">
                  <li><span>Appointed  to the board on 1999 date</span></li>
                  <li><span>Started his career in 2000</span></li>
                  <li><span>Joined xxx co as xxx executive</span></li>
                  <li><span>2001 years of experience in xxx  industry</span></li>
               </ul>
            <div class="click_more">&#9662;</div>
         </div>
            <div class="ph_desc phd_3">
               Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. 
               Duis sed odio sit amet nibh vulputate cursus a sit amet Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, 
               nisi elit consequat This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, 
               nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. 
               Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. 
               Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
               <div class="close_more">&#9652;</div>
            </div>
         </div>
         <div class="grid_pstructure person_4 gs_l">
            <div class="img"><img src="http://<?php echo $url ?>images/content/person-1.jpg" alt=""/></div>
            <div class="name_of">Bryan Simon</div>
            <div class="occ">Directors</div>
            <div class="box_person_history">
               <ul class="person_history">
                  <li><span>Appointed  to the board on 1999 date</span></li>
                  <li><span>Started his career in 2000</span></li>
                  <li><span>Joined xxx co as xxx executive</span></li>
                  <li><span>2001 years of experience in xxx  industry</span></li>
               </ul>
            <div class="click_more">&#9662;</div>
         </div>
            <div class="ph_desc phd_4">
               Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. 
               Duis sed odio sit amet nibh vulputate cursus a sit amet Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, 
               nisi elit consequat This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, 
               nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. 
               Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. 
               Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
               <div class="close_more">&#9652;</div>
            </div>
         </div>
         <div class="grid_pstructure person_5 gs_c">
            <div class="img"><img src="http://<?php echo $url ?>images/content/person-1.jpg" alt=""/></div>
            <div class="name_of">Bryan Simon</div>
            <div class="occ">Directors</div>
            <div class="box_person_history">
               <ul class="person_history">
                  <li><span>Appointed  to the board on 1999 date</span></li>
                  <li><span>Started his career in 2000</span></li>
                  <li><span>Joined xxx co as xxx executive</span></li>
                  <li><span>2001 years of experience in xxx  industry</span></li>
               </ul>
            <div class="click_more">&#9662;</div>
         </div>
            <div class="ph_desc phd_5">
               Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. 
               Duis sed odio sit amet nibh vulputate cursus a sit amet Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, 
               nisi elit consequat This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, 
               nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. 
               Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. 
               Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
               <div class="close_more">&#9652;</div>
            </div>
         </div>
         <div class="grid_pstructure person_6 gs_r">
            <div class="img"><img src="http://<?php echo $url ?>images/content/person-1.jpg" alt=""/></div>
            <div class="name_of">Bryan Simon</div>
            <div class="occ">Directors</div>
            <div class="box_person_history">
               <ul class="person_history">
                  <li><span>Appointed  to the board on 1999 date</span></li>
                  <li><span>Started his career in 2000</span></li>
                  <li><span>Joined xxx co as xxx executive</span></li>
                  <li><span>2001 years of experience in xxx  industry</span></li>
               </ul>
            <div class="click_more">&#9662;</div>
         </div>
            <div class="ph_desc phd_6">
               Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. 
               Duis sed odio sit amet nibh vulputate cursus a sit amet Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, 
               nisi elit consequat This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, 
               nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. 
               Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. 
               Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
               <div class="close_more">&#9652;</div>
            </div>
         </div>-->
      </aside>
      <!-- end mainSide -->
   </div>
   <div class="clear"></div>
</section><!-- end middle -->
<?php include '../inc_footer.php'; ?>