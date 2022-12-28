const version = "v1:1:5" //Change if you want to regenerate cache
const staticCacheName = `${version}static-resources`;

self.addEventListener('install', event => {
    event.waitUntil(
        caches.open("Westgate Exchange").then((cache) =>
            cache.addAll([
                "/assets/js/jquery-1.12.4.min.js",
                "/js/objectdata.js",
                "/assets/js/home/jquery.min.js",
                "/assets/js/home/bootstrap.min.js",
                "/assets/js/home/wow.min.js",
                "/assets/js/home/jquery.isotope.min.js",
                "/assets/js/home/easing.js",
                "/assets/js/home/designesia.js",
                "/assets/js/home/jquery.magnific-popup.min.js",
                "/assets/js/home/owl.carousel.js",
                "/assets/js/home/validation.js",
                "/assets/js/home/enquire.min.js",
                "/assets/js/home/jquery.stellar.min.js",
                "/assets/js/home/jquery.plugin.js",
                "/assets/js/home/typed.js",
                // '/images/faviconb.png',
                // '/css/vendor/animate.min.css',

                // '/js/owl.carousel.min.js',
                // '/js/clipboard.min.js',
                "/assets/images/logo.jpg",
                "/assets/images/logo.png",
                "/assets/images/undefined.jpg",
                "/assets/images/error-404.png",
                "/css/line-awesome.min.css",
                "/images/team/7.jpg",
                "/images/team/A.jpg",
                "/images/team/Al.jpg",
                "/images/team/D.jpg",
                "/images/team/H.jpg",
                "/images/team/kent.jpg",
                "/images/team/m.jpg",
                "/images/team/r.jpg",
                "/images/team/s.jpg",
                "/images/investor/2.jpg",
                "/images/investor/1.jpg",
                "/images/investor/3.jpg",
                "/images/investor/5.jpg",
                "/images/investor/4.jpg",
                "/images/investor/6.jpg",
                "/images/investor/7.jpg",
                "/images/investor/8.jpg",
                "/images/brand/1.png",
                "/images/brand/2.png",
                "/images/brand/3.png",
                "/images/brand/5.png",
                "/images/brand/4.png",
                "/images/brand/6.png",
                "/images/brand/7.png",
                "/images/brand/8.png",
                "/fonts/la-solid-900.woff2",
                "/fonts/la-regular-400.woff2",
                "/fonts/la-brands-400.woff2",
                "/images/testimonial/Alina.jpg",
                "/images/testimonial/anonymous.jpg",
                "/images/testimonial/Anthony.jpg",
                "/images/testimonial/Veronica.jpg",
                "/images/testimonial/Khan.jpg",
                "/images/company-logo.png",
                "/assets/images/home/bg_05-2.jpg",
                "/assets/images/home/bg2.jpg",
                "/assets/images/home/favicon.png",
                "/assets/images/home/hp.jpg",
                "/assets/images/home/layer-4.jpg",
                "/assets/images/home/logo.png",
                "/assets/images/home/mobile.png",
                "/assets/images/home/sl-home2-img1.jpg",
                "/assets/images/home/slide2.jpg",
                "/assets/images/home/ssl.png",
                "/assets/images/home/STATS_1.svg",
                "/assets/images/home/STATS_2.svg",
                "/assets/images/home/STATS_4.svg",

                "https://fonts.googleapis.com/css?family=Nunito",
                "https://fonts.googleapis.com/css?family=Raleway:300,400,600",
                "https://fonts.gstatic.com/s/nunito/v10/XRXV3I6Li01BKofINeaB.woff2",
            ])
        )
    );
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
