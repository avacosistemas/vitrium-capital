let mix = require('laravel-mix')

mix.webpackConfig({
    stats: {
        children: true,
    },
});

mix
    .sass('assets/css/vitrium_proyectos.scss', 'assets/css')
    .sass('assets/images/proyectos/01_mburucuya/stylesheet.scss', 'assets/images/proyectos/01_mburucuya/')
    .options({
         processCssUrls: false
    })
    .sourceMaps();