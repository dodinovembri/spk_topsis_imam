@extends('layouts.app')

@section('content')

<div class="site-content">

    @include('components.header')

    <div class="frontpage-slider-posts style-one">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 no-padding">
                    <div class="owl-carousel frontpage-slider-one style-three carousel-rectangle carousel-nav-center">
                        <article class="post hentry post-slider-four" style="background-image: url({{ asset('assets/content/images/size/w2000/2021/04/01.jpg') }});">
                            <!--./ entry-thumb -->
                            <div class="container">
                                <div class="content-entry-wrap">
                                    <div class="inner-box">

                                        <h3 class="entry-title">
                                            <a href="organising-content/index.html">The latest on BREXIT and how it will affect travellers</a>
                                        </h3>
                                        <br>
                                        <div class="entry-category">
                                            <a href="{{ url('recomendation/filter') }}">Mau Kemana</a>
                                            <a href="{{ url('recomendation') }}" class="tag tag- lifestyle">Kemana Saja</a>
                                        </div>
                                        <!--./ entry-title -->
                                    </div>
                                </div>
                                <!--./ content-entry-wrap -->
                            </div>
                        </article>
                    </div>
                    <!--/#frontpage-slide -->
                </div>
            </div>
        </div>
    </div>

    <div class="features-block">
        <div class="container pd-0 ml-t-90">
            <div class="row feature-list feature-list-one">
                <div class="col-lg-12 col-md-3">
                    <div class="col-lg-12 text-center mrt-30 mrb-90">
                        <div class="load-more-btn-area">
                            <a href="{{ url('category') }}" class="load-more-btn">Lihat Daftar Destinasi Wisata</a>
                        </div>
                        <nav class="navigation paging-navigation text-center pd-t-5 d-none">
                            <span class="page-number">Page 1 of 2</span>
                            <a class="older-posts" href="page/2/index.html">Older Posts &rarr;</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var random_class = ['symbol-light-warning', 'symbol-light-primary', 'symbol-light-success', 'symbol-light-danger', 'symbol-light-dark', 'symbol-light-info'];
    </script>

    <div class="main-wrapper pd-t-60">
        <div class="container pd-0">
            <div class="row justify-content-between">
                <div class="col-lg-12 main-wrapper-content">
                    <main class="site-main style-two">
                        <div class="row">
                            <?php foreach ($alternatives as $key => $value) { ?>
                                <div class="col-lg-4 post-loop odd">
                                    <article class="post tag-getting-started post-grid-style post-grid-style-two mrb-60">
                                        <div class="entry-thumb">
                                            <figure class="thumb-wrap">
                                                <img class="post-card-image" src="{{ asset('img/alternative') }}/{{ $value->gambar }}" loading="lazy" alt="Start here for a quick overview everything you need to know" />
                                            </figure>
                                            <!--./ thumb-wrap -->
                                        </div>
                                        <!--./ entry-thumb -->
                                        <div class="content-entry-wrap">
                                            <div class="entry-category">
                                                <a href="{{ url('destination', $value->id) }}" class="tag tag- getting-started">Panorama Views</a>
                                            </div>
                                            <!--./ entry-category -->
                                            <h3 class="entry-title">
                                                {{ $value->nama_alternatif }}
                                            </h3>
                                            <!--./ entry-title -->
                                            <div class="entry-content">
                                                <p style="text-align: justify; ">{{ substr($value->keterangan, 0, 100) }}...</p>
                                            </div>
                                            <div class="entry-footer">
                                                <a href="{{ url('recomendation/show', $value->id) }}" class="more-links">Continue Reading -</a>
                                            </div>
                                        </div>
                                        <!--./ content-entry-wrap -->
                                    </article>
                                </div>
                            <?php if ($key == 5) {
                                    break;
                                }
                            } ?>
                        </div>
                    </main>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center mrt-30 mrb-90">
                    <div class="load-more-btn-area">
                        <a href="{{ url('recomendation') }}" class="load-more-btn">See More</a>
                    </div>
                    <nav class="navigation paging-navigation text-center pd-t-5 d-none">
                        <span class="page-number">Page 1 of 2</span>
                        <a class="older-posts" href="page/2/index.html">Older Posts &rarr;</a>
                    </nav>
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