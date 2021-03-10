const version = "v1:1:20" //Change if you want to regenerate cache
const staticCacheName = `${version}static-resources`;

self.addEventListener('install', event => {
    event.waitUntil(
        caches
        .open('Bitcoinary Mint')
        .then(cache =>
            cache.addAll([
                '/css/all.min.css',
                '/css/main.css',
                '/css/line-awesome.min.css',
                '/js/contact.js.download',
                '/js/wow.min.js.download',
                '/images/logo.png',
                '/images/faviconw.png',
                '/images/favicontp.png',
                '/images/faviconb.png',
                '/js/jquery-3.5.1.min.js.download',
                '/js/k.js',
                '/css/vendor/animate.min.css',
                '/css/vendor/slick.css',

                '/js/jquery.js',
                '/js/fancybox.js',
                '/js/owl.carousel.min.js',
                '/js/clipboard.min.js',
                // '/css/app.css',
                '/images/bg/bg-10.jpg',
                '/images/bg/bg-2.jpg',
                '/images/bg/bg-3.jpg',
                '/images/bg/bg-4.jpg',
                '/images/bg/bg-5.jpg',
                '/images/bg/bg-7.jpg',
                '/images/bg/bg-8.jpg',
                '/images/bg/hero.jpg',
                '/images/investor/2.jpg',
                '/images/investor/1.jpg',
                '/images/investor/3.jpg',
                '/images/investor/5.jpg',
                '/images/investor/4.jpg',
                '/images/investor/6.jpg',
                '/images/investor/7.jpg',
                '/images/investor/8.jpg',
                '/images/brand/1.png',
                '/images/brand/2.png',
                '/images/brand/3.png',
                '/images/brand/5.png',
                '/images/brand/4.png',
                '/images/brand/6.png',
                '/images/brand/7.png',
                '/images/brand/8.png',
                '/fonts/la-solid-900.woff2',
                '/fonts/la-regular-400.woff2',
                '/fonts/la-brands-400.woff2',
                '/images/testimonial/2.jpg',
                '/images/testimonial/1.jpg',
                '/images/testimonial/3.jpg',
                '/images/testimonial/4.jpg',
                'https://fonts.googleapis.com/css?family=Nunito',
                'https://fonts.googleapis.com/css?family=Raleway:300,400,600',
                'https://fonts.gstatic.com/s/nunito/v10/XRXV3I6Li01BKofINeaB.woff2'
               
            ])
        )
    )
})

self.addEventListener('fetch', event => {
    event.respondWith(
        caches.match(event.request).then(response => {
            if (response) {
                //we found an entry in the cache!
                //return response
            }
            return fetch(event.request)
        })
    )
})
