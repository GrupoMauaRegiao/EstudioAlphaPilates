module.exports = (grunt) ->
  grunt.initConfig
    pkg: grunt.file.readJSON 'package.json'

    coffeelint:
      options:
        "max_line_length":
          value: 80
          level: "warn"
        "no_trailing_semicolons":
          level: "warn"
      app: ['scripts/scripts.coffee']

    coffee:
      compile:
        options:
          bare: true
        files:
          'scripts/scripts.js': 'scripts/scripts.coffee'

    jshint:
      options:
        browser: true
      all: ['Gruntfile.js', 'scripts/scripts.js']

    min:
      code:
        src: 'scripts/scripts.js'
        dest: 'scripts/scripts.min.js'

    sass:
      options:
        style: 'compressed'
      dist:
        files:
          'styles/styles.min.css': 'styles/styles.sass'

    watch:
      coffeelint:
        files: ['scripts/scripts.coffee']
        tasks: ['coffeelint']

      coffee:
        files: ['scripts/scripts.coffee']
        tasks: ['coffee']
      
      jshintMin:
        files: ['scripts/scripts.js']
        tasks: ['jshint', 'min']

      sass:
        files: ['styles/styles.sass']
        tasks: ['sass']

  grunt.loadNpmTasks 'grunt-contrib-watch'
  grunt.loadNpmTasks 'grunt-coffeelint'
  grunt.loadNpmTasks 'grunt-contrib-coffee'
  grunt.loadNpmTasks 'grunt-contrib-jshint'
  grunt.loadNpmTasks 'grunt-yui-compressor'
  grunt.loadNpmTasks 'grunt-contrib-sass'
  grunt.registerTask 'all', ['watch']
  return