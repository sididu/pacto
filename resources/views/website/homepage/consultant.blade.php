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
               <link href="https://fonts.googleapis.com/css?family=Unna:400,700" rel="stylesheet">
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
               <!-- Skin -->
               <link rel="stylesheet" href="css/skin-consultant.css" type="text/css"/>
               <!-- Favicon -->
               <link rel="shortcut icon" href="favicon.ico"/>
            </head>
            <body>
               <!-- Preloader -->
               <div id="preloader">
                  <div class="clear-loading loading-effect"><img src="{{ asset('images/pacto/loading.gif')}}" width="100" alt=""></div>
               </div>
               <!-- Start Navigation -->
               <nav class="navbar navbar-default navbar-fixed navbar-transparent dark bootsnav">
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
                        <a class="navbar-brand" href="{{ url('/')}}">
                        <img src="{{ asset('images/pacto/brand/logo-w.png')}}" class="logo logo-display" alt="">
                        <img src="{{ asset('images/pacto/brand/logo-black.png')}}" class="logo logo-scrolled" alt="">
                        </a> 
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
               <section class="full-height fullscreen bg white-text header-slide">
                  <div class="owl-carousel owl-theme light-arrow" data-items="1" data-md-items="1" data-sm-items="1" data-nav-dots="false" data-nav-arrow="true" data-auto-play="false"  data-space="0">
                     <!-- item -->
                     <div class="item"  >
                        <div class="slide-img"><img src="{{ asset('images/pacto/consultant/slide3.jpg')}}" alt="" /></div>
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8">
                                 <h3 class="title">Business Consulting</h3>
                                 <div class="slide-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="#" class="btn btn-default btn-radius btn-outline white-border white-text fill-white">Read More</a>&nbsp;&nbsp; <a href="#" class="btn btn-default btn-radius theme-bg white-text">Purchase Now <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End item -->
                     <!-- item -->
                     <div class="item" >
                        <div class="slide-img"><img src="{{ asset('images/pacto/consultant/slide2.jpg')}}" alt="" /></div>
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8 col-md-offset-2 text-center">
                                 <h3 class="title">Investment Consulting</h3>
                                 <div class="slide-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="#" class="btn btn-default btn-radius btn-outline white-border white-text fill-white">Read More</a>&nbsp;&nbsp; <a href="#" class="btn btn-default btn-radius theme-bg white-text">Purchase Now <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End item -->
                     <!-- item -->
                     <div class="item"  >
                        <div class="slide-img"><img src="{{ asset('images/pacto/consultant/slide1.jpg')}}" alt="" /></div>
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8">
                                 <h3 class="title">Wealth Management</h3>
                                 <div class="slide-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="#" class="btn btn-default btn-radius btn-outline white-border white-text fill-white">Read More</a>&nbsp;&nbsp; <a href="#" class="btn btn-default btn-radius theme-bg white-text">Purchase Now <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End item -->
                  </div>
               </section>
               <!-- End Banner -->
               <!-- About Us -->
               <section class="grey-bg section-sm">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6 sm-mb-4">
                           <div class="heading-block">
                              <h2>About Us</h2>
                              <span>A few words about us</span> 
                           </div>
                           <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
                           </p>
                           <div class="row">
                              <div class="col-sm-6 xs-mb-4">
                                 <ul class="list desh">
                                    <li>Web Development</li>
                                    <li>Graphic &amp; UI Design</li>
                                    <li>Customer Support</li>
                                    <li>Video Editing</li>
                                    <li>Print Design</li>
                                 </ul>
                              </div>
                              <div class="col-sm-6">
                                 <ul class="list desh">
                                    <li>Website Awards 2015</li>
                                    <li>Future of Web Design 2016</li>
                                    <li>Best In Web 2015</li>
                                    <li>Interactive Art Agency</li>
                                    <li>Innovative Brand 2016</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="row mt-2">
                           		<div class="col-md-12 col-sm-8 mb-2"><img src="{{ asset('images/pacto/consultant/image1.jpg')}}" class="img-responsive" alt="" /></div>
                              <div class="col-sm-4 col-xs-4 col-xx-12 sm-mb-2">
                                 <div class="counter text-center">
                                    <div class="counter-info"> <span class="timer theme-text" data-to="2500" data-speed="1000">2500</span>
                                       <label>Trusted clients</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-4 col-xs-4 col-xx-12 sm-mb-2">
                                 <div class="counter text-center">
                                    <div class="counter-info"> <span class="timer theme-text" data-to="98" data-speed="1000">98</span>
                                       <label>Successful cases</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-4 col-xs-4 col-xx-12">
                                 <div class="counter text-center">
                                    <div class="counter-info"> <span class="timer theme-text" data-to="7800" data-speed="1000">7800</span>
                                       <label>Billions recovered</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End About Us -->
               <!-- Projects -->
               <section class="xs-mb-5">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="heading-block text-center">
                              <h2 class="solid-weight">Latest Projects</h2>
                              <span>Tempor incididunt </span> 
                           </div>
                        </div>
                     <div class="col-sm-12">
                        <div class="owl-carousel owl-theme c-theme" data-items="3" data-nav-dots="true"  data-space="40">
                           <div class="item">
                              <div class="mb-4"><img src="{{ asset('images/pacto/consultant/image2.jpg')}}" class="img-responsive" alt="what-we-offer" /></div>
                              <p class="mb-0 theme-text solid-weight">BRANDING</p>
                              <h5 class="mb-1">Strategy & Consulting</h5>
                              <p class="mb-0">The clients are mostly the companies dealing with said products or services, but we also enjoy teaming up with other agencies, companies with great ideas. </p>
                           </div>
                           <div class="item">
                              <div class="mb-4"><img src="{{ asset('images/pacto/consultant/image3.jpg')}}" class="img-responsive" alt="what-we-offer" /></div>
                              <p class="mb-0 theme-text solid-weight">FINANCE</p>
                              <h5 class="mb-1">Stock Market Consulting</h5>
                              <p class="mb-0">The clients are mostly the companies dealing with said products or services, but we also enjoy teaming up with other agencies, companies with great ideas. </p>
                           </div>
                           <div class="item">
                              <div class="mb-4"><img src="{{ asset('images/pacto/consultant/image4.jpg')}}" class="img-responsive" alt="what-we-offer" /></div>
                              <p class="mb-0 theme-text solid-weight">FINANCE</p>
                              <h5 class="mb-1">Wealth Management Consulting</h5>
                              <p class="mb-0">The clients are mostly the companies dealing with said products or services, but we also enjoy teaming up with other agencies, companies with great ideas. </p>
                           </div>
                           <div class="item">
                              <div class="mb-4"><img src="{{ asset('images/pacto/consultant/image5.jpg')}}" class="img-responsive" alt="what-we-offer" /></div>
                              <p class="mb-0 theme-text solid-weight">INVESTMENT</p>
                              <h5 class="mb-1">Venture Capital Investment</h5>
                              <p>The clients are mostly the companies dealing with said products or services, but we also enjoy teaming up with other agencies, companies with great ideas. </p>
                           </div>
                           <div class="item">
                              <div class="mb-4"><img src="{{ asset('images/pacto/consultant/image6.jpg')}}" class="img-responsive" alt="what-we-offer" /></div>
                              <p class="mb-0 theme-text solid-weight">BRANDING</p>
                              <h5 class="mb-1">Strategy & Consulting</h5>
                              <p class="mb-0">The clients are mostly the companies dealing with said products or services, but we also enjoy teaming up with other agencies, companies with great ideas. </p>
                           </div>
                        </div>
                     </div>
                     </div>
                  </div>
               </section>
               <!-- End Projects -->
               <!-- Services --> 
               <section class="p-0 pos-r grey-bg">
                  <div class="fullbg bg-pos-right" data-bg-img="{{ asset('images/pacto/consultant/bg1.jpg')}}"></div>
                  <div class="container">
                     <div class="row ">
                        <div class="col-sm-8 col-md-6">
                           <div class="py-7 pr-5 xs-py-4 sm-py-5 sm-pr-4 xs-pr-0 xs-big-mt">
                              <div class="heading-block">
                                 <h2>Services</h2>
                                 <span>A few words about us</span> 
                              </div>
                              <p>Hello, we’re Valdis Agency. Here to solve your tricky design problems and help you tell your story. Click on the objects to find out more</p>
                              <div class="row">
                                 <div class="col-xs-6 col-xx-12 mb-3">
                                    <div class="feature">
                                       <div class="feature-icon theme-text"> <i class="lnr lnr-briefcase"></i> </div>
                                       <div class="feature-info">
                                          <h4 class="solid-weight">Business Consulting</h4>
                                          <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-6 col-xx-12 mb-3">
                                    <div class="feature">
                                       <div class="feature-icon  theme-text"> <i class="lnr lnr-graduation-hat"></i> </div>
                                       <div class="feature-info">
                                          <h4 class="solid-weight">Lawyer Consulting</h4>
                                          <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-xs-6 col-xx-12 mb-3">
                                    <div class="feature">
                                       <div class="feature-icon  theme-text"> <i class="lnr lnr-bubble"></i> </div>
                                       <div class="feature-info">
                                          <h4 class="solid-weight">Online Consulting</h4>
                                          <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-6 col-xx-12">
                                    <div class="feature">
                                       <div class="feature-icon  theme-text"> <i class="lnr lnr-laptop-phone"></i> </div>
                                       <div class="feature-info">
                                          <h4 class="solid-weight">IT Managment</h4>
                                          <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End Services --> 
               <!-- News --> 
               <section class="section-pb ">
                  <div class="container">
                     <div class="row mb-3">
                        <div class="col-sm-8 col-sm-offset-2 text-center">
                           <div class="heading-block">
                              <h2>Recent News</h2>
                              <span>Get updates from us</span>
                              <div class="divider"></div>
                           </div>
                           <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna labore et dolore magna</p>
                        </div>
                     </div>
                  </div>
                  <div class="container-fluid">
                     <div class="row no-gutter">
                        <div class="owl-carousel owl-theme c-theme" data-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-nav-dots="false"  data-space="0">
                           <div class="item">
                              <div class="post post-over">
                                 <div class="post-image clearfix">
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                    <div class="post-overlay theme-bg"></div>
                                    <img class="img-responsive" src="{{ asset('images/pacto/blog/blog1.jpg')}}" alt="" /> 
                                 </div>
                                 <div class="quote-content"> <a href="#">How new financial laws can Drive Innovation</a>
                                    <label>- by John Deo</label>
                                 </div>
                                 <div class="post-details">
                                    <div class="post-meta"> <a href="#"><i class="fa fa-user"></i> Admin</a> <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>98 Like</a> <a href="#"><i class="fa fa-comments-o"></i>Comments</a> </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="post post-over">
                                 <div class="post-image clearfix"> <i class="lnr lnr-picture"></i> <img class="img-responsive" src="{{ asset('images/pacto/blog/blog4.jpg')}}" alt="" /> </div>
                                 <div class="post-details">
                                    <span class="categery text-uppercase">LIFESTYLE</span>
                                    <div class="post-date">24<span>NAV 2017</span></div>
                                    <div class="post-title">
                                       <h3 class="title"><a href="#">Working from your home?</a></h3>
                                    </div>
                                    <div class="post-content">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                                    </div>
                                    <div class="post-meta"> <a href="#"><i class="fa fa-user"></i> Admin</a> <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>98 Like</a> <a href="#"><i class="fa fa-comments-o"></i>Comments</a> </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="post post-over">
                                 <div class="post-image clearfix"> <i class="lnr lnr-picture"></i> <img class="img-responsive" src="{{ asset('images/pacto/blog/blog2.jpg')}}" alt="" /> </div>
                                 <div class="post-details">
                                    <span class="categery text-uppercase">BUSINESSES</span>
                                    <div class="post-date">20<span>FEB 2017</span></div>
                                    <div class="post-title">
                                       <h3 class="title"><a href="#">Time to Tell Our Story</a></h3>
                                    </div>
                                    <div class="post-content">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                                    </div>
                                    <div class="post-meta"> <a href="#"><i class="fa fa-user"></i> Admin</a> <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>98 Like</a> <a href="#"><i class="fa fa-comments-o"></i>Comments</a> </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="post post-over">
                                 <div class="post-image clearfix"> <i class="lnr lnr-picture"></i> <img class="img-responsive" src="{{ asset('images/pacto/blog/blog3.jpg')}}" alt="" /> </div>
                                 <div class="post-details">
                                    <span class="categery text-uppercase">DESIGN</span>
                                    <div class="post-date">27<span>NAV 2017</span></div>
                                    <div class="post-title">
                                       <h3 class="title"><a href="#">Transitions in ux design</a></h3>
                                    </div>
                                    <div class="post-content">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                                    </div>
                                    <div class="post-meta"> <a href="#"><i class="fa fa-user"></i> Admin</a> <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>98 Like</a> <a href="#"><i class="fa fa-comments-o"></i>Comments</a> </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End News --> 
               <!-- Step --> 
               <section class="grey-bg">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-4 xs-mb-3">
                           <div class="feature-box feature-text1">
                              <span class="step theme-text">01.</span>
                              <h3>Make Business Strategy</h3>
                              <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages and more recently with desktop.</p>
                           </div>
                        </div>
                        <div class="col-sm-4 xs-mb-3">
                           <div class="feature-box feature-text1">
                              <span class="step theme-text">02.</span>
                              <h3>Planning</h3>
                              <p>Making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures.</p>
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="feature-box feature-text1">
                              <span class="step theme-text">03.</span>
                              <h3>Happy Clients</h3>
                              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End Step --> 
               <!-- Customer --> 
               <section class="pos-r p-0">
                  <div class="fullbg bg-pos-right" data-bg-img="{{ asset('images/pacto/consultant/bg2.jpg')}}" ></div>
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-8 col-md-6 py-7 pr-5 xs-py-4 sm-py-5 sm-pr-4 xs-pr-0 xs-big-mt">
                           <div class="heading-block">
                              <h2>Our Valuable Customer Shouts</h2>
                              <span>Limitless possibilities create</span> 
                           </div>
                           <p class="lead">he countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coa</p>
                           <div class="testimonials">
                              <div class="owl-carousel owl-theme c-theme" data-items="1" data-md-items="1" data-sm-items="1" data-nav-dots="true"  data-space="30">
                                 <div class="item">
                                    <div class="author-description">
                                       <i class="fa fa-quote-left" aria-hidden="true"></i>
                                       <p>The countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river.</p>
                                       <div class="author-info">
                                          <div class="author-img"><img class="img-responsive" src="{{ asset('images/pacto/testimonials/image1.jpg')}}" alt="" /></div>
                                          <span class="author-name">- John Doe, Company CEO</span> 
                                       </div>
                                    </div>
                                 </div>
                                 <div class="item">
                                    <div class="author-description">
                                       <i class="fa fa-quote-left" aria-hidden="true"></i>
                                       <p>The countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river.</p>
                                       <div class="author-info">
                                          <div class="author-img"><img class="img-responsive" src="{{ asset('images/pacto/testimonials/image1.jpg')}}" alt="" /></div>
                                          <span class="author-name">- John Doe, Company CEO</span> 
                                       </div>
                                    </div>
                                 </div>
                                 <div class="item">
                                    <div class="author-description">
                                       <i class="fa fa-quote-left" aria-hidden="true"></i>
                                       <p>The countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river.</p>
                                       <div class="author-info">
                                          <div class="author-img"><img class="img-responsive" src="{{ asset('images/pacto/testimonials/image1.jpg')}}" alt="" /></div>
                                          <span class="author-name">- John Doe, Company CEO</span> 
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End Customer -->
               <!-- Clients --> 
               <section class="pos-r p-0">
                  <div class="fullbg bg-left-pos" data-bg-img="{{ asset('images/pacto/consultant/bg3.jpg')}}" ></div>
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-8 col-md-6 col-sm-offset-4 col-md-offset-6">
                           <div class="py-7 pl-7 xs-py-4 sm-py-5 sm-pl-5 xs-pl-1 xs-big-mt">
                              <div class="heading-block">
                                 <h2>Our Clients</h2>
                                 <span>Limitless possibilities create</span> 
                              </div>
                              <p  class="lead">Nullam felis sapien, commodo ac posuere non, pretium nec mauris. Ut nibh velit, accumsan at dapibus quis, venenatis ac turpis.</p>
                              <div class="row">
                                 <div class="col-sm-12"><div class="clients line">
                                    <div class="col-sm-4 col-xs-6 col-xx-12">
                                       <div class="media"><img class="img-responsive" src="{{ asset('images/pacto/clients/logo1.png')}}" alt=""></div>
                                    </div>
                                    <div class="col-sm-4 col-xs-6 col-xx-12">
                                       <div class="media"><img class="img-responsive" src="{{ asset('images/pacto/clients/logo2.png')}}" alt=""></div>
                                    </div>
                                    <div class="col-sm-4 col-xs-6 col-xx-12">
                                       <div class="media"><img class="img-responsive" src="{{ asset('images/pacto/clients/logo3.png')}}" alt=""></div>
                                    </div>
                                    <div class="col-sm-4 col-xs-6 col-xx-12">
                                       <div class="media"><img class="img-responsive" src="{{ asset('images/pacto/clients/logo4.png')}}" alt=""></div>
                                    </div>
                                    <div class="col-sm-4 col-xs-6 col-xx-12">
                                       <div class="media"><img class="img-responsive" src="{{ asset('images/pacto/clients/logo5.png')}}" alt=""></div>
                                    </div>
                                    <div class="col-sm-4 col-xs-6 col-xx-12">
                                       <div class="media"><img class="img-responsive" src="{{ asset('images/pacto/clients/logo1.png')}}" alt=""></div>
                                    </div>
                                 </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End Clients --> 
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