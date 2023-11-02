@extends('web.layouts.master')
@section('title', __('navbar_home'))

@section('social_meta_tags')
    @if(isset($setting))
        <meta property="og:type" content="website">
        <meta property='og:site_name' content="{{ $setting->title }}"/>
        <meta property='og:title' content="{{ $setting->title }}"/>
        <meta property='og:description'
              content="{!! str_limit(strip_tags($setting->meta_description), 160, ' ...') !!}"/>
        <meta property='og:url' content="{{ route('home') }}"/>
        <meta property='og:image' content="{{ asset('/uploads/setting/'.$setting->logo_path) }}"/>


        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:site" content="{!! '@'.str_replace(' ', '', $setting->title) !!}"/>
        <meta name="twitter:creator" content="@HiTechParks"/>
        <meta name="twitter:url" content="{{ route('home') }}"/>
        <meta name="twitter:title" content="{{ $setting->title }}"/>
        <meta name="twitter:description"
              content="{!! str_limit(strip_tags($setting->meta_description), 160, ' ...') !!}"/>
        <meta name="twitter:image" content="{{ asset('/uploads/setting/'.$setting->logo_path) }}"/>
    @endif
@endsection

@section('content')

    <!-- main-area -->
    <main>
        <!-- Start main-content -->
        <div class="main-content">

            <!-- Section: home -->
            <section id="home">
                <div class="container-fluid p-0">

                    <!-- Slider Revolution Start -->
                    <div class="rev_slider_wrapper">
                        <div class="rev_slider" data-version="5.0">
                            <ul>

                                <!-- SLIDE 1 -->
                                <li data-index="rs-1" data-transition="slidingoverlayhorizontal"
                                    data-slotamount="default" data-easein="default" data-easeout="default"
                                    data-masterspeed="default" data-thumb="{{asset ('dashboard/tpl/images/im_slider_011.jpg')}}" data-rotate="0"
                                    data-saveperformance="off" data-title="Web Show" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{asset ('dashboard/tpl/images/im_slider_011.jpg') }}" alt="" data-bgposition="center 10%"
                                         data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                                         data-bgparallax="6" data-no-retina>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                                         id="rs-1-layer-1"

                                         data-x="['left']"
                                         data-hoffset="['30']"
                                         data-y="['middle']"
                                         data-voffset="['-110']"
                                         data-fontsize="['30']"
                                         data-lineheight="['110']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;s:500"
                                         data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                         data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1000"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 7; white-space: nowrap; font-weight:700; margin-bottom: -45px;">
                                        WELCOME TO IMO STATE UNIVERSITY
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div
                                        class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20"
                                        id="rs-1-layer-2"

                                        data-x="['left']"
                                        data-hoffset="['35']"
                                        data-y="['middle']"
                                        data-voffset="['-25']"
                                        data-fontsize="['20']"
                                        data-lineheight="['54']"
                                        data-width="none"
                                        data-height="none"
                                        data-whitespace="nowrap"
                                        data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                        data-start="1000"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-responsive_offset="on"
                                        style="z-index: 7; white-space: nowrap; font-weight:600;">THE STAR CITADEL OF
                                        LEARNING
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption tp-resizeme text-white"
                                         id="rs-1-layer-3"

                                         data-x="['left']"
                                         data-hoffset="['35']"
                                         data-y="['middle']"
                                         data-voffset="['35']"
                                         data-fontsize="['16']"
                                         data-lineheight="['28']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;s:500"
                                         data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                         data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1400"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                                        Your gateway to knowledge and excellence!
                                    </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption tp-resizeme"
                                         id="rs-1-layer-4"

                                         data-x="['left']"
                                         data-hoffset="['35']"
                                         data-y="['middle']"
                                         data-voffset="['100']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1400"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a
                                            class="btn btn-colored btn-lg btn-flat btn-theme-colored border-left-theme-color-2-6px pl-20 pr-20"
                                            href="#">Read More</a>
                                    </div>
                                </li>

                                <!-- SLIDE 2 -->
                                <li data-index="rs-2" data-transition="slidingoverlayhorizontal"
                                    data-slotamount="default" data-easein="default" data-easeout="default"
                                    data-masterspeed="default" data-thumb="{{asset ('dashboard/tpl/images/im_slider_013.jpg')}}" data-rotate="0"
                                    data-saveperformance="off" data-title="Web Show" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{asset ('dashboard/tpl/images/im_slider_013.jpg')}}" alt="" data-bgposition="center 40%"
                                         data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                                         data-bgparallax="6" data-no-retina>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div
                                        class="tp-caption tp-resizeme text-uppercase  bg-dark-transparent-5 text-white font-raleway border-left-theme-color-2-6px border-right-theme-color-2-6px pl-30 pr-30"
                                        id="rs-2-layer-1"

                                        data-x="['center']"
                                        data-hoffset="['0']"
                                        data-y="['middle']"
                                        data-voffset="['-90']"
                                        data-fontsize="['25']"
                                        data-lineheight="['49']"
                                        data-width="none"
                                        data-height="none"
                                        data-whitespace="nowrap"
                                        data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                        data-start="1000"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-responsive_offset="on"
                                        style="z-index: 7; white-space: nowrap; font-weight:500; border-radius: 6px;">
                                        DISCOVER THE LIMITLESS POSSIBILITIES IN IMO STATE UNIVERSITY
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div
                                        class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                                        id="rs-2-layer-2"

                                        data-x="['center']"
                                        data-hoffset="['0']"
                                        data-y="['middle']"
                                        data-voffset="['-20']"
                                        data-fontsize="['48']"
                                        data-lineheight="['70']"
                                        data-width="none"
                                        data-height="none"
                                        data-whitespace="nowrap"
                                        data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                        data-start="1000"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-responsive_offset="on"
                                        style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">
                                        Your Citadel of Excellence
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption tp-resizeme text-white text-center"
                                         id="rs-2-layer-3"

                                         data-x="['center']"
                                         data-hoffset="['0']"
                                         data-y="['middle']"
                                         data-voffset="['50']"
                                         data-fontsize="['16']"
                                         data-lineheight="['28']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;s:500"
                                         data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                         data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1400"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                                        Bringing out the best in you!
                                    </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption tp-resizeme"
                                         id="rs-2-layer-4"

                                         data-x="['center']"
                                         data-hoffset="['0']"
                                         data-y="['middle']"
                                         data-voffset="['115']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1400"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a
                                            class="btn btn-default btn-circled btn-transparent pl-20 pr-20" href="#">Apply
                                            Now</a>
                                    </div>
                                </li>

                                <!-- SLIDE 3 -->
                                <li data-index="rs-3" data-transition="slidingoverlayhorizontal"
                                    data-slotamount="default" data-easein="default" data-easeout="default"
                                    data-masterspeed="default" data-thumb="{{asset ('dashboard/tpl/images/im_slider_012.jpg')}}" data-rotate="0"
                                    data-saveperformance="off" data-title="Web Show" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{asset ('dashboard/tpl/images/im_slider_012.jpg')}}" alt="" data-bgposition="center center"
                                         data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                                         data-bgparallax="6" data-no-retina>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div
                                        class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-right-theme-color-2-6px pr-20 pl-20"
                                        id="rs-3-layer-1"

                                        data-x="['right']"
                                        data-hoffset="['30']"
                                        data-y="['middle']"
                                        data-voffset="['-90']"
                                        data-fontsize="['64']"
                                        data-lineheight="['72']"
                                        data-width="none"
                                        data-height="none"
                                        data-whitespace="nowrap"
                                        data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                        data-start="1000"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-responsive_offset="on"
                                        style="z-index: 7; white-space: nowrap; font-weight:600;">IMSU
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div
                                        class="tp-caption tp-resizeme text-uppercase bg-dark-transparent-6 text-white font-raleway pl-20 pr-20"
                                        id="rs-3-layer-2"

                                        data-x="['right']"
                                        data-hoffset="['35']"
                                        data-y="['middle']"
                                        data-voffset="['-25']"
                                        data-fontsize="['32']"
                                        data-lineheight="['54']"
                                        data-width="none"
                                        data-height="none"
                                        data-whitespace="nowrap"
                                        data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                        data-start="1000"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-responsive_offset="on"
                                        style="z-index: 7; white-space: nowrap; font-weight:600;">A COMMUNITY OF
                                        THINKERS AND DOERS
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption tp-resizeme text-white text-right"
                                         id="rs-3-layer-3"

                                         data-x="['right']"
                                         data-hoffset="['35']"
                                         data-y="['middle']"
                                         data-voffset="['30']"
                                         data-fontsize="['16']"
                                         data-lineheight="['28']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;s:500"
                                         data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                         data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1400"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                                        Discover the excellence in you!
                                    </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption tp-resizeme"
                                         id="rs-3-layer-4"

                                         data-x="['right']"
                                         data-hoffset="['35']"
                                         data-y="['middle']"
                                         data-voffset="['95']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1400"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a
                                            class="btn btn-colored btn-lg btn-flat btn-theme-colored btn-theme-colored border-right-theme-color-2-6px pl-20 pr-20"
                                            href="#">Apply Now</a>
                                    </div>
                                </li>


                                <!-- SLIDE 4 -->
                                <li data-index="rs-4" data-transition="slidingoverlayhorizontal"
                                    data-slotamount="default" data-easein="default" data-easeout="default"
                                    data-masterspeed="default" data-thumb="{{asset ('dashboard/tpl/images/custom/sldd.jpg')}}" data-rotate="0"
                                    data-saveperformance="off" data-title="Web Show" data-description=""
                                    style="cursor:pointer;">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{asset ('dashboard/tpl/images/custom/sldd.jpg')}}" alt="" data-bgposition="top center"
                                         data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                                         data-bgparallax="6" data-no-retina>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div
                                        class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-right-theme-color-2-6px pr-20 pl-20"
                                        id="rs-3-layer-1"

                                        data-x="['right']"
                                        data-hoffset="['30']"
                                        data-y="['middle']"
                                        data-voffset="['-90']"
                                        data-fontsize="['64']"
                                        data-lineheight="['72']"
                                        data-width="none"
                                        data-height="none"
                                        data-whitespace="nowrap"
                                        data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                        data-start="1000"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-responsive_offset="on"
                                        style="z-index: 7; white-space: nowrap; font-weight:600;display: none;">IMSU
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div
                                        class="tp-caption tp-resizeme text-uppercase bg-dark-transparent-6 text-white font-raleway pl-20 pr-20"
                                        id="rs-3-layer-2"

                                        data-x="['right']"
                                        data-hoffset="['35']"
                                        data-y="['middle']"
                                        data-voffset="['-25']"
                                        data-fontsize="['32']"
                                        data-lineheight="['54']"
                                        data-width="none"
                                        data-height="none"
                                        data-whitespace="nowrap"
                                        data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                        data-start="1000"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-responsive_offset="on"
                                        style="z-index: 7; white-space: nowrap; font-weight:600; display: none;">A
                                        community of thinkers and doers
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption tp-resizeme text-white text-right"
                                         id="rs-3-layer-3"

                                         data-x="['right']"
                                         data-hoffset="['35']"
                                         data-y="['middle']"
                                         data-voffset="['30']"
                                         data-fontsize="['16']"
                                         data-lineheight="['28']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;s:500"
                                         data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                         data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1400"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400; display: none;">
                                        We help you go further than you have ever <br> dreamed with the best university
                                        facility in Africa
                                    </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption tp-resizeme"
                                         id="rs-3-layer-4"

                                         data-x="['middle']"
                                         data-hoffset="['35']"
                                         data-y="['middle']"
                                         data-fontsize="['23']"
                                         data-voffset="['170']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1400"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 5; white-space: nowrap; letter-spacing:1px;display: none;"><a
                                            class="btn btn-colored btn-lg btn-flat btn-theme-colored btn-theme-colored border-right-theme-color-2-6px pl-20 pr-20"
                                            href="#">Visit Us</a>
                                    </div>
                                </li>


                            </ul>
                        </div><!-- end .rev_slider -->
                    </div>
                    <!-- end .rev_slider_wrapper -->
                    <script>
                        $(document).ready(function (e) {
                            var revapi = $(".rev_slider").revolution({
                                sliderType: "standard",
                                jsFileLocation: "dashboard/tpl/js/revolution-slider/js/",
                                sliderLayout: "auto",
                                dottedOverlay: "none",
                                delay: 7000,
                                navigation: {
                                    keyboardNavigation: "off",
                                    keyboard_direction: "horizontal",
                                    mouseScrollNavigation: "off",
                                    onHoverStop: "off",
                                    touch: {
                                        touchenabled: "on",
                                        swipe_threshold: 75,
                                        swipe_min_touches: 1,
                                        swipe_direction: "horizontal",
                                        drag_block_vertical: false
                                    },
                                    arrows: {
                                        style: "gyges",
                                        enable: true,
                                        hide_onmobile: false,
                                        hide_onleave: true,
                                        hide_delay: 200,
                                        hide_delay_mobile: 1200,
                                        tmp: '',
                                        left: {
                                            h_align: "left",
                                            v_align: "center",
                                            h_offset: 0,
                                            v_offset: 0
                                        },
                                        right: {
                                            h_align: "right",
                                            v_align: "center",
                                            h_offset: 0,
                                            v_offset: 0
                                        }
                                    },
                                    bullets: {
                                        enable: true,
                                        hide_onmobile: true,
                                        hide_under: 800,
                                        style: "hebe",
                                        hide_onleave: false,
                                        direction: "horizontal",
                                        h_align: "center",
                                        v_align: "bottom",
                                        h_offset: 0,
                                        v_offset: 30,
                                        space: 5,
                                        tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                                    }
                                },
                                responsiveLevels: [1240, 1024, 778],
                                visibilityLevels: [1240, 1024, 778],
                                gridwidth: [1170, 1024, 778, 480],
                                gridheight: [620, 768, 960, 720],
                                lazyType: "none",
                                parallax: "mouse",
                                parallaxBgFreeze: "off",
                                parallaxLevels: [2, 3, 4, 5, 6, 7, 8, 9, 10, 1],
                                shadow: 0,
                                spinner: "off",
                                stopLoop: "on",
                                stopAfterLoops: 0,
                                stopAtSlide: -1,
                                shuffle: "off",
                                autoHeight: "off",
                                fullScreenAutoWidth: "off",
                                fullScreenAlignForce: "off",
                                fullScreenOffsetContainer: "",
                                fullScreenOffset: "0",
                                hideThumbsOnMobile: "off",
                                hideSliderAtLimit: 0,
                                hideCaptionAtLimit: 0,
                                hideAllCaptionAtLilmit: 0,
                                debugMode: false,
                                fallbacks: {
                                    simplifyAll: "off",
                                    nextSlideOnWindowFocus: "off",
                                    disableFocusListener: false,
                                }
                            });
                        });
                    </script>
                    <!-- Slider Revolution Ends -->
                </div>
            </section>


            @if(count($features) > 0)
                <!-- service-area -->
                <section class="service-details-two p-relative">
                    <div class="container">
                        <div class="row">

                            @foreach($features as $key => $feature)
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="services-box07 @if($key == 1) active @endif">
                                        <div class="sr-contner">
                                            <div class="icon">
                                                <img src="{{ asset('web/img/icon/sve-icon4.png') }}" alt="icon">
                                            </div>
                                            <div class="text">
                                                <h5>{{ $feature->title }}</h5>
                                                <p>{!! $feature->description !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </section>
                <!-- service-area-end -->
            @endif


            @isset($about)
                <!-- about-area -->
                <section class="about-area about-p pt-120 pb-120 p-relative fix" style="background: #eff7ff;">
                    <div class="animations-02"><img src="{{ asset('web/img/bg/an-img-02.png') }}" alt="About"></div>
                    <div class="container">
                        <div class="row justify-content-center align-items-center">

                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="s-about-img p-relative wow fadeInLeft animated" data-animation="fadeInLeft"
                                     data-delay=".4s">
                                    <img src="{{ asset('uploads/about-us/'.$about->attach) }}" alt="img">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="about-content s-about-content pl-15 wow fadeInRight animated"
                                     data-animation="fadeInRight" data-delay=".4s">
                                    <div class="about-title second-title pb-25">
                                        <h5><i class="fal fa-graduation-cap"></i> {{ $about->label }}</h5>
                                        <h2>{{ $about->title }}</h2>
                                    </div>

                                    {!! strip_tags($about->description, '<a><b><i><u><strong>') !!}

                                    <div class="about-content2">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="green2">
                                                    @isset($about->mission_title)
                                                        <li>
                                                            <div class="abcontent">
                                                                <div class="text">
                                                                    <h3>{{ $about->mission_title }}</h3>
                                                                    <p>{!! strip_tags($about->mission_desc, '<a><b><i><u><strong>') !!}</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endisset
                                                    @isset($about->vision_title)
                                                        <li>
                                                            <div class="abcontent">
                                                                <div class="text">
                                                                    <h3>{{ $about->vision_title }}</h3>
                                                                    <p>{!! strip_tags($about->vision_desc, '<a><b><i><u><strong>') !!}</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endisset
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- about-area-end -->
            @endisset


            @isset($callToAction)
                <!-- cta-area -->
                <section class="cta-area cta-bg pt-50 pb-50" style="background-color: #125875;">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="section-title cta-title wow fadeInLeft animated"
                                     data-animation="fadeInDown animated" data-delay=".2s">
                                    <h2>{{ $callToAction->title }}</h2>
                                    <p>{{ $callToAction->sub_title }}</p>
                                </div>

                            </div>
                            <div class="col-lg-4 text-right">
                                <div class="cta-btn s-cta-btn wow fadeInRight animated mt-30"
                                     data-animation="fadeInDown animated" data-delay=".2s">
                                    @if(isset($callToAction->button_link))
                                        <a href="{{ $callToAction->button_link }}" target="_blank"
                                           class="btn ss-btn smoth-scroll">{{ $callToAction->button_text }} <i
                                                class="fal fa-long-arrow-right"></i></a>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- cta-area-end -->
            @endisset


            @if(count($testimonials) > 0)
                <!-- testimonial-area -->
                <section class="testimonial-area pt-120 pb-115 p-relative fix">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="testimonial-active wow fadeInUp animated" data-animation="fadeInUp"
                                     data-delay=".4s">

                                    @foreach($testimonials as $testimonial)
                                        <div class="single-testimonial text-center">
                                            <div class="qt-img">
                                                <img src="{{ asset('web/img/testimonial/qt-icon.png') }}" alt="img">
                                            </div>
                                            <p>{!! $testimonial->description !!}</p>
                                            <div class="testi-author">
                                                <img src="{{ asset('uploads/testimonial/'.$testimonial->attach) }}"
                                                     alt="img">
                                            </div>
                                            <div class="ta-info">
                                                <h6>{{ $testimonial->name }}</h6>
                                                <span>{{ $testimonial->designation ?? '' }}</span>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- testimonial-area-end -->
        @endif

    </main>
    <!-- main-area-end -->

@endsection
