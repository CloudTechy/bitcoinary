<script>
export default {
    data() {
        return {
            company: this.$root.appName,
            domain: this.$root.appDomain,
        };
    },
    beforeMount() {
       var js = document.createElement("script");
        js.setAttribute("src", "assets/js/jquery-1.12.4.min.js");
        js.setAttribute("async", true);
        document.body.appendChild(js);
        var js = document.createElement("script");
        js.setAttribute("src", "assets/js/bootstrap.min.js");
        document.body.appendChild(js);
        js = document.createElement("script");
        js.setAttribute("src", "assets/js/bootstrap-select.min.js");
        document.body.appendChild(js); 
        js = document.createElement("script");
        js.setAttribute("src", "assets/js/jquery.bootstrap-touchspin.min.js");
        document.body.appendChild(js);
        js = document.createElement("script");
        js.setAttribute("src", "assets/js/jquery.bgscroll.js");
        document.body.appendChild(js);
    },
    mounted() {
        var js = document.createElement("script");
        js.setAttribute("src", "assets/js/magnific-popup.min.js");
        document.body.appendChild(js);
        js = document.createElement("script");
        js.setAttribute("src", "assets/js/waypoints.min.js");
        document.body.appendChild(js);
        js = document.createElement("script");
        js.setAttribute("src", "assets/js/counterup.min.js");
        document.body.appendChild(js);
        js = document.createElement("script");
        js.setAttribute("src", "assets/js/owl.carousel.min.js");
        document.body.appendChild(js);
        js = document.createElement("script");
        js.setAttribute("src", "assets/js/waypoints-sticky.min.js");
        document.body.appendChild(js);
        js = document.createElement("script");
        js.setAttribute("src", "assets/js/isotope.pkgd.min.js");
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute("src", "assets/js/stellar.min.js");
        document.body.appendChild(js);
        js = document.createElement("script");
        js.setAttribute("src", "assets/js/scrolla.min.js");
        document.body.appendChild(js);
        js = document.createElement("script");
        js.setAttribute("src", "assets/js/custom.js");
        js.setAttribute("defer", "");
        document.body.appendChild(js);
        js = document.createElement("script");
        js.setAttribute("src", "assets/js/shortcode.js");
        document.body.appendChild(js);
        js = document.createElement("script");
        js.setAttribute("src", "assets/js/jquery.bgscroll.js");
        document.body.appendChild(js);
        js = document.createElement("script");
        js.setAttribute("src", "assets/js/tickerNews.min.js");
        document.body.appendChild(js);
        js = document.createElement("script");
        js.setAttribute("src", "assets/js/ebuka.js");
        document.body.appendChild(js);
        js = document.createElement("script");
        js.setAttribute(
            "src",
            "assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"
        );
        document.body.appendChild(js);
        js = document.createElement("script");
        js.setAttribute(
            "src",
            "assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"
        );
        document.body.appendChild(js);
        js = document.createElement("script");
        js.setAttribute(
            "src",
            "assets/plugins/revolution/revolution/js/extensions/revolution-plugin.js"
        );
        document.body.appendChild(js);
        js = document.createElement("script");
        js.setAttribute("src", "assets/js/rev-script-1.js");
        document.body.appendChild(js);
        js = document.createElement("script");
        js.setAttribute("src", "assets/js/iziToast.min.js");
        document.body.appendChild(js);
    },

    beforeCreate() {},
};
</script>
<template>
    <div class="m-0 p-0">
        <div class="page-wraper">
            <HomeHeader :domain="$root.domain"></HomeHeader>
            <div class="page-content">
                <div class="main-slider style-two default-banner">
                    <div class="tp-banner-container">
                        <div class="tp-banner">
                            <div
                                id="rev_slider_1014_1_wrapper"
                                class="rev_slider_wrapper fullscreen-container"
                                data-alias="typewriter-effect"
                                data-source="gallery"
                            >
                                <div
                                    id="rev_slider_1014_1"
                                    class="rev_slider fullscreenbanner"
                                    style="display: none"
                                    data-version="5.4.1"
                                >
                                    <ul>
                                        <li
                                            data-index="rs-1000"
                                            data-transition="slidingoverlayhorizontal"
                                            data-slotamount="default"
                                            data-hideafterloop="0"
                                            data-hideslideonmobile="off"
                                            data-easein="default"
                                            data-easeout="default"
                                            data-masterspeed="default"
                                            data-thumb="assets/images/main-slider/slider2/slide3.jpeg"
                                            data-rotate="0"
                                            data-saveperformance="off"
                                            data-title="Slide"
                                            data-param1=""
                                            data-param2=""
                                            data-param3=""
                                            data-param4=""
                                            data-param5=""
                                            data-param6=""
                                            data-param7=""
                                            data-param8=""
                                            data-param9=""
                                            data-param10=""
                                            data-description=""
                                        >
                                            <img
                                                src="assets/images/main-slider/slider2/slide3.jpg"
                                                alt=""
                                                data-bgposition="center bottom"
                                                data-bgfit="cover"
                                                data-bgrepeat="no-repeat"
                                                class="rev-slidebg"
                                                data-no-retina
                                            />

                                            <div
                                                class="tp-caption tp-shape tp-shapewrapper"
                                                id="slide-100-layer-1"
                                                data-x="['center','center','center','center']"
                                                data-hoffset="['0','0','0','0']"
                                                data-y="['middle','middle','middle','middle']"
                                                data-voffset="['0','0','0','0']"
                                                data-width="full"
                                                data-height="full"
                                                data-whitespace="nowrap"
                                                data-type="shape"
                                                data-basealign="slide"
                                                data-responsive_offset="off"
                                                data-responsive="off"
                                                data-frames='[
        {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
        {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
        ]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="
                                                    z-index: 12;
                                                    background-color: rgba(
                                                        0,
                                                        0,
                                                        0,
                                                        0.3
                                                    );
                                                    border-color: rgba(
                                                        0,
                                                        0,
                                                        0,
                                                        0
                                                    );
                                                    border-width: 0px;
                                                "
                                            ></div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-100-layer-2"
                                                data-x="['left','left','left','left']"
                                                data-hoffset="['30','30','30','30']"
                                                data-y="['top','top','top','top']"
                                                data-voffset="['308','308','308','308']"
                                                data-fontsize="['60','60','60','60']"
                                                data-lineheight="['110','110','110','110']"
                                                data-width="['6','6','6','6']"
                                                data-height="['110,'110','110','110']"
                                                data-whitespace="['normal','normal','normal','normal']"
                                                data-type="text"
                                                data-responsive_offset="on"
                                                data-frames='[
        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
        ]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="
                                                    z-index: 13;
                                                    white-space: normal;
                                                "
                                            >
                                                <div class="bg-primary">
                                                    &nbsp;
                                                </div>
                                            </div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-100-layer-3"
                                                data-x="['left','left','left','left']"
                                                data-hoffset="['60','60','60','100']"
                                                data-y="['top','top','top','top']"
                                                data-voffset="['300','300','300','300']"
                                                data-fontsize="['55','55','55','45']"
                                                data-lineheight="['60','60','60','65']"
                                                data-width="['700','700','700','700']"
                                                data-height="['none','none','none','none']"
                                                data-whitespace="['normal','normal','normal','normal']"
                                                data-type="text"
                                                data-responsive_offset="on"
                                                data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="
                                                    z-index: 13;
                                                    white-space: normal;
                                                    font-weight: 700;
                                                    color: rgb(75, 57, 65);
                                                    border-width: 0px;
                                                "
                                            >
                                                <div
                                                    style="
                                                        font-family: 'Poppins',
                                                            sans-serif;
                                                        text-transform: uppercase;
                                                    "
                                                >
                                                    <span
                                                        class="text-white"
                                                        style="
                                                            padding-right: 10px;
                                                        "
                                                        >The most</span
                                                    ><span class="text-primary"
                                                        >Secure</span
                                                    >
                                                </div>
                                            </div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-100-layer-4"
                                                data-x="['left','left','left','left']"
                                                data-hoffset="['60','60','60','100']"
                                                data-y="['top','top','top','top']"
                                                data-voffset="['360','360','360','360']"
                                                data-fontsize="['53','53','53','45']"
                                                data-lineheight="['70','70','70','75']"
                                                data-width="['700','700','700','700']"
                                                data-height="['none','none','none','none']"
                                                data-whitespace="['normal','normal','normal','normal']"
                                                data-type="text"
                                                data-responsive_offset="on"
                                                data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="
                                                    z-index: 13;
                                                    white-space: normal;
                                                    font-weight: 700;
                                                    border-width: 0px;
                                                "
                                            >
                                                <div
                                                    style="
                                                        font-family: 'Poppins',
                                                            sans-serif;
                                                        text-transform: uppercase;
                                                    "
                                                >
                                                    <span
                                                        class="text-primary"
                                                        style="
                                                            padding-right: 10px;
                                                        "
                                                        >Trading</span
                                                    ><span class="text-white"
                                                        >Platform</span
                                                    >
                                                </div>
                                            </div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-100-layer-5"
                                                data-x="['left','left','left','left']"
                                                data-hoffset="['30','30','30','100']"
                                                data-y="['top','top','top','top']"
                                                data-voffset="['440','440','440','440']"
                                                data-fontsize="['16','16','16','30']"
                                                data-lineheight="['30','30','30','40']"
                                                data-width="['600','600','600','600']"
                                                data-height="['none','none','none','none']"
                                                data-whitespace="['normal','normal','normal','normal']"
                                                data-type="text"
                                                data-responsive_offset="on"
                                                data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="
                                                    z-index: 13;
                                                    font-weight: 500;
                                                    color: #fff;
                                                    border-width: 0px;
                                                "
                                            >
                                                <span
                                                    style="
                                                        font-family: 'Poppins',
                                                            sans-serif;
                                                    "
                                                    >Profitable Investments when
                                                    you trade and invest with
                                                    us</span
                                                >
                                            </div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-100-layer-6"
                                                data-x="['left','left','left','left']"
                                                data-hoffset="['30','30','30','100']"
                                                data-y="['top','top','top','top']"
                                                data-voffset="['530','530','530','600']"
                                                data-lineheight="['none','none','none','none']"
                                                data-width="['300','300','300','300']"
                                                data-height="['none','none','none','none']"
                                                data-whitespace="['normal','normal','normal','normal']"
                                                data-type="text"
                                                data-responsive_offset="on"
                                                data-frames='[ 
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="
                                                    z-index: 13;
                                                    text-transform: uppercase;
                                                "
                                            >
                                                <a
                                                    style="border-radius: 25px"
                                                    href="/login"
                                                    class="site-button slider-btn-left"
                                                    >LOGIN</a
                                                >
                                            </div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-100-layer-7"
                                                data-x="['left','left','left','left']"
                                                data-hoffset="['220','220','220','320']"
                                                data-y="['top','top','top','top']"
                                                data-voffset="['530','530','530','600']"
                                                data-lineheight="['none','none','none','none']"
                                                data-width="['300','300','300','300']"
                                                data-height="['none','none','none','none']"
                                                data-whitespace="['normal','normal','normal','normal']"
                                                data-type="text"
                                                data-responsive_offset="on"
                                                data-frames='[ 
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="
                                                    z-index: 13;
                                                    text-transform: uppercase;
                                                    font-weight: 500;
                                                "
                                            >
                                                <a
                                                    style="border-radius: 25px"
                                                    href="/register"
                                                    class="site-button white slider-btn-right"
                                                    >Join Us</a
                                                >
                                            </div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-100-layer-8"
                                                data-x="['right','right','right','right']"
                                                data-hoffset="['0','0','0','0']"
                                                data-y="['bottom','bottom','bottom','bottom']"
                                                data-voffset="['100','100','100','100']"
                                                data-frames='[ 
                                        {"from":"y:200px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                                style="z-index: 13"
                                            >
                                                <img
                                                    src="assets/images/main-slider/slider2/earth.png"
                                                    alt=""
                                                    class="spin-city"
                                                />
                                            </div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-100-layer-9"
                                                data-x="['right','right','right','right']"
                                                data-hoffset="['120','120','120','120']"
                                                data-y="['bottom','bottom','bottom','bottom']"
                                                data-voffset="['180','180','180','180']"
                                                data-height="none"
                                                data-whitespace="nowrap"
                                                data-type="image"
                                                data-responsive_offset="on"
                                                data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3000,"ease":"Power3.easeOut"},
                                        {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="z-index: 13"
                                            ></div>
                                        </li>

                                        <li
                                            data-index="rs-1001"
                                            data-transition="slidingoverlayhorizontal"
                                            data-slotamount="default"
                                            data-hideafterloop="0"
                                            data-hideslideonmobile="off"
                                            data-easein="default"
                                            data-easeout="default"
                                            data-masterspeed="default"
                                            data-thumb="assets/images/main-slider/slider2/slide3.jpeg"
                                            data-rotate="0"
                                            data-saveperformance="off"
                                            data-title="Slide"
                                            data-param1=""
                                            data-param2=""
                                            data-param3=""
                                            data-param4=""
                                            data-param5=""
                                            data-param6=""
                                            data-param7=""
                                            data-param8=""
                                            data-param9=""
                                            data-param10=""
                                            data-description=""
                                        >
                                            <img
                                                src="assets/images/main-slider/slider2/slide3.jpg"
                                                alt=""
                                                data-bgposition="center bottom"
                                                data-bgfit="cover"
                                                data-bgrepeat="no-repeat"
                                                class="rev-slidebg"
                                                data-no-retina
                                            />

                                            <div
                                                class="tp-caption tp-shape tp-shapewrapper"
                                                id="slide-101-layer-1"
                                                data-x="['center','center','center','center']"
                                                data-hoffset="['0','0','0','0']"
                                                data-y="['middle','middle','middle','middle']"
                                                data-voffset="['0','0','0','0']"
                                                data-width="full"
                                                data-height="full"
                                                data-whitespace="nowrap"
                                                data-type="shape"
                                                data-basealign="slide"
                                                data-responsive_offset="off"
                                                data-responsive="off"
                                                data-frames='[
                                        {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                        ]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="
                                                    z-index: 12;
                                                    background-color: rgba(
                                                        0,
                                                        0,
                                                        0,
                                                        0.3
                                                    );
                                                    border-color: rgba(
                                                        0,
                                                        0,
                                                        0,
                                                        0
                                                    );
                                                    border-width: 0px;
                                                "
                                            ></div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-101-layer-2"
                                                data-x="['left','left','left','left']"
                                                data-hoffset="['30','30','30','30']"
                                                data-y="['top','top','top','top']"
                                                data-voffset="['308','308','308','308']"
                                                data-fontsize="['60','60','60','60']"
                                                data-lineheight="['110','110','110','110']"
                                                data-width="['6','6','6','6']"
                                                data-height="['110,'110','110','110']"
                                                data-whitespace="['normal','normal','normal','normal']"
                                                data-type="text"
                                                data-responsive_offset="on"
                                                data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="
                                                    z-index: 13;
                                                    white-space: normal;
                                                "
                                            >
                                                <div class="bg-primary">
                                                    &nbsp;
                                                </div>
                                            </div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-101-layer-3"
                                                data-x="['left','left','left','left']"
                                                data-hoffset="['60','60','60','100']"
                                                data-y="['top','top','top','top']"
                                                data-voffset="['300','300','300','300']"
                                                data-fontsize="['55','55','55','45']"
                                                data-lineheight="['60','60','60','65']"
                                                data-width="['700','700','700','700']"
                                                data-height="['none','none','none','none']"
                                                data-whitespace="['normal','normal','normal','normal']"
                                                data-type="text"
                                                data-responsive_offset="on"
                                                data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="
                                                    z-index: 13;
                                                    white-space: normal;
                                                    font-weight: 700;
                                                    color: rgb(75, 57, 65);
                                                    border-width: 0px;
                                                "
                                            >
                                                <div
                                                    style="
                                                        font-family: 'Poppins',
                                                            sans-serif;
                                                        text-transform: uppercase;
                                                    "
                                                >
                                                    <span
                                                        class="text-white"
                                                        style="
                                                            padding-right: 10px;
                                                        "
                                                        >{{ company }}</span
                                                    ><span class="text-primary"
                                                        >TRADING</span
                                                    >
                                                </div>
                                            </div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-101-layer-4"
                                                data-x="['left','left','left','left']"
                                                data-hoffset="['60','60','60','100']"
                                                data-y="['top','top','top','top']"
                                                data-voffset="['360','360','360','360']"
                                                data-fontsize="['53','53','53','45']"
                                                data-lineheight="['70','70','70','70']"
                                                data-width="['700','700','700','700']"
                                                data-height="['none','none','none','none']"
                                                data-whitespace="['normal','normal','normal','normal']"
                                                data-type="text"
                                                data-responsive_offset="on"
                                                data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="
                                                    z-index: 13;
                                                    white-space: normal;
                                                    font-weight: 700;
                                                    border-width: 0px;
                                                "
                                            >
                                                <div
                                                    style="
                                                        font-family: 'Poppins',
                                                            sans-serif;
                                                        text-transform: uppercase;
                                                    "
                                                >
                                                    <span
                                                        class="text-primary"
                                                        style="
                                                            padding-right: 10px;
                                                        "
                                                        >EFFICIENT </span
                                                    ><span class="text-white"
                                                        >AND RELAIBLE</span
                                                    >
                                                </div>
                                            </div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-101-layer-5"
                                                data-x="['left','left','left','left']"
                                                data-hoffset="['30','30','30','100']"
                                                data-y="['top','top','top','top']"
                                                data-voffset="['440','440','440','440']"
                                                data-fontsize="['16','16','16','30']"
                                                data-lineheight="['30','30','30','40']"
                                                data-width="['600','600','600','600']"
                                                data-height="['none','none','none','none']"
                                                data-whitespace="['normal','normal','normal','normal']"
                                                data-type="text"
                                                data-responsive_offset="on"
                                                data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="
                                                    z-index: 13;
                                                    font-weight: 500;
                                                    color: #fff;
                                                    border-width: 0px;
                                                "
                                            >
                                                <span
                                                    style="
                                                        font-family: 'Poppins',
                                                            sans-serif;
                                                    "
                                                    >24/7 Live Support. Our
                                                    support channels are
                                                    available anytime
                                                    everyday</span
                                                >
                                            </div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-101-layer-6"
                                                data-x="['left','left','left','left']"
                                                data-hoffset="['30','30','30','100']"
                                                data-y="['top','top','top','top']"
                                                data-voffset="['530','530','530','600']"
                                                data-lineheight="['none','none','none','none']"
                                                data-width="['300','300','300','300']"
                                                data-height="['none','none','none','none']"
                                                data-whitespace="['normal','normal','normal','normal']"
                                                data-type="text"
                                                data-responsive_offset="on"
                                                data-frames='[ 
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="
                                                    z-index: 13;
                                                    text-transform: uppercase;
                                                "
                                            >
                                                <a
                                                    style="border-radius: 25px"
                                                    href="/login"
                                                    class="site-button slider-btn-left"
                                                    >LOGIN</a
                                                >
                                            </div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-101-layer-7"
                                                data-x="['left','left','left','left']"
                                                data-hoffset="['220','220','220','320']"
                                                data-y="['top','top','top','top']"
                                                data-voffset="['530','530','530','600']"
                                                data-lineheight="['none','none','none','none']"
                                                data-width="['300','300','300','300']"
                                                data-height="['none','none','none','none']"
                                                data-whitespace="['normal','normal','normal','normal']"
                                                data-type="text"
                                                data-responsive_offset="on"
                                                data-frames='[ 
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="
                                                    z-index: 13;
                                                    text-transform: uppercase;
                                                    font-weight: 500;
                                                "
                                            >
                                                <a
                                                    style="border-radius: 25px"
                                                    href="/register"
                                                    class="site-button white slider-btn-right"
                                                    >Join Us</a
                                                >
                                            </div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-101-layer-8"
                                                data-x="['right','right','right','right']"
                                                data-hoffset="['-100','-100','-100','-100']"
                                                data-y="['bottom','bottom','bottom','bottom']"
                                                data-voffset="['-650','-650','-650','-650']"
                                                data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3000,"ease":"Power3.easeOut"},
                                        {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                                style="z-index: 13"
                                            >
                                                <img
                                                    src="assets/images/main-slider/slider2/earth2.png"
                                                    alt=""
                                                    class="spin-city"
                                                />
                                            </div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-101-layer-9"
                                                data-x="['right','right','right','right']"
                                                data-hoffset="['-300','-100','-100','-100']"
                                                data-y="['bottom','bottom','bottom','bottom']"
                                                data-voffset="['-200','-200','-200','-200']"
                                                data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3000,"ease":"Power3.easeOut"},
                                        {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                                style="z-index: 13"
                                            >
                                                <img
                                                    src="assets/images/main-slider/slider2/earth2-shadow.png"
                                                    alt=""
                                                />
                                            </div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-101-layer-10"
                                                data-x="['right','right','right','right']"
                                                data-hoffset="['200','200','200','200']"
                                                data-y="['top','bottom','bottom','bottom']"
                                                data-voffset="['150','150','150','150']"
                                                data-height="none"
                                                data-whitespace="nowrap"
                                                data-type="image"
                                                data-responsive_offset="on"
                                                data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3000,"ease":"Power3.easeOut"},
                                        {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="z-index: 16"
                                            ></div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-101-layer-11"
                                                data-x="['right','right','right','right']"
                                                data-hoffset="['278','278','278','278']"
                                                data-y="['bottom','bottom','bottom','bottom']"
                                                data-voffset="['180','100','100','100']"
                                                data-height="none"
                                                data-whitespace="nowrap"
                                                data-type="image"
                                                data-responsive_offset="on"
                                                data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":4000,"ease":"Power3.easeOut"},
                                        {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="z-index: 15"
                                            ></div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-101-layer-12"
                                                data-x="['right','right','right','right']"
                                                data-hoffset="['100','100','100','100']"
                                                data-y="['top','bottom','bottom','bottom']"
                                                data-voffset="['0','0','0','0']"
                                                data-lineheight="['none','none','none','none']"
                                                data-width="['500','500','500','500']"
                                                data-height="['none','none','none','none']"
                                                data-whitespace="nowrap"
                                                data-type="image"
                                                data-responsive_offset="on"
                                                data-frames='[ 
                                        {"from":"y:0px(R);opacity:0;","speed":2000,"to":"o:1;","delay":4000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="z-index: 12"
                                            >
                                                <div
                                                    class="coin-slide bg-full-width bg-repeat-y coin-slide-rotate"
                                                    style="
                                                        background-image: url(assets/images/main-slider/slider2/coin-sky.html);
                                                        height: 100vh;
                                                    "
                                                ></div>
                                            </div>
                                        </li>

                                        <li
                                            data-index="rs-1002"
                                            data-transition="slidingoverlayhorizontal"
                                            data-slotamount="default"
                                            data-hideafterloop="0"
                                            data-hideslideonmobile="off"
                                            data-easein="default"
                                            data-easeout="default"
                                            data-masterspeed="default"
                                            data-thumb="assets/images/main-slider/slider2/slide3.jpeg"
                                            data-rotate="0"
                                            data-saveperformance="off"
                                            data-title="Slide"
                                            data-param1=""
                                            data-param2=""
                                            data-param3=""
                                            data-param4=""
                                            data-param5=""
                                            data-param6=""
                                            data-param7=""
                                            data-param8=""
                                            data-param9=""
                                            data-param10=""
                                            data-description=""
                                        >
                                            <img
                                                src="assets/images/main-slider/slider2/slide3.jpg"
                                                alt=""
                                                data-bgposition="center bottom"
                                                data-bgfit="cover"
                                                data-bgrepeat="no-repeat"
                                                class="rev-slidebg"
                                                data-no-retina
                                            />

                                            <div
                                                class="tp-caption tp-shape tp-shapewrapper"
                                                id="slide-102-layer-1"
                                                data-x="['center','center','center','center']"
                                                data-hoffset="['0','0','0','0']"
                                                data-y="['middle','middle','middle','middle']"
                                                data-voffset="['0','0','0','0']"
                                                data-width="full"
                                                data-height="full"
                                                data-whitespace="nowrap"
                                                data-type="shape"
                                                data-basealign="slide"
                                                data-responsive_offset="off"
                                                data-responsive="off"
                                                data-frames='[
                                        {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                        ]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="
                                                    z-index: 12;
                                                    background-color: rgba(
                                                        0,
                                                        0,
                                                        0,
                                                        0.3
                                                    );
                                                    border-color: rgba(
                                                        0,
                                                        0,
                                                        0,
                                                        0
                                                    );
                                                    border-width: 0px;
                                                "
                                            ></div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-102-layer-2"
                                                data-x="['left','left','left','left']"
                                                data-hoffset="['30','30','30','30']"
                                                data-y="['top','top','top','top']"
                                                data-voffset="['308','308','308','308']"
                                                data-fontsize="['60','60','60','60']"
                                                data-lineheight="['110','110','110','110']"
                                                data-width="['6','6','6','6']"
                                                data-height="['110,'110','110','110']"
                                                data-whitespace="['normal','normal','normal','normal']"
                                                data-type="text"
                                                data-responsive_offset="on"
                                                data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="
                                                    z-index: 13;
                                                    white-space: normal;
                                                "
                                            >
                                                <div class="bg-primary">
                                                    &nbsp;
                                                </div>
                                            </div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-102-layer-3"
                                                data-x="['left','left','left','left']"
                                                data-hoffset="['60','60','60','100']"
                                                data-y="['top','top','top','top']"
                                                data-voffset="['300','300','300','300']"
                                                data-fontsize="['55','55','55','45']"
                                                data-lineheight="['60','60','60','65']"
                                                data-width="['700','700','700','700']"
                                                data-height="['none','none','none','none']"
                                                data-whitespace="['normal','normal','normal','normal']"
                                                data-type="text"
                                                data-responsive_offset="on"
                                                data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="
                                                    z-index: 13;
                                                    white-space: normal;
                                                    font-weight: 700;
                                                    color: rgb(75, 57, 65);
                                                    border-width: 0px;
                                                "
                                            >
                                                <div
                                                    style="
                                                        font-family: 'Poppins',
                                                            sans-serif;
                                                        text-transform: uppercase;
                                                    "
                                                >
                                                    <span
                                                        class="text-primary"
                                                        style="
                                                            padding-right: 10px;
                                                        "
                                                        >Make Profits</span
                                                    ><span class="text-white"
                                                        >While the Experts
                                                        Trade</span
                                                    >
                                                </div>
                                            </div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-102-layer-4"
                                                data-x="['left','left','left','left']"
                                                data-hoffset="['60','60','60','100']"
                                                data-y="['top','top','top','top']"
                                                data-voffset="['360','360','360','360']"
                                                data-fontsize="['53','53','53','45']"
                                                data-lineheight="['70','70','70','70']"
                                                data-width="['700','700','700','700']"
                                                data-height="['none','none','none','none']"
                                                data-whitespace="['normal','normal','normal','normal']"
                                                data-type="text"
                                                data-responsive_offset="on"
                                                data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="
                                                    z-index: 13;
                                                    white-space: normal;
                                                    font-weight: 700;
                                                    border-width: 0px;
                                                "
                                            >
                                                <div
                                                    style="
                                                        font-family: 'Poppins',
                                                            sans-serif;
                                                        text-transform: uppercase;
                                                    "
                                                >
                                                    <br />
                                                    <br />
                                                    <!--<span class="text-white" style="padding-right:10px;">
    Way</span><span class="text-primary">to Trade</span>-->
                                                </div>
                                            </div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-102-layer-5"
                                                data-x="['left','left','left','left']"
                                                data-hoffset="['30','30','30','100']"
                                                data-y="['top','top','top','top']"
                                                data-voffset="['440','440','440','440']"
                                                data-fontsize="['16','16','16','30']"
                                                data-lineheight="['30','30','30','40']"
                                                data-width="['600','600','600','600']"
                                                data-height="['none','none','none','none']"
                                                data-whitespace="['normal','normal','normal','normal']"
                                                data-type="text"
                                                data-responsive_offset="on"
                                                data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="
                                                    z-index: 13;
                                                    font-weight: 500;
                                                    color: #fff;
                                                    border-width: 0px;
                                                "
                                            >
                                                <span
                                                    style="
                                                        font-family: 'Poppins',
                                                            sans-serif;
                                                    "
                                                >
                                                    Trade in the most popular
                                                    currencies of your choice;
                                                    USD, GBD, AUD, BTC, CNY,
                                                    EUR, CAD with the most
                                                    secure, reliable and
                                                    advanced digital asset
                                                    trading platform.
                                                </span>
                                            </div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-102-layer-6"
                                                data-x="['left','left','left','left']"
                                                data-hoffset="['30','30','30','100']"
                                                data-y="['top','top','top','top']"
                                                data-voffset="['530','530','530','600']"
                                                data-lineheight="['none','none','none','none']"
                                                data-width="['300','300','300','300']"
                                                data-height="['none','none','none','none']"
                                                data-whitespace="['normal','normal','normal','normal']"
                                                data-type="text"
                                                data-responsive_offset="on"
                                                data-frames='[ 
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="
                                                    z-index: 13;
                                                    text-transform: uppercase;
                                                "
                                            >
                                                <a
                                                    style="border-radius: 25px"
                                                    href="/login"
                                                    class="site-button slider-btn-left"
                                                    >LOGIN</a
                                                >
                                            </div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-102-layer-7"
                                                data-x="['left','left','left','left']"
                                                data-hoffset="['220','220','220','320']"
                                                data-y="['top','top','top','top']"
                                                data-voffset="['530','530','530','600']"
                                                data-lineheight="['none','none','none','none']"
                                                data-width="['300','300','300','300']"
                                                data-height="['none','none','none','none']"
                                                data-whitespace="['normal','normal','normal','normal']"
                                                data-type="text"
                                                data-responsive_offset="on"
                                                data-frames='[ 
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="
                                                    z-index: 13;
                                                    text-transform: uppercase;
                                                    font-weight: 500;
                                                "
                                            >
                                                <a
                                                    style="border-radius: 25px"
                                                    href="/register"
                                                    class="site-button white slider-btn-right"
                                                    >Join Us</a
                                                >
                                            </div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-102-layer-8"
                                                data-x="['right','right','right','right']"
                                                data-hoffset="['0','0','0','0']"
                                                data-y="['bottom','bottom','bottom','bottom']"
                                                data-voffset="['-20','-20','-20','-20']"
                                                data-frames='[ 
                                        {"from":"y:200px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                                style="z-index: 13"
                                            ></div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-102-layer-9"
                                                data-x="['right','right','right','right']"
                                                data-hoffset="['320','320','320','320']"
                                                data-y="['bottom','bottom','bottom','bottom']"
                                                data-voffset="['130','130','130','130']"
                                                data-frames='[ 
                                        {"from":"y:-500px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                                style="z-index: 13"
                                            ></div>

                                            <div
                                                class="tp-caption tp-resizeme"
                                                id="slide-102-layer-10"
                                                data-x="['right','right','right','right']"
                                                data-hoffset="['20','20','20','20']"
                                                data-y="['bottom','bottom','bottom','bottom']"
                                                data-voffset="['80','80','80','80']"
                                                data-height="none"
                                                data-whitespace="nowrap"
                                                data-type="image"
                                                data-responsive_offset="on"
                                                data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3000,"ease":"Power3.easeOut"},
                                        {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                                data-textAlign="['left','left','left','left']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="z-index: 13"
                                            ></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white marquee">
                    <div class="TickerNews" id="T1">
                        <!-- TradingView Widget BEGIN -->
                        <div
                            class="tradingview-widget-container"
                            style="width: 100%; height: 104px"
                        >
                            <iframe
                                scrolling="no"
                                allowtransparency="true"
                                frameborder="0"
                                src="https://s.tradingview.com/embed-widget/ticker-tape/?locale=en&amp;page-uri=https%3A%2F%2Falliedeurocryptocompany.com%2F#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22FOREXCOM%3ASPXUSD%22%2C%22title%22%3A%22S%26P%20500%22%7D%2C%7B%22proName%22%3A%22FOREXCOM%3ANSXUSD%22%2C%22title%22%3A%22Nasdaq%20100%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AEURUSD%22%2C%22title%22%3A%22EUR%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3ABTCUSD%22%2C%22title%22%3A%22BTC%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3AETHUSD%22%2C%22title%22%3A%22ETH%2FUSD%22%7D%2C%7B%22description%22%3A%22DOGE%2FUSDT%22%2C%22proName%22%3A%22BINGBON%3ADOGEUSDT%22%7D%2C%7B%22description%22%3A%22XRP%2FUSDT%22%2C%22proName%22%3A%22BINANCE%3AXRPUSDT%22%7D%2C%7B%22description%22%3A%22BCH%2FUSDT%22%2C%22proName%22%3A%22KRAKEN%3ABCHUSDT%22%7D%2C%7B%22description%22%3A%22KISHU%2FUSDT%22%2C%22proName%22%3A%22OKEX%3AKISHUUSDT%22%7D%5D%2C%22showSymbolLogo%22%3Atrue%2C%22colorTheme%22%3A%22light%22%2C%22isTransparent%22%3Atrue%2C%22displayMode%22%3A%22adaptive%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A104%2C%22utm_source%22%3A%22alliedeurocryptocompany.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22ticker-tape%22%7D"
                                style="
                                    box-sizing: border-box;
                                    height: 72px;
                                    width: 100%;
                                "
                            ></iframe>
                            <div class="tradingview-widget-copyright">
                                <a href="#" rel="noopener" target="_blank"
                                    ><span class="blue-text"
                                        >Ticker Tape</span
                                    ></a
                                >
                                by {{ company }}
                            </div>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
                <div class="section-full bg-primary">
                    <div class="container">
                        <div class="section-content">
                            <div class="wt-subscribe-box">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-9 col-sm-9">
                                            <div
                                                class="call-to-action-left p-tb20"
                                            >
                                                <h4
                                                    class="text-uppercase m-b10 font-weight-600"
                                                >
                                                    WHY TRADE WITH
                                                    {{ company }}
                                                </h4>
                                                <p>
                                                    Our trading team consists of
                                                    highly qualified analyst,
                                                    analytical experts who by
                                                    using their experience and
                                                    latest software, are able to
                                                    predict the movements in
                                                    currency exchange &
                                                    cryptocurrency market with
                                                    best accuracy.
                                                    <br />
                                                    {{ company }} LIVE TRADING
                                                    has shown commendably
                                                    successful and consistent
                                                    performance and trading
                                                    history. Currently, it is
                                                    regarded as one of the best,
                                                    most beneficial, brilliantly
                                                    successful companies in the
                                                    industry of forex trading
                                                    and investing
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div
                                                class="call-to-action-right p-tb30"
                                            >
                                                <a
                                                    style="border-radius: 25px"
                                                    href="/about"
                                                    class="site-button-secondry text-uppercase font-weight-600"
                                                >
                                                    Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="section-full home-about-section p-t10 bg-no-repeat bg-bottom-right"
                    style="
                        background-image: url(assets/images/background/bg-coin.png);
                    "
                >
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="wt-box text-right">
                                    <img
                                        src="assets/images/background/tr.jpg"
                                        alt=""
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="wt-right-part p-b10">
                                    <div class="section-head text-left">
                                        <!--<span class="wt-title-subline font-16 text-gray-dark m-b15"></span>-->
                                        <h2 class="text-uppercase">
                                            About {{ company }}
                                        </h2>
                                        <div class="wt-separator-outer">
                                            <div
                                                class="wt-separator bg-primary"
                                            ></div>
                                        </div>
                                    </div>

                                    <div class="section-content">
                                        <div class="wt-box">
                                            <p style="font-size: 16px">
                                                <!--<strong>-->
                                                {{ company }} is one of the most
                                                efficient and reliable financial
                                                investment service provider in
                                                the world. Our fundamental
                                                mission is to help clients and
                                                customers achieve their
                                                financial objectives.
                                                {{ company }} have staffs with
                                                over 20 years’ experience in
                                                combining financial development
                                                and trades. We are committed to
                                                pushing the boundaries of what
                                                constitutes the highest
                                                standards in trades and asset
                                                management.
                                                <br />
                                                <br />
                                                With over $5.3 Trillion traded
                                                daily in the market, we are
                                                dedicated to giving our clients
                                                their own share of the profit
                                                daily. As a leading global
                                                market maker,
                                                {{ company }} has one of the
                                                World’s Largest Independent
                                                traders and fund managers with
                                                clients from different parts of
                                                the World. Today, as a
                                                successful trade investment and
                                                asset management company, we are
                                                trusted by thousands of clients.
                                                Our sterling reputation,
                                                dedication to meeting our
                                                clients’ needs and innovative
                                                approach to business development
                                                are some driving forces behind
                                                our success.
                                                <!--</strong>-->
                                            </p>
                                            <p>
                                                <strong>
                                                    we are secured With latest
                                                    server security tech,highest
                                                    encryption level, we stay
                                                    protected 24/7
                                                    <br />
                                                    Our forex transactions are
                                                    fast safe and secured.
                                                    Payments should only be made
                                                    on the website..
                                                </strong>
                                            </p>

                                            <a
                                                style="border-radius: 25px"
                                                href="/about"
                                                class="site-button text-uppercase m-r15"
                                                >Read More</a
                                            >
                                            <a
                                                style="border-radius: 25px"
                                                href="/contact"
                                                class="site-button-secondry text-uppercase"
                                                >Contact us</a
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-full p-t10 p-b10 bg-gray">
                    <div class="container"></div>
                </div>
                <InvestmentPlan></InvestmentPlan>
                <div class="section-full p-t10 p-b10 bg-gray">
                    <div class="container">
                        <div class="section-head text-center">
                            <span
                                class="wt-title-subline font-16 text-gray-dark m-b15"
                            ></span>
                            <h2 class="text-uppercase">Latest Withdrawals</h2>
                            <div class="wt-separator-outer">
                                <div class="wt-separator bg-primary"></div>
                            </div>
                            <p></p>
                        </div>

                        <div
                            class="table-responsive"
                            style="
                                height: 400px;
                                overflow-y: auto;
                                overflow-x: auto;
                            "
                        >
                            <marquee direction="down" height="100%">
                                <table class="table" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">
                                                Amount(USD)
                                            </th>
                                            <th class="text-center">Wallet</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                $10,000.00
                                            </td>
                                            <td class="text-center">
                                                3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-warning btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-warning"
                                                        ></i></span
                                                    >Pending
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                $51,000.00
                                            </td>
                                            <td class="text-center">
                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                $24,100.00
                                            </td>
                                            <td class="text-center">
                                                f007e92cc9f82ba9c8c40c481eec7315fa9abcd85e7249a6cb57e38a2cf22d3e
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                $4,000.00
                                            </td>
                                            <td class="text-center">
                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">$500</td>
                                            <td class="text-center">
                                                00db85ef40da34f3ea76aa60f0b2053eec2d90121e450791c18d8edbfedde6f1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                $240,000
                                            </td>
                                            <td class="text-center">
                                                b21a418a44ed8b56118facefe7aa8d26541dff811b8a8ca65cfa1346d62c5c48
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">$17,000</td>
                                            <td class="text-center">
                                                1e652d2899a1d058a20041a9faaeb5dc009101ca412ff09c387e6b281bd1db8b
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-warning btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-warning"
                                                        ></i></span
                                                    >Pending
                                                </button>
                                            </td>
                                            <td class="text-center">$51,000</td>
                                            <td class="text-center">
                                                6a49e66a66f75e72e6bd383ac798792af204a6693708912ad0d48e363a2ab7a7
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">$21,000</td>
                                            <td class="text-center">
                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-warning btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-warning"
                                                        ></i></span
                                                    >Pending
                                                </button>
                                            </td>
                                            <td class="text-center">$6,000</td>
                                            <td class="text-center">
                                                797ba039291417fdbdb411ea0a102d23090cde9ac7799ff605f40b5db484891d
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">$9,000</td>
                                            <td class="text-center">
                                                f0b66ce7a33bbc63bf50050beaf52be71709c359aa1d344bb90f943690485661
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">$23,000</td>
                                            <td class="text-center">
                                                2083e95ada3c584471ba5982e16c5dc2a6e464d3c170555ea8c708668be9383b
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">$51,000</td>
                                            <td class="text-center">
                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">$5,000</td>
                                            <td class="text-center">
                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">5,000</td>
                                            <td class="text-center">
                                                15c3a97edbd606bd1e455aa2875677f5c6cd2b804e9054e898f640d313e39781
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-warning btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-warning"
                                                        ></i></span
                                                    >Pending
                                                </button>
                                            </td>
                                            <td class="text-center">$18,000</td>
                                            <td class="text-center">
                                                66c13496e9d53a2402fd49bbe91df298164472679cc868bbfebbabb4844d784c
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">$2,500</td>
                                            <td class="text-center">
                                                ce972a6b82135fcba0890ea0c8668bdddf782fd580672daa6616c3b1af40ca9f
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">$9,000</td>
                                            <td class="text-center">
                                                376e809b02e6ef044f6d5cf5b72111f25f3c3e16a93dce865a178e2e0f5c484c
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-warning btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-warning"
                                                        ></i></span
                                                    >Pending
                                                </button>
                                            </td>
                                            <td class="text-center">$43,000</td>
                                            <td class="text-center">
                                                aa14458f8082d9c4265ef491ca0b5d4801c16bbf7a4aece7b70a0b4824ffdfea
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                $10,000.00
                                            </td>
                                            <td class="text-center">
                                                3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-warning btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-warning"
                                                        ></i></span
                                                    >Pending
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                $51,000.00
                                            </td>
                                            <td class="text-center">
                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                $24,100.00
                                            </td>
                                            <td class="text-center">
                                                f007e92cc9f82ba9c8c40c481eec7315fa9abcd85e7249a6cb57e38a2cf22d3e
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                $4,000.00
                                            </td>
                                            <td class="text-center">
                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">$500</td>
                                            <td class="text-center">
                                                00db85ef40da34f3ea76aa60f0b2053eec2d90121e450791c18d8edbfedde6f1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                $240,000
                                            </td>
                                            <td class="text-center">
                                                b21a418a44ed8b56118facefe7aa8d26541dff811b8a8ca65cfa1346d62c5c48
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">$17,000</td>
                                            <td class="text-center">
                                                1e652d2899a1d058a20041a9faaeb5dc009101ca412ff09c387e6b281bd1db8b
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-warning btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-warning"
                                                        ></i></span
                                                    >Pending
                                                </button>
                                            </td>
                                            <td class="text-center">$51,000</td>
                                            <td class="text-center">
                                                6a49e66a66f75e72e6bd383ac798792af204a6693708912ad0d48e363a2ab7a7
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">$21,000</td>
                                            <td class="text-center">
                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-warning btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-warning"
                                                        ></i></span
                                                    >Pending
                                                </button>
                                            </td>
                                            <td class="text-center">$6,000</td>
                                            <td class="text-center">
                                                797ba039291417fdbdb411ea0a102d23090cde9ac7799ff605f40b5db484891d
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">$9,000</td>
                                            <td class="text-center">
                                                f0b66ce7a33bbc63bf50050beaf52be71709c359aa1d344bb90f943690485661
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">$23,000</td>
                                            <td class="text-center">
                                                2083e95ada3c584471ba5982e16c5dc2a6e464d3c170555ea8c708668be9383b
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">$51,000</td>
                                            <td class="text-center">
                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">$5,000</td>
                                            <td class="text-center">
                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">5,000</td>
                                            <td class="text-center">
                                                15c3a97edbd606bd1e455aa2875677f5c6cd2b804e9054e898f640d313e39781
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-warning btn-sm"
                                                >
                                                    <span class="btn-label">
                                                        <i
                                                            class="fa fa-warning"
                                                        ></i></span
                                                    >Pending
                                                </button>
                                            </td>
                                            <td class="text-center">$18,000</td>
                                            <td class="text-center">
                                                66c13496e9d53a2402fd49bbe91df298164472679cc868bbfebbabb4844d784c
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">$2,500</td>
                                            <td class="text-center">
                                                ce972a6b82135fcba0890ea0c8668bdddf782fd580672daa6616c3b1af40ca9f
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-check"
                                                        ></i></span
                                                    >Confirmed
                                                </button>
                                            </td>
                                            <td class="text-center">$9,000</td>
                                            <td class="text-center">
                                                376e809b02e6ef044f6d5cf5b72111f25f3c3e16a93dce865a178e2e0f5c484c
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button
                                                    class="btn btn-warning btn-sm"
                                                >
                                                    <span class="btn-label"
                                                        ><i
                                                            class="fa fa-warning"
                                                        ></i></span
                                                    >Pending
                                                </button>
                                            </td>
                                            <td class="text-center">$43,000</td>
                                            <td class="text-center">
                                                aa14458f8082d9c4265ef491ca0b5d4801c16bbf7a4aece7b70a0b4824ffdfea
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </marquee>
                        </div>
                    </div>
                </div>
                <div
                    class="section-full home-about-section p-tb80 bg-no-repeat bg-bottom-right bg-dark"
                    style="
                        background-image: url(assets/images/background/bg-coin.png);
                    "
                >
                    <div class="container">
                        <div class="row">
                            <div
                                class="col-md-6 section-full p-t50 p-b50 overlay-wraper bg-parallax clouds1 bg-repeat"
                                data-stellar-background-ratio="0.5"
                                style="
                                    background-image: url(assets/images/background/bg-9.jpg);
                                "
                            >
                                <!--<div class="" style="background-image:url(/assets/images/background/bg-coin.png)">-->
                                <div id="chartdiv"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-b20 text-left">
                                    <span
                                        class="wt-title-subline font-16 text-gray-dark m-b15"
                                    ></span>
                                    <h2 class="text-uppercase">
                                        How Bitcoin Works
                                    </h2>
                                    <h6>What bitcoin offers you</h6>
                                    <h2>
                                        No idea <strong>what’s</strong> going
                                        on?
                                    </h2>
                                    <p>
                                        <span style="max-width: 430px"
                                            >Bitcoin is received, stored, and
                                            sent using software known as Bitcoin
                                            Wallet, which is available for
                                            free.</span
                                        >
                                    </p>
                                    <div class="wt-separator-outer">
                                        <div
                                            class="wt-separator bg-primary"
                                        ></div>
                                    </div>
                                </div>

                                <div class="section-content">
                                    <div class="wt-box">
                                        <p>
                                            <strong
                                                >Once you've installed a Bitcoin
                                                wallet on your computer or
                                                mobile phone, it will generate
                                                your first Bitcoin address and
                                                you can create more whenever you
                                                need one.
                                            </strong>
                                        </p>
                                        <p>
                                            You can disclose your addresses to
                                            your friends so that they can pay
                                            you or vice versa. In fact, this is
                                            pretty similar to how email works,
                                            except that Bitcoin addresses should
                                            be used only once.
                                        </p>
                                        <a
                                            style="border-radius: 25px"
                                            href="/login"
                                            class="site-button text-uppercase m-r15"
                                            >Sign Up</a
                                        >
                                        <a
                                            style="border-radius: 25px"
                                            href="/register"
                                            class="site-button-secondry text-uppercase"
                                            >Get Started</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <AboutUs :domain="$root.domain"></AboutUs>
                <br />
                <br />
                <div
                    class="section-full p-t50 p-b50 overlay-wraper bg-parallax clouds1 bg-repeat"
                    data-stellar-background-ratio="0.5"
                    style="
                        background-image: url(assets/images/background/bg-9.jpg);
                    "
                >
                    <!--<div class="overlay-main bg-secondry opacity-05"></div>-->
                    <div class="container">
                        <div class="row">
                            <h2 class="font-60 font-weight-600">
                                <span class="text-primary"> PRICE UPDATE</span>
                            </h2>
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div
                                    class="tradingview-widget-container__widget"
                                >
                                    <iframe
                                        allowtransparency="true"
                                        frameborder="0"
                                        src="//www.tradingview-widget.com/embed-widget/crypto-mkt-screener/?locale=en#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A%22490%22%2C%22defaultColumn%22%3A%22overview%22%2C%22screener_type%22%3A%22crypto_mkt%22%2C%22displayCurrency%22%3A%22USD%22%2C%22colorTheme%22%3A%22dark%22%2C%22market%22%3A%22crypto%22%2C%22enableScrolling%22%3Atrue%2C%22utm_source%22%3A%22alliedeurocryptocompany.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22cryptomktscreener%22%7D"
                                        style="
                                            box-sizing: border-box;
                                            height: calc(458px);
                                            width: 100%;
                                        "
                                    ></iframe>
                                </div>
                                <div class="tradingview-widget-copyright">
                                    <a
                                        href="//www.tradingview.com/markets/cryptocurrencies/prices-all/"
                                        rel="noopener"
                                        target="_blank"
                                        ><span class="blue-text"
                                            >Cryptocurrency Markets</span
                                        ></a
                                    >
                                    by TradingView
                                </div>
                            </div>
                            <!-- TradingView Widget ENDS -->
                        </div>
                    </div>

                    <WhyChooseUs :company="$root.company"></WhyChooseUs>

                    <HowItWorks></HowItWorks>
                    <div class="section-full p-t10 p-b10 bg-gray">
                        <div class="container"></div>
                    </div>

                    <div
                        class="section-full p-tb80 bg-full-height bg-repeat-x graph-slide-image"
                        style="
                            background-image: url(assets/images/background/bg-1.jpg);
                        "
                    >
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 clearfix">
                                    <div
                                        class="bit-converter p-a40 p-b15 bg-white"
                                    >
                                        <div class="wt-box">
                                            <h2
                                                class="text-uppercase m-t0 text-primary"
                                            >
                                                What Is Bitcoin
                                            </h2>
                                        </div>
                                        <div class="currency-calculator sp-one">
                                            <div class="btc-clc">
                                                <iframe
                                                    width="420"
                                                    height="315"
                                                    src="https://www.youtube.com/embed/Gc2en3nHxA4"
                                                ></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div
                                        class="wt-box graph-part-right text-white"
                                    >
                                        <strong
                                            class="text-uppercase title-first"
                                            >About Forex</strong
                                        >
                                        <span
                                            class="text-uppercase text-primary display-block title-second"
                                        ></span>
                                        <p>
                                            <strong
                                                >What is Forex? Forex, also
                                                known as foreign exchange, FX or
                                                currency trading, is a
                                                decentralized global market
                                                where all the world's currencies
                                                trade. The forex market is the
                                                largest, most liquid market in
                                                the world with an average daily
                                                trading volume exceeding $5
                                                trillion.</strong
                                            >
                                        </p>
                                        <ul class="list-check-circle primary">
                                            <li>
                                                All forex trades involve two
                                                currencies because you're
                                                betting on the value of a
                                                currency against another. Think
                                                of EUR/USD, the most-traded
                                                currency pair in the world. EUR,
                                                the first currency in the pair,
                                                is the base, and USD, the
                                                second, is the counter. When you
                                                see a price quoted on your
                                                platform, that price is how much
                                                one euro is worth in US dollars.
                                                You always see two prices
                                                because one is the buy price and
                                                one is the sell. The difference
                                                between the two is the spread.
                                                When you click buy or sell, you
                                                are buying or selling the first
                                                currency in the pair.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-full no-col-gap bg-repeat">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 bg-secondry">
                                    <div
                                        class="section-content p-tb60 p-r30 clearfix"
                                    >
                                        <div class="wt-left-part any-query">
                                            <img
                                                src="assets/images/any-query.png"
                                                alt=""
                                            />
                                            <div class="text-center">
                                                <h3
                                                    class="text-uppercase font-weight-500 text-white"
                                                >
                                                    Any Question?
                                                </h3>
                                                <p class="text-white">
                                                    Contact our whatsapp
                                                    customer support
                                                </p>
                                                <h4 class="text-primary">
                                                    <a
                                                        href="//api.whatsapp.com/send?phone=17692030556&amp;text=Hello%20I%20want%20to%20know%20more%20about%20FxTradingMax"
                                                        class="text-white"
                                                        >1-7692030556</a
                                                    >
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 bg-primary">
                                    <div
                                        class="section-content p-tb60 p-l30 clearfix"
                                    >
                                        <div
                                            class="wt-right-part any-query-contact"
                                        >
                                            <img
                                                src="assets/images/any-query-contact.png"
                                                alt=""
                                            />
                                            <div class="text-center">
                                                <h3
                                                    class="text-uppercase font-weight-500 text-white"
                                                >
                                                    Email Support
                                                </h3>
                                                <p class="text-white">
                                                    Send an email to our support
                                                    team via
                                                </p>
                                                <h4 class="text-secondry">
                                                    <a
                                                        style="
                                                            font-weight: 500;
                                                            font-size: 16px;
                                                        "
                                                        class="text-white"
                                                        href="mailto:support@FxTradingMax.com"
                                                    >
                                                        <span class="text-white"
                                                            >support@{{
                                                                domain
                                                            }}</span
                                                        >
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="modal fade"
                id="depoModal"
                tabindex="-1"
                role="dialog"
                aria-hidden="true"
            >
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-content-bg">
                        <div class="modal-header">
                            <strong
                                class="modal-title text-black"
                                id="ModalLabel"
                            >
                                Please sign in first
                            </strong>
                            <a
                                href="javascript:void(0)"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close"
                            >
                                <span aria-hidden="true">&times;</span>
                            </a>
                        </div>
                        <form
                            action="/user/plans"
                            method="post"
                            class="register"
                        >
                            <input
                                type="hidden"
                                name="_token"
                                value="AGMFkuW4jYGk6TF6FhIJimBaPiWKtQeptiP2iDcl"
                            />
                            <div class="modal-footer">
                                <a
                                    href="/login"
                                    type="button"
                                    class="btn btn-success custom-success w-100 text-black"
                                    >Please sign in first</a
                                >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <HomeFooter
                :company="$root.company"
                :domain="$root.domain"
            ></HomeFooter>
            <button class="scroltop">
                <span class="iconmoon-house relative" id="btn-vibrate"></span
                >Top
            </button>
            <div class="mgm" style="display: none; opacity: 1"></div>
        </div>
    </div>
</template>

<style scoped>
@import "../assets/ebuka.css";
/* @import "../assets/css/bootstrap.min.css";
@import "../assets/css/owl.carousel.min.css";
@import "../assets/css/fontawesome/css/font-awesome.min.css";
@import "../assets/css/flaticon.min.css";
@import "../assets/css/bootstrap-select.min.css";
@import "../assets/css/magnific-popup.min.css"; */
/* @import "../assets/css/loader.min.css"; */
@import "../assets/css/style37913791.css";
@import "../assets/css/skin/skin-25b275b27.css";
@import "../assets/plugins/pace/pace.css";
@import "../assets/plugins/revolution/revolution/css/settings.css";
@import "../assets/plugins/revolution/revolution/css/navigation.css";
/* @import "../assets/css/iziToast.min.css"; */

.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 45%;
    right: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, 0.3);
}
</style>
