var mix = require('laravel-mix')

mix.options({
    publicPath: 'prelive'
});

// CSS

mix.less('prelive_protected/css/theme/theme.less',
    'prelive/css'
)

mix.styles([
    'node_modules/jquery-ui-dist/jquery-ui.css',
    'node_modules/select2/dist/css/select2.css',
    'node_modules/datatables.net-bs/css/dataTables.bootstrap.css',
    'node_modules/daterangepicker/daterangepicker-bs3.css',
    'node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css',
    'node_modules/jquery-ui-dist/jquery-ui.css',
    'node_modules/jquery-ui-timepicker-addon/dist/jquery-ui-timepicker-addon.css',
    'node_modules/bootstrap-tokenfield/dist/css/bootstrap-tokenfield.css',
    'node_modules/fancybox/dist/css/jquery.fancybox.css',
], 'prelive/css/vendor.css')

mix.styles([
    'prelive_protected/css/general.css',
    'prelive_protected/css/pages/*.css'
], 'prelive/css/styles.css')

// JS

mix.scripts([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/bootstrap/dist/js/bootstrap.js',
    'node_modules/parsleyjs/dist/parsley.js',
    'node_modules/datatables.net/js/jquery.dataTables.js',
    'node_modules/datatables.net-bs/js/dataTables.bootstrap.js',
    'node_modules/select2/dist/js/select2.js',
    'node_modules/moment/moment.js',
    'node_modules/daterangepicker/daterangepicker.js',
    'node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.js',
    'node_modules/jquery-ui-dist/jquery-ui.js',
    'node_modules/jquery-ui-timepicker-addon/dist/jquery-ui-timepicker-addon.js',
    'node_modules/fancybox/dist/js/jquery.fancybox.js',
    'node_modules/bootstrap-tokenfield/dist/bootstrap-tokenfield.js',
    'node_modules/jquery-form/src/jquery.form.js',
    'node_modules/underscore/underscore.js',
    'node_modules/backbone/backbone.js',
    'node_modules/bootbox/bootbox.js',
    'node_modules/jquery-masked-input/dist/jquery.masked-input.js',
], 'prelive/js/vendor.js')

mix.scripts([
    'prelive_protected/js/general.js',
    'prelive_protected/js/pages/*.js',
], 'prelive/js/scripts.js')

// Additional assets

mix.copy('node_modules/fancybox/dist/img/*', 'prelive/img')
mix.copy('node_modules/jquery-ui-dist/images/*', 'prelive/css/images');