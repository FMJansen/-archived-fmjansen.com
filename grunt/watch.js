module.exports = {

    options: {
        spawn: false,
        livereload: true
    },

    scripts: {
        files: [
            'src/js/*.js'
        ],
        tasks: [
            'uglify'
        ]
    },

    styles: {
        files: [
            'src/css/*.scss'
        ],
        tasks: [
            'sass:dev'
        ]
    },
};
