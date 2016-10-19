<!DOCTYPE html>
<html lang="en">
    <head>       
        @include('includes.head')
    </head>
    <body class="home">
        @include('includes.header')

        <div id="home-banner">        
            <!--empty space for home banner-->
        </div>

        <div class="content">
            <div id="layanan-kami" class="row vertical-divider drop-shadow">
                <div class="col-sm-3">
                    <div><img src="{{URL::asset('images/pengacara-kami.png')}}"></div>
                    <h2>Pengacara Kami</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <div class="col-sm-3">
                    <div><img src="{{URL::asset('images/layanan-kami.png')}}"></div>
                    <h2>Layanan Kami</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <div class="col-sm-3">
                    <div><img src="{{URL::asset('images/dokumen-hukum.png')}}"></div>
                    <h2>Dokumen Hukum</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <div class="col-sm-3">
                    <div><img src="{{URL::asset('images/konsultasi-online.png')}}"></div>
                    <h2>Konsultasi Online</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>

            <div id="bottom-content" class="row vertical-divider grey-divider drop-shadow">
                <div class="col-sm-3 bottom-content-search">
                    <div class="bottom-content-title"><img src="{{URL::asset('images/search.png')}}"></div>
                    <form>
                        <div class="form-group">
                            <input type="text" name="search" placeholder="Search">
                        </div>
                        <button type="submit" class="btn">GO</button>
                    </form>
                </div>          
                <div class="col-sm-5">
                    <div class="bottom-content-title"><img src="{{URL::asset('images/berita.png')}}"><span class="title">Berita</span></div>                    
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="bottom-content-title"><img src="{{URL::asset('images/tanya.png')}}"><span class="title">Tanya</span></div>                    
                    <div class="tanya-box">
                        <form action="{{ url('/tickets/create?') }}">
                            <div class="form-group">
                                <textarea name="question"></textarea>
                            </div>
                            <button type="submit" class="btn">Dapatkan Jawaban</button>
                        </form>    
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
        @include('includes.footer')            
        </footer>
    </body>
</html>
