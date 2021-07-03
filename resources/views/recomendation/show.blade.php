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
                        <div class="top-meta d-flex">
                            <div class="entry-category">
                                <a href="../tag/getting-started/index.html" class="tag tag- getting-started">Outdoor</a>
                            </div>
                            <div class="entry-date">
                                <span><time class="byline-meta-date" datetime="Apr-18-2021">April 18 -
                                        2021</time></span>
                            </div>
                        </div>

                        <h1 class="entry-title">Start here for a quick overview everything you need to know</h1>

                        <div class="custom-single-excerpt mrb-60">
                            <p class="post-full-custom-excerpt">We&#x27;ve crammed the important of a information to
                                help you get started with Ghost into this one post. </p>
                        </div>

                        <div class="entry-meta-content">
                            <div class="entry-author">
                                By - <a href="../author/ghost/index.html">Johan Doe</a>
                            </div>
                            <div class="byline-meta-content">
                                <span class="byline-reading-time">3 min read</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="post-thumbnail-area single-post-thumbnail">
                    <figure class="post-thumb" style="background-image: url({{ asset('assets/content/images/size/w2000/2021/04/05.jpg') }})">
                        <img src="{{ asset('assets/content/images/size/w2000/2021/04/05.jpg') }}" alt="Start here for a quick overview everything you need to know" />
                    </figure>
                </div>

                <div class="container">
                    <div class="post-details">
                        <div class="social-network">
                            <ul class="social-share">
                                <li><a onclick="window.open(this.href, 'pop-up', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" href="https://www.facebook.com/sharer/sharer.php?u=https://pathway.the9t9.com/welcome/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a onclick="window.open(this.href, 'pop-up', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" href="https://twitter.com/share?text=Start%20here%20for%20a%20quick%20overview%20everything%20you%20need%20to%20know&amp;url=https://pathway.the9t9.com/welcome/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a onclick="window.open(this.href, 'pop-up', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" href="https://pinterest.com/pin/create/button/?url=Start%20here%20for%20a%20quick%20overview%20everything%20you%20need%20to%20know&amp;url=https://pathway.the9t9.com/welcome/"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a onclick="window.open(this.href, 'pop-up', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=Start%20here%20for%20a%20quick%20overview%20everything%20you%20need%20to%20know&amp;url=https://pathway.the9t9.com/welcome/"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul><!-- /.social-share -->
                        </div>

                        <div class="entry-content">
                            <div class="all-contents">
                                <p>Unlike social networks, this one is all yours. Publish your work on a custom
                                    domain, invite your audience to subscribe, send them new content by email
                                    newsletter, and offer for the premium subscriptions to generate sustainable
                                    recurring revenue to fund your work.</p>
                                <p>Sin tantum modo ad indicia veteris memoriae cognoscenda, curiosorum. Haec et tu
                                    ita posuisti, et verba ves sunte. Idemne potest esse dies saepius, qui semel
                                    fuit? Ampulla enim sit necne sit, quis non iure optimo irrideatur edstide
                                    silaboret? Ego vero volo in virtute vim esse quam maximam; Serpere anguiculos,
                                    nare anaticulas, evolare merulase, cornibus uti videmus boves, nepas aculeis.
                                    Conferam tecum, quam cuique verso rem subicias; Si longus, levis. In an qua quid
                                    est boni praeter summam voluptatem, et eam cur post. Tarentum ad Archytam? Qua
                                    ex cognitione facilior facta est investigatio rerum occultissimarum. Natura sic
                                    ab iis investigata est, ut nulla pars caelo deinde optimum.</p>
                                <figure class="kg-card kg-image-card kg-card-hascaption"><img src="{{ asset('assets/content/images/2021/04/12-2.jpg') }}" class="kg-image" alt loading="lazy" width="1920" height="1104" srcset="https://pathway.the9t9.com/content/images/size/w600/2021/04/12-2.jpg 600w, https://pathway.the9t9.com/content/images/size/w1000/2021/04/12-2.jpg 1000w, https://pathway.the9t9.com/content/images/size/w1600/2021/04/12-2.jpg 1600w, https://pathway.the9t9.com/content/images/2021/04/12-2.jpg 1920w" sizes="(min-width: 720px) 720px">
                                    <figcaption>Dreams come true</figcaption>
                                </figure>
                                <p>Ego quoque, inquit, didicerim libentius si quid attuleris, quam te reprehenderim.
                                    Iam insipientes alios ita esse, ut nullo modo ad sapientiam possent pervenire,
                                    alios, qui possent, si id egissent, sapientiam consequi. Id quaeris, inquam, in
                                    quo, utrum respondero, verses te huc atque illuc necesse est. Calatino quae
                                    plurimas amico disputari.</p>
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
                                <p>Disputari quid boni praeter summam voluptatem, et eam sempiternam. Cur post
                                    Tarentum ad Archytam. Qua extras cognitione facilior facta est investigatio
                                    rerum occultissimarum. Negat enim tenuissimo victu, id establish penomin
                                    contemptissimis escis et potionibus, minorem voluptatem percipi quam rebus
                                    exquisitissimis ad epulandum. Non enim iam stirpis bonum quaeret, sed animalis.
                                    Qui autem esse poteris, nisi te amor ipse ceperit? Sic igitur in homine
                                    perfectio ista in eo potissimum, quod est optimum, id est in virtute, laudatur.
                                    Natura sic ab iis investigata est, nulla pars caelo, mari, terra, ut poëtice
                                    loquar, praetermissa sit; Eadem nunc mea adversum te oratio est. Mihi quidemts
                                    Homerus huius modi quiddamyui vidisse videatur in iis, quae de Sirenum cantibus
                                    finxerit. Quae quidem sapientes sequuntur duce natura tamquam videntes, quae
                                    quidem sapientes sequuntur.</p>
                                <blockquote>The longer I live, the more I realize that I am never wrong about
                                    anything, and that all the pains I have so humbly taken to verify my notions
                                    have only wasted my time!</blockquote>
                                <p>In omni enim arte vel studio vel quavis scientia vel in ipsa virtute optimum ents
                                    quidque rarissimum est. Quod est, ut dixi, habere ea, quae secundum naturam
                                    sint, vel omnia vel plurima et maxima. Quodsi ipsam honestatem pertectam atque
                                    absolutam. Tecum optime, deinde etiam cum mediocri amico. Neque disputari sine
                                    reprehensione nec cum iracundia aut pertinacia recte disputari potest. An,
                                    partus ancillae sitne in fructu habendus, disseretur inter principes civitatis,
                                    P. Ut in geometria, prima si dederis, danda sunt omnia. </p>
                                <figure class="kg-card kg-embed-card"><iframe width="200" height="113" src="https://www.youtube.com/embed/K-GmHyPrwyg?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></figure>
                                <p>Ego quoque, inquit, didicerim libentius si quid attuleris, quam te reprehenderim.
                                    Iam insipientes alios ita esse, ut nullo modo ad sapientiam possent pervenire,
                                    alios, qui possent, si id egissent, sapientiam consequi. Id quaeris, inquam, in
                                    quo, utrum respondero, verses te huc atque illuc necesse est. Sed quid ages
                                    tandem, si utilitas ab amicitia, ut fit saepe, defecerit? Sed isti ipsi, qui
                                    voluptate et dolore omnia metiuntur, nonne clamant sapienti plus semper adesse
                                    quod velit quam quod nolit? Quae quidem sapientes sequuntur duce natura tamquam
                                    videntes; Quod enim dissolutum sit, id esse sine sensu, quod autem sine sensu
                                    sit, id nihil ad nos pertinere omnino. Idne consensisse de Calatino plurimas
                                    gentis arbitramur, primarium populi fuisse, quod praestantissimus fuisset in
                                    conficiendis voluptatibus? Utram tandem linguam nescio, quod dicit epicurus
                                    etiam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="entry-footer"></div>
                </div>
            </article>

            <div class="container">
                <div class="related-posts-block">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="related-title">Related Posts</h3>
                        </div>
                    </div>

                    <div class="row" id="post-masonry-single">
                        <div class="col-lg-4 post-loop odd">
                            <article class="post tag-getting-started post-grid-style post-grid-style-two mrb-60">
                                <div class="entry-thumb">
                                    <figure class="thumb-wrap">
                                        <a href="../design/index.html">
                                            <img class="post-card-image" src="{{ asset('assets/content/images/size/w360/2021/04/06-1.jpg') }}" loading="lazy" alt="Customizing a brand and design settings is awesome experience" />
                                        </a>
                                    </figure>
                                    <!--./ thumb-wrap -->
                                </div>
                                <!--./ entry-thumb -->
                                <div class="content-entry-wrap">
                                    <div class="entry-category">
                                        <a href="../tag/getting-started/index.html" class="tag tag- getting-started">Outdoor</a>
                                    </div>
                                    <!--./ entry-category -->
                                    <h3 class="entry-title">
                                        <a href="../design/index.html">
                                            Customizing a brand and design settings is awesome experience
                                        </a>
                                    </h3>
                                    <!--./ entry-title -->
                                    <div class="entry-user">
                                        <div class="info">
                                            <div class="author-name">
                                                <span>By - <a href="../author/ghost/index.html">Johan Doe</a></span>
                                                / <span><time datetime="2021-04-18">18 Apr 2021</time></span>
                                            </div>
                                            <!--./ entry-time -->
                                        </div>
                                    </div>
                                    <div class="entry-content">
                                        <p>How to tweak few settings in Ghost to transform your site from generic
                                            template to a custom brand.</p>
                                    </div>
                                    <div class="entry-footer">
                                        <a href="../design/index.html" class="more-links">Continue Reading -</a>
                                    </div>
                                </div>
                                <!--./ content-entry-wrap -->
                            </article>
                        </div>
                        <div class="col-lg-4 post-loop even">
                            <article class="post tag-getting-started post-grid-style post-grid-style-two mrb-60">
                                <div class="entry-thumb">
                                    <figure class="thumb-wrap">
                                        <a href="../write/index.html">
                                            <img class="post-card-image" src="{{ asset('assets/content/images/size/w360/2021/04/07-1.jpg') }}" loading="lazy" alt="Writing and managing content in Ghost, and advanced guide" />
                                        </a>
                                    </figure>
                                    <!--./ thumb-wrap -->
                                </div>
                                <!--./ entry-thumb -->
                                <div class="content-entry-wrap">
                                    <div class="entry-category">
                                        <a href="../tag/getting-started/index.html" class="tag tag- getting-started">Outdoor</a>
                                    </div>
                                    <!--./ entry-category -->
                                    <h3 class="entry-title">
                                        <a href="../write/index.html">
                                            Writing and managing content in Ghost, and advanced guide
                                        </a>
                                    </h3>
                                    <!--./ entry-title -->
                                    <div class="entry-user">
                                        <div class="info">
                                            <div class="author-name">
                                                <span>By - <a href="../author/ghost/index.html">Johan Doe</a></span>
                                                / <span><time datetime="2021-04-18">18 Apr 2021</time></span>
                                            </div>
                                            <!--./ entry-time -->
                                        </div>
                                    </div>
                                    <div class="entry-content">
                                        <p>A full overview of all the features of built into the Ghost editor,
                                            including powerful workflow automations.</p>
                                    </div>
                                    <div class="entry-footer">
                                        <a href="../write/index.html" class="more-links">Continue Reading -</a>
                                    </div>
                                </div>
                                <!--./ content-entry-wrap -->
                            </article>
                        </div>
                        <div class="col-lg-4 post-loop odd">
                            <article class="post tag-getting-started post-grid-style post-grid-style-two mrb-60">
                                <div class="entry-thumb">
                                    <figure class="thumb-wrap">
                                        <a href="../portal/index.html">
                                            <img class="post-card-image" src="{{ asset('assets/content/images/size/w360/2021/04/08-1.jpg') }}" loading="lazy" alt="Building an audience with subscriber and also signups" />
                                        </a>
                                    </figure>
                                    <!--./ thumb-wrap -->
                                </div>
                                <!--./ entry-thumb -->
                                <div class="content-entry-wrap">
                                    <div class="entry-category">
                                        <a href="../tag/getting-started/index.html" class="tag tag- getting-started">Outdoor</a>
                                    </div>
                                    <!--./ entry-category -->
                                    <h3 class="entry-title">
                                        <a href="../portal/index.html">
                                            Building an audience with subscriber and also signups
                                        </a>
                                    </h3>
                                    <!--./ entry-title -->
                                    <div class="entry-user">
                                        <div class="info">
                                            <div class="author-name">
                                                <span>By - <a href="../author/ghost/index.html">Johan Doe</a></span>
                                                / <span><time datetime="2021-04-18">18 Apr 2021</time></span>
                                            </div>
                                            <!--./ entry-time -->
                                        </div>
                                    </div>
                                    <div class="entry-content">
                                        <p>How Ghost allows to turn your blog anonymous readers into audiences of
                                            active subscribers, so you know.</p>
                                    </div>
                                    <div class="entry-footer">
                                        <a href="../portal/index.html" class="more-links">Continue Reading -</a>
                                    </div>
                                </div>
                                <!--./ content-entry-wrap -->
                            </article>
                        </div>
                    </div>
                </div>


                <div id="comments" class="comments-area comments-area">
                    <div class="post-comment-box mrl-15 mrr-15">
                        <script>
                            (function() { // DON'T EDIT BELOW THIS LINE
                                var d = document,
                                    s = d.createElement('script');
                                s.src = '../../easyartghost-the9t9-com.disqus.com/embed.js';
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                            })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                        <div id="disqus_thread" class="disqus_comment_box"></div>
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