<!DOCTYPE html>
<!-- 
   Template: Pecto - Multipurpose HTML Template Built With Twitter Bootstrap 3.3.7
   Version: 1.0.0
   -->
<!--[if lt IE 7]>      
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="">
   <![endif]-->
   <!--[if IE 7]>         
   <html class="no-js lt-ie9 lt-ie8" lang="">
      <![endif]-->
      <!--[if IE 8]>         
      <html class="no-js lt-ie9" lang="">
         <![endif]-->
         <!--[if gt IE 8]><!--> 
         <html class="no-js" lang="en">
            <!--<![endif]-->
            <head>
               <meta charset="utf-8">
               <title>LegalTech Indonesia</title>
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
               <meta content="" name="description"/>
               <meta content="" name="author"/>
               <!-- Google fonts -->
               <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
               <!-- Bootstrap -->
               <link rel="stylesheet" href="{{ asset('templates/pacto/css/bootstrap.min.css')}}" type="text/css"/>
               <!-- font-awesome -->
               <link rel="stylesheet" href="{{ asset('templates/pacto/css/font-awesome.min.css')}}" type="text/css" />
               <!-- line icons -->
               <link rel="stylesheet" href="{{ asset('templates/pacto/css/linearicons.css')}}" type="text/css" />
               <!-- simple-line-icons-->
               <link rel="stylesheet" href="{{ asset('templates/pacto/css/simple-line-icons.css')}}" type="text/css"/>
               <!-- owl-carousel -->
               <link rel="stylesheet" href="{{ asset('templates/pacto/css/owl.carousel.css')}}"  type="text/css" />
               <link rel="stylesheet" href="{{ asset('templates/pacto/css/owl.theme.css')}}" type="text/css" />
               <!-- Magnific Popup -->
               <link rel="stylesheet" href="{{ asset('templates/pacto/css/magnific-popup/magnific-popup.css')}}" type="text/css" />
               <!-- shortcodes -->
               <link rel="stylesheet" href="{{ asset('templates/pacto/css/shortcodes.css')}}" type="text/css" />
               <!-- base -->
               <link rel="stylesheet" href="{{ asset('templates/pacto/css/base.css')}}"  type="text/css"/>
               <!-- Bootsnav -->
               <link rel="stylesheet" href="{{ asset('templates/pacto/css/bootsnav.css')}}" type="text/css"/>
               <!-- Responsive -->
               <link rel="stylesheet" href="{{ asset('templates/pacto/css/responsive.css')}}" type="text/css" />
               <!-- Favicon -->
               <link rel="shortcut icon" href="favicon.ico"/>
            </head>
            <body>
               <!-- Preloader -->
               <div id="preloader">
                  <div class="clear-loading loading-effect"><img src="{{ asset('images/pacto/loading.gif')}}" width="100" alt=""></div>
               </div>
               <!-- Start Navigation -->
               <nav class="navbar navbar-default navbar-sticky bootsnav">
                  <!-- Start Top Search -->
                  <div class="top-search">
                     <div class="container">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-search"></i></span>
                           <input type="text" class="form-control" placeholder="Search">
                           <span class="input-group-addon close-search"><i class="fa fa-times"></i></span> 
                        </div>
                     </div>
                  </div>
                  <!-- End Top Search -->
                  <div class="container">
                     <!-- Start Atribute Navigation -->
                     <div class="attr-nav">
                        <ul>
                           <li class="search"><a href="#"><i class="icon-magnifier icons"></i></a></li>
                           <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                        </ul>
                     </div>
                     <!-- End Atribute Navigation -->
                     <!-- Start Header Navigation -->
                     <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i> </button>
                        <a class="navbar-brand" href="{{ url('/')}}"> <img src="{{ asset('images/pacto/brand/logo-black.png')}}" class="logo logo-scrolled" alt=""> </a> 
                     </div>
                     <!-- End Header Navigation -->
                     <!-- Megamenu -->
                     <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                     <li class="active dropdown">
                        <a href="index" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                        <ul class="dropdown-menu">
                           <li><a href="{{ url('/')}}">Default</a></li>
                           <li><a href="corporate">Corporate</a></li>
                           <li><a href="consultant">Consultant</a></li>
                           <li><a href="construction">Construction</a></li>
                           <li><a href="medical">Medical</a></li>
                           <li><a href="gym">Fitness</a></li>
                           <li><a href="mobile-app">App</a></li>
                           <li><a href="personal">Personal</a></li>
                        </ul>
                     </li>
                     <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Features</a>                            
                        <ul class="dropdown-menu">
                           <li class="dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Header</a>                                    
                              <ul class="dropdown-menu">
                                 <li><a href="header-default">Header Default</a></li>
                                 <li><a href="header-fixed">Header Fixed</a></li>
                                 <li><a href="header-transparent">Header Transparent</a></li>
                                 <li><a href="header-fullwidth">Header Full Width</a></li>
                                 <li><a href="header-topbar">Header Topbar</a></li>
                                 <li><a href="header-logo-center">Header Logo Center</a></li>
                                 <li><a href="header-logo-top">Header Logo Top</a></li>
                                 <li><a href="header-side-left">Side Menu Left</a></li>
                                 <li><a href="header-fullscreen">Header Fullscreen</a></li>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Banner</a>                                    
                              <ul class="dropdown-menu">
                                 <li><a href="banner-owl-slider">Owl Slider</a></li>
                                 <li><a href="banner-youtube">Youtube Video</a></li>
                                 <li><a href="banner-vimeo">Vimeo Video</a></li>
                                 <li><a href="banner-html-video">HTML5 Video</a></li>
                                 <li><a href="banner-text-rotator">Text Rotator</a></li>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Footer</a>                                    
                              <ul class="dropdown-menu">
                                 <li><a href="footer1">Footer 1</a></li>
                                 <li><a href="footer2">Footer 2</a></li>
                                 <li><a href="footer3">Footer 3</a></li>
                                 <li><a href="footer4">Footer 4</a></li>
                                 <li><a href="footer5">Footer 5</a></li>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Page Tittle</a>                                    
                              <ul class="dropdown-menu">
                                 <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Size</a>                                            
                                    <ul class="dropdown-menu">
                                       <li><a href="page-title-sm">Page Title Small</a></li>
                                       <li><a href="page-title-md">Page Title Medium</a></li>
                                       <li><a href="page-title-lg">Page Title Large</a></li>
                                       <li><a href="page-title-xlg">Page Title Extra Large</a></li>
                                    </ul>
                                 </li>
                                 <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Alignment</a>                                            
                                    <ul class="dropdown-menu">
                                       <li><a href="page-title-left">Align Left</a></li>
                                       <li><a href="page-title-right">Align Right</a></li>
                                       <li><a href="page-title-center">Align Center</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="page-title-bg">White Background</a></li>
                                 <li><a href="page-title-grey">Grey Background</a></li>
                                 <li><a href="page-title-dark">Dark Background</a></li>
                                 <li><a href="page-title-theme">Theme Background</a></li>
                                 <li><a href="page-title-parallax">Parallax</a></li>
                                 <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Video</a>                                            
                                    <ul class="dropdown-menu">
                                       <li><a href="page-title-youtube">Youtube</a></li>
                                       <li><a href="page-title-vimeo">Vimeo</a></li>
                                       <li><a href="page-title-html5">HTML5</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>                            
                        <ul class="dropdown-menu">
                           <li><a href="about-company">About Company</a></li>
                           <li><a href="about-me">About Me</a></li>
                           <li><a href="about-team">About Team</a></li>
                           <li><a href="service">Service</a></li>
                           <li><a href="contact">Contact 1</a></li>
                           <li><a href="contact2">Contact 2</a></li>
                           <li><a href="contact3">Contact 3</a></li>
                           <li><a href="maintenance">Maintenance</a></li>
                           <li><a href="coming-soon">Coming Soon</a></li>
                           <li><a href="404">404</a></li>
                        </ul>
                     </li>
                     <li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Elements</a>                            
                        <ul class="dropdown-menu megamenu-content" role="menu">
                           <li>
                              <div class="row">
                                 <div class="col-menu col-md-3">
                                   <h6 class="title">Elements 1</h6>
                                    <div class="content">
                                       <ul class="menu-col">
                                          <li><a href="element-accordions">Accordion</a></li>
                                          <li><a href="element-button">Button</a></li>
                                          <li><a href="element-blockquote">Blockquote</a></li>
                                          <li><a href="element-client">Client</a></li>
                                          <li><a href="element-columns">Columns</a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="col-menu col-md-3">
                                   <h6 class="title">Elements 2</h6>                                 
                                    <div class="content">
                                       <ul class="menu-col">
                                          <li><a href="element-counter">Counter</a></li>
                                          <li><a href="element-dropcap">Dropcap</a></li>
                                          <li><a href="element-feature-box">Feature Box</a></li>
                                          <li><a href="element-form">Form</a></li>
                                          <li><a href="element-heading">Heading Style</a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="col-menu col-md-3">
                                   <h6 class="title">Elements 3</h6>                                 
                                    <div class="content">
                                       <ul class="menu-col">
                                          <li><a href="element-list">List Style</a></li>
                                          <li><a href="element-price-table">Price Table</a></li>
                                          <li><a href="element-post">Post Style</a></li>
                                          <li><a href="element-skill">Skill</a></li>
                                          <li><a href="element-social">Social icons</a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="col-menu col-md-3">
                                   <h6 class="title">Elements 4</h6>                                 
                                    <div class="content">
                                       <ul class="menu-col">
                                          <li><a href="element-step-feature">Step Feature</a></li>
                                          <li><a href="element-tab">Tabs</a></li>
                                          <li><a href="element-team">Team</a></li>
                                          <li><a href="element-testimonials">Testimonials</a></li>
                                          <li><a href="element-timeline">Timelines</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </li>
                     <li class="dropdown dropdown-left">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog</a>                            
                        <ul class="dropdown-menu">
                           <li class="dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog Classic</a>                                    
                              <ul class="dropdown-menu">
                                 <li><a href="blog-left-side">Left Sidebar</a></li>
                                 <li><a href="blog-right-side">Right Sidebar</a></li>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog Grid</a>                                    
                              <ul class="dropdown-menu">
                                 <li><a href="blog-grid-left-side">Left Sidebar</a></li>
                                 <li><a href="blog-grid-right-side">Right Sidebar</a></li>
                                 <li><a href="blog-grid-boxed">Boxed</a></li>
                                 <li><a href="blog-grid-fullwidth">Fullwidth</a></li>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog Masonry</a>                                    
                              <ul class="dropdown-menu">
                                 <li><a href="blog-masonry-boxed">Boxed</a></li>
                                 <li><a href="blog-masonry-fullwidth">Fullwidth</a></li>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Single Post</a>                                    
                              <ul class="dropdown-menu">
                                 <li><a href="blog-single-left-side">Left Sidebar</a></li>
                                 <li><a href="blog-single-right-side">Right Sidebar</a></li>
                                 <li><a href="blog-single-no-side">No Sidebar</a></li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li class="dropdown dropdown-left">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Portfolio</a>                            
                        <ul class="dropdown-menu">
                           <li class="dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Grid</a>                                    
                              <ul class="dropdown-menu">
                                 <li><a href="portfolio-grid-2-col">2 Columns</a></li>
                                 <li><a href="portfolio-grid-3-col">3 Columns</a></li>
                                 <li><a href="portfolio-grid-4-col">4 Columns</a></li>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Masonry</a>                                    
                              <ul class="dropdown-menu">
                                 <li><a href="portfolio-masonry-2-col">2 Columns</a></li>
                                 <li><a href="portfolio-masonry-3-col">3 Columns</a></li>
                                 <li><a href="portfolio-masonry-4-col">4 Columns</a></li>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Standard</a>                                    
                              <ul class="dropdown-menu">
                                 <li><a href="portfolio-standard-2-col">2 Columns</a></li>
                                 <li><a href="portfolio-standard-3-col">3 Columns</a></li>
                                 <li><a href="portfolio-standard-4-col">4 Columns</a></li>
                              </ul>
                           </li>
                           <li><a href="portfolio-details">Single Post</a></li>
                        </ul>
                     </li>
                  </ul>
                     </div>
                     <!-- /.navbar-collapse -->
                  </div>
                  <!-- Start Side Menu -->
                  <div class="side dark-bg">
                     <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                     <div class="widget">
                        <p class="text-center my-3"><img src="{{ asset('images/pacto/brand/logo-w.png')}}" class="logo" alt="" /></p>
                        <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                     </div>
                     <div class="widget">
                        <h6 class="text-uppercase">OFFICE 01</h6>
                        <ul class="list-unstyled address">
                           <li><i class="lnr lnr-map-marker"></i><span><strong>Gaharu Studio Residence</strong><br> Jl. Gaharu 4 No. 6, Jakarta 12430, INDONESIA</span></li>
                           <li><i class="lnr lnr-envelope"></i><span>support@intersolusi.com</span></li>
                           <li><i class="icon-phone"></i><span>(+91) 123-456-7890</span></li>
                        </ul>
                     </div>
                     <div class="widget">
                        <div class="social-icons animated color">
                           <ul class="clearfix">
                              <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                              <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                              <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- End Side Menu -->
               </nav>
               <!-- End Navigation -->
         <!-- Banner -->
         <section class="p-0 pos-r  dark-bg">
            <div class="fullbg" data-bg-img="{{ asset('images/pacto/main/bg-2.jpg')}}"></div>
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-sm-8 col-sm-offset-4 col-md-offset-6">
                     <div class="py-7 pl-7 xs-pl-0 xs-py-5">
                        <div class="heading-block">
                           <h2 class="solid-weight text-uppercase mb-1">Tonny H. Soerojo</h2>
                           <span>CEO/Founder</span>
                        </div>
                        <p class="lead">Launching an attractive and scalable website quickly and afforadably is important for modern startups — Stack offers massive value without looking ‘bargain-bin’.</p>
                        <div class="social-icons animated mb-4">
                           <ul class="clearfix">
                              <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                              <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                           </ul>
                        </div>
                        <blockquote class="pullquote pos-center">
                           <p>Design is the fundamental soul of a man-made creation that ends up expressing itself in successive outer layers of the product or service.</p>
                        </blockquote>
                        <p class="text-center m-0"><img src="{{ asset('images/pacto/Signature-white.png')}}" alt="" /></p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Banner -->
         <section class="p-0">
            <div class="container-fluid">
               <!-- Tonny H. Soerojo -->
               <div class="row">
                  <div class="col-md-6">
                     <div class="row no-gutter">
                        <div class="col-md-6 col-xs-6 col-xx-12"><img class="img-responsive" src="{{ asset('images/pacto/team/member1.jpg')}}" alt="" /></div>
                        <div class="col-md-6 col-xs-6 col-xx-12">
                           <div class="py-5 pl-5">
                              <h3 class="member-name light-weight mb-1">Nick Brew</h3>
                              <span>Marketing Director</span>
                              <p class="lead mt-2">Launching an attractive and scalable website quickly and afforadably is important for modern startups</p>
                              <div class="social-icons animated">
                                 <ul class="clearfix">
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="row no-gutter">
                        <div class="col-md-6 col-xs-6 col-xx-12 col-md-push-0 col-sm-push-6"><img class="img-responsive" src="{{ asset('images/pacto/team/member2.jpg')}}" alt="" /></div>
                        <div class="col-md-6 col-xs-6 col-xx-12 col-md-pull-0 col-sm-pull-6">
                           <div class="py-5 pl-5">
                              <h3 class="member-name light-weight mb-1">Jenny Doe</h3>
                              <span>Sales Assistance</span>
                              <p class="lead mt-2">Launching an attractive and scalable website quickly and afforadably is important for modern startups</p>
                              <div class="social-icons animated">
                                 <ul class="clearfix">
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End Tonny H. Soerojo -->
               <!-- Team -->
               <div class="row">
                  <div class="col-md-6">
                     <div class="row no-gutter">
                        <div class="col-md-6 col-xs-6 col-xx-12 col-md-push-6"><img class="img-responsive" src="{{ asset('images/pacto/team/member3.jpg')}}" alt="" /></div>
                        <div class="col-md-6 col-xs-6 col-xx-12 col-md-pull-6">
                           <div class="py-5 pl-5">
                              <h3 class="member-name light-weight mb-1">Crow Alex</h3>
                              <span>Art Director</span>
                              <p class="lead mt-2">Launching an attractive and scalable website quickly and afforadably is important for modern startups</p>
                              <div class="social-icons animated">
                                 <ul class="clearfix">
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="row no-gutter">
                        <div class="col-md-6 col-xs-6 col-xx-12 col-sm-push-6"><img class="img-responsive" src="{{ asset('images/pacto/team/member4.jpg')}}" alt="" /></div>
                        <div class="col-md-6 col-xs-6 col-xx-12 col-sm-pull-6">
                           <div class="py-5 pl-5">
                              <h3 class="member-name light-weight mb-1">Ronnie Rice</h3>
                              <span>Developer</span>
                              <p class="lead mt-2">Launching an attractive and scalable website quickly and afforadably is important for modern startups</p>
                              <div class="social-icons animated">
                                 <ul class="clearfix">
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End Team -->
            </div>
         </section>
         <!-- Footer -->
         <footer class="footer-dark">
            <div class="footer-top">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-3 col-xs-6 col-xx-12 mb-4">
                        <h6 class="text-uppercase">About InterSolusi</h6>
                        <ul class="list-unstyled address">
                           <li><i class="lnr lnr-map-marker"></i><span><strong>Gaharu Studio Residence</strong><br> Jl. Gaharu 4 No. 6, Jakarta 12430, INDONESIA</span></li>
                           <li><i class="lnr lnr-envelope"></i><a href="mailto:support@intersolusi.com">support@intersolusi.com</a></li>
                           <li><i class="lnr lnr-phone-handset"></i><span>(+91) 123-456-7890</span></li>
                        </ul>
                     </div>
                     <div class="col-sm-3 col-xs-6 col-xx-12 mb-4">
                        <h6 class="text-uppercase">Categories</h6>
                        <ul class="list-unstyled">
                           <li><a href="#">Printing </a></li>
                           <li><a href="#">Specimen book</a></li>
                           <li><a href="#">Simply random</a></li>
                           <li><a href="#">Embarrassing</a></li>
                           <li><a href="#">Making </a></li>
                        </ul>
                     </div>
                     <div class="col-sm-3 col-xs-6 col-xx-12 mb-4">
                        <h6 class="text-uppercase">ARCHIVES</h6>
                        <ul class="list-unstyled">
                           <li><a href="#">May 2017</a></li>
                           <li><a href="#">April 2017</a></li>
                           <li><a href="#">March 2017</a></li>
                           <li><a href="#">February 2017</a></li>
                           <li><a href="#">January 2017</a></li>
                        </ul>
                     </div>
                     <div class="col-sm-3 col-xs-6 col-xx-12 mb-4">
                        <h6 class="text-uppercase">RECENT POSTS</h6>
                        <ul class="list-unstyled recent-post">
                           <li><a href="#">Be My Guest<span>May 10,2017</span></a></li>
                           <li><a href="#">Ownage In The Mountains<span>February 14,2017</span></a></li>
                           <li><a href="#">The Field<span>March 23,2017</span></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Copy right -->
            <div class="footer-bottom">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-6">© 2017 <a hred="http://www.intersolusi.com" target="_blank"> InterSolusi Network</a> All rights reserved</div>
                     <div class="col-sm-6 text-right">
                        <ul class="list-unstyled list-inline footer-social">
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           <li><a href="#"><i class="fa fa-facebook"></i> </a> </li>
                           <li><a href="#"> <i class="fa fa-google-plus"></i> </a> </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- End footer -->
         <!-- Back to Top --> 
         <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-chevron-up"></i></a></div>
         <!-- jquery  -->
         <script type="text/javascript" src="{{ asset('templates/pacto/js/jquery.min.js')}}"></script>
         <!-- Bootstrap -->
         <script type="text/javascript" src="{{ asset('templates/pacto/js/bootstrap.min.js')}}"></script>
         <!-- Appear -->
         <script type="text/javascript" src="{{ asset('templates/pacto/js/jquery.appear.js')}}"></script>
         <!-- owl-carousel -->
         <script type="text/javascript" src="{{ asset('templates/pacto/js/owl-carousel/owl.carousel.min.js')}}"></script>
         <!-- counter -->
         <script type="text/javascript" src="{{ asset('templates/pacto/js/counter/jquery.countTo.js')}}"></script>
         <!-- countdown -->
         <script type="text/javascript" src="{{ asset('templates/pacto/js/countdown/jquery.downCount.js')}}"></script>
         <!-- Piechart -->
         <script type="text/javascript" src="{{ asset('templates/pacto/js/jquery.piechart.js')}}"></script>
         <!-- magnific popup -->
         <script type="text/javascript" src="{{ asset('templates/pacto/js/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
         <!-- isotope -->
         <script src="{{ asset('templates/pacto/js/isotope/isotope.pkgd.min.js')}}"></script>
         <script src="{{ asset('templates/pacto/js/isotope/imagesLoaded.js')}}"></script>
         <!-- jarallax -->
         <script src="{{ asset('templates/pacto/js/jarallax/jarallax.js')}}"></script>
         <script src="{{ asset('templates/pacto/js/jarallax/jarallax-video.js')}}"></script>
         <!-- Bootsnavs -->
         <script src="{{ asset('templates/pacto/js/bootsnav.js')}}"></script>
         <!-- custom -->
         <script type="text/javascript" src="{{ asset('templates/pacto/js/custom.js')}}"></script>
      </body>
   </html>