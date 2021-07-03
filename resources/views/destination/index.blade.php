@extends('layouts.app')
<script src="{{ asset('assets/photo_sphere/three.min.js') }}"></script>
<script src="{{ asset('assets/photo_sphere/photo-sphere-viewer.min.js') }}"></script>
<style>
    html,
    body {
        margin: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    #container {
        width: 100%;
        height: 100%;
    }
</style>

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
        <div id="container" style="height: 85%;"></div>

        <script>
            var div = document.getElementById('container');
            var PSV = new PhotoSphereViewer({
                panorama: 'http://tassedecafe.org/wp-content/uploads/2013/01/parc-saint-pierre-amiens.jpg',
                container: div,
                time_anim: 3000,
                navbar: true,
                navbar_style: {
                    backgroundColor: 'rgba(58, 67, 77, 0.7)'
                },
            });
        </script>
    </div>
</div>

@endsection