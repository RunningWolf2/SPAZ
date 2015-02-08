var elixir = require('laravel-elixir');

var paths = {
	bower: '../../vendor/bower_components/'
};

elixir(function(mix) {

	mix.sass('app.scss')
		.scripts([
			paths.bower + 'jquery/dist/jquery.js',
			paths.bower + 'modernizr/modernizr.js',
			paths.bower + 'jquery-placeholder/jquery.placeholder.js',
			paths.bower + 'jquery.cookie/jquery.cookie.js',
			paths.bower + 'foundation/js/foundation.js'
		], 'public/js/app.js');

});
