@extends('themes.website.template')

@section('stylesheets')
{{-- expr --}}
@endsection

@section('content')
               <!-- End Navigation -->
               <!-- Slider -->
               <section class="full-height fullscreen bg white-text header-slide">
                  <div class="owl-carousel owl-theme light-arrow" data-items="1" data-md-items="1" data-sm-items="1" data-nav-dots="false" data-nav-arrow="true" data-auto-play="false"  data-space="0">
                     <!-- Item -->
                     <div class="item"  >
                        <div class="slide-img"><img src="{{ asset('images/pacto/main/slider1.jpg')}}" alt="" /></div>
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8 col-md-offset-2 text-center">
                                 <h1 class="title">Global Trading</h1>
                                 <div class="slide-content">
                                    <p>Join The Global Investment Network.</p>
                                    <a href="#" class="btn btn-default btn-radius btn-outline white-border white-text fill-white">Explore More</a>&nbsp;&nbsp; <a href="#" class="btn btn-default animated btn-radius theme-bg white-text">Join Us today <i class="fa fa-sign-in" aria-hidden="true"></i></a> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End Item -->
                     <!-- Item -->
                     <div class="item" >
                        <div class="slide-img"><img src="{{ asset('images/pacto/main/slider2.jpg')}}" alt="" /></div>
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8 col-md-offset-2 text-center">
                                 <h1 class="title">Market Experts</h1>
                                 <div class="slide-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="#" class="btn btn-default btn-radius btn-outline white-border white-text fill-white">Read More</a>&nbsp;&nbsp; <a href="#" class="btn btn-default btn-radius theme-bg white-text">Purchase Now <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End Item -->
                     <!-- Item -->
                     <div class="item overlay" >
                        <div class="slide-img" ><img src="{{ asset('images/pacto/main/slider3.jpg')}}" alt="" /></div>
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12 text-right">
                                 <h1 class="title">Expert advisers</h1>
                                 <div class="slide-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="#" class="btn btn-default btn-radius btn-outline white-border white-text fill-white">Read More</a>&nbsp;&nbsp; <a href="#" class="btn btn-default btn-radius theme-bg white-text">Purchase Now <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End Item -->
                  </div>
               </section>
               <!-- End Slider -->
               <!-- Welcome -->  
               <section class="theme-bg section-sm">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="heading-block text-center ">
                              <h2 class="text-uppercase light-weight mb-1">Pecto Help you to Create New Revenue Opportunities</h2>
                              <span class="text-uppercase ">New Revenue Opportunities</span> 
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12 text-center">
                           <button class="btn btn-default btn-radius btn-outline white-border white-text fill-white" type="button">learn more</button>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End Welcome -->  
               <!-- Why us --> 
               <section class="p-0 pos-r">
                  <div class="fullbg bg-pos-right" data-bg-img="{{ asset('images/pacto/main/bg1.jpg')}}" ></div>
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-8 col-md-6" >
                           <div class="py-7 pr-7 xs-pr-0 xs-py-3">
                              <div class="heading-block">
                                 <h2 class="text-uppercase solid-weight">Why Invest With us</h2>
                                 <span class="text-uppercase light-weight">Connect with us Directly</span>
                                 <div class="divider"></div>
                              </div>
                              <p class="lead mb-4">Eorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor abore dolore magna aliqua aut enim minim veniama nostrud exsa sed citation saboris</p>
                              <p class="mb-4">Eorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor abore dolore magna aliqua aut enim minim veniama nostrud exsa sed citation saboris</p>
                              <div class="row no-gutter">
                                 <div class="col-sm-4 text-center">
                                    <div class="rounded-skill nobottommargin" data-color="#309cea" data-size="120" data-percent="70" data-width="5" data-speed="6500">
                                       <div class="counter counter-inherit"> <span class="timer" data-from="1" data-to="70" data-refresh-interval="50" data-speed="3000"></span>% </div>
                                    </div>
                                    <h6 class="text-uppercase">Investor</h6>
                                 </div>
                                 <div class="col-sm-4 text-center">
                                    <div class="rounded-skill nobottommargin" data-color="#309cea" data-size="120" data-percent="20" data-width="5" data-speed="6500">
                                       <div class="counter counter-inherit"> <span class="timer" data-from="1" data-to="20" data-refresh-interval="50" data-speed="3000"></span>% </div>
                                    </div>
                                    <h6 class="text-uppercase">Return</h6>
                                 </div>
                                 <div class="col-sm-4 text-center">
                                    <div class="rounded-skill nobottommargin" data-color="#309cea" data-size="120" data-percent="100" data-width="5" data-speed="6500">
                                       <div class="counter counter-inherit"> <span class="timer" data-from="1" data-to="100" data-refresh-interval="50" data-speed="3000"></span>% </div>
                                    </div>
                                    <h6 class="text-uppercase">Safe</h6>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End Why us --> 
               <!-- Faq --> 
               <section class="p-0 pos-r dark-bg">
                  <div class="fullbg" data-bg-img="{{ asset('images/pacto/main/bg-2.jpg')}}"></div>
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6 col-sm-8 col-sm-offset-4 col-md-offset-6">
                           <div class="py-7 pl-7 xs-py-3 xs-pl-0">
                              <div class="heading-block">
                                 <h2 class="text-uppercase">FREQUENTLY ASKED QUESTION </h2>
                                 <span class="light-weight text-uppercase">Take your time before Investing</span>
                                 <div class="divider"></div>
                              </div>
                              <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                              <div class="panel-group accordion default" id="accordion1" role="tablist" aria-multiselectable="true">
                                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading1">
                                       <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse1" aria-expanded="true" aria-controls="collapse1"><strong>01</strong> There are many variations of passages</a> </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                                       <div class="panel-body">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                                    </div>
                                 </div>
                                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading2">
                                       <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse2" aria-expanded="false" aria-controls="collapse2"><strong>02</strong> The first line of Lorem Ipsum</a> </h4>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                       <div class="panel-body">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                                    </div>
                                 </div>
                                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading3">
                                       <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse3" aria-expanded="false" aria-controls="collapse3"><strong>03</strong> If you use this site regularly and would</a> </h4>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                       <div class="panel-body">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End Faq --> 
               <!-- Who We Are --> 
               <section class="section-pb pos-r">
                  <img src="{{ asset('images/pacto/main/image3.png')}}" class="right-img visible-md visible-lg" alt="" />
                  <div class="container">
                     <div class="row">
                        <div class="col-md-8 text-left">
                           <div class="heading-block ">
                              <h2 class="text-uppercase solid-weight"> Who We Are</h2>
                              <span class="text-uppercase light-weight">Seven Business Seven Business</span>
                              <div class="divider"></div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-4 col-xx-12">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                           <img src="{{ asset('images/pacto/main/image1.jpg')}}" class="img-responsive mb-2" alt="" /> 
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-xx-12">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                           <img src="{{ asset('images/pacto/main/image2.jpg')}}" class="img-responsive mb-2" alt="" /> 
                        </div>
                     </div>
                  </div>
                  <div class="theme-bg top-minus2 pb-5 overlay-sec">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-12 col-lg-3 col-sm-4 sm-mb-3">
                              <div class="feature icon-position-left">
                                 <div class="feature-icon"><i class="lnr lnr-license theme-text"></i></div>
                                 <div class="feature-info">
                                    <h4>Free account</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-lg-3 col-sm-4 sm-mb-3">
                              <div class="feature icon-position-left">
                                 <div class="feature-icon"><i class="lnr lnr-user theme-text"></i></div>
                                 <div class="feature-info">
                                    <h4>Expert advisors</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-lg-3 col-sm-4">
                              <div class="feature icon-position-left">
                                 <div class="feature-icon"><i class="lnr lnr-sync theme-text"></i></div>
                                 <div class="feature-info">
                                    <h4>Secure transactions</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End Who We Are --> 
               <!-- Portfolio -->
               <section class="section-pb">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="heading-block text-center">
                              <h2 class="text-uppercase solid-weight">Incredible Layouts</h2>
                              <span class="text-uppercase light-weight">Limitless possibilities create</span>
                              <div class="divider"></div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12 p-0">
                           <div class="b-isotope popup-gallery b-isotope-3">
                              <ul class="mt-2 mb-4 b-isotope-filter clearfix list-inline text-center">
                                 <li class="current"><a href="" data-filter="*">all</a></li>
                                 <li><a href="" data-filter=".design">Design</a></li>
                                 <li><a href="" data-filter=".photo">Photo</a></li>
                                 <li><a href="" data-filter=".app">App</a></li>
                                 <li><a href="" data-filter=".branding">Branding</a></li>
                              </ul>
                              <ul class="b-isotope-grid grid list-unstyled columns4">
                                 <li class="grid-sizer"></li>
                                 <li class="grid-item design">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" title="Project" href="{{ asset('images/pacto/portfolio/design/img1.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
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
                                          <div class="overlay"> <a class="link-icon popup-img" title="Project" href="{{ asset('images/pacto/portfolio/photo/img1.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
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
                                          <div class="overlay"> <a class="link-icon popup-img" title="Project" href="{{ asset('images/pacto/portfolio/branding/img1.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
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
                                          <div class="overlay"> <a class="link-icon popup-img" title="Project" href="{{ asset('images/pacto/portfolio/app/img1.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
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
                                          <div class="overlay"> <a class="link-icon popup-img" title="Project" href="{{ asset('images/pacto/portfolio/design/img2.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
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
                                          <div class="overlay"> <a class="link-icon popup-img" title="Project" href="{{ asset('images/pacto/portfolio/photo/img2.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
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
                                          <div class="overlay"> <a class="link-icon popup-img" title="Project" href="{{ asset('images/pacto/portfolio/branding/img3.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
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
                                          <div class="overlay"> <a class="link-icon popup-img" title="Project" href="{{ asset('images/pacto/portfolio/app/img3.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
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
                                          <div class="overlay"> <a class="link-icon popup-img" title="Project" href="{{ asset('images/pacto/portfolio/design/img3.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
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
                                          <div class="overlay"> <a class="link-icon popup-img" title="Project" href="{{ asset('images/pacto/portfolio/photo/img3.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
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
                                          <div class="overlay"> <a class="link-icon popup-img" title="Project" href="{{ asset('images/pacto/portfolio/app/img2.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
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
                                          <div class="overlay"> <a class="link-icon popup-img" title="Project" href="{{ asset('images/pacto/portfolio/branding/img4.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
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
                        </div>
                     </div>
                  </div>
               </section>
               <!-- Portfolio End -->
               <!-- Step -->
               <section>
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-4 xs-mb-3">
                           <div class="feature-box feature-text1">
                              <span class="step theme-text">01.</span>
                              <h3>Planning &amp; Strategy</h3>
                              <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages and more recently with desktop.</p>
                           </div>
                        </div>
                        <div class="col-sm-4 xs-mb-3">
                           <div class="feature-box feature-text1">
                              <span class="step theme-text">02.</span>
                              <h3>Design &amp; develop</h3>
                              <p>Making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures.</p>
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="feature-box feature-text1">
                              <span class="step theme-text">03.</span>
                              <h3>Test &amp; Deliver</h3>
                              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End Step -->
               <!-- News -->
               <section class="p-0 grey-bg recent-news">
                  <div class="container-fluid">
                     <div class="row gutter-10">
                        <div class="col-sm-12 col-md-6">
                           <div class="py-5 half-space">
                              <div class="heading-block">
                                 <h2 class="text-uppercase solid-weight">RECENT NEWS</h2>
                                 <span class="text-uppercase light-weight">Get updates from us</span>
                                 <div class="divider"></div>
                              </div>
                              <p class="lead">Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
                              <a class="btn btn-default btn-outline btn-sm btn-radius fill-theme" href="#">Read More</a> 
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-xs-6 col-xx-12">
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
                        <div class="col-sm-6 col-md-3 col-xs-6 col-xx-12">
                           <div class="post post-over">
                              <div class="post-image clearfix"> <i class="lnr lnr-picture"></i> <img class="img-responsive" src="{{ asset('images/pacto/blog/blog1.jpg')}}" alt="" /> </div>
                              <div class="post-details">
                                 <span class="categery text-uppercase">LIFESTYLE</span>
                                 <div class="post-date">15<span>FEB 2017</span></div>
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
                     </div>
                     <div class="row gutter-10">
                        <div class="col-sm-6 col-md-3 col-xs-6 col-xx-12">
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
                        <div class="col-sm-6 col-md-3 col-xs-6 col-xx-12">
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
                        <div class="col-sm-6 col-md-3 col-xs-6 col-xx-12">
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
                        <div class="col-sm-6 col-md-3 col-xs-6 col-xx-12">
                           <div class="post post-over light-box">
                              <div class="post-image clearfix">
                                 <div class="post-overlay"></div>
                                 <img class="img-responsive" src="{{ asset('images/pacto/blog/blog8.jpg')}}" alt="" /> 
                              </div>
                              <div class="post-details">
                                 <span class="categery text-uppercase">CULTURE</span>
                                 <div class="post-date">20<span>May 2017</span></div>
                                 <div class="post-title">
                                    <h3 class="title"><a href="#">Taken right to the edge</a></h3>
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
               </section>
               <!-- End News -->
               @endsection()

@section('scripts')
{{-- expr --}}
@endsection