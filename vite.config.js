
// import { defineConfig } from 'vite';
const vite = require('vite');
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy'

export default vite.defineConfig({
    build: {
        manifest: true,
        // assetsDir: 'js',
        rtl: true,
        outDir: 'public/assets/',
        cssCodeSplit: true,
        rollupOptions: {
            output: {
              assetFileNames: (css) => {
                if(css.name.split('.').pop() == 'css') {
                    return 'css/' + `[name]` + '.min.' + 'css';
                } else {
                    return 'icons/' + css.name;
                }
            },
            // entryFileNames: (js) => {
            //     var name = js.name;
            //     if(name.split('.').pop() == 'js') {
            //         // return 'css/' + css.name;
            //         return 'js/' + js;
            //     } else {
            //         return 'js/pages/' + js.name;
            //     }
            // },
                entryFileNames: 'js/' + `[name]` + `.js`,
                // chunkFileNames: 'js/pages/' + `[name]` + '.min' + `.js`,
                // assetFileNames: 'css/' + `[name]` + '.min' + `.[ext]`,
                // manualChunks: 'js/' + `[name]` + '.min' + `.js`,
            },
        },
      },
    plugins: [
        laravel(
            {
                input: [
                    'resources/scss/app.scss',
                    'resources/scss/bootstrap.scss',
                    'resources/scss/icons.scss',
                    'resources/scss/custom.scss',
                ],
                refresh: true,                
            }
        ),
         viteStaticCopy({
            targets: [
                {
                    src: 'resources/fonts',
                    dest: ''
                },
                {
                    src: 'resources/images',
                    dest: ''
                },
                {
                    src: 'resources/json',
                    dest: ''
                },
                {
                    src: 'resources/js',
                    dest: ''
                },
                {
                    src: 'resources/lang',
                    dest: ''
                },

                {
                    src: './node_modules/leaflet/dist/images',
                    dest: 'libs/leaflet/'
                },

                {
                    src: [
                        'node_modules/bootstrap/dist/css/bootstrap.min.css',
                        'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
                    ],
                    dest: 'libs/bootstrap'
                },
                {
                    src: ['./node_modules/simplebar/dist/simplebar.js'],
                    dest: 'libs/simplebar',
                    rename: 'simplebar.min.js',
                },
                {
                    src: ['./node_modules/prismjs/prism.js'],
                    dest: 'libs/prismjs',
                },
                {
                    src: ['./node_modules/sortablejs/Sortable.js'],
                    dest: 'libs/sortable',
                    rename: 'sortable.min.js',
                },

                {
                    src: ['./node_modules/choices.js/public/assets/scripts/choices.min.js'],
                    dest: 'libs/choices.js',
                },

                {
                    src: ['./node_modules/rater-js/index.js'],
                    dest: 'libs/rater-js',
                },

                {
                    src: ['./node_modules/rater-js/index.js'],
                    dest: 'libs/rater-js',
                },

                {
                    src: ["./node_modules/sweetalert2/dist/sweetalert2.min.js", "./node_modules/sweetalert2/dist/sweetalert2.min.css"],
                    dest: 'libs/sweetalert2'
                },

                {
                    src: ["./node_modules/swiper/swiper-bundle.min.js", "./node_modules/swiper/swiper-bundle.min.css"],
                    dest: 'libs/swiper'
                },

                {
                    src: ["./node_modules/shepherd.js/dist/js/shepherd.min.js", "./node_modules/shepherd.js/shepherd.css"],
                    dest: 'libs/shepherd.js'
                },

                {
                    src: ['./node_modules/apexcharts/dist/apexcharts.min.js'],
                    dest: 'libs/apexcharts'
                },

                {
                    src: ['./node_modules/list.js/dist/list.min.js'],
                    dest: 'libs/list.js'
                },

                {
                    src: ['./node_modules/list.pagination.js/dist/list.pagination.min.js'],
                    dest: 'libs/list.pagination.js'
                },

                {
                    src: ['./node_modules/fullcalendar/main.min.js', './node_modules/fullcalendar/main.min.css'],
                    dest: 'libs/fullcalendar'
                },

                {
                    src: ["./node_modules/gridjs/dist/gridjs.umd.js", "./node_modules/gridjs/theme/mermaid.min.css"],
                    dest: 'libs/gridjs'
                },

                {
                    src: ["./node_modules/tom-select/dist/js/tom-select.base.min.js", "./node_modules/tom-select/dist/js/plugins/remove_button.js", "./node_modules/tom-select/dist/css/tom-select.bootstrap5.min.css", "./node_modules/tom-select/dist/js/tom-select.complete.min.js"],
                    dest: 'libs/tom-select'
                },
                
                {
                    src: ["./node_modules/moment/min/moment.min.js"],
                    dest: 'libs/moment'
                },

                {
                    src: ["./node_modules/@tarekraafat/autocomplete.js/dist/autoComplete.min.js", "./node_modules/@tarekraafat/autocomplete.js/dist/css/autoComplete.css"],
                    dest: 'libs/@tarekraafat/autocomplete.js'
                },

                {
                    src: ["./node_modules/multi.js/dist/multi.min.js", "./node_modules/multi.js/dist/multi.min.css"],
                    dest: 'libs/multi.js'
                },

                {
                    src: ["./node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"],
                    dest: 'libs/@ckeditor/ckeditor5-build-classic'
                },

                {
                    src: ["./node_modules/dropzone/dist/dropzone-min.js", "./node_modules/dropzone/dist/dropzone.css"],
                    dest: 'libs/dropzone'
                },

                {
                    src: ["./node_modules/cleave.js/dist/cleave.min.js"],
                    dest: 'libs/cleave.js'
                },

                {
                    src: ["./node_modules/@simonwep/pickr/dist/themes/classic.min.css", "./node_modules/@simonwep/pickr/dist/themes/monolith.min.css", "./node_modules/@simonwep/pickr/dist/themes/nano.min.css", "./node_modules/@simonwep/pickr/dist/pickr.min.js"],
                    dest: 'libs/@simonwep'
                },

                {
                    src: ["./node_modules/nouislider/dist/nouislider.min.css", "./node_modules/nouislider/dist/nouislider.min.js"],
                    dest: 'libs/nouislider'
                },

                {
                    src: ["./node_modules/wnumb/wNumb.min.js"],
                    dest: 'libs/wnumb'
                },

                {
                    src: ["./node_modules/jsvectormap/dist/css/jsvectormap.min.css", "./node_modules/jsvectormap/dist/js/jsvectormap.min.js", "./node_modules/jsvectormap/dist/maps/world-merc.js", "./node_modules/jsvectormap/dist/maps/world-merc.js", "./node_modules/jsvectormap/dist/maps/us-merc-en.js", "./node_modules/jsvectormap/dist/maps/canada.js", "./node_modules/jsvectormap/dist/maps/russia.js",
                    "./node_modules/jsvectormap/dist/maps/spain.js"],
                    dest: 'libs/jsvectormap'
                },

                {
                    src: ['./node_modules/gmaps/gmaps.min.js'],
                    dest: 'libs/gmaps',
                },

                {
                    src: ["./node_modules/leaflet/dist/leaflet.js", "./node_modules/leaflet/dist/leaflet.css"],
                    dest: 'libs/leaflet'
                },

                {
                    src: ["./node_modules/glightbox/dist/css/glightbox.min.css", "./node_modules/glightbox//dist/js/glightbox.min.js"],
                    dest: 'libs/glightbox'
                },

                {
                    src: ['./node_modules/gridjs/dist/theme/mermaid.min.css', './node_modules/gridjs/dist/gridjs.umd.js'],
                    dest: 'libs/gridjs'
                },

                {
                    src: ['./node_modules/flatpickr/dist/flatpickr.min.css', './node_modules/flatpickr/dist/flatpickr.min.js'],
                    dest: 'libs/flatpickr'
                },

                {
                    src: ['./node_modules/dom-autoscroller/dist/dom-autoscroller.min.js'],
                    dest: 'libs/dom-autoscroller'
                },

                {
                    src: ['./node_modules/isotope-layout/dist/isotope.pkgd.min.js'],
                    dest: 'libs/isotope-layout'
                },

                {
                    src: ['./node_modules/masonry-layout/dist/masonry.pkgd.min.js'],
                    dest: 'libs/masonry-layout'
                },

                {
                    src: ['./node_modules/particles.js/particles.js'],
                    dest: 'libs/particles.js'
                },

                {
                    src: ['./node_modules/toastify-js/src/toastify.js'],
                    dest: 'libs/toastify-js'
                },

                {
                    src: ['./node_modules/fg-emoji-picker/fgEmojiPicker.js'],
                    dest: 'libs/fg-emoji-picker'
                },
            ]
         }),
    ],
});