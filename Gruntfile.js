
module.exports = function(grunt) {

    const sass = require('node-sass');

    require('jit-grunt')(grunt);

    var config = {
        src: 'node_modules',
        tmp: '.tmp',
        theme: 'wp-content/themes/meru',
    };

    grunt.initConfig({
        config: config,
        pkg: grunt.file.readJSON('package.json'),
        clean: {
            tmp: '<%= config.tmp %>',
            css: [
                '<%= config.theme %>/assets/css/*.css',
                '<%= config.theme %>/assets/css/**/*.css',
                '<%= config.theme %>/assets/css/*.map',
            ],
            js: [
              '<%= config.theme %>/assets/js/*.min.js',
            ],
        },
        sass: {
            options: {
                implementation: sass,
                sourceMap: true,
            },
            /* Compile before minified */
            cssMain: {
                files: {
                '<%= config.theme %>/assets/css/main.css': '<%= config.theme %>/assets/sass/main.scss',
                // '<%= config.theme %>/assets/css/editor.css': '<%= config.theme %>/assets/sass/editor.scss',
                },
            },
        },
        cssmin: {
            options: {
                shorthandCompacting: false,
                roundingPrecision: -1,
            },
            cssMain: {
                files: {
                    '<%= config.theme %>/assets/css/main.min.css': [ '<%= config.theme %>/assets/css/main.css' ],
                    // '<%= config.theme %>/assets/css/editor.min.css': [ '<%= config.theme %>/assets/css/editor.css' ],
                },
            },
        },
        concat: {
            jsVendor: {
                files: {
                    '<%= config.theme %>/assets/js/vendor.min.js': [
                        // '<%= config.src %>/splitting/dist/splitting.min.js',
                    ],
                },
            },
        },
        uglify: {
            options: {
                banner: '/*! <%= grunt.template.today("yyyy-mm-dd") %> */\n',
                preserveComments: 'some',
            },
            jsMain: {
                files: {
                    '<%= config.theme %>/assets/js/script.min.js': [
                        '<%= config.theme %>/assets/js/script.js'
                    ],
                },
            },
        },
        watch: {
            css: {
                files: [
                    '<%= config.theme %>/assets/sass/**/*.scss',
                ],
                tasks: [ 'sass:cssMain' ],
            },
            js: {
                files: [
                    '<%= config.theme %>/assets/js/**/*.js',
                    '!<%= config.theme %>/assets/js/**/*.min.js',
                ],
                tasks: [ 'jsMain' ],
            },
        },
        browserSync: {
            dev: {
                bsFiles: {
                    src: [
                        '<%= config.theme %>/assets/css/**/*.css',
                        '<%= config.theme %>/assets/js/**/*.js',
                        '<%= config.theme %>/**/*.html',
                        '<%= config.theme %>/**/*.php',
                    ],
                },
                options: {
                    watchTask: true,
                    proxy: 'localhost/meruhotels',
                },
            },
        },
    });

    grunt.registerTask('jsVendor', [
        'concat:jsVendor',
    ]);

    grunt.registerTask('jsMain', [
        'uglify:jsMain',
    ]);

    grunt.registerTask('cssMain', [
        'sass:cssMain',
        'cssmin:cssMain',
    ]);

    grunt.registerTask('default', [
        'browserSync',
        'watch',
    ]);
};
