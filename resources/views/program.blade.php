@include('header')
<div class="hero-wrap" style="background-image: url('images/header4.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <b class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span>Programmes</span></b>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Programmes</h1>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section">
    <div class="container-fluid">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-5 heading-section ftco-animate text-center">
                <h2 class="mb-4">Programmes</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate" style="margin-top: -30px;">
                    @foreach($obj as $k=>$pr)
                        <div class="comment-body">
                            <h3>{{$k+1}}. <u><i>{{$pr->title}}</i></u></h3>
                            <p style="color: black; margin-left: 15px;">{!! nl2br(e($pr->description)) !!}</p>
                        </div>
                        <br>
                    @endforeach
                </div> <!-- .col-md-12 -->
            </div>
            <p>At LDC, we continue to strive improving our services and programmes that ensure our children have overall development and have a meaningful life. </p>

        </div>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="carousel-cause owl-carousel">
                        @foreach($gallery as $p)
                            <div class="item">
                                <div class="cause-entry">
                                    <a target="_blank" href="/storage/{{$p->image}}" class="img" style="background-image: url(/storage/{{$p->image}});"></a>
                                    <div class="text p-3 p-md-4">
                                        <p>{{$p->caption}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@include('footer')
