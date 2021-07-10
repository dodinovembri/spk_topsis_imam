@extends('layouts.app')

@section('content')

@include('components.loader')

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
                                                        <?php foreach ($criterias as $key => $value) { ?>
                                                            <select name="criterias[]" id="" class="form-control" style="margin-top: 10px;" required>
                                                                <option value="">{{ $value->nama_kriteria }}</option>
                                                                <?php foreach ($value->criterion_value as $key2 => $value2) { ?>
                                                                    <option name="criterion_value" value="{{ $value->id }}#{{ $value2->nilai }}" class="fomr-control">{{ $value2->keterangan }}</option>
                                                                <?php } ?>
                                                            </select>
                                                        <?php } ?>
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

@endsection