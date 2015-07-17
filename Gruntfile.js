module.exports = function (grunt) {
	require('load-grunt-tasks')(grunt);

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		less: {
			development: {
				files: {
					'off/css/intv-site.css': 'off/less/intv-site.less'
				}
			}
		},

		copy: {
			main: {
				src: 'bower_components/bootstrap/dist/css/bootstrap.min.css',
				dest: 'app/styles/third-party/bootstrap/bootstrap.min.css'
			}
		},

		watch: {
			files: [
				'off/less/*.less'
			],
			tasks: [
				'less'
			]
		}
	});

	grunt.registerTask('default', ['watch']);
};
