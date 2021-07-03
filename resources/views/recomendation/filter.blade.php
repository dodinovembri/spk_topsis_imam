@extends('layouts.app')

@section('content')


<div id="loader-overlay">
    <div class="loader">
        <img src="{{ asset('assets/content/images/2021/04/logo.png') }}" alt="Pathway blog" />
        <i class="fas fa-spinner fa-pulse"></i>
    </div>
</div>

<div class="site-content">

    @include('components.header')

    <div class="main-wrapper pd-t-60">
        <div class="container pd-0">
            <div class="row justify-content-between">
                <div class="col-lg-12 main-wrapper-content">
                    <main class="site-main style-two">
                        <div class="row" id="post-masonry">
                            <div class="col-lg-8 post-loop odd">
                                <article class="post tag-getting-started post-grid-style post-grid-style-two mrb-60">
                                    <div id="googleMap" style="width:100%;height:400px;"></div>

                                    <script>
                                        function myMap() {
                                            var mapProp = {
                                                center: new google.maps.LatLng(51.508742, -0.120850),
                                                zoom: 5,
                                            };
                                            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                                        }
                                    </script>

                                    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
                                </article>
                            </div>
                            <div class="col-lg-4 post-loop odd">
                                <article class="post tag-getting-started post-grid-style post-grid-style-two mrb-60">
                                    <div class="sign-wrapper-main mrt-20">
                                        <div class="signup-form mx-auto">
                                            <div class="cus-sign-box">
                                                <div class="form-inner-content">
                                                    <form data-members-form="signin" action="{{ url('recomendation/search') }}" method="POST">
                                                    @csrf
                                                        <h4>Temukan Rekomendasi Object Wisata</h4>
                                                        <select name="" id="" class="form-control" style="margin-top: 10px;">
                                                            <option value="" class="fomr-control">Jarak</option>
                                                            <option value="" class="fomr-control">ok</option>
                                                            <option value="" class="fomr-control">ok</option>
                                                            <option value="" class="fomr-control">ok</option>
                                                            <option value="" class="fomr-control">ok</option>
                                                        </select>
                                                        <select name="" id="" class="form-control" style="margin-top: 10px;">
                                                            <option value="" class="fomr-control">Biaya</option>
                                                            <option value="" class="fomr-control">ok</option>
                                                            <option value="" class="fomr-control">ok</option>
                                                            <option value="" class="fomr-control">ok</option>
                                                            <option value="" class="fomr-control">ok</option>
                                                        </select>
                                                        <select name="" id="" class="form-control" style="margin-top: 10px;">
                                                            <option value="" class="fomr-control">Fasilitas</option>
                                                            <option value="" class="fomr-control">ok</option>
                                                            <option value="" class="fomr-control">ok</option>
                                                            <option value="" class="fomr-control">ok</option>
                                                            <option value="" class="fomr-control">ok</option>
                                                        </select>
                                                        <select name="" id="" class="form-control" style="margin-top: 10px;">
                                                            <option value="" class="fomr-control">Aksesibilitas</option>
                                                            <option value="" class="fomr-control">ok</option>
                                                            <option value="" class="fomr-control">ok</option>
                                                            <option value="" class="fomr-control">ok</option>
                                                            <option value="" class="fomr-control">ok</option>
                                                        </select>
                                                        <div class="subscribe-btn d-flex align-items-center">
                                                            <button type="submit" class="btn btn-sign">
                                                                <span class="button-text">Keterangan Kriteria</span>
                                                                <span class="button-loader"><i class="fas fa-sync-alt"></i></span>
                                                            </button>
                                                        </div>
                                                        <div class="subscribe-btn d-flex align-items-center">
                                                            <button type="submit" class="btn btn-sign">
                                                                <span class="button-text">Dapatkan Rekomendasi</span>
                                                                <span class="button-loader"><i class="fas fa-sync-alt"></i></span>
                                                            </button>
                                                        </div>

                                                        <p class="mrt-45 text-center mrb-0 account-links"></p>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <!--~./ end main wrapper ~-->

    @include('components.footer')
</div>

<!--search overlay content-->
<div class="overlay-content">
    <div class="overlay-close"></div>
    <div class="search-area search-overly  d-flex justify-content-center aligh-items-center flex-column">
        <div class="cus-container">
            <div class="search-input-area d-flex align-items-center">
                <input type="text" id="search-input" class="form-control" placeholder="type your keywords...">
                <small class="esc">ESC</small>
                <span><i class="fas fa-search"></i></span>
                <div class="bar-dismiss"><span class="close-icons"><i class="fas fa-close"></i></span></div>
            </div>
            <!-- search result content -->
            <div class="search-result">
                <div class="custom">
                    <h2 class="no-result"><span>0</span> results found in this keyword</h2>
                    <div id="search-full-content"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<a href='#top' id='scroll-top' class='topbutton btn-hide'><span class='fas fa-angle-double-up'></span></a>

@endsection