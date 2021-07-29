@include('header')
<div class="hero-wrap" style="background-image: url('images/header10.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <b class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span>Gallery</span></b>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Our Gallery</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-gallery">
    <div class="container">
        <div class="d-md-flex">
            @foreach($gallery as $i=>$g)
                @if(($i+1)<=4)
                    <a href="/storage/{{$g->image}}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(/storage/{{$g->image}});" title="{{$g->caption}}">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                @endif
            @endforeach
        </div>
        <div class="d-md-flex">
            @foreach($gallery as $i=>$g)
                @if(($i+1)<=8 && ($i+1)>4)
                    <a href="/storage/{{$g->image}}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(/storage/{{$g->image}});" title="{{$g->caption}}">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                @endif
            @endforeach
        </div>
        <div class="d-md-flex">
            @foreach($gallery as $i=>$g)
                @if(($i+1)<=12 && ($i+1)>8)
                    <a href="/storage/{{$g->image}}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(/storage/{{$g->image}});" title="{{$g->caption}}">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                @endif
            @endforeach
        </div>
    </div>
    <br>

</section>
<center>{{$gallery->links()}}</center>
<br><br>
@include('footer')

