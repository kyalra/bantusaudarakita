<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/popper.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<!-- <script src="vendors/lightbox/simpleLightbox.min.js"></script> -->
	<script src="{{asset('vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<!-- <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script> -->
	<script src="{{asset('vendors/isotope/isotope-min.js')}}"></script>
	<script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
	<!-- <script src="vendors/counter-up/jquery.waypoints.min.js"></script> -->
	<!-- <script src="vendors/flipclock/timer.js"></script> -->
	<!-- <script src="vendors/counter-up/jquery.counterup.js"></script> -->
	<script src="{{asset('js/mail-script.js')}}"></script>
	<script src="{{asset('js/custom.js')}}"></script>
	<script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>

