<!-- Testimonials Ends Here -->
<!-- Footer Starts Here -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="footer-item">
                    <div class="footer-heading">
                        <img src="assets/images/logo.png"></a>
                        <h4 class="footer-brandname">OSCL - Overseas Study Counseling Ltd.</h4>
                    </div>
                    <p>Overseas study counseling limited was officially inaugurated on 14th February 1996, with an aim to open the door for students to greater opportunities.</p>
                    <div class="social">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-instagram"></i>
                        <i class="fa fa-linkedin"></i>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
{{--                <div class="footer-item">--}}
{{--                    <div class="footer-heading">--}}
{{--                        <h2>Useful Links</h2>--}}
{{--                    </div>--}}
{{--                    <ul class="footer-list">--}}
{{--                        <li><a href="#">Home</a></li>--}}
{{--                        <li><a href="#">Who We Are</a></li>--}}
{{--                        <li><a href="#">Latest Updates</a></li>--}}
{{--                        <li><a href="#">Book Appointment</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="footer-item">
                    <div class="footer-heading">
                        <h2>More Information</h2>
                    </div>
                    <ul class="footer-list">
                        <li>Phone: <a href="tel:09611600500">09611600500</a></li>
                        <li>Email: <a href="mailto:info@oscl.io">info@oscl.io</a></li>
                        <li>Support: <a href="mailto:support@oscl.io">support@oscl.io</a></li>
                        <li>Address: <a href="#">Dhaka, Bangladesh</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <div class="sub-footer">
                    <p>Copyright &copy; 2022 OSCL - Overseas Study Counseling Ltd.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Ends Here -->

<!-- Bootstrap core JavaScript -->
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Additional Scripts -->
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/owl.js')}}"></script>
<script src="{{asset('assets/js/accordions.js')}}"></script>


<script language = "text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
        }
    }
</script>
