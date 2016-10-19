<nav id="main-navbar" class="navbar navbar-default navbar-static-top drop-shadow">
    <div>
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ URL::asset('images/pengacaraku-logo.png') }}" alt="{{ config('app.name', 'Pengacaraku') }}" height="100%"/>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav navbar-left vertical-divider">
                <li class="dropdown vertical-divider">
                    <a href="#" class="dropdown-toggle main-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Personal</a>                            
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Keluarga</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/perkawinan') }}">Perkawinan</a></li>
                                <li><a href="{{ url('/cerai') }}">Cerai</a></li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Waris</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/waris-islam') }}">Islam</a></li>
                                        <li><a href="{{ url('/waris-barat') }}">Barat</a></li>
                                    </ul>        
                                </li>
                                <li><a href="{{ url('/perlindungan-perempuan') }}">Perlindungan Perempuan</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Perdata</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/perdata/hak-kekayaan-intelektual') }}">Hak Kekayaan Intelektual</a></li>                                            
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Financing</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/kartu-kredit') }}">Kartu Kredit</a></li>
                                        <li><a href="{{ url('/kredit-pemilikan-rumah') }}">Kredit Pemilikan Rumah</a></li>
                                        <li><a href="{{ url('/kredit-pemilikan-kendaraan') }}">Kredit Pemilikan Kendaraan</a></li>
                                    </ul>        
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sewa Menyewa</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/sewa-tempat-tinggal') }}">Tempat Tinggal</a></li>
                                        <li><a href="{{ url('/sewa-kendaraan') }}">Kendaraan</a></li>
                                    </ul>        
                                </li>
                                <li><a href="#">Perlindungan Konsumen</a></li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ketenagakerjaan</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/hubungan-employee-employer') }}">Hubungan Employee & Employer</a></li>
                                        <li><a href="{{ url('/outsourcing') }}">Outsourcing</a></li>
                                        <li><a href="{{ url('/serikat-pekerja') }}">Serikat Pekerja</a></li>
                                    </ul>        
                                </li>
                                <li><a href="{{ url('/waralaba') }}">Waralaba</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pidana</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/tindak-pidana-dunia-maya') }}">Tindak Pidana Dunia Maya</a></li>
                                <li><a href="{{ url('/tiindak-pidana-kedokteran') }}">Tindak Pidana Kedokteran</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown vertical-divider">
                    <a href="#" class="dropdown-toggle main-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bisnis</a>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pendirian</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/pendirian-perseroan-terbatas') }}">Perseroan Terbatas</a></li>
                                <li><a href="{{ url('/pendirian-cv') }}">CV</a></li>
                                <li><a href="{{ url('/pendirian-firma') }}">Firma</a></li>
                                <li><a href="{{ url('/pendirian-koperasi') }}">Koperasi</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Operasi Bisnis</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/investasi') }}">Investasi</a></li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pengoperasian Bisnis</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/haki') }}">HAKI</a></li>
                                        <li><a href="{{ url('/leasing') }}">Leasing</a></li>
                                        <li><a href="{{ url('/ketenagakerjaan') }}">Ketenagakerjaan</a></li>
                                        <li><a href="{{ url('/kepatuhan-perusahaan') }}">Kepatuhan Perusahaan</a></li>
                                        <li><a href="{{ url('/waralaba') }}">Waralaba</a></li>
                                        <li><a href="{{ url('/kerjasama') }}">Kerjasama</a></li>                                                
                                        <li><a href="{{ url('/perizinan') }}">Perizinan</a></li>
                                    </ul>        
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Properti Bisnis</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/bisnis-sewa-enyewa') }}">Sewa-Menyewa</a></li>
                                        <li><a href="{{ url('/rahasia-perusahaan') }}">Rahasia Perusahaan</a></li>
                                        <li><a href="{{ url('/fidusia') }}">Fidusia</a></li>
                                        <li><a href="{{ url('/hipotek') }}">Hipotek</a></li>
                                    </ul>        
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ url('/hubungi-kami') }}" class="main-menu">Hubungi Kami</a></li>
            </ul>                
        </div>
    </div>
</nav>
@if (Auth::check())
<nav class="navbar navbar-default navbar-lower" role="navigation" id="main-menu">
    <div class="container">
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">                   
                @if (Auth::user()->ticketit_admin)
                <li>
                    <a href="{{ url('/tickets') }}">Tickets</a>
                </li>
                @endif

                <li>
                    <a href="{{ url('/logout') }}"
                       onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endif