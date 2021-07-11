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
                        <div class="row">
                            <?php foreach ($alternatives as $key => $value) { ?>                                
                                <div class="col-lg-3 post-loop odd">
                                    <article class="post tag-getting-started post-grid-style post-grid-style-two mrb-60">
                                        <div class="entry-thumb">
                                            <figure class="thumb-wrap">
                                                <a href="{{ url('recomendation/show', $value->id) }}">
                                                    <img src="{{ asset('img/alternative') }}/{{ $value->gambar }}" width="1px" alt="Start here for a quick overview everything you need to know" />
                                                </a>
                                            </figure>
                                            <!--./ thumb-wrap -->
                                        </div>
                                        <!--./ entry-thumb -->
                                        <div class="content-entry-wrap">
                                            <div class="entry-category">
                                                <a href="{{ url('destination', $value->id) }}" class="tag tag- getting-started">Mode Panorama</a>
                                            </div>
                                            <!--./ entry-category -->
                                            <h5 class="">
                                                <a href="{{ url('recomendation/show', $value->id) }}">
                                                    {{ $value->nama_alternatif }}
                                                </a>
                                            </h5>
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
                            <?php } ?>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <!--~./ end main wrapper ~-->

    @include('components.footer')
</div>


@endsection