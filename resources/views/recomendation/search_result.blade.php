@extends('layouts.app')

@section('content')


@include('components.loader')

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
                        <div class="row" >
                            <?php $no = 0;
                            foreach ($final_results as $key => $value) {
                                $alternative = App\Models\AlternativeModel::where('id', $value['id_alternatif'])->first();
                                $no++; ?>
                                <div class="col-lg-3 post-loop odd">
                                    <article class="post tag-getting-started post-grid-style post-grid-style-two mrb-60">
                                        <div class="entry-thumb">
                                            <figure class="thumb-wrap">
                                                <a href="{{ url('recomendation/show', $alternative->id) }}">
                                                    <img src="{{ asset('img/alternative') }}/{{ $alternative->gambar }}" width="1px" alt="Start here for a quick overview everything you need to know" />
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
                                            <h5 class="">
                                                <a href="{{ url('recomendation/show', $alternative->id) }}">
                                                    {{ $alternative->nama_alternatif }}
                                                </a>
                                            </h5>
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
                                                <p style="text-align: justify; ">{{ substr($alternative->keterangan, 0, 100) }}...</p>
                                            </div>
                                            <div class="entry-footer">
                                                <a href="{{ url('recomendation/show', $alternative->id) }}" class="more-links">Continue Reading -</a>
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

<a href='#top' id='scroll-top' class='topbutton btn-hide'><span class='fas fa-angle-double-up'></span></a>

@endsection