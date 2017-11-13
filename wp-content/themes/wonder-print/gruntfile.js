module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
            css: {
                options: {
                    style: 'nested'
                },
                files: {
                    'style.css': 'stylesheets/main.scss'
                }
            } 
        },

        concat: {   
            js: {
                src: [
                    //'js/vendor/jquery/jquery.js', // jQuery js
                    'js/vendor/bootstrap.js',  // Bootstrap js
                    'js/theme-customs.js', // Wonder-Print theme js
                    'js/google-maps.js'
                ],
                dest: 'js/wonder-print.js',
            }
        },

        autoprefixer: {
            options: {
                browsers: ['last 5 versions', '> 5%']
            },
            dist: {
                files: {
                    'style.css' : 'style.css'
                }
            }
        },

        cssmin: {
          minify: {
            src: 'style.css',
            dest: 'style.min.css'
          }
        },

        uglify: {
            build: {
                src: 'js/wonder-print.js',
                dest: 'js/wonder-print.min.js'
            }
        },

        browserSync: {
            dev: {
                bsFiles: {
                    src : [
                        'style.css',
                        '*.php',
                        'woocommerce/*.php',
                        'templates/*.php',
                        'includes/**/*.php'  
                    ]
                },
                options: {
                    watchTask: true,
                    proxy: 'dev.wonder-print',
                    browser: ["google chrome"]
                }
            }
        },

watch: {
    css: {
        files: ['stylesheets/**/*.scss'],
        tasks: ['sass'],
        options: {
            spawn: false,
        },
    },
    js: {
        files: ['js/*.js'],
        tasks: ['concat'] ,
        options: {
            spawn: false,
        },
    },

    prefix: {
        files: ['stylesheets/main.scss'],
        tasks: ['autoprefixer'],
        options: {
            spawn:false,
        },
    },
}

    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-browser-sync');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('production', ['cssmin', 'uglify']);
    grunt.registerTask('default', ['browserSync', 'watch']);

};