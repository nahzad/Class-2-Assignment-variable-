   <!-- Main navigation -->
   <div class="sidebar-category sidebar-category-visible">
       <div class="category-content no-padding">
           <ul class="navigation navigation-main navigation-accordion">
               <!-- Main -->




               <li><a href="../index.php"><i class="icon-home4"></i>
                       <span>Dashboard</span></a></li>
               <li><a href="<?php echo $isInternal == true ? '../banner/' : 'banner/'; ?>banner_list.php"><i
                           class="icon-image-compare"></i> <span>Banners</span></a></li>
               <li><a href="<?php echo $isInternal == true ? '../services/' : 'services/'; ?>service_view.php"><i
                           class="icon-hammer-wrench position-left"></i> <span>Services</span></a></li>

               <li><a href="#"><i class="icon-home4"></i> <span>Sections</span></a></li>
               <li><a href="#"><i class="icon-home4"></i> <span>Our Projects</span></a></li>
               <li><a href="#"><i class="icon-home4"></i> <span>Our Staff</span></a></li>
               <li><a href="#"><i class="icon-home4"></i> <span>Our Clients</span></a></li>
               <li><a href="#"><i class="icon-home4"></i> <span>Contact Message</span></a></li>
               <li>
                   <a href="#"><i class="icon-gear"></i>
                       <span>Back office Setup</span></a>
                   <ul>
                       <li>
                           <a href="layout_navbar_fixed.html">Category</a>
                           <a href="layout_navbar_fixed.html">Designation</a>
                       </li>
                   </ul>
               </li>


               <li>
                   <a href="#"><i class="icon-stack"></i> <span>Starter kit</span></a>
                   <ul>


                       <li>
                           <a href="#">3 columns</a>
                           <ul>
                               <li>
                                   <a href="starters/3_col_dual.html">Dual sidebars</a>
                               </li>
                               <li>
                                   <a href="starters/3_col_double.html">Double sidebars</a>
                               </li>
                           </ul>
                       </li>

               </li>
           </ul>


           <!-- /main -->


       </div>
   </div>
   <!-- /main navigation -->