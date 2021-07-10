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
        <h3 style="text-align: center;">Rekomendasi Tempat Wisata</h3>
    </div><br>
    <div class="main-wrapper pd-t-60">
        <div class="container pd-0">
            <div class="row justify-content-between">
                <div class="col-lg-12 main-wrapper-content">
                    <main class="site-main style-two">
                        <div class="row" id="post-masonry">
                            <?php $no = 0;
                            foreach ($final_results as $key => $value) {
                                $alternative = App\Models\AlternativeModel::where('id', $value['id_alternatif'])->first();
                                $no++; ?>
                                <div class="col-lg-4 post-loop odd">
                                    <article class="post tag-getting-started post-grid-style post-grid-style-two mrb-60">
                                        <div class="entry-thumb">
                                            <figure class="thumb-wrap">
                                                <a href="welcome/index.html">
                                                    <style>
                                                        .circular--square {
                                                            border-radius: 50%;
                                                        }

                                                        .circular--square {
                                                            border-top-left-radius: 50% 50%;
                                                            border-top-right-radius: 50% 50%;
                                                            border-bottom-right-radius: 50% 50%;
                                                            border-bottom-left-radius: 50% 50%;
                                                        }
                                                    </style>
                                                    <img class="circular--square" src="{{ asset('assets/content/images/size/w360/2021/04/05.jpg') }}" width="80px" loading="lazy" alt="Start here for a quick overview everything you need to know" />
                                                </a>
                                            </figure>
                                            <!--./ thumb-wrap -->
                                        </div>
                                        <!--./ entry-thumb -->
                                        <div class="content-entry-wrap">
                                            <div class="entry-category">
                                                <a href="tag/getting-started/index.html" class="tag tag- getting-started">{{ $no }}</a>
                                            </div>
                                            <!--./ entry-category -->
                                            <h3 class="entry-title">
                                                <a href="welcome/index.html">
                                                    {{ $alternative->nama_alternatif }}
                                                </a>
                                            </h3>
                                            <!--./ entry-title -->
                                            <div class="entry-user">
                                                <div class="info">
                                                    <div class="author-name">
                                                        <span>{{ $value['preferensi'] }}</span>
                                                    </div>
                                                    <!--./ entry-time -->
                                                </div>
                                            </div>
                                            <div class="entry-content">
                                                <p>We've crammed the important of a information to help you get started with Ghost into this one post.</p>
                                            </div>
                                            <div class="entry-footer">
                                                <a href="welcome/index.html" class="more-links">Continue Reading -</a>
                                            </div>
                                        </div>
                                        <!--./ content-entry-wrap -->
                                    </article>
                                </div>
                            <?php } ?>
                        </div>
                    </main>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center mrt-30 mrb-90">
                    <div class="load-more-btn-area">
                        <a href="#" class="load-more-btn js-load-posts">Load More</a>
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