module.exports = {
    all: {
        options: {
          progressive: true
        },
        files: [{
            expand: true,
            cwd: 'src/',
            src: ['img/*.{png,jpg,gif}'],
            dest: 'static/'
        }]
    }
};
