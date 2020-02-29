let mix = require('laravel-mix');
let build = require('./tasks/build.js');

mix.disableSuccessNotifications();
mix.setPublicPath('source/');
mix.webpackConfig({
	plugins: [
		build.jigsaw,
		build.browserSync(),
		build.watch([
			'source/**/*.md',
			'source/**/*.php',
			'source/**/*.scss',
			'!source/**/_tmp/*'
		]),
	]
});

mix.js('source/_assets/js/jquery-3.4.0.min.js', '*__*/jquery-3.4.0.min.js')
	.js('source/_assets/js/lazysizes.min.js', '*__*/lazysizes.min.js')
	.js('source/_assets/js/home.js', '*__*/home.js')
	.js('source/_assets/js/global.js', '*__*/global.js')
	.js('source/_assets/js/tables.js', '*__*/tables.js')
	.js('source/_assets/js/boxbots.js', '*__*/boxbots.js')
	.js('source/_assets/js/image_viewer.js', '*__*/image_viewer.js')
	.js('source/_assets/js/dirty_mousepads.js', '*__*/dirty_mousepads.js')
	.sass('source/_assets/sass/main.scss', '0__0')
	.sourceMaps()
	.options({
		processCssUrls: false,
	})
	.version();

	// .js('source/_assets/js/main.js', '*__*/main.js')
