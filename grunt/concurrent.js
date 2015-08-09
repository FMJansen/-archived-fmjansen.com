module.exports = {

    options: {
        limit: 3
    },

    first: [
        'clean'
    ],
    second: [
        'sass:dev',
        'uglify'
    ],
    third: [
        'imagemin'
    ],

    firstProd: [
        'clean'
    ],
    secondProd: [
        'sass:prod',
        'uglify'
    ],
    thirdProd: [
        'autoprefixer'
    ],
    fourthProd: [
        'cssmin',
        'imagemin'
    ]

};
