<!-- Main Header -->
<header class="main-header">
  
  <!-- Logo -->
  {{--     <a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">e<b>LAP</b>DU</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">e<b>LAP</b>DU</span>
  </a> --}}
  
  <a href="{{ url('was/elapdu/pelapor ') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">
      <h2 class="fa fa-arrow-right"> </h2>
    </span>
    
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">
      <h3>e <b class="text-green"> L A P </b>D U</h3>
    </span>
  </a>
  
  {{-- <a href="{{ url('/operator') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><img src="{{asset('bower_components/admin-lte/dist/img/logo-kejaksaan.png')}}" width="50"></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><img src="{{asset('bower_components/admin-lte/dist/img/logo-kejaksaan-small.png')}}" height="50"></span>
  </a>
  --}}
  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="operator"><i class="fa fa-home"></i> </a></li>
      </ul>
    </div>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
         {{-- @include('themes.user.menu.top.pemeriksaan') --}}

         {{-- @include('themes.user.menu.top.terlapor') --}}
        
      </ul>
      <ul class="nav navbar-nav">
        <!-- Notifications Menu -->
        <li class="dropdown notifications-menu">
          <!-- Menu toggle button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="label label-warning">10</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">Anda memiliki 10 tugas baru</li>
            <li>
              <!-- Inner Menu: contains the notifications -->
              <ul class="menu">
                <li><!-- start notification -->
                  <a href="laporan">
                    <i class="fa fa-bullhorn text-grey fa-lg"></i>
                    <span class="label label-warning">2</span>&nbsp; Laporan Pengaduan
                  </a>
                </li>
                <li><!-- start notification -->
                  <a href="klarifikasi">
                    <i class="fa fa-comments-o text-grey fa-lg"></i>
                    <span class="label label-warning">2</span>&nbsp; Klarifikasi
                  </a>
                </li>
                <li><!-- start notification -->
                  <a href="inspeksi">
                    <i class="fa fa-search-plus text-grey fa-lg"></i>
                    <span class="label label-warning">2</span>&nbsp; Inspeksi Kasus
                  </a>
                </li>
                <li><!-- start notification -->
                  <a href="usulan">
                    <i class="fa fa-balance-scale text-grey fa-lg"></i>
                    <span class="label label-warning">2</span>&nbsp; Usulan Hukum
                  </a>
                </li>
                <li><!-- start notification -->
                  <a href="putusan">
                    <i class="fa fa-gavel text-grey fa-lg"></i>
                    <span class="label label-warning">2</span>&nbsp; Putusan Hukum
                  </a>
                </li>
                <!-- end notification -->
              </ul>
            </li>
            {{-- <li class="footer"><a href="#">View all</a></li> --}}
          </ul>
        </li>
        
        <!-- User Account Menu -->
        <!-- Authentication Links -->
        @if (Auth::guest())
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
        @else
        <li class="dropdown user user-menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- The user image in the navbar-->
            <img src="{{ asset('bower_components/admin-lte/dist/img/user.png')}}" class="user-image" alt="User Image">
            <!-- hidden-xs hides the username on small devices so only the image appears. -->
            <span class="hidden-xs">{{ Auth::user()->name }} <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <!-- The user image in the menu -->
            <li class="user-header">
              <img src="{{ asset('bower_components/admin-lte/dist/img/user.png')}}" class="img-circle" alt="User Image">
              
              <p>
                {{ Auth::user()->name }} 
                <br> 
                <small>KEPALA KEJAKSAAN TINGGI
                  <br>SULAWESI UTARA</small>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="btn-group btn-group-justified" role="group" aria-label="...">
                    <a href="administrator" class="btn btn-default btn-flat">Administrator</a>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="pengguna" class="btn btn-default btn-flat">Kelola Akun</a>
                  </div>
                  <div class="pull-right">
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">
                    Keluar
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </div>
              </li>
              @endif
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          {{--           <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gear"></i></a>
          </li> --}}
        </ul>
      </div>
    </nav>
  </header>