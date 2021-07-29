@include('header')
<div class="hero-wrap" style="background-image: url('images/main_bg.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" style="color: #ffffff" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">People with intellectual disability should not be discriminated as what most do.</h1>

            </div>
        </div>
    </div>
</div>

<section class="ftco-counter ftco-intro" id="section-counter">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 color-3 align-items-stretch">
                    <div class="text">
                        <h3 class="mb-4">What is Intellectual Disability?</h3>
                        <p>Get knowledge on intellectual disability.</p>
                        <p><a href="/intellectualDisability" class="btn btn-white px-3 py-2 mt-2">Learn Now</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 color-2 align-items-stretch">
                    <div class="text">
                        <h3 class="mb-4">About Us</h3>
                        <p>Find out more about our organisation and people who run it.</p>
                        <p><a href="/about" class="btn btn-white px-3 py-2 mt-2">Learn More</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>





<style>
    .svg{
        width: 10px;
        height: 10px;
    }
</style>

<section class="section" style="margin-top: 35px;">

    <div class="container-fluid">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-5 heading-section ftco-animate text-center">
                <h2 class="mb-4">Objectives</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 ftco-animate">
                    @foreach($obj as $k=>$pr)
                        <div class="comment-body">
                            <h3>{{$k+1}}. <u><i>{{$pr->title}}</i></u></h3>
                            <p style="color: black; margin-left: 15px;">{!! nl2br(e($pr->description)) !!}</p>
                        </div>
                        <br>
                    @endforeach
                </div> <!-- .col-md-12 -->
            </div>
            <br>
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-5"></div>
                <div class="col-md-2"><a href="/objective" class="btn btn-primary">View All Objectives</a></div>
            </div>
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
</section>

<section class="ftco-section-3 img" style="background-image: url(images/idk2.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex">
            <div class="col-md-6 d-flex ftco-animate">
                <div class="img img-2 align-self-stretch" style="background-image: url(images/idk.jpg);"></div>
            </div>
            <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                <h3 class="mb-3">Send us A Message</h3>
                <form action="#" class="volunter-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@include('footer')
