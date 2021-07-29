@include('header')
<div class="hero-wrap" style="background-image: url('images/header6.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <b class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span>Help</span></b>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Help</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container-fluid">
        <div class="row justify-content-center mb-5 pb-3" style="margin-top: -30px;">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">SIGNIFICANT HELP/CONTRIBUTIONS WE RECEIVED</h2>
            </div>
        </div>
        <div class="container" style="margin-top: -20px;">
            @foreach(\App\Models\Help::all() as $k=>$help)
                @if($k==1 || $k==0)
                    <p style="color: black">{{$help->description}}</p>
                @endif
            @endforeach
        </div>
    </div>
    <br>
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
    <br>
    <div class="container">
        @foreach(\App\Models\Help::all() as $k=>$help)
            @if($k>1)
                <p style="color: black">{{$help->description}}</p>
            @endif
        @endforeach
    </div>
</section>


@include('footer')
