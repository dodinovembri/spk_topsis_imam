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
                                        <div class="entry-category">
                                            <a href="{{ url('recomendation/filter') }}">Mau Kemana</a>
                                            <a href="{{ url('recomendation') }}" class="tag tag- lifestyle">Kemana Saja</a>
                                        </div>
                                        <h3 class="entry-title">
                                            <a href="organising-content/index.html">The latest on BREXIT and how it will affect travellers</a>
                                        </h3>
                                        <div class="entry-meta-content">
                                            <div class="entry-author">
                                                By - <a href="author/johan/index.html">Johan Jahid</a>
                                            </div>
                                            <!--./ entry-date -->
                                            <div class="entry-date">
                                                <time datetime="2021-02-03">3 Feb 2021</time>
                                            </div>
                                            <!--./ entry-date -->
                                        </div>
                                        <!--./ entry-title -->
                                    </div>
                                </div>
                                <!--./ content-entry-wrap -->
                            </div>
                        </article>
                        <article class="post hentry post-slider-four" style="background-image: url({{ asset('assets/content/images/size/w2000/2021/04/02.jpg') }});">
                            <!--./ entry-thumb -->
                            <div class="container">
                                <div class="content-entry-wrap">
                                    <div class="inner-box">
                                        <div class="entry-category">
                                            <a href="tag/getting-started-2/index.html" class="tag tag- getting-started-2">Traveling</a>
                                            <a href="tag/getting-started/index.html" class="tag tag- getting-started">Outdoor</a>
                                        </div>
                                        <h3 class="entry-title">
                                            <a href="apps-integrations/index.html">Olivier Costa isa great restaurant experience of Lisbon area</a>
                                        </h3>
                                        <div class="entry-meta-content">
                                            <div class="entry-author">
                                                By - <a href="author/johan/index.html">Johan Jahid</a>
                                            </div>
                                            <!--./ entry-date -->
                                            <div class="entry-date">
                                                <time datetime="2021-02-03">3 Feb 2021</time>
                                            </div>
                                            <!--./ entry-date -->
                                        </div>
                                        <!--./ entry-title -->
                                    </div>
                                </div>
                                <!--./ content-entry-wrap -->
                            </div>
                        </article>
                        <article class="post hentry post-slider-four" style="background-image: url({{ asset('assets/content/images/size/w2000/2021/04/03.jpg')}});">
                            <!--./ entry-thumb -->
                            <div class="container">
                                <div class="content-entry-wrap">
                                    <div class="inner-box">
                                        <div class="entry-category">
                                            <a href="tag/getting-started-2/index.html" class="tag tag- getting-started-2">Traveling</a>
                                            <a href="tag/inspiration/index.html" class="tag tag- inspiration">Inspiration</a>
                                        </div>
                                        <h3 class="entry-title">
                                            <a href="themes/index.html">Studying Maximize ofs Fun, Minimize working Heartbreak</a>
                                        </h3>
                                        <div class="entry-meta-content">
                                            <div class="entry-author">
                                                By - <a href="author/johan/index.html">Johan Jahid</a>
                                            </div>
                                            <!--./ entry-date -->
                                            <div class="entry-date">
                                                <time datetime="2021-02-03">3 Feb 2021</time>
                                            </div>
                                            <!--./ entry-date -->
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
                        <div class="row" id="post-masonry">
                            <div class="col-lg-4 post-loop odd">
                                <article class="post tag-getting-started post-grid-style post-grid-style-two mrb-60">
                                    <div class="entry-thumb">
                                        <figure class="thumb-wrap">
                                            <a href="welcome/index.html">
                                                <img class="post-card-image" src="{{ asset('assets/content/images/size/w360/2021/04/05.jpg') }}" loading="lazy" alt="Start here for a quick overview everything you need to know" />
                                            </a>
                                        </figure>
                                        <!--./ thumb-wrap -->
                                    </div>
                                    <!--./ entry-thumb -->
                                    <div class="content-entry-wrap">
                                        <div class="entry-category">
                                            <a href="{{ url('destination') }}" class="tag tag- getting-started">Panorama Views</a>
                                        </div>
                                        <!--./ entry-category -->
                                        <h3 class="entry-title">
                                            <a href="welcome/index.html">
                                                Start here for a quick overview everything you need to know
                                            </a>
                                        </h3>
                                        <!--./ entry-title -->
                                        <div class="entry-user">
                                            <div class="info">
                                                <div class="author-name">
                                                    <span>By - <a href="author/ghost/index.html">Johan Doe</a></span> / <span><time datetime="2021-04-18">18 Apr 2021</time></span>
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
                            <div class="col-lg-4 post-loop even">
                                <article class="post tag-getting-started post-grid-style post-grid-style-two mrb-60">
                                    <div class="entry-thumb">
                                        <figure class="thumb-wrap">
                                            <a href="design/index.html">
                                                <img class="post-card-image" src="{{ asset('assets/content/images/size/w360/2021/04/09-1.jpg') }}" loading="lazy" alt="Customizing a brand and design settings is awesome experience" />
                                            </a>
                                        </figure>
                                        <!--./ thumb-wrap -->
                                    </div>
                                    <!--./ entry-thumb -->
                                    <div class="content-entry-wrap">
                                        <div class="entry-category">
                                            <a href="tag/getting-started/index.html" class="tag tag- getting-started">Outdoor</a>
                                        </div>
                                        <!--./ entry-category -->
                                        <h3 class="entry-title">
                                            <a href="design/index.html">
                                                Customizing a brand and design settings is awesome experience
                                            </a>
                                        </h3>
                                        <!--./ entry-title -->
                                        <div class="entry-user">
                                            <div class="info">
                                                <div class="author-name">
                                                    <span>By - <a href="author/ghost/index.html">Johan Doe</a></span> / <span><time datetime="2021-04-18">18 Apr 2021</time></span>
                                                </div>
                                                <!--./ entry-time -->
                                            </div>
                                        </div>
                                        <div class="entry-content">
                                            <p>How to tweak few settings in Ghost to transform your site from generic template to a custom brand.</p>
                                        </div>
                                        <div class="entry-footer">
                                            <a href="design/index.html" class="more-links">Continue Reading -</a>
                                        </div>
                                    </div>
                                    <!--./ content-entry-wrap -->
                                </article>
                            </div>
                            <div class="col-lg-4 post-loop odd">
                                <article class="post tag-getting-started post-grid-style post-grid-style-two mrb-60">
                                    <div class="entry-thumb">
                                        <figure class="thumb-wrap">
                                            <a href="write/index.html">
                                                <img class="post-card-image" src="{{ asset('assets/content/images/size/w360/2021/04/07-1.jpg') }}" loading="lazy" alt="Writing and managing content in Ghost, and advanced guide" />
                                            </a>
                                        </figure>
                                        <!--./ thumb-wrap -->
                                    </div>
                                    <!--./ entry-thumb -->
                                    <div class="content-entry-wrap">
                                        <div class="entry-category">
                                            <a href="tag/getting-started/index.html" class="tag tag- getting-started">Outdoor</a>
                                        </div>
                                        <!--./ entry-category -->
                                        <h3 class="entry-title">
                                            <a href="write/index.html">
                                                Writing and managing content in Ghost, and advanced guide
                                            </a>
                                        </h3>
                                        <!--./ entry-title -->
                                        <div class="entry-user">
                                            <div class="info">
                                                <div class="author-name">
                                                    <span>By - <a href="author/ghost/index.html">Johan Doe</a></span> / <span><time datetime="2021-04-18">18 Apr 2021</time></span>
                                                </div>
                                                <!--./ entry-time -->
                                            </div>
                                        </div>
                                        <div class="entry-content">
                                            <p>A full overview of all the features of built into the Ghost editor, including powerful workflow automations.</p>
                                        </div>
                                        <div class="entry-footer">
                                            <a href="write/index.html" class="more-links">Continue Reading -</a>
                                        </div>
                                    </div>
                                    <!--./ content-entry-wrap -->
                                </article>
                            </div>
                            <div class="col-lg-4 post-loop even">
                                <article class="post tag-getting-started post-grid-style post-grid-style-two mrb-60">
                                    <div class="entry-thumb">
                                        <figure class="thumb-wrap">
                                            <a href="portal/index.html">
                                                <img class="post-card-image" src="{{ asset('assets/content/images/size/w360/2021/04/08-1.jpg') }}" loading="lazy" alt="Building an audience with subscriber and also signups" />
                                            </a>
                                        </figure>
                                        <!--./ thumb-wrap -->
                                    </div>
                                    <!--./ entry-thumb -->
                                    <div class="content-entry-wrap">
                                        <div class="entry-category">
                                            <a href="tag/getting-started/index.html" class="tag tag- getting-started">Outdoor</a>
                                        </div>
                                        <!--./ entry-category -->
                                        <h3 class="entry-title">
                                            <a href="portal/index.html">
                                                Building an audience with subscriber and also signups
                                            </a>
                                        </h3>
                                        <!--./ entry-title -->
                                        <div class="entry-user">
                                            <div class="info">
                                                <div class="author-name">
                                                    <span>By - <a href="author/ghost/index.html">Johan Doe</a></span> / <span><time datetime="2021-04-18">18 Apr 2021</time></span>
                                                </div>
                                                <!--./ entry-time -->
                                            </div>
                                        </div>
                                        <div class="entry-content">
                                            <p>How Ghost allows to turn your blog anonymous readers into audiences of active subscribers, so you know.</p>
                                        </div>
                                        <div class="entry-footer">
                                            <a href="portal/index.html" class="more-links">Continue Reading -</a>
                                        </div>
                                    </div>
                                    <!--./ content-entry-wrap -->
                                </article>
                            </div>
                            <div class="col-lg-4 post-loop odd">
                                <article class="post tag-getting-started post-grid-style post-grid-style-two mrb-60">
                                    <div class="entry-thumb">
                                        <figure class="thumb-wrap">
                                            <a href="sell/index.html">
                                                <img class="post-card-image" src="{{ asset('assets/content/images/size/w360/2021/04/10-2.jpg') }}" loading="lazy" alt="Selling premium thing memberships with the recurring revenue" />
                                            </a>
                                        </figure>
                                        <!--./ thumb-wrap -->
                                    </div>
                                    <!--./ entry-thumb -->
                                    <div class="content-entry-wrap">
                                        <div class="entry-category">
                                            <a href="tag/getting-started/index.html" class="tag tag- getting-started">Outdoor</a>
                                        </div>
                                        <!--./ entry-category -->
                                        <h3 class="entry-title">
                                            <a href="sell/index.html">
                                                Selling premium thing memberships with the recurring revenue
                                            </a>
                                        </h3>
                                        <!--./ entry-title -->
                                        <div class="entry-user">
                                            <div class="info">
                                                <div class="author-name">
                                                    <span>By - <a href="author/ghost/index.html">Johan Doe</a></span> / <span><time datetime="2021-04-18">18 Apr 2021</time></span>
                                                </div>
                                                <!--./ entry-time -->
                                            </div>
                                        </div>
                                        <div class="entry-content">
                                            <p>For creators and aspiring contents entrepreneurs looking to generate a sustainable recurring revenu</p>
                                        </div>
                                        <div class="entry-footer">
                                            <a href="sell/index.html" class="more-links">Continue Reading -</a>
                                        </div>
                                    </div>
                                    <!--./ content-entry-wrap -->
                                </article>
                            </div>
                            <div class="col-lg-4 post-loop even">
                                <article class="post tag-getting-started post-grid-style post-grid-style-two mrb-60">
                                    <div class="entry-thumb">
                                        <figure class="thumb-wrap">
                                            <a href="grow/index.html">
                                                <img class="post-card-image" src="{{ asset('assets/content/images/size/w360/2021/04/09-1.jpg') }}" loading="lazy" alt="How to grow your and business around also the audience" />
                                            </a>
                                        </figure>
                                        <!--./ thumb-wrap -->
                                    </div>
                                    <!--./ entry-thumb -->
                                    <div class="content-entry-wrap">
                                        <div class="entry-category">
                                            <a href="tag/getting-started/index.html" class="tag tag- getting-started">Outdoor</a>
                                        </div>
                                        <!--./ entry-category -->
                                        <h3 class="entry-title">
                                            <a href="grow/index.html">
                                                How to grow your and business around also the audience
                                            </a>
                                        </h3>
                                        <!--./ entry-title -->
                                        <div class="entry-user">
                                            <div class="info">
                                                <div class="author-name">
                                                    <span>By - <a href="author/ghost/index.html">Johan Doe</a></span> / <span><time datetime="2021-04-18">18 Apr 2021</time></span>
                                                </div>
                                                <!--./ entry-time -->
                                            </div>
                                        </div>
                                        <div class="entry-content">
                                            <p>A guide to collaborating with other staff users to publish, and some of resources to help you.</p>
                                        </div>
                                        <div class="entry-footer">
                                            <a href="grow/index.html" class="more-links">Continue Reading -</a>
                                        </div>
                                    </div>
                                    <!--./ content-entry-wrap -->
                                </article>
                            </div>
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