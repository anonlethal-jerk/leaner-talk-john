
	<!--   being decent   -->
	<nav id="groundhog" class="hog"><a href="/">JK</a></nav>

	<script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
	<script>window.jQuery || document.write('<script src="{{ mix('*__*/jquery-3.4.0.min.js', '') }}"><\/script>')</script>
	<script src="{{ mix('*__*/global.js', '') }}" async=""></script>
	<script src="{{ mix('*__*/tables.js', '') }}" async=""></script>
	<script src="{{ mix('*__*/image_viewer.js', '') }}" async=""></script>

	<!-- https://github.com/aFarkas/lazysizes -->
	<script src="{{ mix('*__*/lazysizes.min.js', '') }}" async=""></script>

	@yield('extra-scripts')

	</body>

</html>
