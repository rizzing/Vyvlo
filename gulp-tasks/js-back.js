var error   = require('./common/error');
var fsys    = require('./../settings.json');

module.exports = function (gulp, plugins) {
    return function () {
        var development = plugins.environments.development;
        var production = plugins.environments.production;

        gulp.src([
            fsys.path.backend.js.source + 'vendor/jquery/jquery.js',
            fsys.path.backend.js.source + 'vendor/bootstrap/bootstrap.bundle.js',

            fsys.path.backend.js.source + 'libs/moment/moment.js',
            fsys.path.backend.js.source + 'libs/chart.js/chart.js',
            fsys.path.backend.js.source + 'libs/select2/select2.full.js',
           // fsys.path.backend.js.source + 'libs/ckeditor/ckeditor.js',
            fsys.path.backend.js.source + 'libs/bootstrap-validator/validator.js',
            fsys.path.backend.js.source + 'libs/bootstrap-daterangepicker/daterangepicker.js',
            fsys.path.backend.js.source + 'libs/dropzone/dropzone.js',
            fsys.path.backend.js.source + 'libs/editable-table/mindmup-editabletable.js',
            fsys.path.backend.js.source + 'libs/datatables.net/jquery.dataTables.js',
            fsys.path.backend.js.source + 'libs/datatables.net-bs/dataTables.bootstrap.js',
            fsys.path.backend.js.source + 'libs/fullcalendar/fullcalendar.js',
            fsys.path.backend.js.source + 'libs/perfect-scrollbar/perfect-scrollbar.jquery.min.js',
            fsys.path.backend.js.source + 'libs/sweetalert/sweetalert2.js',

            fsys.path.backend.js.source + 'app/**/*.js'
        ])
            .pipe(plugins.concat('backend.min.js'))
            .on('error', error)
            .pipe(production(plugins.uglify()))
            .on('error', error)
            .pipe(gulp.dest(fsys.path.backend.js.dest));
    }
};
