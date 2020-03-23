
	<!--   being decent   -->
	<nav id="groundhog" class="hog"><a href="/">JK</a></nav>
	@yield('extra-nav')

	<script src="{{ mix('*__*/global.js', '') }}"></script>
	<!-- https://github.com/aFarkas/lazysizes -->
	<script src="{{ mix('*__*/lazysizes.min.js', '') }}"></script>

	@yield('extra-scripts')

	</body>

</html>
