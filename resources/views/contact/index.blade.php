@extends('layouts.app')

@section('content')


@include('components.loader')

<div class="site-content">

    @include('components.header')

    <div class="main-wrapper bg-white">
        <div class="container pd-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main-wrapper-content style-one">
                        <div>
                            <h3 style="text-align: center;">Contact Us</h3>
                        </div>
                        <main class="site-main ">
                            <article class="post style-four post-full post no-image page no-image">

                                <div class="entry-content">
                                    <div class="entry-summary">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8">
                                                <div class="contact-form">
                                                    <form class="row" action="https://formspree.io/domain@gmail.com" method="POST" id="contact-form">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <div class="input-wrapper">
                                                                    <label>Your Name</label>
                                                                    <input name="user" type="text" class="form-control" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <div class="input-wrapper">
                                                                    <label>Email Address</label>
                                                                    <input type="email" name="email" class="form-control" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <div class="input-wrapper">
                                                                    <label>Subject</label>
                                                                    <input name="subject" type="text" class="form-control" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <div class="input-text-form">
                                                                    <label>Message</label>
                                                                    <textarea class="form-control" name="message" cols="10" rows="10" equired></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="signin-btn mb-30 text-center">
                                                                <button type="submit" class="btn btn-primary btn-cus-siz mt-20">Send
                                                                    Message</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </main>
                    </div>
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