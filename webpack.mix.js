let mix = require('laravel-mix');
let build = require('./tasks/build.js');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
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

mix.js('source/_assets/js/jquery.min.js', '*__*/jquery.min.js')
	.js('source/_assets/js/main.js', '*__*/main.js')
	.sass('source/_assets/sass/styles.scss', '0__0')
	.sass('source/_assets/sass/main.scss', '0__0')
	.sourceMaps()
	.options({
		processCssUrls: false,
	})
	.version();
