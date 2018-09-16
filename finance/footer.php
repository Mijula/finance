		
	</div> <!-- /.wrapper end -->
	<!-- Page structure end 
	================================================== -->
	<!-- core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="dist/js/jquery.js"></script>
	<script src="dist/js/bootstrap.min.js"></script>
	<script src="dist/js/owl.carousel.min.js"></script>
	<script src="dist/js/custom.js"></script>
	<script type="text/javascript">
		$('.testimonial').owlCarousel({
			loop:true,
			margin:10,
			nav:false,
			dots: true,
			autoplay: true,
			navText: [
				"<i class='fa fa-chevron-left'></i>",
				"<i class='fa fa-chevron-right'></i>"
			],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1000:{
					items:1
				}
			}
		});
	</script>
</body>
</html>