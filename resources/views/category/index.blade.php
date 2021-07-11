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
    <br>
    <div>
        <h3 style="text-align: center;">Kategori Tempat Wisata</h3>
    </div>
    <div class="main-wrapper bg-white">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-12 main-wrapper-content">

                    <main class="site-main mrt-25">
                        <div class="tags-sec section-padding">
                            <div class="row">
                                <?php foreach ($categories as $key => $value) { ?>
                                    <div class="col-sm-6 col-lg-4">
                                        <a href="{{ url('category/show', $value->id) }}">
                                            <div class="popular-tags">
                                                <div class="cus-tags-feature">
                                                    <img class="lazy" src="{{ asset('img/type') }}/{{ $value->gambar }}" alt="" />
                                                </div>
                                                <footer class="tags-card-footer">
                                                    <div class="tags-posts-meta">
                                                        <h4 class="tags-name">{{ $value->nama_jenis }}</h4>
                                                    </div>
                                                </footer>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
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