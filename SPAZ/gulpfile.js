var elixir = require('laravel-elixir');

var paths = {
	bower: '../../vendor/bower_components/'
};

elixir(function(mix) {

	mix.sass('app.scss')
		.scripts([
			paths.bower + 'jquery-placeholder/jquery.placeholder.js',
			paths.bower + 'jquery.cookie/jquery.cookie.js',
			paths.bower + 'foundation/js/foundation.min.js'
		], 'public/js/app.js')
		.scripts([
			paths.bower + 'modernizr/modernizr.js',
			paths.bower + 'jquery/dist/jquery.js',
			paths.bower + 'fastclick/lib/fastclick.js',
		], 'public/js/app_head.js');

});
