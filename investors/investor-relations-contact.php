<?php
include '../inc_header.php';
$page = 'page5.6';
?>
<section id="banner" class="img">

   <img src="http://<?php echo $url ?>images/content/banner/investor.jpg" alt="Banner Investor"/>

   <!--<div class="wrapper_12"><div class="banner_caption">Investors</div></div>-->

</section>
<section id="breadcrumb">
   <div class="wrapper_12">
      <a class="icon_home" href="http://<?php echo $url ?>"><img src="http://<?php echo $url ?>images/material/icon-home.png" alt="Logo Japfa"/></a> <span class="b_arrow">&rsaquo;</span>

      <a href="http://<?php echo $url ?>investors/corporate-governance.php">Investors</a> <span class="b_arrow">&rsaquo;</span> <span>Investor Relations Contact</span>
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
         <h1 class="content_title">Investor Relations Contact</h1>
         <img src="http://<?php echo $url ?>images/content/investorcontact.jpg" alt="" />
         <p>&nbsp;</p>

         <h5><b>Head Office</b></h5><br/>
         <table border="0" width="710">
            <tbody>
               <tr>
                  <td width="300">JAPFA LTD.</td>
                  <td width="90">Tel</td>
                  <td width="10">:</td>
                  <td width="140">+65-67335 0031</td>
               </tr>
               <tr>
                  <td>391B Orchard Road, #18-08</td>
                  <td>Fax</td>
                  <td>:</td>
                  <td>+65-6735 4465</td>
               </tr>
               <tr>
                  <td>Ngee Ann City Tower B</td>
                  <td>Email enquiries</td>
                  <td>:</td>
                  <td><a class="link_1 link_g" href="mailto:investorcontact@japfa.com" title="Contact Us">investorcontact@japfa.com</a></td>
               </tr>
               <tr>
                  <td>Singapore 238874</td>
                  <td>Website</td>
                  <td>:</td>
                  <td>www.japfa.com</td>
               </tr>
            </tbody>
         </table>
         <p>&nbsp;</p><p>&nbsp;</p>
         <div class="reset_grid">
            <a class="btn " href="http://<?php echo $url ?>media/news-clippings.php">Explore Media</a>
         </div>
         <p>&nbsp;</p>
      </aside>
      <!-- end mainSide -->
   </div>
   <div class="clear"></div>
</section><!-- end middle -->
<?php include '../inc_footer.php'; ?>