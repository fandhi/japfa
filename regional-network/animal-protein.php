<?php
include '../inc_header.php';
$page = 'page3.3';
?>
<section id="banner" class="img">

   <img src="http://<?php echo $url ?>images/content/banner/regionalnetwork.jpg" alt="Banner Regional Network"/>

   <!--<div class="wrapper_12"><div class="banner_caption">Regional Network</div></div>-->

</section>
<section id="breadcrumb">
   <div class="wrapper_12">
      <a class="icon_home" href=""><img src="http://<?php echo $url ?>images/material/icon-home.png" alt="Logo Japfa"/></a> <span class="b_arrow">&rsaquo;</span>
      <a href="http://<?php echo $url ?>">Regional Network</a> <span class="b_arrow">&rsaquo;</span> <span>Animal Protein</span>
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
         <h1 class="content_title">Animal Protein</h1>
         <div class="content_intro">We produce and distribute quality animal protein products from poultry, swine, beef and aquaculture in five Emerging-Asia country markets through an integrated network of production platforms. </div>
         <div id="animal-protein">
            <div class="img-map">
               <div class="Tab-1 poultry"><img src="http://<?php echo $url ?>images/content/map/regional-animal-protein-map.jpg" alt="" />
                  <div class="map_pointing pointing-1 " data-toggle="popover" data-placement="right" title="Indonesia"
                       data-content="<ul>
                       <li>North Sumatera - Medan</li>
                       <li>West Sumatera - Pandang</li>
                       <li>Lampung - Lampung</li>
                       <li>Banten - Tangerang</li>
                       <li>Banten - CikandeSerang</li>
                       <li>West Java - Cirebon</li>
                       </ul>">
                     <span class="img">
                        <img src="http://localhost/japfa/images/material/marker-poultry.png" alt="">
                     </span>
                  </div>
                  <div class="map_pointing pointing-2 " data-toggle="popover" data-placement="right" title="Vietnam"
                       data-content="<ul>
                     <li>VinhPhuc Province - HuongCanh</li>
                     <li>Thai Binh Province - Thai Binh City</li>
                     <li>HoaBinh Province - Ky Son</li>
                     <li>BinhThuan Province - DucLinh</li>
                     <li>Long An Province - Ben Luc</li>
                     </ul>">
                     <span class="img">
                        <img src="http://localhost/japfa/images/material/marker-poultry.png" alt="">
                     </span>
                  </div>
                  <div class="map_pointing pointing-3" data-toggle="popover" data-placement="right" title="India"
                       data-content="<ul>
                       <li>Bihar - Vaishali</li>
                       <li>Andra Pradesh - Nalgonda</li>
                       <li>Maharashtra - Ahmednagar</li>
                       <li>West Bengal - Midnapur</li>
                       <li>West Bengal - Siliguri</li></ul>">
                     <span class="img">
                        <img src="http://localhost/japfa/images/material/marker-poultry.png" alt="">
                     </span>
                  </div>
                  <div class="map_pointing pointing-4" data-toggle="popover" data-placement="right" title="Myanmar"
                       data-content="<ul>
                       <li>Yangon - Hmawbi Township</li>
                       </ul>">
                     <span class="img">
                        <img src="http://localhost/japfa/images/material/marker-poultry.png" alt="">
                     </span>
                  </div>
                  <div class="map_pointing pointing-5" data-toggle="popover" data-placement="right" title="Singapore"
                     data-content="<ul>
                       <li>Republic of Singapore</li>
                       </ul>">
                     <span class="img">
                        <img src="http://localhost/japfa/images/material/marker-poultry.png" alt="">
                     </span>
                  </div>
                  <p>&nbsp;</p>
               </div><!--/poultry-->
               <div class="Tab-2 swine"><img src="http://<?php echo $url ?>images/content/map/regional-animal-protein-swine-map.jpg" alt="" />
                  <div class="map_pointing pointing-1" data-toggle="pop" data-placement="right" title="Vietnam"
                       data-content="<ul><li>Vinh Phuc Province - Huong Canh</li>
                       <li>Thai Binh Province - Thai Binh City </li>
                       <li>Hoa Binh Province - Ky Son</li>
                       <li>Binh Thuan Province - Duc Linh</li>
                       <li>Long An Province - Ben Luc</li></ul>">
                     <span class="img">
                        <img src="http://localhost/japfa/images/material/marker-swine.png" alt="">
                     </span>
                  </div>
                  <p>&nbsp;</p>
               </div><!--/swine-->
               <div class="Tab-3 beef"><img src="http://<?php echo $url ?>images/content/map/regional-animal-protein-beef-map.jpg" alt="" />
                  <div class="map_pointing pointing-1" data-toggle="popover" data-placement="right" title="Indonesia"
                       data-content="<ul><li>Lampung - Bekri, Central Lampung</li>
                       <li>Lampung - Jabung, East Lampung</li>
                       <li>East Java - Probolinggo</li>
                       <li>East Java - Situbondo</li>
                       <li>Banten - Serang</li></ul>">
                     <span class="img">
                        <img src="http://localhost/japfa/images/material/marker-beef.png" alt="">
                     </span>
                  </div>
                  <div class="map_pointing pointing-2" data-toggle="popover" data-placement="right" title="Australia"
                       data-content="<ul><li>Northern Territory - Inverway Station </li>
                       <li>and Riveren, Buchanan</li></ul>">
                     <span class="img">
                        <img src="http://localhost/japfa/images/material/marker-beef.png" alt="">
                     </span>
                  </div>
                  <div class="map_pointing pointing-3" data-toggle="popover" data-placement="right" title="China"
                       data-content="<ul><li>Shandong Province - Hekou District</li></ul>">
                     <span class="img">
                        <img src="http://localhost/japfa/images/material/marker-beef.png" alt="">
                     </span>
                  </div>
                  <p>&nbsp;</p>
               </div><!--/beef-->
               <div class="Tab-4 aquaculture"><img src="http://<?php echo $url ?>images/content/map/regional-animal-protein-aqua-map.jpg" alt="" />
                  <div class="map_pointing pointing-1" data-toggle="popover" data-placement="right" title="Indonesia"
                       data-content="<ul><li>North Sumatera - Medan</li>
                       <li>Lampung - Lampung South</li>
                       <li>West Java - Cirebon</li>
                       <li>East Java - Banyuwangi</li>
                       <li>East Java - Gresik</li></ul>">
                     <span class="img">
                        <img src="http://localhost/japfa/images/material/marker-aquaculture.png" alt="">
                     </span>
                  </div>
                  <p>&nbsp;</p>
               </div><!--/aquaculture-->
            </div>
            <div class="tabs tabs_animate tab_general">
               <ul class="list-tab">
                  <li><a class="tab_1" href=".Tab-1">Poultry</a></li>
                  <li><a class="tab_2" href=".Tab-2">Swine</a></li>
                  <li><a class="tab_3" href=".Tab-3">Beef</a></li>
                  <li><a class="tab_4" href=".Tab-4">Aquaculture</a></li>
               </ul>
               <div class="Tab-1">
                  <div class="tab_content">
                     <table class="table_content tb_yellow" border="0" width="100%" cellspacing="5">
                        <thead>
                           <tr>
                              <th width="15%">Country</th>
                              <th width="30%">Operational Hubs</th>
                              <th width="25%">Activity By Country</th>
                              <th width="30%">Contact</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td><b>Indonesia</b></td>
                              <td>
                                 North Sumatera - Medan<br/>
                                 West Sumatera - Pandang<br/>
                                 Lampung - Lampung<br/>
                                 Banten - Tangerang<br/>
                                 Banten - CikandeSerang<br/>
                                 West Java - Cirebon 
                              </td>
                              <td>
                                 <ul>
                                    <li>Poultry feed manufacturing &amp; distribution</li>
                                    <li>Broiler &amp; Layer breeding</li>
                                    <li>Hatching</li>
                                    <li>DOC production &amp; distribution</li>
                                 </ul> 
                              </td>
                              <td><a href="http://japfacomfeed.co.id/" style="color: #e87218;" target="_blank">www.japfacomfeed.co.id</a></td>
                           </tr>
                           <tr>
                              <td><b>Vietnam</b></td>
                              <td>
                                 VinhPhuc Province - HuongCanh<br/>
                                 Thai Binh Province - Thai Binh City<br/>
                                 HoaBinh Province - Ky Son<br/>
                                 BinhThuan Province - DucLinh<br/>
                                 Long An Province - Ben Luc  
                              </td>
                              <td>
                                 <ul>
                                    <li>Poultry feed manufacturing &amp; distribution</li>
                                    <li>Broiler &amp; Layer breeding</li>
                                    <li>Hatching</li>
                                    <li>DOC production &amp; distribution</li>
                                 </ul>
                              </td>
                              <td>
                                 <b>JAPFA COMFEED VIETNAM LTD. CO. </b><br/>
                                 Huong Canh Township, Binh Xuyen District, VinhPhucProvicne, Vietnam <br/><br/>
                                 <b>Tel</b>: +84-211-3866170<br/>
                                 <b>Fax</b>: +84-211-3866182<br/>
                                 <b>Email enquiries</b>:<br/>
                                 secretary@japfavietnam.com
                              </td>
                           </tr>
                           <tr>
                              <td><b>India</b></td>
                              <td>
                                 Bihar - Vaishali<br/>
                                 Andra Pradesh - Nalgonda<br/>
                                 Maharashtra - Ahmednagar <br/>
                                 West Bengal - Midnapur<br/>
                                 West Bengal - Siliguri
                              </td>
                              <td>
                                 <ul>
                                    <li>Poultry feed manufacturing &amp; distribution</li>
                                    <li>Broiler &amp; Layer breeding</li>
                                    <li>Hatching</li>
                                    <li>DOC production &amp; distribution</li>
                                 </ul>
                              </td>
                              <td>
                                 <b>JAPFA COMFEED INDIA PTE. LTD.</b><br/>
                                 Plot No. 91, Sakore Nagar, Viman Nagar, Pune-411014, India<br/><br/>
                                 <b>Tel</b>: +91-20-3053 7800<br/>
                                 <b>Fax</b>:+91-20-30537903<br/>
                                 <b>Email enquiries</b>: headoffice@japfaindia.com
                              </td>
                           </tr>
                           <tr>
                              <td><b>Myanmar</b></td>
                              <td>
                                 Yangon - Hmawbi Township
                              </td>
                              <td>
                                 <ul>
                                    <li>Poultry feed manufacturing &amp; distribution</li>
                                    <li>Broiler &amp; Layer breeding</li>
                                    <li>Hatching</li>
                                    <li>DOC production &amp; distribution</li>
                                 </ul>
                              </td>
                              <td>
                                 <b>JAPFA COMFEED MYANMAR PTE. LTD.</b><br/>
                                 No37, Kabar Aye Pagoda Road, Inya Lake Hotel Compound, Mayangone Township, Yangon, Myanmar<br/><br/>
                                 <b>Tel</b>: +95-1-652 536<br/>
                                 <b>Fax</b>: +95-1-652 543
                              </td>
                           </tr>
                           <tr>
                              <td><b>Singapore</b></td>
                              <td>Republic of Singapore </td>
                              <td>
                                 <ul>
                                    <li>International procurement of raw materials for feed operations</li>
                                 </ul>
                              </td>
                              <td>
                                 <b>ANONA PTE. LTD.</b><br/>
                                 315 Outram Road<br/>
                                 #15-05D Tan Boon Liat Building<br/>
                                 Singapore 169074<br/><br/>
                                 <b>Tel</b>: +65-6295 2872<br/>
                                 <b>Fax</b>: +65 - 6295 6020<br/>
                                 <b>Email enquiries</b>: christinecheng@japfa.com.sg
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="Tab-2">
                  <div class="tab_content">
                     <table class="table_content tb_yellow" border="0" width="100%" cellspacing="5">
                        <thead>
                           <tr>
                              <th width="15%">Country</th>
                              <th width="30%">Operational Hubs</th>
                              <th width="25%">Activity By Country</th>
                              <th width="30%">Contact</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td><b>Vietnam</b></td>
                              <td>
                                 Vinh Phuc Province - Huong Canh<br/>
								 Thai Binh Province - Thai Binh City <br/>
								 Hoa Binh Province - Ky Son <br/>
								 Binh Thuan Province - Duc Linh<br/>
								 Long An Province - Ben Luc  
                              </td>
                              <td>
                                 <ul>
                                    <li>Swine feed manufacturing &amp distribution</li>
									<li>GP-PS breeding</li>
									<li>Commercial piglet production &amp distribution</li>
									<li>Fattening of commercial piglets</li> 

                                 </ul> 
                              </td>
                              <td>
                                 <b>JAPFA COMFEED VIETNAM LTD. CO.</b><br/>
                                 Huong Canh Township, Binh Xuyen District, Vinh Phuc Provicne, Vietnam <br/><br/>
                                 <b>Tel</b>: +84-211-3866170<br/>
                                 <b>Fax</b>: +84-211-3866182<br/>
                                 <b>Email enquiries</b>:<br/>
                                 secretary@japfavietnam.com
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="Tab-3">
                  <div class="tab_content">
                     <table class="table_content tb_yellow" border="0" width="100%" cellspacing="5">
                        <thead>
                           <tr>
                              <th width="15%">Country</th>
                              <th width="30%">Operational Hubs</th>
                              <th width="25%">Activity By Country</th>
                              <th width="30%">Contact</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td><b>Indonesia</b></td>
                              <td>
                                 Lampung - Bekri, Central Lampung<br/>
								 Lampung - Jabung, East Lampung<br/>
								 East Java - Probolinggo<br/>
								 East Java - Situbondo<br/>
								 Banten - Serang 
                              </td>
                              <td>
                                 <ul>
                                    <li>Cattle breeding</li>
									<li>Commercial cattle fattening </li>
									<li>Slaughter, deboning &amp meat processing</li>
									<li>Distribution of speciality fresh beef products</li>
                                 </ul> 
                              </td>
                              <td>Head Office :<br/>
                                 <b>PT SANTOSA AGRINDO</b> <br/>
								 Wisma Millenia Lt. 6<br/>
								 Jl. M.T. Haryono Kav. 16, Jakarta 12810, Indonesia<br/>
                                 <b>Tel</b>: +62-1-2926 0920<br/>
                                 <b>Fax</b>: +62-1-830 0170  <br/>
                                 <a href="http://japfacomfeed.co.id/" style="color: #e87218;" target="_blank";>www.japfacomfeed.co.id</a><br/>
							  </td>
                           </tr>
                           <tr>
                              <td><b>Australia</b></td>
                              <td>
                                 Northern Territory - Inverway Station and Riveren, Buchanan   
                              </td>
                              <td>
                                 <ul>
                                    <li>Cattle breeding (NB.  capacity extension of Japfa's Indonesian breeding operation)</li>
                                 </ul>
                              </td>
                              <td>
                                 
                              </td>
                           </tr>
                           <tr>
                              <td><b>China</b></td>
                              <td>
                                 Shandong Province - Hekou District 
                              </td>
                              <td>
                                 <ul>
                                    <li>Commercial cattle fattening </li>
                                 </ul>
                              </td>
                              <td>
                                 
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="Tab-4">
                  <div class="tab_content">
                     <table class="table_content tb_yellow" border="0" width="100%" cellspacing="5">
                        <thead>
                           <tr>
                              <th width="15%">Country</th>
                              <th width="30%">Operational Hubs</th>
                              <th width="25%">Activity By Country</th>
                              <th width="30%">Contact</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td><b>Indonesia</b></td>
                              <td>
                                 North Sumatera - Medan<br/>
								 Lampung - Lampung South <br/>
								 West Java - Cirebon<br/>
								 East Java - Banyuwangi<br/>
								 East Java - Gresik 
                              </td>
                              <td>
                                 <ul>
                                    <li>Fish &amp shrimp feed manufacturing and distribution</li>
									<li>Commercial hatchery and farming of fish &amp shrimp</li>
									<li>Breeding and commercial farming of eel</li>
									<li>Seafood processing for domestic and export markets</li>
								 </ul> 
                              </td>
                              <td>Head Office :<br/>
                                 <b>PT. SURI TANI PEMUKA </b> <br/>
								 Jl. Raya Manyar, Desa  Manyar Rejo Kec. Manyar, Kab. Gresik, East Java, Indonesia<br/><br/>
								 Jl. M.T. Haryono Kav. 16, Jakarta 12810, Indonesia<br/>
                                 <b>Tel</b>: +62-31-293 1678<br/>
                                 <b>Fax</b>: +62-31-293 1679<br/>
                                 <a href="http://japfacomfeed.co.id/" style="color: #e87218;" target="_blank";>www.japfacomfeed.co.id</a><br/>
							  </td>
                           </tr>
                           
                        </tbody>
                     </table>
                  </div>
               </div>             
               
            </div>
         </div>
         <p>&nbsp;</p>
         <p>&nbsp;</p>
         <div class="reset_grid">
            <a class="btn" href="">Explore Consumer Food</a>
         </div>
      </aside>
      <!-- end mainSide -->
   </div>
   <div class="clear"></div>
</section><!-- end middle -->
<?php include '../inc_footer.php'; ?>