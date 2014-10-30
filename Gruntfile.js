module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
	pkg: grunt.file.readJSON('package.json'),
	// Load database config from external JSON (optional)
	db_config: grunt.file.readJSON('db.json'),
  	
	db_dump: {
		options: {
	    // common options should be defined here
		},
		// "Dev" target
		"Dev": {
			"options": {
				"title": "Dev",
				"database": "<%= db_config.Dev.database %>",
				"user": "<%= db_config.Dev.user %>",
				"pass": "<%= db_config.Dev.pass %>",
				"host": "<%= db_config.Dev.host %>",
				"port": "<%= db_config.Dev.port %>",
				//"url": "malachy.hopeworksyouth.info",
				"backup_to": "db/backups/local.sql"
	  		}
	  	}/*,

	   	"stage": {
	      "options": {
	        "title": "Production DB",
	        "database": "<%= db_config.stage.db_name %>",
	        "user": "<%= db_config.stage.username %>",
	        "pass": "<%= db_config.stage.password %>",
	        "host": "<%= db_config.stage.host %>",
	        "backup_to": "db/backups/stage.sql"
	      }
	    },
	    "production": {
	      "options": {
	        "title": "Production DB",
	        "database": "<%= db_config.production.db_name %>",
	        "user": "<%= db_config.production.username %>",
	        "pass": "<%= db_config.production.password %>",
	        "host": "<%= db_config.production.host %>",
	        "ssh_host": "<%= db_config.production.ssh_host %>",
	        "backup_to": "db/backups/production.sql"
	        }
		} */ 
	},
	exit: {
        normal: {
        }
    },

    
  // Watches for changes and runs tasks
     // Livereload is setup for the 35729 port by default
  	compass: {
		dist: {
			options: {
       			config: 'config.rb',
       			force: true
      		}
    	}
  	},

      watch: {
        options: {
          livereload: true
        },
        php: {
            files: ['**/*.php'],
            options: {
              livereload: 35729
            }
          },
        sass: {
          files: ['**/*.scss'],
          tasks: ['compass'],
          options: {
              livereload: 35729
            }
        },
        
      }

    });

  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-exit');  
  grunt.loadNpmTasks('grunt-mysql-dump');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-watch');


  grunt.registerTask('default', ['watch']);

}