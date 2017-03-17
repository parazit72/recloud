module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    watch: {
      css: {
        files: [
          '**/*.sass',
          '**/*.scss',
        ],
        tasks: ['sass']
      },

      js: {
        files: [
          'assets/js/*.js',
          'Gruntfile.js'
        ],
        tasks: ['jshint']
      }
    },


    sass: {
      dist: {
        files: {
          'assets/css/main.css' : 'assets/sass/main.scss',
          'assets/css/header.css' : 'assets/sass/header.scss'
        }
      }
    },

    jshint: {
      options: {
        jshintrc: '.jshintrc'
      },
      all: ['Gruntfile.js', 'assets/js/*.js']
    },



    browserSync: {
    files: {
      src : [
        'assets/css/*.css',
        'assets/img/*',
        'assets/js/*.js',
        '**/*.html',
        '**/*.php',
        'index.php'

      ],
    },
    options: {
      watchTask: true
    }
    }


  });

  // Load the Grunt plugins.
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-browser-sync');


  // Register the default tasks.
  grunt.registerTask('default', ['browserSync', 'watch']);
};
