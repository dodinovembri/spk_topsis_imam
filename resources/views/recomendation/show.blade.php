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

    <div class="main-wrapper">
        <div class="blog-single-page mrt-90">
            <article class="single-post single-post-two post tag-getting-started ">
                <div class="container">
                    <div class="entry-header">

                        <h3>Start here for a quick overview everything you need to know</h3>

                    </div>
                </div>

                <div class="container">
                    <div class="post-details">

                        <div class="entry-content">
                            <div class="all-contents">
                                <figure class="kg-card kg-image-card kg-card-hascaption"><img src="{{ asset('assets/content/images/2021/04/12-2.jpg') }}" class="kg-image" alt loading="lazy" width="1920" height="1104" srcset="https://pathway.the9t9.com/content/images/size/w600/2021/04/12-2.jpg 600w, https://pathway.the9t9.com/content/images/size/w1000/2021/04/12-2.jpg 1000w, https://pathway.the9t9.com/content/images/size/w1600/2021/04/12-2.jpg 1600w, https://pathway.the9t9.com/content/images/2021/04/12-2.jpg 1920w" sizes="(min-width: 720px) 720px">
                                    <a href="">
                                        <figcaption>Lihat dengan mode Panorama</figcaption>
                                    </a>
                                </figure>
                                <p>{{ $alternative->keterangan }}</p>
                                <figure class="kg-card kg-gallery-card kg-width-wide kg-card-hascaption">
                                    <div class="kg-gallery-container">
                                        <div class="kg-gallery-row">
                                            <div class="kg-gallery-image"><img src="{{ asset('assets/content/images/2021/04/07-2.jpg') }}" width="1920" height="1585" loading="lazy" alt srcset="https://pathway.the9t9.com/content/images/size/w600/2021/04/07-2.jpg 600w, https://pathway.the9t9.com/content/images/size/w1000/2021/04/07-2.jpg 1000w, https://pathway.the9t9.com/content/images/size/w1600/2021/04/07-2.jpg 1600w, https://pathway.the9t9.com/content/images/2021/04/07-2.jpg 1920w" sizes="(min-width: 720px) 720px"></div>
                                            <div class="kg-gallery-image"><img src="{{ asset('assets/content/images/2021/04/08-2.jpg') }}" width="1920" height="1585" loading="lazy" alt srcset="https://pathway.the9t9.com/content/images/size/w600/2021/04/08-2.jpg 600w, https://pathway.the9t9.com/content/images/size/w1000/2021/04/08-2.jpg 1000w, https://pathway.the9t9.com/content/images/size/w1600/2021/04/08-2.jpg 1600w, https://pathway.the9t9.com/content/images/2021/04/08-2.jpg 1920w" sizes="(min-width: 720px) 720px"></div>
                                            <div class="kg-gallery-image"><img src="{{ asset('assets/content/images/2021/04/13-3.jpg') }}" width="1920" height="1585" loading="lazy" alt srcset="https://pathway.the9t9.com/content/images/size/w600/2021/04/13-3.jpg 600w, https://pathway.the9t9.com/content/images/size/w1000/2021/04/13-3.jpg 1000w, https://pathway.the9t9.com/content/images/size/w1600/2021/04/13-3.jpg 1600w, https://pathway.the9t9.com/content/images/2021/04/13-3.jpg 1920w" sizes="(min-width: 720px) 720px"></div>
                                        </div>
                                        <div class="kg-gallery-row">
                                            <div class="kg-gallery-image"><img src="{{ asset('assets/') }}content/images/2021/04/15-1.jpg" width="1920" height="1302" loading="lazy" alt srcset="https://pathway.the9t9.com/content/images/size/w600/2021/04/15-1.jpg 600w, https://pathway.the9t9.com/content/images/size/w1000/2021/04/15-1.jpg 1000w, https://pathway.the9t9.com/content/images/size/w1600/2021/04/15-1.jpg 1600w, https://pathway.the9t9.com/content/images/2021/04/15-1.jpg 1920w" sizes="(min-width: 720px) 720px"></div>
                                            <div class="kg-gallery-image"><img src="{{ asset('assets/content/images/2021/04/16-1.jpg') }}" width="1920" height="1648" loading="lazy" alt srcset="https://pathway.the9t9.com/content/images/size/w600/2021/04/16-1.jpg 600w, https://pathway.the9t9.com/content/images/size/w1000/2021/04/16-1.jpg 1000w, https://pathway.the9t9.com/content/images/size/w1600/2021/04/16-1.jpg 1600w, https://pathway.the9t9.com/content/images/2021/04/16-1.jpg 1920w" sizes="(min-width: 720px) 720px"></div>
                                        </div>
                                    </div>
                                    <figcaption>Beautiful places</figcaption>
                                </figure>
                                <figure class="kg-card kg-gallery-card kg-width-wide kg-card-hascaption">
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
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="entry-footer"></div>
                </div>
            </article>
        </div>
    </div>
    <!--~./ end main wrapper ~-->

    @include('components.footer')
</div>

@endsection