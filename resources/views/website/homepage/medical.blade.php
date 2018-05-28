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
               <!-- Datetimepicker -->
               <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" type="text/css" />
               <!-- base -->
               <link rel="stylesheet" href="{{ asset('templates/pacto/css/base.css')}}"  type="text/css"/>
               <!-- Bootsnav -->
               <link rel="stylesheet" href="{{ asset('templates/pacto/css/bootsnav.css')}}" type="text/css"/>
               <!-- Responsive -->
               <link rel="stylesheet" href="{{ asset('templates/pacto/css/responsive.css')}}" type="text/css" />
               <!-- Skin -->
               <link rel="stylesheet" href="{{ asset('css/skin-medical.css')}}" type="text/css"/>
               <!-- Favicon -->
               <link rel="shortcut icon" href="favicon.ico"/>
            </head>
            <body>
               <!-- Preloader -->
               <div id="preloader">
                  <div class="clear-loading loading-effect"><img src="{{ asset('images/pacto/loading.gif')}}" width="100" alt=""></div>
               </div>
               <!-- Start Navigation -->
               <nav class="navbar navbar-default navbar-fixed bootsnav on no-full">
                  <div class="top-container theme-bg white-text">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <ul class="list-inline">
                                 <li><i class="fa fa-envelope"></i> info@intersolusi.com</li>
                                 <li><i class="fa fa-phone"></i> (0021)-123-456-789-90</li>
                              </ul>
                           </div>
                           <div class="col-md-6">
                              <div class="pull-right">
                                 <ul class="list-inline">
                                    <li><a href="#" class="text-white"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="text-white"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="text-white"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="text-white"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" class="text-white"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="text-white"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#" class="text-white"><i class="fa fa-dribbble"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
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
               <!-- Slider -->
               <section class="full-height fullscreen header-slide">
                  <div class="owl-carousel owl-theme light-arrow" data-items="1" data-md-items="1" data-sm-items="1" data-nav-dots="false" data-nav-arrow="true" data-auto-play="false"  data-space="0">
                     <div class="item" >
                        <div class="slide-img"><img src="{{ asset('images/pacto/medical/slide2.jpg')}}" alt=""></div>
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8 text-left">
                                 <h1 class="title theme-text">Jones Hospital</h1>
                                 <div class="slide-content">
                                    <p class="solid-weight">we are centre of excellence, with an international reputation for pioneering advanced techniques and treatments</p>
                                    <a href="#" class="btn btn-default btn-radius btn-outline dark-border fill-dark">Read More</a>&nbsp;&nbsp; <a href="#" class="btn btn-default animated btn-radius theme-bg white-text">Book An Appointment <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item"  >
                        <div class="slide-img"><img src="{{ asset('images/pacto/medical/slide1.jpg')}}" alt=""></div>
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12 text-right">
                                 <h1 class="title theme-text">Medical Check-up</h1>
                                 <div class="slide-content">
                                    <p class="solid-weight">Take advantage of free medical check up provided by the experienced doctor</p>
                                    <a href="#" class="btn btn-default btn-radius btn-outline dark-border fill-dark">Read More</a>&nbsp;&nbsp; <a href="#" class="btn btn-default animated btn-radius theme-bg white-text">Register Now <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item overlay" >
                        <div class="slide-img" ><img src="{{ asset('images/pacto/medical/slide3.jpg')}}" alt=""></div>
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12 text-right">
                                 <h1 class="title theme-text">Best Doctor</h1>
                                 <div class="slide-content">
                                    <p class="solid-weight">More than 30 physicians, nurses ,specialist dedicatedly working 24X7</p>
                                    <a href="#" class="btn btn-default btn-radius btn-outline dark-border fill-dark">Read More</a>&nbsp;&nbsp; <a href="#" class="btn btn-default animated btn-radius theme-bg white-text">Book An Appointment <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End Slider -->
               <section class="p-0 medical-rules">
                  <div class="container-fluid">
                     <div class="row row-eq-height sm-row-eq-height no-gutter">
                        <div class="col-md-4 col-lg-4" data-bg-color="#4f7cda">
                           <div class="py-5 px-7 sm-pxy-3 white-text">
                              <div class="feature icon-position-left">
                                 <div class="feature-icon"> <i class="lnr lnr-clock"></i> </div>
                                 <div class="feature-info">
                                    <h4 class="text-uppercase">Working with care</h4>
                                 </div>
                              </div>
                              <div class="separator"><img src="{{ asset('images/pacto/medical/wave-divider.png')}}" alt="" /></div>
                              <div class="opening_time">
                                 <div class="clearfix bottom_border py-1"> <span>Monday – Friday <span class="pull-right">8.00 – 17.00</span></span> </div>
                                 <div class="clearfix bottom_border py-1"> <span>Saturday <span class="pull-right">9.30 – 17.30</span></span> </div>
                                 <div class="clearfix bottom_border py-1"> <span>Sunday <span class="pull-right">9.30 – 15.00</span></span> </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 col-lg-4 theme-bg">
                           <div class="py-5 px-7 sm-pxy-3">
                              <div class="feature icon-position-left white-text">
                                 <div class="feature-icon"> <i class="lnr lnr-phone"></i> </div>
                                 <div class="feature-info">
                                    <h4 class="text-uppercase">Emergency Cases</h4>
                                 </div>
                              </div>
                              <div class="separator"><img src="{{ asset('images/pacto/medical/wave-divider.png')}}" alt="" /></div>
                              <p class="h2">1-800-700-6200</p>
                              <p class="mb-0">Aenean sollicitudin, lorem quis bibendum auctor…</p>
                              <a href="#" class="btn btn-default btn-outline white-border white-text btn-radius btn-xs fill-white mt-4">learn more</a> 
                           </div>
                        </div>
                        <div class="col-md-4 col-lg-4" data-bg-color="#3d64b2">
                           <div class="py-5 px-7 sm-pxy-3 white-text">
                              <div class="feature icon-position-left">
                                 <div class="feature-icon"> <i class="lnr lnr-calendar-full"></i> </div>
                                 <div class="feature-info">
                                    <h4 class="text-uppercase">Doctor's Timetable</h4>
                                 </div>
                              </div>
                              <div class="separator"><img src="{{ asset('images/pacto/medical/wave-divider.png')}}" alt="" /></div>
                              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                 tempor incididunt ut labore et dolore magna aliqua ut enim
                              </p>
                              <a href="#" class="btn btn-default btn-outline white-border white-text btn-radius btn-xs fill-white mt-4">learn more</a> 
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- Our Health -->
               <section class="bg" data-bg-img="{{ asset('images/pacto/medical/bg1.jpg')}}">
                  <div class="container">
                     <div class="row mb-3">
                        <div class="col-md-6">
                           <div class="heading-block">
                              <span class="text-uppercase light-weight">You can choose high quality services</span>
                              <h2 class="text-uppercase solid-weight">Our Health Care Services</h2>
                              <div class="divider"></div>
                           </div>
                           <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim </p>
                           <p class="mb-0 sm-mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim </p>
                        </div>
                        <div class="col-md-6 ">
                           <div class="video-info"> <img class="img-responsive center-block" src="{{ asset('images/pacto/medical/image1.jpg')}}" alt=""> <a class="popup-vimeo theme-bg" href={{ asset('video/video.mp4')}}"><i class="icon-control-play icons"></i></a> </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-10">
                           <div class="row">
                              <div class="col-sm-4 sm-mb-3">
                                 <div class="feature">
                                    <div class="feature-icon"> <i class="lnr lnr-heart theme-text"></i> </div>
                                    <div class="feature-info">
                                       <h4>Patient Care</h4>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-4 sm-mb-3">
                                 <div class="feature">
                                    <div class="feature-icon"> <i class="lnr lnr-heart-pulse theme-text"></i> </div>
                                    <div class="feature-info">
                                       <h4>Critical Treatments</h4>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="feature">
                                    <div class="feature-icon"> <i class="lnr lnr-wheelchair theme-text"></i> </div>
                                    <div class="feature-info">
                                       <h4>Modern equipment</h4>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Icon Position Left  -->
                  </div>
               </section>
               <!-- End Our Health -->
               <!-- Sed do Eiusmod -->
               <section class="section-sm pb-2 dark-bg theme-bg">
                  <div class="container">
                     <div class="row">
                        <!-- icon position right -->
                        <div class="col-sm-4 mb-5 xs-mb-3">
                           <div class="counter timer-lg">
                              <div class="counter-info">
                                 <span class="timer theme-text" data-to="800" data-speed="1000">800</span>
                                 <label>
                                    Patient served
                                    <span>Sed do Eiusmod tempor incididunt ut labore</span>
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-4 mb-5 xs-mb-3">
                           <div class="counter timer-lg">
                              <div class="counter-info">
                                 <span class="timer theme-text" data-to="256" data-speed="1000">256</span>
                                 <label>
                                    Successful Surgery
                                    <span>Sed do Eiusmod tempor incididunt ut labore</span>
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-4 mb-5 xs-mb-3">
                           <div class="counter timer-lg">
                              <div class="counter-info">
                                 <span class="timer theme-text" data-to="25" data-speed="1000">25</span>
                                 <label>
                                    Expert Doctors
                                    <span>Sed do Eiusmod tempor incididunt ut labore</span>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End Sed do Eiusmod -->
               <!-- sodales augue -->
               <section class="p-0 pos-r">
                  <div class="fullbg" data-bg-img="{{ asset('images/pacto/medical/bg3.jpg')}}" ></div>
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6 col-sm-8 col-md-offset-6 col-sm-offset-4 xs-big-mt">
                           <div class="py-7 pl-7 xs-py-3 xs-pl-0">
                              <div class="heading-block">
                                 <span class="text-uppercase light-weight">sodales augue at, tempor neque</span>
                                 <h2 class="text-uppercase">
                                    <label class="theme-text">Book an</label>
                                    Appointment
                                 </h2>
                                 <div class="divider"></div>
                              </div>
                              <p class="lead">The starting position for the slider appears inconsistently across the tabs.appears inconsistently across the tabs</p>
                              <form role="form" class="raounded">
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <select name="menu-372" class="form-control"  >
                                             <option value="Select Departments">Select Departments</option>
                                             <option value="Laboratory Analysis">Laboratory Analysis</option>
                                             <option value="Pediatric Clinic">Pediatric Clinic</option>
                                             <option value="Laryngological Clinic">Laryngological Clinic</option>
                                             <option value="Outpatient Rehabilitation">Outpatient Rehabilitation</option>
                                             <option value="Gynaecological Clinic">Gynaecological Clinic</option>
                                             <option value="Ophthalmology Clinic">Ophthalmology Clinic</option>
                                             <option value="Cardiac Clinic">Cardiac Clinic</option>
                                             <option value="Outpatient Surgery">Outpatient Surgery</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <select name="menu-372" class="form-control">
                                             <option value="Select Doctors">Select Doctors</option>
                                             <option value="Dr. Nick Sims">Dr. Nick Sims</option>
                                             <option value="Dr. Michael Linden">Dr. Michael Linden</option>
                                             <option value="Dr. Max Turner">Dr. Max Turner</option>
                                             <option value="Dr. Amy Adams">Dr. Amy Adams</option>
                                             <option value="Dr. Julia Jameson">Dr. Julia Jameson</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <input name="Your Name" id="yourname" class="form-control" placeholder="Your Name" type="text">
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <input name="Phone" id="Phone" class="form-control" placeholder="Phone" type="tel">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <div class="form-group">
                                             <input name="Your Email" id="youremail" class="form-control" placeholder="Your Email" type="email">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class='input-group date datetimepicker' id='datetimepicker'>
                                          <input type='text' placeholder="Select Date and Time" class="form-control" />
                                          <span class="input-group-addon">
                                          <i class="fa fa-calendar"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                                 <a href="#" class="btn btn-default animated btn-radius theme-bg white-text">Submit<i class="fa fa-sign-in" aria-hidden="true"></i></a>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End sodales augue -->
               <!-- Our Departments -->
               <section class="dark-bg theme-bg p-0 pos-r our-departments">
                  <div class="fullbg bg-pos-right" data-bg-img="{{ asset('images/pacto/medical/bg2.jpg')}}" ></div>
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-sm-8 col-md-6">
                           <div class="py-7 px-7 xs-px-2 xs-py-3">
                              <div class="heading-block mb-5">
                                 <span class="text-uppercase light-weight">Eu vel reque eripuit.</span>
                                 <h2 class="text-uppercase">Our Departments</h2>
                                 <div class="divider"></div>
                              </div>
                              <div class="row">
                                 <div class="col-xs-6 col-xx-12 mb-3">
                                    <div class="feature small icon-position-left">
                                       <div class="feature-icon"><i class="fa fa-user-md"></i></div>
                                       <div class="feature-info">
                                          <h5>Neurology</h5>
                                          <p>Eu vel reque eripuit sanctus. Mei ei erant soleat percipitur eam ipsum. </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-6 col-xx-12 mb-3">
                                    <div class="feature small icon-position-left">
                                       <div class="feature-icon"><i class="fa fa-child"></i></div>
                                       <div class="feature-info">
                                          <h5>Pediatric Clinic</h5>
                                          <p>Eu vel reque eripuit sanctus. Mei ei erant soleat percipitur eam ipsum. </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-xs-6 col-xx-12 mb-3">
                                    <div class="feature small icon-position-left">
                                       <div class="feature-icon"><i class="fa fa-female"></i></div>
                                       <div class="feature-info">
                                          <h5>Gynaecological Clinic</h5>
                                          <p>Eu vel reque eripuit sanctus. Mei ei erant soleat percipitur eam ipsum. </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-6 col-xx-12 mb-3">
                                    <div class="feature small icon-position-left">
                                       <div class="feature-icon"><i class="fa fa-ambulance"></i></div>
                                       <div class="feature-info">
                                          <h5>Emergency Department.</h5>
                                          <p>Eu vel reque eripuit sanctus. Mei ei erant soleat percipitur eam ipsum. </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-xs-6 col-xx-12 mb-3">
                                    <div class="feature small icon-position-left">
                                       <div class="feature-icon"><i class="fa fa-eye"></i></div>
                                       <div class="feature-info">
                                          <h5>Ophthalmology Clinic</h5>
                                          <p>Eu vel reque eripuit sanctus. Mei ei erant soleat percipitur eam ipsum. </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-6 col-xx-12 mb-3">
                                    <div class="feature small icon-position-left">
                                       <div class="feature-icon"><i class="fa fa-heartbeat"></i></div>
                                       <div class="feature-info">
                                          <h5>Cardiac Clinic</h5>
                                          <p>Eu vel reque eripuit sanctus. Mei ei erant soleat percipitur eam ipsum. </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End Our Departments -->
               <!-- Treatments -->
               <section>
                  <div class="container">
                     <div class="row no-gutter">
                        <div class="col-sm-12 text-center">
                           <div class="heading-block">
                              <span class="text-uppercase light-weight">We are creating Your dream</span>
                              <h2 class="text-uppercase">
                                 <label class="theme-text">Treatments</label>
                                 Gallery
                              </h2>
                              <div class="divider"></div>
                           </div>
                        </div>
                        <div class="col-xs-12">
                           <div class="b-isotope popup-gallery b-isotope-3">
                              <ul class="mt-2 mb-4 b-isotope-filter clearfix list-inline text-center">
                                 <li class="current"><a href="" data-filter="*">all</a></li>
                                 <li><a href="" data-filter=".design">Design</a></li>
                                 <li><a href="" data-filter=".photo">Photo</a></li>
                                 <li><a href="" data-filter=".app">App</a></li>
                                 <li><a href="" data-filter=".branding">Branding</a></li>
                              </ul>
                              <ul class="b-isotope-grid grid list-unstyled columns3">
                                 <li class="grid-sizer"></li>
                                 <li class="grid-item design">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" href="{{ asset('images/pacto/portfolio/design/img1.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
                                          <img src="{{ asset('images/pacto/portfolio/design/img1.jpg')}}" alt="Design" /> 
                                       </div>
                                       <div class="image-info">
                                          <h3 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                          <a class="link-icon" href="#">Sed do eiusmod tempor</a> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="grid-item photo">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" href="{{ asset('images/pacto/portfolio/photo/img1.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
                                          <img src="{{ asset('images/pacto/portfolio/photo/img1.jpg')}}" alt="Photo" /> 
                                       </div>
                                       <div class="image-info">
                                          <h3 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                          <a class="link-icon" href="#">Sed do eiusmod tempor</a> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="grid-item branding">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" href="{{ asset('images/pacto/portfolio/branding/img1.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
                                          <img src="{{ asset('images/pacto/portfolio/branding/img1.jpg')}}" alt="Branding" /> 
                                       </div>
                                       <div class="image-info">
                                          <h3 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                          <a class="link-icon" href="#">Sed do eiusmod tempor</a> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="grid-item app">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" href="{{ asset('images/pacto/portfolio/app/img1.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
                                          <img src="{{ asset('images/pacto/portfolio/app/img1.jpg')}}" alt="App" /> 
                                       </div>
                                       <div class="image-info">
                                          <h3 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                          <a class="link-icon" href="#">Sed do eiusmod tempor</a> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="grid-item design">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" href="{{ asset('images/pacto/portfolio/design/img2.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
                                          <img src="{{ asset('images/pacto/portfolio/design/img2.jpg')}}" alt="Design" /> 
                                       </div>
                                       <div class="image-info">
                                          <h3 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                          <a class="link-icon" href="#">Sed do eiusmod tempor</a> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="grid-item photo">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" href="{{ asset('images/pacto/portfolio/photo/img2.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
                                          <img src="{{ asset('images/pacto/portfolio/photo/img2.jpg')}}" alt="Photo" /> 
                                       </div>
                                       <div class="image-info">
                                          <h3 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                          <a class="link-icon" href="#">Sed do eiusmod tempor</a> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="grid-item branding">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" href="{{ asset('images/pacto/portfolio/branding/img3.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
                                          <img src="{{ asset('images/pacto/portfolio/branding/img3.jpg')}}" alt="Photo" /> 
                                       </div>
                                       <div class="image-info">
                                          <h3 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                          <a class="link-icon" href="#">Sed do eiusmod tempor</a> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="grid-item app">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" href="{{ asset('images/pacto/portfolio/app/img3.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
                                          <img src="{{ asset('images/pacto/portfolio/app/img3.jpg')}}" alt="App" /> 
                                       </div>
                                       <div class="image-info">
                                          <h3 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                          <a class="link-icon" href="#">Sed do eiusmod tempor</a> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="grid-item design">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" href="{{ asset('images/pacto/portfolio/design/img3.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
                                          <img src="{{ asset('images/pacto/portfolio/design/img3.jpg')}}" alt="design" /> 
                                       </div>
                                       <div class="image-info">
                                          <h3 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                          <a class="link-icon" href="#">Sed do eiusmod tempor</a> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="grid-item photo">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" href="{{ asset('images/pacto/portfolio/photo/img3.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
                                          <img src="{{ asset('images/pacto/portfolio/photo/img3.jpg')}}" alt="photo" /> 
                                       </div>
                                       <div class="image-info">
                                          <h3 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                          <a class="link-icon" href="#">Sed do eiusmod tempor</a> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="grid-item app">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" href="{{ asset('images/pacto/portfolio/app/img2.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
                                          <img src="{{ asset('images/pacto/portfolio/app/img2.jpg')}}" alt="app" /> 
                                       </div>
                                       <div class="image-info">
                                          <h3 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                          <a class="link-icon" href="#">Sed do eiusmod tempor</a> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="grid-item branding">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" href="{{ asset('images/pacto/portfolio/branding/img4.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
                                          <img src="{{ asset('images/pacto/portfolio/branding/img4.jpg')}}" alt="branding" /> 
                                       </div>
                                       <div class="image-info">
                                          <h3 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                          <a class="link-icon" href="#">Sed do eiusmod tempor</a> 
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                           <!-- end .b-isotope-->
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End Treatments -->
               <!-- testimonial -->
               <section class="dark-bg theme-bg p-0 mt-3">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-7 py-6">
                           <div class="testimonials">
                              <div id="testimonials-slider3" class="carousel slide" data-ride="carousel">
                                 <!-- Indicators -->
                                 <ol class="carousel-indicators">
                                    <li data-target="#testimonials-slider3" data-slide-to="0" class="active"></li>
                                    <li data-target="#testimonials-slider3" data-slide-to="1"></li>
                                    <li data-target="#testimonials-slider3" data-slide-to="2"></li>
                                 </ol>
                                 <!-- Wrapper for slides -->
                                 <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                       <div class="author-description">
                                          <i class="fa fa-quote-left" aria-hidden="true"></i>
                                          <p>The countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river.</p>
                                          <div class="author-info">
                                             <div class="author-img"><img class="img-responsive" src="{{ asset('images/pacto/testimonials/image1.jpg')}}" alt=""></div>
                                             <span class="author-name">- John Doe, Company CEO</span> 
                                          </div>
                                       </div>
                                    </div>
                                    <div class="item">
                                       <div class="author-description">
                                          <i class="fa fa-quote-left" aria-hidden="true"></i>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                                          <div class="author-info">
                                             <div class="author-img"><img class="img-responsive" src="{{ asset('images/pacto/testimonials/image2.jpg')}}" alt=""></div>
                                             <span class="author-name">- John Doe, Company CEO</span> 
                                          </div>
                                       </div>
                                    </div>
                                    <div class="item">
                                       <div class="author-description">
                                          <i class="fa fa-quote-left" aria-hidden="true"></i>
                                          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                          <div class="author-info">
                                             <div class="author-img"><img class="img-responsive" src="{{ asset('images/pacto/testimonials/image3.jpg')}}" alt=""></div>
                                             <span class="author-name">- John Doe, Company CEO</span> 
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Controls -->
                                 <a class="left carousel-control" href="#testimonials-slider3" role="button" data-slide="prev"><i class="lnr lnr-arrow-left"></i></a> <a class="right carousel-control" href="#testimonials-slider3" role="button" data-slide="next"><i class="lnr lnr-arrow-right"></i></a> 
                              </div>
                           </div>
                        </div>
                        <div class="col-md-5">
                           <div class="image-block text-center visible-md visible-lg doctor-img"><img class="img-responsive" style="display:inline" src="{{ asset('images/pacto/medical/doctor-img.png')}}" alt=""></div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End testimonial -->
               <!-- Our Team -->
               <section>
                  <div class="container">
                     <div class="row gutter-10">
                        <div class="col-sm-12 text-center">
                           <div class="heading-block">
                              <h2 class="text-uppercase">
                                 <label class="theme-text">Doctor’s</label>
                                 Team
                              </h2>
                              <span class="text-uppercase light-weight">We are creating Your dream</span>
                              <div class="divider"></div>
                           </div>
                        </div>
                        <div class="col-sm-12">
                        <div class="owl-carousel owl-theme light-arrow" data-items="4" data-md-items="3" data-sm-items="3" data-xs-items="2" data-nav-dots="false" data-nav-arrow="false" data-auto-play="true"  data-space="10">
                        <div class="item">
                           <div class="team team-3">
                              <div class="member-image clearfix"> <a class="arrow-btn" href="#"><i class="lnr lnr-arrow-right"></i></a> <img class="img-responsive" src="{{ asset('images/pacto/medical/member1.jpg')}}" alt="" /></div>
                              <div class="team-info">
                                 <h4 class="member-name">Dr. Micheal Jorden</h4>
                                 <h5 class="member-position">Radiologist</h5>
                                 <div class="social"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> </div>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="team team-3">
                              <div class="member-image clearfix"> <a class="arrow-btn" href="#"><i class="lnr lnr-arrow-right"></i></a> <img class="img-responsive" src="{{ asset('images/pacto/medical/member2.jpg')}}" alt="" /></div>
                              <div class="team-info">
                                 <h4 class="member-name">Dr. Amy Adams</h4>
                                 <h5 class="member-position">Pediatrician</h5>
                                 <div class="social"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> </div>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="team team-3">
                              <div class="member-image clearfix"> <a class="arrow-btn" href="#"><i class="lnr lnr-arrow-right"></i></a> <img class="img-responsive" src="{{ asset('images/pacto/medical/member3.jpg')}}" alt="" /></div>
                              <div class="team-info">
                                 <h4 class="member-name">Dr. Tom Freeman</h4>
                                 <h5 class="member-position">Rehabilitation Therapy</h5>
                                 <div class="social"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> </div>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="team team-3">
                              <div class="member-image clearfix"> <a class="arrow-btn" href="#"><i class="lnr lnr-arrow-right"></i></a> <img class="img-responsive" src="{{ asset('images/pacto/medical/member4.jpg')}}" alt="" /></div>
                              <div class="team-info">
                                 <h4 class="member-name">Dr. Max Turner</h4>
                                 <h5 class="member-position">Cardiologist</h5>
                                 <div class="social"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> </div>
                              </div>
                           </div>
                        </div>
                        </div></div>
                     </div>
                  </div>
               </section>
               <!-- End Our Team -->
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
               <!-- Datetimepicker -->
               <script src="js/datetimepicker/moment.min.js"></script>
               <script src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
               <!-- Bootsnavs -->
               <script src="{{ asset('templates/pacto/js/bootsnav.js')}}"></script>
               <!-- custom -->
               <script type="text/javascript" src="{{ asset('templates/pacto/js/custom.js')}}"></script>
            </body>
         </html>