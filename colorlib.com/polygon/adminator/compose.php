

<!DOCTYPE html>
<html>
   <!-- Mirrored from colorlib.com/polygon/adminator/compose.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 12:13:34 GMT -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <!-- /Added by HTTrack -->
   <head>
      <title>Compose</title>
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
      <script type="7d1e2ca004e624e18e5b7dd3-text/javascript">window.addEventListener('load', () => {
         const loader = document.getElementById('loader');
         setTimeout(() => {
           loader.classList.add('fadeOut');
         }, 300);
         });
      </script><?php include "../../../mainnav.php" ?>
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
               <div class="full-container">
                  <div class="email-app">
                     <div class="email-side-nav remain-height ov-h">
                        <div class="h-100 layers">
                           <div class="p-20 bgc-grey-100 layer w-100"><a href="https://colorlib.com/compose" class="btn btn-danger btn-block">New Message</a></div>
                           <div class="scrollable pos-r bdT layer w-100 fxg-1">
                              <ul class="p-20 nav flex-column">
                                 <li class="nav-item">
                                    <a href="javascript:void(0)" class="nav-link c-grey-800 cH-blue-500 active">
                                       <div class="peers ai-c jc-sb">
                                          <div class="peer peer-greed"><i class="mR-10 ti-email"></i> <span>Inbox</span></div>
                                          <div class="peer"><span class="badge badge-pill bgc-deep-purple-50 c-deep-purple-700">+99</span></div>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link c-grey-800 cH-blue-500">
                                       <div class="peers ai-c jc-sb">
                                          <div class="peer peer-greed"><i class="mR-10 ti-share"></i> <span>Sent</span></div>
                                          <div class="peer"><span class="badge badge-pill bgc-green-50 c-green-700">12</span></div>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link c-grey-800 cH-blue-500">
                                       <div class="peers ai-c jc-sb">
                                          <div class="peer peer-greed"><i class="mR-10 ti-star"></i> <span>Important</span></div>
                                          <div class="peer"><span class="badge badge-pill bgc-blue-50 c-blue-700">3</span></div>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link c-grey-800 cH-blue-500">
                                       <div class="peers ai-c jc-sb">
                                          <div class="peer peer-greed"><i class="mR-10 ti-file"></i> <span>Drafts</span></div>
                                          <div class="peer"><span class="badge badge-pill bgc-amber-50 c-amber-700">5</span></div>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link c-grey-800 cH-blue-500">
                                       <div class="peers ai-c jc-sb">
                                          <div class="peer peer-greed"><i class="mR-10 ti-alert"></i> <span>Spam</span></div>
                                          <div class="peer"><span class="badge badge-pill bgc-red-50 c-red-700">1</span></div>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link c-grey-800 cH-blue-500">
                                       <div class="peers ai-c jc-sb">
                                          <div class="peer peer-greed"><i class="mR-10 ti-trash"></i> <span>Trash</span></div>
                                          <div class="peer"><span class="badge badge-pill bgc-red-50 c-red-700">+99</span></div>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="email-wrapper row remain-height pos-r scrollable bgc-white">
                        <div class="email-content open no-inbox-view">
                           <div class="email-compose">
                              <div class="d-n@md+ p-20"><a class="email-side-toggle c-grey-900 cH-blue-500 td-n" href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                              <form class="email-compose-body">
                                 <h4 class="c-grey-900 mB-20">Send Message</h4>
                                 <div class="send-header">
                                    <div class="form-group"><input type="text" class="form-control" placeholder="To"></div>
                                    <div class="form-group"><input type="text" class="form-control" placeholder="CC"></div>
                                    <div class="form-group"><input class="form-control" placeholder="Email Subject"></div>
                                    <div class="form-group"><textarea name="compose" class="form-control" placeholder="Say Hi..." rows="10"></textarea></div>
                                 </div>
                                 <div id="compose-area"></div>
                                 <div class="text-right mrg-top-30"><button class="btn btn-danger">Send</button></div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
         <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
            <span>Copyright © 2017 Designed by <a href="https://colorlib.com/" target="_blank" title="Colorlib">Colorlib</a>. All rights reserved.</span>
            <script async src="../../../www.googletagmanager.com/gtag/jsa055?id=UA-23581568-13" type="7d1e2ca004e624e18e5b7dd3-text/javascript"></script>
            <script type="7d1e2ca004e624e18e5b7dd3-text/javascript">
               window.dataLayer = window.dataLayer || [];
               function gtag(){dataLayer.push(arguments);}
               gtag('js', new Date());
               
               gtag('config', 'UA-23581568-13');
            </script>
         </footer>
      </div>
      </div><script type="7d1e2ca004e624e18e5b7dd3-text/javascript" src="vendor.js"></script><script type="7d1e2ca004e624e18e5b7dd3-text/javascript" src="bundle.js"></script><script src="../../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="7d1e2ca004e624e18e5b7dd3-|49" defer=""></script>
   </body>
   <!-- Mirrored from colorlib.com/polygon/adminator/compose.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 12:13:34 GMT -->
</html>

