@include('header')
<div class="hero-wrap" style="background-image: url('images/header12.JPG');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <b class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span>About</span></b>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 d-flex ftco-animate">
                <div class="img img-about align-self-stretch" style="background-image: url(images/about_1.jpg); width: 100%;"></div>
            </div>
            <div class="col-md-6 pl-md-5 ftco-animate">
                <h2 class="mb-4">Welcome to Life Development Centre</h2>
                <p>Life Development Centre (LDC) is an institution dedicated for the social service among persons living with intellectual disability in every possible aspect with genuine effort.</p>
                <p>Life Development Centre (‘Jeevan Utthan Kendra’ in Nepali) established in the year 1997 (2053 B.S), is a non-governmental, not-for-profit and non-political social organization, registered under District Administration Office and affiliated to Social Welfare Council started providing services with some seven children in the beginning. The centre has already passed its
                    @if(((string)(date('Y')-date('1997')))[1]==1)
                        {{date('Y')-date('1997')}}st
                    @elseif(((string)(date('Y')-date('1997')))[1]==2)
                        {{date('Y')-date('1997')}}nd
                    @elseif(((string)(date('Y')-date('1997')))[1]==3)
                        {{date('Y')-date('1997')}}rd
                    @else
                        {{date('Y')-date('1997')}}th
                    @endif
                    year of establishment with more than 30 children (we call everyone children) currently under residential care from 14 years to 55+ years old. Since its inception, the centre has been providing residential care and day-boarders (those attending the centre only for daytime) facilities. The residential facility has not only led children learn better in comparison to ‘just day-schooling’ but the parents also have the opportunity to work for their living or else one parent at least needs to be taking care of the child at home.</p>
                <p>Founded by Mr. Rajesh Krishna Manandhar and Mrs. Rekha Manandhar, Mrs. Rekha Manandhar has been working in this field since the time when service for persons with intellectual disability was first incepted in Nepal about 41 years ago by Late Fr. Adam B. Gudalefsky in Human And National Development Service (HANDS).</p>
            </div>
        </div>
        <br>
        <p>Children residing at the centre vary in terms of degree of disability (severe to mild) with/out other additional multiple impairments and disorders. In addition, there are a number of children who have epilepsy and who are non-verbal, hyperactive, hyper aggressive and have challenging behaviours. This makes the care much more demanding and special attention is required as the epileptic attack can happen anytime and anywhere that lasts from few seconds to few minutes. Such sudden attack can range from minor falling down to major serious injury accidents. Night time is even more crucial to be cared in regard to children with epilepsy. So the 24/7 team family members are with the children for round the clock care.                 </p>
                <p>Children from LDC visit back to their respective homes every month compulsorily i.e. last Friday of every Nepali month and they are back to school on Monday morning (three days in total). They also go home during ‘Dashain’ and ‘Tihar’ (the two greatest festivals in Nepal) holidays, summer vacation, winter vacation and when they are unwell. This is to make sure that connection of children are always maintained with their parents/family and on the other, the team members also have time for themselves as they are full time working 24/7 team family members (we take everyone as a big family at LDC home) residing at the centre to provide round the clock care. </p>
            
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center" style="margin-top: -70px;">
                <h2 class="mb-4">Inspiring Story About our Founders</h2>
                <b>Learn about the organisation from 'CONNECTION NEPAL',a fortnightly magazine, 16th November 2000 below,</b>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-6 pl-md-5 ftco-animate">

                <p>Working for mentally retarded and abnormal children and being with then for twenty four hours is not an easy task. It is perhaps more than a challenge and only altruistic, dedicated and hard working people could take up such a challenge.</p>

                <p>We are talking about Rekha and Rajesh Manandhar, husband and wife duo of Jivan Utthan Kendra, a home for mentally retarded and disabled children.</p>
                <p>Established in the year 2053 B.S. with some seven children, the Kendra has now more than forty two children from 4 years to 42 years old.</p>


                <p>"Father Gaffney and Father Adam, both S.J.s, inspired us to open this Kendra" says Rajesh and Rekha Manandhar, who have been in this field for the last twenty years.</p>
                <p>Rekha Manandhar joined HANDS, a home for the disabled and mentally retarded children, at a tender age of eighteen. "The work, which I learnt from Father Gaffney and Father Adam some twenty years back at HANDS, has helped me a lot to start here," she says. Since HANDS was run by foreigners, the then Panchayat government did not register the charity organisation and as a result, HANDS was taken by some Indian Sisters and Brothers, now known as Nava Jyoti Kendra .</p>
                <p>Since the Manandhars were accustomed to working with such children, they did not find it a Herculean task to run Kendra.</p>
                <p>"And now we have become a big family," they quip. The Manandhars have no children of their own and do not regret. "We are the proud parents of 42 children," they express with pride. "Unlike most husbands, my husband does not have any ill feelings towards me for not conceiving," she says. The Manandhars are worth praising for their unique endeavor in sharing love with the unloved ones. They sold their house for the sake of the Kendra. They have nothing left with then now except the mentally retarded children and a rented house in which they run their Jivan Utthan Kendra at Sitapaila, Kalanki.</p>


            </div>
            <div class="col-md-6 d-flex ftco-animate">
                <div href="/images/article.png" class="img img-about align-self-stretch" style="background-image: url(images/article.png); width: 100%;"></div>
                <br>
            </div>
        </div>
        <br>
        <div class="row d-flex">
            <div class="col-md-6 pl-md-6 ftco-animate">
            </div>
            <div class="col-md-5 pl-md-6 ftco-animate" style="text-align: right">
                <a target="_blank" href="/images/article.png">View Image</a>
            </div>
        </div>
        <br><br>
        <div class="row d-flex">
            <div class="col-md-6 d-flex ftco-animate">
                <div class="img img-about align-self-stretch" style="background-image: url(images/cer.png); width: 100%;"></div>
            </div>
            <div class="col-md-6 pl-md-5 ftco-animate">
                <p>When they were young, Mr. Manandhar was a football coach and an employee at Gorkhapatra Sansthan and Ms. Manandhar was a teacher at HANDS. Later Mr. Manandhar joined HANDS and met Ms. Manandhar where they understood each other's feelings resulting in a happy intercast, love marriage.</p>
                <p>When asked how they manage the Kendra, they replied that the main source of income is the fee from the student. And with the fee, they have to meet all the expenses including the staff salary. The Kendra has eleven staff including the Manandhars themselves. "We have no other source of income and we are doing our best," they state. Besides, there are also some free students.</p>

                <button href="#" onclick="showMore()" id="showBtn" class="btn btn-primary">Show More</button>
            </div>
        </div>
        <br>
        <div class="row d-flex">
            <div class="col-md-6 pl-md-6 ftco-animate">
                <a target="_blank" href="/images/cer.png">View Image</a>
            </div>
        </div>

        <div id="hidden" style="display: none; margin-top: 50px;" class="ftco-animate">
            <p>According to them, in recent times, Merit Mudler of Holland donated some toys and equipment, and Madan Krishna Shrestha, Hari Bansha Acharya and Kailash Dewan jointly donated exercising machine and a water tank. "We do not accept cash donations but equipment and other things are most appreciated," they say, "because we do not want people to pinpoint us."</p>
            <p>The Manandhars are sad with the way the Social Welfare Council (Samaj Kalyan Parishad) is working.</p>
            <p>Citing an example of the Council's negligence, Mr. Manandhar noted that the Council did not heed to his application in which he requested the Council to make a thorough inspection and cross-check before giving donation to social organisation to stop the misuse o funds. "The Council neither came to us not has donated a single penny." he complains. "We don't know what type of social organisation is liable to get the fund," he quips.</p>
            <p>They give a twist to their story coming to the children's front. According to them, mentally retarded children and disabled children should not be discriminated as what most of the people including parents do. They also need affection and love. Mr. Manandhar, cited and example of discrimination by the authority in an event organized by Nepal Para Olympics, saying that the name of his Kendra was removed despite Mr. Manandhar's name in the committee. As a result, the children were not provided with lunch. "After a log and heated discussion, lunch was then provided to our children," he said.</p>
            <p>The mentally retarded children at the Kendra have proved that they can make an earning by doing something creative if they are properly guided. They make candles commercially. The Manandhars have a message for all: "The only difference between those children and us, is that, we are a bit faster and they are a bit slower. Under no circumstances should parents discriminate their children.</p>
        </div>

    </div>
</section>

<script type="text/javascript">
    function showMore(){
        if(document.getElementById('showBtn').innerHTML=="Show More"){
            document.getElementById("hidden").style.display="block";
            document.getElementById("showBtn").innerHTML="Hide";
        }
        else {
            document.getElementById("hidden").style.display="none";
            document.getElementById("showBtn").innerHTML="Show More";
        }
    }
</script>

@include('footer')
