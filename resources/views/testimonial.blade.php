@include('header')
<div class="hero-wrap" style="background-image: url('images/header11.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <b class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span>Testimonials</span></b>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Testimonials</h1>
            </div>
        </div>
    </div>
</div>

<style>

    .modal-body {
        background-color: #3c312e;
    }

    .intro-1 {
        font-size: 17px
    }

    .close {
        color: #ffffff
    }

    .close:hover {
        color: #fff
    }

    .intro-2 {
        font-size: 14px
    }

    .card-strip {
        background-color: #fff;
        padding: 25px;
        width: 950px;
        margin: 20px auto;
        border-radius: 3px;
        box-shadow: 0px 8px 16px 0px #E0E0E0
    }

    .dark-text {
        color: #000
    }

    .extended-title {
        color: #757575;
        background-color: #E0E0E0;
        padding: 1px 5px
    }

    .v-line {
        width: 1px;
        background-color: #E0E0E0;
        margin-right: 50px
    }


    .price-fall {
        font-size: 17px
    }

    .btn-orange {
        background-color: #FF9800;
        color: #fff
    }

    @media screen and (max-width: 1012px) {
        .card-strip {
            width: 100%
        }
    }

    @media screen and (max-width: 859px) {
        .v-line {
            display: none
        }

        .price {
            width: 100%;
            margin-left: 95px
        }
    }

    @media screen and (max-width: 529px) {
        .price {
            margin-left: 0px
        }
    }

</style>

<section class="ftco-section">
    <div class="container-fluid">
        <div class="row justify-content-center mb-5 pb-3" style="margin-top: -30px;">
            <div class="col-md-5 heading-section ftco-animate text-center">
                <h2 class="mb-4">Testimonials</h2>
            </div>
        </div>
        <div class="container" style="margin-top: -100px;">
            <div class="container-fluid px-1 px-sm-4 py-5 mx-auto">
                @foreach($ga as $g)
                    <div class="row d-flex justify-content-start card-strip">
                        <div class="info">
                            <div class="row px-3 mb-2">
                                <h4 class="dark-text mr-4">{{$g->name}}</h4>
                                <p class="mt-1 mr-4 extended-title">{{$g->country}}</p>
                            </div>
                            <div class="row px-3">
                                @if(strlen($g->description)>85)
                                    {!! nl2br(e(substr($g->description,0,85))) !!} ...
                                @else
                                    {!! nl2br(e($g->description)) !!}
                                @endif
                            </div>
                            <br>
                            <button type="button" class="btn btn-primary launch ftco-animate" data-toggle="modal" data-target="#{{$g->id}}" onclick="blur()">Read More</button>
                            <div class="modal fade" id="{{$g->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="{{$g->id}}Label" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="text-right"> <i class="fa fa-close close" data-dismiss="modal"></i> </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="text-center mt-5">
                                                        @if($g->image!=null)
                                                            <img src="/storage/{{$g->image}}" style="max-width: 300px; height: auto; width: auto">
                                                        @else
                                                            <img src="/images/no.png" style="max-width: 200px; max-height: 200px; height: auto; width: auto">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="text-white mt-5">
                                                            @if($g->purpose!=null)
                                                            <h1 class="mb-0" style="color: #f7fafc; display: inline">{{$g->name}}</h1><h4 style="display: inline; margin-left: 10px; color: #c09853">({{$g->date}} - {{$g->purpose}})
                                                            @else
                                                            <h1 class="mb-0" style="color: #f7fafc; display: inline">{{$g->name}}</h1><h4 style="display: inline; margin-left: 10px; color: #c09853">({{$g->date}})
                                                            @endif

                                                        </h4> <span class="intro-1">{{$g->country}}</span>
                                                        <div class="mt-4">
                                                            <span class="intro-2">
                                                                <p style="color:#ffffff;"> {!! nl2br(e($g->description)) !!}</p>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if($g->image!=null)
                            <div class="v-line ml-auto"></div>
                            <div class="price">
                                <img src="/storage/{{$g->image}}" style="max-width: 200px; max-height: 200px; height: auto; width: auto">
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
            <center>
                {{$ga->links()}}
            </center>
        </div>
    </div>
</section>

@include('footer')
