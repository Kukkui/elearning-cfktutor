

<!DOCTYPE html>
<html>
   <!-- Mirrored from colorlib.com/polygon/adminator/basic-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 12:13:35 GMT -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <!-- /Added by HTTrack -->
   <head>
      <title>Basic Table</title>
      <style>#loader{transition:all .3s ease-in-out;opacity:1;visibility:visible;position:fixed;height:100vh;width:100%;background:#fff;z-index:90000}#loader.fadeOut{opacity:0;visibility:hidden}.spinner{width:40px;height:40px;position:absolute;top:calc(50% - 20px);left:calc(50% - 20px);background-color:#333;border-radius:100%;-webkit-animation:sk-scaleout 1s infinite ease-in-out;animation:sk-scaleout 1s infinite ease-in-out}@-webkit-keyframes sk-scaleout{0%{-webkit-transform:scale(0)}100%{-webkit-transform:scale(1);opacity:0}}@keyframes sk-scaleout{0%{-webkit-transform:scale(0);transform:scale(0)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}</style>
      <link href="style.css" rel="stylesheet">
   </head>
   <body class="app">
	<?php
         session_start();
         $accname = $_SESSION['accnamepass'];
         $accemail = $_SESSION['accemailpass'];
         $acctypecheck = $_SESSION['acctypepass'];
         $accidx = $_SESSION['accidpass'];
         ?>
      
      <div id="loader">
         <div class="spinner"></div>
      </div>
      <script type="ecc19f11b2749e651c462762-text/javascript">window.addEventListener('load', () => {
         const loader = document.getElementById('loader');
         setTimeout(() => {
           loader.classList.add('fadeOut');
         }, 300);
         });
      </script>
      <?php include "../../../mainnav.php" ?>
         <div class="page-container">
            <div class="header navbar">
               <div class="header-container">
                  <ul class="nav-left">
                     <li><a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);"><i class="ti-menu"></i></a></li>
                     <li class="search-box"><a class="search-toggle no-pdd-right" href="javascript:void(0);"><i class="search-icon ti-search pdd-right-10"></i> <i class="search-icon-close ti-close pdd-right-10"></i></a></li>
                     <li class="search-input"><input class="form-control" type="text" placeholder="Search..."></li>
                  </ul>
                  <ul class="nav-right">
                     <li class="notifications dropdown">
                        <span class="counter bgc-red">3</span> <a href="#" class="dropdown-toggle no-after" data-toggle="dropdown"><i class="ti-bell"></i></a>
                        <ul class="dropdown-menu">
                           <li class="pX-20 pY-15 bdB"><i class="ti-bell pR-10"></i> <span class="fsz-sm fw-600 c-grey-900">Notifications</span></li>
                           <li>
                              <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                                 <li>
                                    <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                       <div class="peer mR-15"><img class="w-3r bdrs-50p" src="../../../randomuser.me/api/portraits/men/1.jpg" alt=""></div>
                                       <div class="peer peer-greed">
                                          <span><span class="fw-500"><?php echo($accname); ?></span> <span class="c-grey-600">liked your <span class="text-dark">post</span></span></span>
                                          <p class="m-0"><small class="fsz-xs">5 mins ago</small></p>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                       <div class="peer mR-15"><img class="w-3r bdrs-50p" src="../../../randomuser.me/api/portraits/men/2.jpg" alt=""></div>
                                       <div class="peer peer-greed">
                                          <span><span class="fw-500">Moo Doe</span> <span class="c-grey-600">liked your <span class="text-dark">cover image</span></span></span>
                                          <p class="m-0"><small class="fsz-xs">7 mins ago</small></p>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                       <div class="peer mR-15"><img class="w-3r bdrs-50p" src="../../../randomuser.me/api/portraits/men/3.jpg" alt=""></div>
                                       <div class="peer peer-greed">
                                          <span><span class="fw-500">Lee Doe</span> <span class="c-grey-600">commented on your <span class="text-dark">video</span></span></span>
                                          <p class="m-0"><small class="fsz-xs">10 mins ago</small></p>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="pX-20 pY-15 ta-c bdT"><span><a href="#" class="c-grey-600 cH-blue fsz-sm td-n">View All Notifications <i class="ti-angle-right fsz-xs mL-10"></i></a></span></li>
                        </ul>
                     </li>
                     <li class="notifications dropdown">
                        <span class="counter bgc-blue">3</span> <a href="#" class="dropdown-toggle no-after" data-toggle="dropdown"><i class="ti-email"></i></a>
                        <ul class="dropdown-menu">
                           <li class="pX-20 pY-15 bdB"><i class="ti-email pR-10"></i> <span class="fsz-sm fw-600 c-grey-900">Emails</span></li>
                           <li>
                              <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                                 <li>
                                    <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                       <div class="peer mR-15"><img class="w-3r bdrs-50p" src="../../../randomuser.me/api/portraits/men/1.jpg" alt=""></div>
                                       <div class="peer peer-greed">
                                          <div>
                                             <div class="peers jc-sb fxw-nw mB-5">
                                                <div class="peer">
                                                   <p class="fw-500 mB-0"><?php echo($accname); ?></p>
                                                </div>
                                                <div class="peer"><small class="fsz-xs">5 mins ago</small></div>
                                             </div>
                                             <span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span>
                                          </div>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                       <div class="peer mR-15"><img class="w-3r bdrs-50p" src="../../../randomuser.me/api/portraits/men/2.jpg" alt=""></div>
                                       <div class="peer peer-greed">
                                          <div>
                                             <div class="peers jc-sb fxw-nw mB-5">
                                                <div class="peer">
                                                   <p class="fw-500 mB-0">Moo Doe</p>
                                                </div>
                                                <div class="peer"><small class="fsz-xs">15 mins ago</small></div>
                                             </div>
                                             <span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span>
                                          </div>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                       <div class="peer mR-15"><img class="w-3r bdrs-50p" src="../../../randomuser.me/api/portraits/men/3.jpg" alt=""></div>
                                       <div class="peer peer-greed">
                                          <div>
                                             <div class="peers jc-sb fxw-nw mB-5">
                                                <div class="peer">
                                                   <p class="fw-500 mB-0">Lee Doe</p>
                                                </div>
                                                <div class="peer"><small class="fsz-xs">25 mins ago</small></div>
                                             </div>
                                             <span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span>
                                          </div>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="pX-20 pY-15 ta-c bdT"><span><a href="#" class="c-grey-600 cH-blue fsz-sm td-n">View All Email <i class="fs-xs ti-angle-right mL-10"></i></a></span></li>
                        </ul>
                     </li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                           <div class="peer mR-10"><img class="w-2r bdrs-50p" src="../../../randomuser.me/api/portraits/men/10.jpg" alt=""></div>
                           <div class="peer"><span class="fsz-sm c-grey-900"><?php echo($accname); ?></span></div>
                        </a>
                        <ul class="dropdown-menu fsz-sm">
                           <li><a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-settings mR-10"></i> <span>Setting</span></a></li>
                           <li><a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-user mR-10"></i> <span>Profile</span></a></li>
                           <li><a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-email mR-10"></i> <span>Messages</span></a></li>
                           <li role="separator" class="divider"></li>
                           <li><a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-power-off mR-10"></i> <span>Logout</span></a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
            <main class="main-content bgc-grey-100">
               <div id="mainContent">
                  <div class="container-fluid">
                     <h4 class="c-grey-900 mT-10 mB-30">Basic Tables</h4>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="bgc-white bd bdrs-3 p-20 mB-20">
                              <h4 class="c-grey-900 mB-20">Simple Table</h4>
                              <p>Using the most basic table markup, here’s how <code class="highlighter-rouge">.table</code>-based tables look in Bootstrap. <strong>All table styles are inherited in Bootstrap 4</strong>, meaning any nested tables will be styled in the same manner as the parent.</p>
                              <table class="table">
                                 <thead>
                                    <tr>
                                       <th scope="col">#</th>
                                       <th scope="col">First Name</th>
                                       <th scope="col">Last Name</th>
                                       <th scope="col">Username</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <th scope="row">1</th>
                                       <td>Mark</td>
                                       <td>Otto</td>
                                       <td>@mdo</td>
                                    </tr>
                                    <tr>
                                       <th scope="row">2</th>
                                       <td>Jacob</td>
                                       <td>Thornton</td>
                                       <td>@fat</td>
                                    </tr>
                                    <tr>
                                       <th scope="row">3</th>
                                       <td>Larry</td>
                                       <td>the Bird</td>
                                       <td>@twitter</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="bgc-white bd bdrs-3 p-20 mB-20">
                              <h4 class="c-grey-900 mB-20">Table head options</h4>
                              <p>Similar to tables and dark tables, use the modifier classes <code class="highlighter-rouge">.thead-light</code> or <code class="highlighter-rouge">.thead-dark</code> to make <code class="highlighter-rouge">&lt;thead&gt;</code>s appear light or dark gray.</p>
                              <table class="table">
                                 <thead class="thead-dark">
                                    <tr>
                                       <th scope="col">#</th>
                                       <th scope="col">First Name</th>
                                       <th scope="col">Last Name</th>
                                       <th scope="col">Username</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <th scope="row">1</th>
                                       <td>Mark</td>
                                       <td>Otto</td>
                                       <td>@mdo</td>
                                    </tr>
                                    <tr>
                                       <th scope="row">2</th>
                                       <td>Jacob</td>
                                       <td>Thornton</td>
                                       <td>@fat</td>
                                    </tr>
                                    <tr>
                                       <th scope="row">3</th>
                                       <td>Larry</td>
                                       <td>the Bird</td>
                                       <td>@twitter</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="bgc-white bd bdrs-3 p-20 mB-20">
                              <h4 class="c-grey-900 mB-20">Striped rows</h4>
                              <p>Use <code class="highlighter-rouge">.table-striped</code> to add zebra-striping to any table row within the <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>
                              <table class="table table-striped">
                                 <thead>
                                    <tr>
                                       <th scope="col">#</th>
                                       <th scope="col">First Name</th>
                                       <th scope="col">Last Name</th>
                                       <th scope="col">Username</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <th scope="row">1</th>
                                       <td>Mark</td>
                                       <td>Otto</td>
                                       <td>@mdo</td>
                                    </tr>
                                    <tr>
                                       <th scope="row">2</th>
                                       <td>Jacob</td>
                                       <td>Thornton</td>
                                       <td>@fat</td>
                                    </tr>
                                    <tr>
                                       <th scope="row">3</th>
                                       <td>Larry</td>
                                       <td>the Bird</td>
                                       <td>@twitter</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="bgc-white bd bdrs-3 p-20 mB-20">
                              <h4 class="c-grey-900 mB-20">Bordered table</h4>
                              <p>Add <code class="highlighter-rouge">.table-bordered</code> for borders on all sides of the table and cells.</p>
                              <table class="table table-bordered">
                                 <thead>
                                    <tr>
                                       <th scope="col">#</th>
                                       <th scope="col">First Name</th>
                                       <th scope="col">Last Name</th>
                                       <th scope="col">Username</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <th scope="row">1</th>
                                       <td>Mark</td>
                                       <td>Otto</td>
                                       <td>@mdo</td>
                                    </tr>
                                    <tr>
                                       <th scope="row">2</th>
                                       <td>Mark</td>
                                       <td>Otto</td>
                                       <td>@TwBootstrap</td>
                                    </tr>
                                    <tr>
                                       <th scope="row">3</th>
                                       <td>Jacob</td>
                                       <td>Thornton</td>
                                       <td>@fat</td>
                                    </tr>
                                    <tr>
                                       <th scope="row">4</th>
                                       <td colspan="2">Larry the Bird</td>
                                       <td>@twitter</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="bgc-white bd bdrs-3 p-20">
                              <h4 class="c-grey-900 mB-20">Hoverable rows</h4>
                              <p>Add <code class="highlighter-rouge">.table-hover</code> to enable a hover state on table rows within a <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>
                              <table class="table table-hover">
                                 <thead>
                                    <tr>
                                       <th scope="col">#</th>
                                       <th scope="col">First Name</th>
                                       <th scope="col">Last Name</th>
                                       <th scope="col">Username</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <th scope="row">1</th>
                                       <td>Mark</td>
                                       <td>Otto</td>
                                       <td>@mdo</td>
                                    </tr>
                                    <tr>
                                       <th scope="row">2</th>
                                       <td>Jacob</td>
                                       <td>Thornton</td>
                                       <td>@fat</td>
                                    </tr>
                                    <tr>
                                       <th scope="row">3</th>
                                       <td colspan="2">Larry the Bird</td>
                                       <td>@twitter</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </main>
            <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
               <span>Copyright © 2017 Designed by <a href="https://colorlib.com/" target="_blank" title="Colorlib">Colorlib</a>. All rights reserved.</span>
               <script async src="../../../www.googletagmanager.com/gtag/jsa055?id=UA-23581568-13" type="ecc19f11b2749e651c462762-text/javascript"></script>
               <script type="ecc19f11b2749e651c462762-text/javascript">
                  window.dataLayer = window.dataLayer || [];
                  function gtag(){dataLayer.push(arguments);}
                  gtag('js', new Date());
                  
                  gtag('config', 'UA-23581568-13');
               </script>
            </footer>
         </div>
      </div>
      <script type="ecc19f11b2749e651c462762-text/javascript" src="vendor.js"></script><script type="ecc19f11b2749e651c462762-text/javascript" src="bundle.js"></script><script src="../../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="ecc19f11b2749e651c462762-|49" defer=""></script>
      
   </body>
   <!-- Mirrored from colorlib.com/polygon/adminator/basic-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 12:13:35 GMT -->
</html>

