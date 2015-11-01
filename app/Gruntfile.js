module.exports = function(grunt) {
	grunt.initConfig({
		sass: {
			dist: {
				files: {
					'css/materialize.css' : 'sass/materialize.scss'
				}
			}
		},
		watch: {
			css: {
				files: 'sass/**/*.scss',
				tasks: ['sass']
			}
    }
	});
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask('default',['watch']);
}
