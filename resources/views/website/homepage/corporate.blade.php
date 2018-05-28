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
               <!-- Skin -->
               <link rel="stylesheet" href="css/skin-corporate.css" type="text/css"/>
               <!-- Favicon -->
               <link rel="shortcut icon" href="favicon.ico"/>
            </head>
            <body>
               <!-- Preloader -->
               <div id="preloader">
                  <div class="clear-loading loading-effect"><img src="{{ asset('images/pacto/loading.gif')}}" width="100" alt=""></div>
               </div>
               <!-- Start Navigation -->
               <nav class="navbar navbar-default navbar-fixed white  no-background bootsnav on no-full">
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
                        <img src="{{ asset('images/pacto/brand/logo-black.png')}}" class="logo logo-scrolled" alt=""> </a> 
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
                           <li><i class="lnr lnr-map-marker"></i><span>387 Madison Ave, New York, NY 10118</span></li>
                           <li><i class="lnr lnr-envelope"></i><span>support@yourname.com</span></li>
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
               <section class="full-height bg white-text header-slide single-image overlay" data-overlay-color="dark" data-overlay="8" data-bg-img="{{ asset('images/pacto/corporate/banner.jpg')}}" data-jarallax-video="https://www.youtube.com/watch?v=SF4aHwxHtZ0">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                           <h1 class="title">Corp Network </h1>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                           <a href="#" class="btn btn-default btn-radius btn-outline white-border white-text fill-white">Read More</a>&nbsp;&nbsp; <a href="#" class="btn btn-default animated btn-radius theme-bg white-text">Purchase Now <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a> 
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End Banner -->
               <!-- About -->
               <section>
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="heading-block text-center">
                              <h2 class="text-uppercase solid-weight">ABOUT GLOBAL CORP</h2>
                              <span class="text-uppercase light-weight">The most powerful business network on earth</span>
                              <div class="divider"></div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-6 xs-mb-4">
                           <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, </p>
                           <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                           <ul class="line-icon check mb-3">
                              <li><a href="#">Contrary to popular belief</a></li>
                              <li><a href="#">In a free hour</a></li>
                              <li><a href="#">Written by Cicero in 45 BC</a></li>
                           </ul>
                           <a href="#" class="btn btn-default btn-radius fill-dark">Read More</a> 
                        </div>
                        <div class="col-sm-6">
                           <div class="video-info"> <img class="img-responsive center-block" src="{{ asset('images/pacto/corporate/image1.jpg')}}" alt="" /> <a class="popup-vimeo video-btn theme-bg" title="Video" href={{ asset('video/video.mp4')}}"><i class="icon-control-play icons"></i></a> </div>
                           <div class="row mt-3">
                              <div class="col-md-6 sm-mb-5 xs-mb-1">
                                 <div class="skill  bar-round">
                                    <div class="skill-bar">
                                       <div class="progress-bar" data-percent="85" data-delay="0" data-type="%">
                                          <div class="progress-title">Business Development</div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="skill  bar-round">
                                    <div class="skill-bar">
                                       <div class="progress-bar" data-percent="90" data-delay="0" data-type="%">
                                          <div class="progress-title">General Consulting</div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End About -->
               <!-- What we do -->
               <section class="dark-bg section-lg">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-5 sm-mb-5">
                           <div class="heading-block">
                              <h2 class="text-uppercase solid-weight">What we do</h2>
                              <span class="text-uppercase light-weight">Seven Business</span>
                              <div class="divider"></div>
                           </div>
                           <p class="lead">No company can afford not to move forward. It may be at the top of the heap today</p>
                           <p>Etiam mollis libero vitae pulvinar bibendum. Morbi convallis metus eros, semper pharetra massa efficitur auctor. Etiam sit amet convallis erat. </p>
                           <a href="#" class="btn btn-default btn-radius btn-outline white-border white-text fill-white">Read More</a> 
                        </div>
                        <div class="col-md-7">
                           <div class="row">
                              <div class="col-sm-6 xs-mb-3">
                                 <div class="counter timer-lg mb-4 xs-mb-3">
                                    <div class="counter-info">
                                       <span class="timer theme-text" data-to="120" data-speed="1000">120</span>
                                       <label>
                                          Project Completed
                                          <span>Sed do Eiusmod </span>
                                       </label>
                                    </div>
                                 </div>
                                 <h5>Target Audience</h5>
                                 <ul class="list desh">
                                    <li>Web Development</li>
                                    <li>Graphic &amp; UI Design</li>
                                    <li>Customer Support</li>
                                    <li>Video Editing</li>
                                    <li>Print Design</li>
                                 </ul>
                              </div>
                              <div class="col-sm-6">
                                 <div class="counter timer-lg mb-4 xs-mb-3">
                                    <div class="counter-info">
                                       <span class="timer theme-text" data-to="142" data-speed="1000">142</span>
                                       <label>
                                          Global Customers
                                          <span>Sed do Eiusmod </span>
                                       </label>
                                    </div>
                                 </div>
                                 <h5>Notable Awards</h5>
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
                     </div>
                  </div>
               </section>
               <!-- End What we do -->
               <!-- We Enjoy Working -->
               <section class="p-0 pos-r white-bg">
                  <div class="fullbg" data-bg-img="{{ asset('images/pacto/corporate/bg1.jpg')}}" ></div>
                  <div class="container">
                     <div class="row row-eq-height">
                        <div class="col-sm-8 col-md-6 col-sm-offset-4 col-md-offset-6">
                           <div class="py-7 pl-7 xs-py-4 sm-py-5 sm-pl-7 xs-pl-0">
                              <div class="heading-block">
                                 <h2 class="text-uppercase solid-weight">We Enjoy Working</h2>
                                 <span class="text-uppercase light-weight">Directly with you</span>
                                 <div class="divider"></div>
                              </div>
                              <div class="tab clearfix">
                                 <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab3-1">
                                       <p class="lead">As the number of mobile users continues to outpace the number of desktop users, it should go without saying that designers, now more than ever, have to design with a mobile-first mentality.</p>
                                       <p>As the number of mobile users continues to outpace the number of desktop users, it should go without saying that designers, now more than ever, have to design with a mobile-first mentality.</p>
                                       <div class="row mt-4">
                                          <div class="col-sm-4 col-xs-6 col-xx-12 xs-mb-3">
                                             <div class="counter">
                                                <div class="counter-icon"> <i class="icon-question icons theme-text"></i> </div>
                                                <div class="counter-info"> <span class="timer" data-to="250" data-speed="3000">250</span>
                                                   <label>Project</label>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-4 col-xs-6 col-xx-12 xs-mb-3">
                                             <div class="counter">
                                                <div class="counter-icon"> <i class="icon-badge icons theme-text"></i> </div>
                                                <div class="counter-info"> <span class="timer" data-to="250" data-speed="3000">250</span>
                                                   <label>Project</label>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-4 col-xs-6 col-xx-12">
                                             <div class="counter">
                                                <div class="counter-icon"> <i class="icon-emotsmile icons theme-text"></i> </div>
                                                <div class="counter-info"> <span class="timer" data-to="250" data-speed="3000">250</span>
                                                   <label>Project</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab3-2">
                                       <p class="lead">As the number of mobile users continues to outpace the number of desktop users, it should go without saying that designers, now more than ever, have to design with a mobile-first mentality.</p>
                                       <p>As the number of mobile users continues to outpace the number of desktop users, it should go without saying that designers, now more than ever, have to design with a mobile-first mentality.</p>
                                       <div class="row mt-4">
                                          <div class="col-xs-4 xs-mb-3">
                                             <div class="counter">
                                                <div class="counter-icon"> <i class="icon-question icons theme-text"></i> </div>
                                                <div class="counter-info"> <span class="timer" data-to="250" data-speed="3000">250</span>
                                                   <label>Project</label>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xs-4 xs-mb-3">
                                             <div class="counter">
                                                <div class="counter-icon"> <i class="icon-badge icons theme-text"></i> </div>
                                                <div class="counter-info"> <span class="timer" data-to="250" data-speed="3000">250</span>
                                                   <label>Project</label>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xs-4">
                                             <div class="counter">
                                                <div class="counter-icon"> <i class="icon-emotsmile icons theme-text"></i> </div>
                                                <div class="counter-info"> <span class="timer" data-to="250" data-speed="3000">250</span>
                                                   <label>Project</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab3-3">
                                       <p class="lead">As the number of mobile users continues to outpace the number of desktop users, it should go without saying that designers, now more than ever, have to design with a mobile-first mentality.</p>
                                       <p>As the number of mobile users continues to outpace the number of desktop users, it should go without saying that designers, now more than ever, have to design with a mobile-first mentality.</p>
                                       <div class="row mt-4">
                                          <div class="col-xs-4 xs-mb-3">
                                             <div class="counter">
                                                <div class="counter-icon"> <i class="icon-question icons theme-text"></i> </div>
                                                <div class="counter-info"> <span class="timer" data-to="250" data-speed="3000">250</span>
                                                   <label>Project</label>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xs-4 xs-mb-3">
                                             <div class="counter">
                                                <div class="counter-icon"> <i class="icon-badge icons theme-text"></i> </div>
                                                <div class="counter-info"> <span class="timer" data-to="250" data-speed="3000">250</span>
                                                   <label>Project</label>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xs-4">
                                             <div class="counter">
                                                <div class="counter-icon"> <i class="icon-emotsmile icons theme-text"></i> </div>
                                                <div class="counter-info"> <span class="timer" data-to="250" data-speed="3000">250</span>
                                                   <label>Project</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <ul class="nav nav-tabs mt-2" role="tablist">
                                       <li class="active"><a href="#tab3-1" data-toggle="tab" aria-expanded="true">Tiling &amp; Printing</a></li>
                                       <li class=""><a href="#tab3-2" data-toggle="tab" aria-expanded="false">Revolution</a></li>
                                       <li class=""><a href="#tab3-3" data-toggle="tab" aria-expanded="false">Consulting</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End We Enjoy Working -->
               <!-- Creative & Professional -->
               <section class="p-0 dark-bg pos-r">
                  <div class="fullbg bg-pos-right" data-bg-img="{{ asset('images/pacto/corporate/bg2.jpg')}}" ></div>
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-8 col-md-6">
                           <div class="py-7 pr-7 xs-pr-0 xs-py-3">
                              <div class="heading-block">
                                 <h2>CREATIVE AGENCY</h2>
                                 <span class="text-uppercase">Creative & Professional</span>
                                 <div class="divider"></div>
                              </div>
                              <p class="lead">Lorem ipsum dolor sit amet tempor incididunt laboris nisi aliquip ex. Suspendisse aliquet imperdiet commodo.</p>
                              <p class="mb-4">Lorem ipsum dolor sit amet tempor incididunt laboris nisi aliquip ex.  Aenean vel lacinia elit. Class aptent taciti sociosqu ad litora torquent per.</p>
                              <div class="skill skill-boll mb-3">
                                 <div class="skill-bar">
                                    <div class="progress-bar" data-percent="96" data-delay="0" data-type="%">
                                       <div class="progress-title">General Consulting</div>
                                    </div>
                                 </div>
                                 <div class="skill-bar mt-7">
                                    <div class="progress-bar" data-percent="80" data-delay="0" data-type="%">
                                       <div class="progress-title">Construction Management</div>
                                    </div>
                                 </div>
                                 <div class="skill-bar mt-7">
                                    <div class="progress-bar" data-percent="60" data-delay="0" data-type="%">
                                       <div class="progress-title">Design & Build</div>
                                    </div>
                                 </div>
                                 <div class="skill-bar mt-7">
                                    <div class="progress-bar" data-percent="40" data-delay="0" data-type="%">
                                       <div class="progress-title">Special Projects</div>
                                    </div>
                                 </div>
                              </div>
                              <a href="#" class="btn btn-default btn-radius btn-outline white-border white-text fill-white">Read More</a> 
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End Creative & Professional -->
               <!-- Who We Are -->
               <section>
                  <div class="container">
                     <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                           <div class="heading-block ">
                              <h2 class="text-uppercase solid-weight"> Who We Are</h2>
                              <span class="text-uppercase light-weight">Seven Business Seven Business</span>
                              <div class="divider"></div>
                           </div>
                        </div>
                     </div>
                     <div class="row mt-4">
                        <div class="col-md-5"> <img src="{{ asset('images/pacto/corporate/image2.jpg')}}" class="img-responsive" alt="" /> </div>
                        <div class="col-md-7 mt-1">
                           <p class="lead">No company can afford not to move forward. It may be at the top of the heap today but at the bottom of the heap tomorrow, if it doesn’t.</p>
                           <blockquote >
                              <div class="quote"> <span class="intro">During the summer, our rabbit, Tonto, began to have severe redness</span> <span class="more"> and itching on his belly and feet. Through diagnostic testing, we learned that Tonto is severely allergic to over a dozens kinds of grass pollens. We've now been doing allergy injections for several months, and his itching and redness have nearly gone away. I'm very thankful to the veterinarians and staff at</span> <span class="customer">Jane H.</span> </div>
                           </blockquote>
                           <p class="text-right mb-0"><img src="{{ asset('images/pacto/Signature.png')}}" alt="" /></p>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End Who We Are -->
               <!-- our experts -->
         <section class="p-0 theme-bg">
            <div class="container-fluid">
               <div class="row no-gutter">
                  <div class="col-md-3 col-sm-12">
                     <div class="pxy-4">
                        <div class="heading-block">
                           <span class="text-uppercase light-weight">Excellent Advisors</span>
                           <h2 class="text-uppercase solid-weight">our experts</h2>
                           <div class="divider"></div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                        <a href="#" class="btn btn-default btn-radius btn-outline white-border white-text fill-white btn-xs">View More</a> 
                     </div>
                  </div>
                  <div class="col-md-9 col-sm-12">
                     <div class="owl-carousel owl-theme light-arrow" data-items="3" data-md-items="3" data-sm-items="3" data-xs-items="2" data-nav-dots="false" data-nav-arrow="false" data-auto-play="true"  data-space="0">
                        <div class="item">
                           <div class="team">
                              <div class="member-image clearfix"> <a class="arrow-btn" href="#"><i class="lnr lnr-arrow-right"></i></a> <img class="img-responsive" src="{{ asset('images/pacto/corporate/member1.jpg')}}" alt="" /></div>
                              <div class="team-info">
                                 <h3 class="member-name">John Smith</h3>
                                 <h5 class="member-position">General Manager</h5>
                                 <div class="social"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> </div>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="team">
                              <div class="member-image clearfix"> <a class="arrow-btn" href="#"><i class="lnr lnr-arrow-right"></i></a> <img class="img-responsive" src="{{ asset('images/pacto/corporate/member2.jpg')}}" alt="" /></div>
                              <div class="team-info">
                                 <h3 class="member-name">Jennifer Diaz</h3>
                                 <h5 class="member-position">Vice President</h5>
                                 <div class="social"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> </div>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="team">
                              <div class="member-image clearfix"> <a class="arrow-btn" href="#"><i class="lnr lnr-arrow-right"></i></a> <img class="img-responsive" src="{{ asset('images/pacto/corporate/member3.jpg')}}" alt="" /></div>
                              <div class="team-info">
                                 <h3 class="member-name">Dan O’Brien</h3>
                                 <h5 class="member-position">Founder, London</h5>
                                 <div class="social"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End our experts -->
               <!-- News -->
               <section class="grey-bg">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text-center">
                           <div class="heading-block">
                              <h2 class="text-uppercase solid-weight">Resent News</h2>
                              <span class="text-uppercase">also the leap electronicalso the leap electronic</span>
                              <div class="divider"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-12">
                        <div class="owl-carousel owl-theme c-theme" data-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2"  data-nav-dots="false"  data-space="20">
                           <div class="item">
                              <div class="post">
                                 <div class="post-image clearfix">
                                    <i class="lnr lnr-camera"></i>
                                    <div class="post-info">
                                       <span class="categery text-uppercase">Lifestyle</span>
                                       <div class="post-date">15<span>FEB 2017</span></div>
                                    </div>
                                    <img class="img-responsive" src="{{ asset('images/pacto/blog/blog-list1.jpg')}}" alt="" /> 
                                 </div>
                                 <div class="post-details">
                                    <div class="post-title">
                                       <h3 class="title"><a href="#">Our Favourite Things Q1 2017</a></h3>
                                    </div>
                                    <div class="post-content">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                                    </div>
                                    <div class="post-meta"> <a href="#"><i class="fa fa-user"></i> Admin</a> <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>98 Like</a> <a href="#"><i class="fa fa-comments-o"></i>Comments</a> </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="post">
                                 <div class="post-image clearfix">
                                    <i class="lnr lnr-camera"></i>
                                    <div class="post-info">
                                       <span class="categery text-uppercase">Businesses</span>
                                       <div class="post-date">20<span>FEB 2017</span></div>
                                    </div>
                                    <img class="img-responsive" src="{{ asset('images/pacto/blog/blog-list2.jpg')}}" alt="" /> 
                                 </div>
                                 <div class="post-details">
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
                              <div class="post">
                                 <div class="post-image clearfix">
                                    <i class="lnr lnr-camera"></i>
                                    <div class="post-info">
                                       <span class="categery text-uppercase">Design</span>
                                       <div class="post-date">27<span>NAV 2017</span></div>
                                    </div>
                                    <img class="img-responsive" src="{{ asset('images/pacto/blog/blog-list3.jpg')}}" alt="" /> 
                                 </div>
                                 <div class="post-details">
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
                           <div class="item">
                              <div class="post">
                                 <div class="post-image clearfix">
                                    <i class="lnr lnr-camera"></i>
                                    <div class="post-info">
                                       <span class="categery text-uppercase">Lifestyle</span>
                                       <div class="post-date">27<span>NAV 2017</span></div>
                                    </div>
                                    <img class="img-responsive" src="{{ asset('images/pacto/blog/blog-list4.jpg')}}" alt="" /> 
                                 </div>
                                 <div class="post-details">
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
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End News -->
               <!-- Testimonials -->
               <section class="dark-bg">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                           <div class="testimonials">
                              <div id="testimonials-slider4" class="carousel slide" data-ride="carousel">
                                 <!-- Indicators -->
                                 <ol class="carousel-indicators">
                                    <li data-target="#testimonials-slider4" data-slide-to="0" class=""></li>
                                    <li data-target="#testimonials-slider4" data-slide-to="1" class="active"></li>
                                    <li data-target="#testimonials-slider4" data-slide-to="2"></li>
                                 </ol>
                                 <!-- Wrapper for slides -->
                                 <div class="carousel-inner" role="listbox">
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
                                    <div class="item active">
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
                                             <div class="author-img"><img class="img-responsive" src="{{ asset('images/pacto/testimonials/image3.jpg')}}" alt="" /></div>
                                             <span class="author-name">- John Doe, Company CEO</span> 
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Controls -->
                                 <a class="left carousel-control" href="#testimonials-slider4" role="button" data-slide="prev"><i class="lnr lnr-arrow-left"></i></a> <a class="right carousel-control" href="#testimonials-slider4" role="button" data-slide="next"><i class="lnr lnr-arrow-right"></i></a> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End Testimonials -->
               <!-- Footer -->
               <footer class="footer-dark">
                  <div class="footer-top">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-3 col-xs-6 col-xx-12 mb-4">
                              <h6 class="text-uppercase">About Pecto</h6>
                              <ul class="list-unstyled address">
                                 <li><i class="lnr lnr-map-marker"></i><span>387 Madison Ave, New York, NY 10118</span></li>
                                 <li><i class="lnr lnr-envelope"></i><a href="mailto:support@yourname.com">support@yourname.com</a></li>
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
                           <div class="col-sm-6">© 2017 Pecto All rights reserved</div>
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
               <script type="text"/javascript" src="{{ asset('templates/pacto/js/jquery.min.js')}}"></script>
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