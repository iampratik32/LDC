@include('header')

<div class="hero-wrap" style="background-image: url('/images/header8.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <b class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span>Contact</span></b>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            @if($msg==true)
                <b style="color:#28a745;">Your Mail has been Sent.</b>
            @endif
            <div class="col-md-12 mb-4">
                <h2 class="h4">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-4">
                <p><span>Address:</span> Salambutar, Sankhu<br> Kathmandu, Nepal</p>
            </div>
            <div class="col-md-4">
                <p><span>Email:</span> <a href="mailto:centreldc@gmail.com">centreldc@gmail.com</a></p>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-6 pr-md-5">
                <h4 class="mb-4">Do you have any questions?</h4>
                <form action="/send" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="Name" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="Email" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" name="Subject" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="Message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-md-6">
                <iframe id="gmap_canvas" height="450px" width="450px" src="https://maps.google.com/maps?q=27.725589, 85.455170&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
            </div>
        </div>
    </div>
</section>

@include('footer')
