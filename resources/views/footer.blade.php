<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<footer class="ftco-footer ftco-section img">
    <div class="overlay"></div>
    <div class="container">
        <div class="row mb-6">
            <div class="col-md-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">About Us</h2>
                    <p>Life Development Centre (LDC) is an institution dedicated for the social service among persons living with intellectual disability in every possible aspect with genuine effort.</p>

                </div>
            </div>

            <div class="col-md-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Recent Images</h2>
                    @foreach(\Illuminate\Support\Facades\DB::table('galleries')->where('shown','=',true)->orderByDesc('id')->limit(2)->get() as $g)
                        <div class="block-21 mb-4 d-flex">
                            <a href="/gallery" class="blog-img mr-4" style="background-image: url(storage/{{$g->image}});"></a>
                            <div class="text">
                                <h3 class="heading"><a href="/gallery">{{$g->caption}}</a></h3>
                                <div class="meta">
{{--                                    <div><span class="icon-calendar"></span> {{$g->created_at}}</div>--}}
{{--                                    <div><a href="#"><span class="icon-camera"></span> {{$g->category}}</a></div>--}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Find Us</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">Salambutar, Sankhu, Kathmandu, Nepal</span></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">centreldc@gmail.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-1" style="visibility: hidden">
                <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=45a9b50d23c4ff4e3d379746270cda3ae480409f'></script>
                <script type="text/javascript" src="https://freevisitorcounters.com/en/home/counter/756649/t/4"></script>
            </div>
        </div>
    </div>

</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="/js/jquery.min.js"></script>
<script src="/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/jquery.stellar.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/aos.js"></script>
<script src="/js/jquery.animateNumber.min.js"></script>
<script src="/js/bootstrap-datepicker.js"></script>
<script src="/js/jquery.timepicker.min.js"></script>
<script src="/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="/js/google-map.js"></script>
<script src="/js/main.js"></script>

<script>
    function doThis(){
        document.getElementById("error_45a9b50d23c4ff4e3d379746270cda3ae480409f").style.display="none";
    }
    window.onload = doThis;
</script>

<script type="text/javascript">
    mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 365 || document.documentElement.scrollTop > 365) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>

</body>
</html>
