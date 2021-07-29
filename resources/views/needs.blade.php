@include('header')
<div class="hero-wrap" style="background-image: url('images/header5.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <b class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span>Needs</span></b>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Needs</h1>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section">
    <div class="container-fluid">
        <div class="row justify-content-center mb-5 pb-3" style="margin-top: -30px;">
            <div class="col-md-5 heading-section ftco-animate text-center">
                <h2 class="mb-4">Our Needs</h2>
            </div>
        </div>
        <div class="container" style="margin-top: -20px;">
            <p>LDC relies on the fees that the parents pay. Not every parent is able to pay full fees. Some pay full, while some pay half and some pay less than the half amount. LDC receives some contributions made from interested contributors.  With all these, the centre has to run and meet all the expenses. </p>
            <p>The prime and foremost current need has been to increase the salary incentive and allowance who are 24/7 full working team family members (we take everyone as a big family at LDC home). The 24/7 team family members  do all the works whether be it teaching, training, feeding, taking care round the clock, cleaning, cleaning aspects of toileting and overall hygiene of children, feeding, washing, bathing, etc. </p>
            <p>Other needful heads include:</p><br>
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
            <p>No one is ever turned away from the centre because of the inability to pay fees for the residential care the children receive at LDC. This makes contribution even more necessary!</p>
            <p>For more details or if you have any question whatsoever about LDC and our children or wish to contribute, we will be pleased to hear from you.</p>
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
