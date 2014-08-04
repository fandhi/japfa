<?php

include '../inc_header.php';

$page = 'page6.3';

?>

<section id="banner" class="img">

   <img src="http://<?php echo $url ?>images/content/banner/mediabanner-rev1.jpg" alt="Banner Media"/>

   <!--<div class="wrapper_12"><div class="banner_caption">Media</div></div>-->

</section>

<section id="breadcrumb">

   <div class="wrapper_12">

      <a class="icon_home" href=""><img src="http://<?php echo $url ?>images/material/icon-home.png" alt="Logo Japfa"/></a> <span class="b_arrow">&rsaquo;</span>

      <a href="http://<?php echo $url ?>">Media</a> <span class="b_arrow">&rsaquo;</span> <span>Download</span>

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

         <h1 class="content_title">Download</h1>

         

         <p>&nbsp;</p>

         <div class="sorting">

            <form class="search_tbl" action="" method="post">

               <input type="text" value="" placeholder="By Title" />

               <input type="image" src="../images/material/icon-search.png" />

            </form>

            <div class="select_table">

               <form class="right append-left-1" action="" method="post">

                  <select class="styled">

                     <option value="">2014</option>

                     <option value="">2013</option>

                     <option value="">2012</option>

                     <option value="">2011</option>

                  </select>

               </form>

               <span class="right">By Years</span>

            </div>

         </div>

         

         <table class="table_simple" border="0" width="100%">

            <thead>

               <tr>

                  <th width="30%">Date</th>

                  <th width="50%">Financial Press Title</th>

                  <th width="20%">Download</th>

               </tr>

            </thead>

            <tbody>

               <tr>

                  <td>April 24, 2014</td>

                  <td>JAPFA4Kids Awards 2014 Stars Soon</td>
                  <td><a class="link_d" href=""><img src="http://<?php echo $url ?>images/material/icon-pdf.jpg" alt=""/> <span>Size: 120 Kb</span></a></td>
               </tr>

               <tr>

                  <td>April 24, 2014</td>

                  <td>JAPFA4Kids Awards 2014 Stars Soon</td>
                  <td><a class="link_d" href=""><img src="http://<?php echo $url ?>images/material/icon-pdf.jpg" alt=""/> <span>Size: 120 Kb</span></a></td>
               </tr>

               <tr>

                  <td>April 24, 2014</td>

                  <td>JAPFA4Kids Awards 2014 Stars Soon</td>
                  <td><a class="link_d" href=""><img src="http://<?php echo $url ?>images/material/icon-pdf.jpg" alt=""/> <span>Size: 120 Kb</span></a></td>
               </tr>

               <tr>

                  <td>April 24, 2014</td>

                  <td>JAPFA4Kids Awards 2014 Stars Soon</td>
                  <td><a class="link_d" href=""><img src="http://<?php echo $url ?>images/material/icon-pdf.jpg" alt=""/> <span>Size: 120 Kb</span></a></td>
               </tr>

               <tr>

                  <td>April 24, 2014</td>

                  <td>JAPFA4Kids Awards 2014 Stars Soon</td>
                  <td><a class="link_d" href=""><img src="http://<?php echo $url ?>images/material/icon-pdf.jpg" alt=""/> <span>Size: 120 Kb</span></a></td>
               </tr>

               <tr>

                  <td>April 24, 2014</td>

                  <td>JAPFA4Kids Awards 2014 Stars Soon</td>
                  <td><a class="link_d" href=""><img src="http://<?php echo $url ?>images/material/icon-pdf.jpg" alt=""/> <span>Size: 120 Kb</span></a></td>
               </tr>

            </tbody>

         </table>

         <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>



      </aside>

      <!-- end mainSide -->

   </div>

   <div class="clear"></div>

</section><!-- end middle -->

<?php include '../inc_footer.php'; ?>