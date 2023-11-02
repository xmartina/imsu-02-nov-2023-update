<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
 	<!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    @if(isset($setting))
    <!-- App Title -->
    <title>@yield('title') | {{ $setting->meta_title ?? '' }}</title>

    <meta name="description" content="{!! str_limit(strip_tags($setting->meta_description), 160, ' ...') !!}">
    <meta name="keywords" content="{!! strip_tags($setting->meta_keywords) !!}">

    <!-- App favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/uploads/setting/'.$setting->favicon_path) }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('/uploads/setting/'.$setting->favicon_path) }}" type="image/x-icon">
    @endif


    @if(empty($setting))
    <!-- App Title -->
    <title>@yield('title')</title>
    @endif


    <!-- Social Meta Tags -->
    <link rel="canonical" href="{{ route('home') }}">

    @yield('social_meta_tags')


 	<!-- Stylesheets -->
 	<link rel="stylesheet" href="{{ asset('web/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('web/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/dripicons.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/responsive.css') }}">



     {{--        Included Template Files--}}

     <link rel="stylesheet" href="{{ asset('dashboard/plugins/toastr/css/toastr.min.css') }}">

     <link href="{{ asset('dashboard/tpl/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
     <link href="{{ asset('dashboard/tpl/css/animate.css')}}" rel="stylesheet" type="text/css">
     <link href="{{ asset('dashboard/tpl/css/css-plugin-collections.css')}}" rel="stylesheet"/>
     <!-- CSS | menuzord megamenu skins -->
     <link id="menuzord-menu-skins" href="{{ asset('dashboard/tpl/css/menuzord-skins/menuzord-rounded-boxed.css')}}" rel="stylesheet"/>
     <!-- CSS | Main style file -->
     <link href="{{ asset('dashboard/tpl/css/style-main.css')}}" rel="stylesheet" type="text/css">
     <link href="{{ asset('dashboard/tpl/css_extend/main.css')}}" rel="stylesheet" type="text/css">
     <link href="{{ asset('dashboard/tpl/css_extend/normalize.css')}}" rel="stylesheet" type="text/css">
     <link href="{{ asset('dashboard/tpl/css_extend/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

     <link href="{{ asset('dashboard/tpl/css_extend/slick-slider.css')}}" rel="stylesheet" type="text/css">
     <link href="{{ asset('dashboard/tpl/css_extend/responsive.css')}}" rel="stylesheet" type="text/css">
     <link href="{{ asset('dashboard/tpl/css_extend/color.css')}}" rel="stylesheet" type="text/css">
     <link href="{{ asset('dashboard/tpl/css_extend/color-two.css')}}" rel="stylesheet">
     <link href="{{ asset('dashboard/tpl/css_extend/color-three.css')}}" rel="stylesheet">
     <link href="{{ asset('dashboard/tpl/css_extend/color-four.css')}}" rel="stylesheet">
     <link href="{{ asset('dashboard/tpl/css_extend/bootstrap.css')}}" rel="stylesheet" type="text/css">
     <link href="{{ asset('dashboard/tpl/css_extend/mater.html')}}" rel="stylesheet" type="text/css">
     <!-- CSS | Custom Margin Padding Collection -->
     <link href="{{ asset('dashboard/tpl/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
     <!-- CSS | Responsive media queries -->
     <link href="{{ asset('dashboard/tpl/css/responsive.css')}}" rel="stylesheet" type="text/css">
     <link href="{{ asset('dashboard/tpl/css_extend/responsive.css')}}" rel="stylesheet" type="text/css">
     <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
     <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

     <!-- Revolution Slider 5.x CSS settings -->
     <link  href="{{ asset('dashboard/tpl/js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
     <link  href="{{ asset('dashboard/tpl/js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
     <link  href="{{ asset('dashboard/tpl/js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

     <!-- CSS | Theme Color -->
     <link href="{{ asset('dashboard/tpl/css/colors/theme-skin-color-set-1.css')}}" rel="stylesheet" type="text/css">
     <link href="{{ asset('dashboard/tpl/css_extend/lecture.css')}}" rel="stylesheet" type="text/css">


     <link href="{{ asset('dashboard/tpl/css_extend/styles.css')}}" rel="stylesheet" type="text/css">
     <link href="{{ asset('dashboard/tpl/css_extend/style.css')}}" rel="stylesheet" type="text/css">


     <!-- external javascripts -->
     <script src="{{ asset('dashboard/tpl/js/jquery-2.2.4.min.js')}}"></script>
     <script src="{{ asset('dashboard/tpl/js/jquery-ui.min.js')}}"></script>
     <script src="{{ asset('dashboard/tpl/js/bootstrap.min.js')}}"></script>
     <!-- JS | jquery plugin collection for this theme -->
     <script src="{{ asset('dashboard/tpl/js/jquery-plugin-collection.js')}}"></script>

     <!-- Revolution Slider 5.x SCRIPTS -->
     <script src="{{ asset('dashboard/tpl/js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
     <script src="{{ asset('dashboard/tpl/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>




     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
     <![endif]-->
     <link href="{{ asset('dashboard/tpl/css/prince.css')}}" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="{{ asset('dashboard/tpl/css/prince-2.css')}}">

     <style type="text/css">

         .dropdown-menu li {
             position: relative;
         }
         .dropdown-menu .dropdown-submenu {
             display: none;
             position: absolute;
             left: 100%;
             top: -7px;
         }
         .dropdown-menu .dropdown-submenu-left {
             right: 100%;
             left: auto;
         }
         .dropdown-menu > li:hover > .dropdown-submenu {
             display: block;
         }
     </style>

     {{--        End Included Template Files--}}



     @php
    $version = App\Models\Language::version();
    @endphp
    @if($version->direction == 1)
    <!-- RTL css -->
    <link rel="stylesheet" href="{{ asset('web/css/rtl.css') }}">
    @endif
 </head>

 <body>

{{-- 	Start Inc Header--}}
<div id="wrapper" class="clearfix">
    <!-- preloader -->
    <!-- <div id="preloader">
      <div id="spinner">
        <div class="preloader-dot-loading">
          <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
      </div>
      <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>  -->

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-top bg-theme-color-2 sm-text-center p-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="widget no-border m-0">
                            <ul class="styled-icons icon-circled icon-sm pull-left flip sm-pull-none sm-text-center mt-sm-15">
                                <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li> -->
                                <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="widget m-0 pull-right sm-pull-none sm-text-center">
                            <ul class="list-inline pull-right">

                                <!-- <li class="mb-0 pb-0">
                                  <div class="top-dropdown-outer pt-5 pb-10">
                                    <a class="top-search-box has-dropdown text-white text-hover-theme-colored"><i class="fa fa-search font-13"></i> &nbsp;</a>
                                    <ul class="dropdown">
                                      <li>
                                        <div class="search-form-wrapper">
                                          <form method="get" class="mt-10">
                                            <input type="text" onfocus="if(this.value =='Enter your search') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Enter your search'; }" value="Enter your search" id="searchinput" name="s" class="">
                                            <label><input type="submit" name="submit" value=""></label>
                                          </form>
                                        </div>
                                      </li>
                                    </ul>
                                  </div>
                                </li> -->
                            </ul>
                        </div>
                        <div class="widget no-border m-0 mr-15 pull-right flip sm-pull-none sm-text-center">


                            <div class="widget no-border m-0">
                                <ul class="list-inline font-13 sm-text-center mt-5">
                                    <li>
                                        <div class="dropdown show" >

                                            <button class="btn bt-primary dropdown-toggle" style="background: #2c724f; color: #fff;"  id="dropdownMenuLink"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                Staff
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background: #202c45; ">

                                                <li>
                                                    <a class="dropdown-item" href="#" style="color: #ff9900; font-weight: bold;">
                                                        Academic Staff
                                                    </a>
                                                    <!--<a class="dropdown-item" href="academic-staff.php" style="color: #ff9900; font-weight: bold;">-->
                                                    <!-- Academic Staff -->
                                                    <!--</a>-->

                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" style="color: #ff9900; font-weight: bold;">
                                                        Non-Academic Staff
                                                    </a>
                                                    <!--<a class="dropdown-item" href="non-academic-staff.php" style="color: #ff9900; font-weight: bold;">-->
                                                    <!-- Non-Academic Staff -->
                                                    <!--</a>-->

                                                </li>
                                            </ul>
                                        </div>

                                    </li>
                                    <li>
                                        <a class="text-white" href="#">Students</a>
                                    </li>
                                    <li>
                                        <a class="text-white" href="#">Alumni</a>
                                    </li>
                                    <li>
                                        <a class="text-white" href="#">Transcript</a>
                                    </li>
                                    <li>
                                        <a class="text-white" href="#">Giving/Donations</a>
                                    </li>
                                    <li>
                                        <a class="text-white" href="make-payment.html">Making Payments</a>
                                    </li>





                                    <!--   <li>
                                        <div class="dropdown show">
                                        <a class="btn bt-secondary dropdown-toggle" style="background: #2c724f; color: #fff;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Tetfund Interventions
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                          <a class="dropdown-item" href="#">Action

                                          </a>
                                          <a class="dropdown-item" href="#">Another action</a>

                                        </div>
                                      </div>
                                      </li>
                       -->

                                    <li>
                                        <div class="dropdown show">
                                            <button class="btn bt-primary dropdown-toggle" style="background: #2c724f; color: #fff;"  id="dropdownMenuLink trigger"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                <span onclick="location.href='tetfund-intervention/index.html';">Tetfund Interv</span><span id="trigger1" onmouseover="change()">entions </span>
                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background: #202c45; ">

                                                <li>
                                                    <a class="dropdown-item" href="#" onclick="location.href='tetfund-intervention/index.html';" style="color: #ff9900; font-weight: bold;"  >
                                                        Special Intervention &raquo;
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-submenu"  style="background: #202c45; ">
                                                        <li>
                                                            <a class="dropdown-item" href="#" onclick="location.href='tetfund-intervention/index.html';" >Zonal Intervention</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#" onclick="location.href='tetfund-intervention/index.html';" >Disaster Recovery</a>
                                                        </li>

                                                        <li>
                                                            <a class="dropdown-item" href="#" onclick="location.href='tetfund-intervention/index.html';" >High Impact Intervention</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#" onclick="location.href='tetfund-intervention/index.html';" >National Research Fund</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" style="color: #ff9900; font-weight: bold;" onclick="location.href='tetfund-intervention/index.html';" >
                                                        Annual Intervention &raquo;
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-submenu" style="background: #202c45; ">
                                                        <li>
                                                            <a class="dropdown-item" href="#" onclick="location.href='tetfund-intervention/index.html';" >Academic Manuscript Development</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#" onclick="location.href='tetfund-intervention/index.html';" >Entrepreneurship</a>
                                                        </li>

                                                        <li>
                                                            <a class="dropdown-item" href="#" onclick="location.href='tetfund-intervention/index.html';" >Equipment Fabrication</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#" onclick="location.href='tetfund-intervention/index.html';" >Tetfund Project Maintanance</a>
                                                        </li>

                                                        <li>
                                                            <a class="dropdown-item" href="#" onclick="location.href='tetfund-intervention/index.html';" >Academic Research Journal</a>
                                                        </li>

                                                        <li>
                                                            <a class="dropdown-item" href="#" onclick="location.href='tetfund-intervention/index.html';" >ICT Support</a>
                                                        </li>

                                                        <li>
                                                            <a class="dropdown-item" href="#" onclick="location.href='tetfund-intervention/index.html';" >Institution Based Research</a>
                                                        </li>

                                                        <li>
                                                            <a class="dropdown-item" href="#" onclick="location.href='tetfund-intervention/index.html';" >Teaching Practice</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#" onclick="location.href='tetfund-intervention/index.html';" >Conference Attendance</a>
                                                        </li>

                                                        <li>
                                                            <a class="dropdown-item" href="#" onclick="location.href='tetfund-intervention/index.html';" >Library Development</a>
                                                        </li>

                                                        <li>
                                                            <a class="dropdown-item" href="#" onclick="location.href='tetfund-intervention/index.html';" >Academic Staff Training</a>
                                                        </li>

                                                        <li>
                                                            <a class="dropdown-item" href="#" onclick="location.href='tetfund-intervention/index.html';" >Physical Infrastructure</a>
                                                        </li>


                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <script>
                                        function change() {
                                            document.getElementById("trigger1").click();
                                        }
                                    </script>


                                    <li>
                                        <a class="text-white" href="#">Scholarships</a>
                                    </li>

                                    <li>
                                        <a class="text-white" href="https://webmail.imsu.edu.ng/">Webmail</a>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle p-0 bg-lightest xs-text-center">
            <div class="container pt-0 pb-0">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-5">
                        <div class="widget no-border m-0">
                            <a class="menuzord-brand flip xs-pull-center mb-15" href="index.html"><img src="images/imo_logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                            <ul class="list-inline">
                                <li><i class="fa fa-phone-square text-theme-colored font-36 mt-5 sm-display-block"></i></li>
                                <li>
                                    <a href="#" class="font-12 text-gray text-uppercase">Call us today!</a>
                                    <h5 class="font-14 m-0"> +234 0000000</h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                            <ul class="list-inline">
                                <li><i class="fa fa-envelope text-theme-colored font-36 mt-5 sm-display-block"></i></li>
                                <li>
                                    <a href="#" class="font-12 text-gray text-uppercase">Write us!</a>
                                    <h5 class="font-13 text-black m-0"> <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="bad3d4dcd5fad3d7c9cf94dfdecf94d4dd">[email&#160;protected]</a></h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-colored border-bottom-theme-color-2-1px">
                <div class="container">
                    <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">
                        <ul class="menuzord-menu">




                            <li><a href="javascript:void(0)" onclick="location.href='about-us.html'">About IMSU</a>
                                <div class="megamenu" style="background: #202c45;">
                                    <div class="megamenu-row">
                                        <div class="col6">
                                            <h4 style="font-weight: bold; color: #ff9900; font-size: 35px;" onclick="location.href='about-us.html'">About us</h4>
                                            <p style="color: #fff;">Imo State University was established in 1981 and has since grown to become one of the leading universities in the country. The university offers a wide range of undergraduate and postgraduate programs in fields. It also has a strong research focus and is known for its commitment to academic excellence and innovation </p>
                                        </div>
                                        <div class="col4">
                                            <div class="widget dark">
                                                <h4 class="widget-title" style="font-weight: bold; color: #ff9900;" onclick="location.href='about-us.html'">About Us</h4>
                                                <ul class="list-unstyled">
                                                    <li><a href="history.html">History</a></li>
                                                    <li><a href="leadership.html">Leadership & Organisation</a></li>
                                                    <li><a href="governing-council.html">Governing Council</a></li>
                                                    <!--<li><a href="">Vacancies</a></li>-->
                                                    <li><a href="#">Our Awards</a></li>
                                                    <li><a href="mission.vision.html">Mission & Vision</a></li>
                                                    <!--<li><a href="">The Vice-Chancellor's Vision</a></li>-->



                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="javascript:void(0)">Academics</a>
                                <div class="megamenu" style="background: #202c45;">
                                    <div class="megamenu-row">
                                        <div class="col3">
                                            <h4 style="font-weight: bold; color: #ff9900; font-size: 35px;">Academics</h4>
                                            <p style="color: #fff;">Our academic programs are rigorous and carefully modelled to prepare our students to be ahead. Our nearly 60,000 students can choose from 80 undergraduate and 110 postgraduate degree programs plus research and study opportunities across the world. That’s why Imo State University is the university of first choice and the nations pride</p>
                                        </div>
                                        <div class="col3">
                                            <div class="widget dark">
                                                <h4 class="widget-title" style="font-weight: bold; color: #ff9900;">Faculties</h4>
                                                <ul class="list-unstyled">
                                                    <li><a href="#">Faculty of Arts</a></li>
                                                    <li><a href="#">Faculty of Basic Medical Sciences</a></li>
                                                    <li><a href="#">Faculty of Management Sciences</a></li>
                                                    <li><a href="#">Faculty of Clinical Sciences</a></li>
                                                    <li><a href="#">Faculty of Dental Sciences</a></li>
                                                    <li><a href="#">Faculty of Education</a></li>


                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col3">
                                            <div class="widget dark">

                                                <ul class="list-unstyled">
                                                    <li><a href="#">Faculty of Engineering</a></li>
                                                    <li><a href="#">Faculty of of Environmental Sciences</a></li>
                                                    <li><a href="#">Faculty of Law</a></li>
                                                    <li><a href="#">Faculty of Pharmacy</a></li>
                                                    <li><a href="#">Faculty of Social Sciences</a></li>
                                                    <li><a href="#">Faculty of Science</a></li>


                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col3">
                                            <div class="widget dark">
                                                <h4 class="widget-title" style="font-weight: bold; color: #ff9900;">Institutes & Colleges</h4>
                                                <ul class="list-unstyled">
                                                    <li><a href="#">College of Medicine</a></li>
                                                    <li><a href="#">Distant Learning Institute</a></li>
                                                    <li><a href="#">Institute of Continuing Education</a></li>

                                                    <li><a href="#">Entrepreneurship & Skill Development Centre (ESDC)</a></li>
                                                    <li><a href="#">Institute of Marine Studies</a></li>
                                                    <li><a href="#">Institute Africa & Diaspora Studies</a></li>
                                                    <li><a href="#">School of Postgraduate Studies</a></li>
                                                    <li><a href="#">School of Foundation Studies</a></li>
                                                    <li><a href="#">Library</a></li>


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>




                            <li><a href="javascript:void(0)">Units</a>
                                <div class="megamenu" style="background: #202c45;">
                                    <div class="megamenu-row">
                                        <div class="col4">
                                            <h4 style="font-weight: bold; color: #ff9900; font-size: 35px;">Units</h4>
                                            <p style="color: #fff;">Imo State University Units</p>
                                        </div>
                                        <div class="col4">
                                            <div class="widget dark">
                                                <h4 class="widget-title" style="font-weight: bold; color: #ff9900;">Units</h4>
                                                <ul class="list-unstyled">
                                                    <li><a href="#">Registry</a></li>
                                                    <li><a href="#">Bursary</a></li>
                                                    <li><a href="#">Centre for Housing</a></li>
                                                    <li><a href="#">Centre for Information Technology & Systems</a></li>
                                                    <li><a href="#">Entrepreneurship & Skill Development Centre (ESDC)</a></li>
                                                    <li><a href="#">Records</a></li>
                                                    <li><a href="#">Quality Assurance & Servicom</a></li>



                                                </ul>
                                            </div>
                                        </div>


                                        <div class="col4">
                                            <div class="widget dark">

                                                <ul class="list-unstyled">
                                                    <li><a href="#">Human Resource & Development Centre</a></li>
                                                    <li><a href="#">International Relations Office</a></li>
                                                    <li><a href="#">Works & Physical Planning</a></li>
                                                    <li><a href="#">Student Affairs Division</a></li>
                                                    <li><a href="#">Counselling Unit</a></li>
                                                    <li><a href="#">Staff Club</a></li>
                                                    <li><a href="#">Tetfund</a></li>



                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li><a href="#">Research</a></li>



                            <li><a href="javascript:void(0)">Resources</a>
                                <div class="megamenu" style="background: #202c45;">
                                    <div class="megamenu-row">
                                        <div class="col4">
                                            <h4 style="font-weight: bold; color: #ff9900; font-size: 35px;">Resources</h4>
                                            <p style="color: #fff;">Useful Resources</p>
                                        </div>
                                        <div class="col4">
                                            <div class="widget dark">
                                                <h4 class="widget-title" style="font-weight: bold; color: #ff9900;">Resources</h4>
                                                <ul class="list-unstyled">
                                                    <li><a href="#">Our Campus</a></li>
                                                    <li><a href="#">Addresses</a></li>
                                                    <li><a href="#">Downloads</a></li>
                                                    <li><a href="#">Videos</a></li>
                                                    <li><a href="#">Newsletters</a></li>
                                                    <li><a href="#">Conferences</a></li>
                                                    <li><a href="#">IMSU Magazines</a></li>




                                                </ul>
                                            </div>
                                        </div>


                                        <div class="col4">
                                            <div class="widget dark">

                                                <ul class="list-unstyled">
                                                    <li><a href="#">Public Lectures</a></li>
                                                    <li><a href="#">Inaugurals</a></li>
                                                    <li><a href="#">Journals</a></li>
                                                    <li><a href="#">Publications</a></li>
                                                    <li><a href="#">Institutional Repository</a></li>




                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li><a href="javascript:void(0)">Admissions</a>
                                <div class="megamenu" style="background: #202c45;">
                                    <div class="megamenu-row">
                                        <div class="col6">
                                            <h4 style="font-weight: bold; color: #ff9900; font-size: 35px;">Admissions</h4>
                                            <p style="color: #fff;">Imo State University was established in 1981 and has since grown to become one of the leading universities in the country. The university offers a wide range of undergraduate and postgraduate programs in fields. It also has a strong research focus and is known for its commitment to academic excellence and innovation </p>
                                        </div>
                                        <div class="col6">
                                            <div class="widget dark">
                                                <h4 class="widget-title" style="font-weight: bold; color: #ff9900;">Admission</h4>
                                                <ul class="list-unstyled">
                                                    <li><a href="#">Foundation</a></li>
                                                    <li><a href="#">Undergraduate</a></li>
                                                    <li><a href="#">Postgraduate</a></li>
                                                    <li><a href="#">Distant Learning Institute</a></li>
                                                    <li><a href="#">Institute of Continuing Education</a></li>





                                                </ul>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </li>



                            <li><a href="javascript:void(0)">Enterprise</a>
                                <div class="megamenu" style="background: #202c45;">
                                    <div class="megamenu-row">
                                        <!-- <div class="col6">
                                          <h4 style="font-weight: bold; color: #ff9900; font-size: 35px;">Admissions</h4>
                                          <p style="color: #fff;">Imo State University was established in 1981 and has since grown to become one of the leading universities in the country. The university offers a wide range of undergraduate and postgraduate programs in fields. It also has a strong research focus and is known for its commitment to academic excellence and innovation </p>
                                        </div> -->
                                        <div class="col6">
                                            <div class="widget dark">
                                                <h4 class="widget-title" style="font-weight: bold; color: #ff9900;">Enterprise</h4>
                                                <ul class="list-unstyled">
                                                    <li><a href="#">Bookshop</a></li>
                                                    <li><a href="#">Press</a></li>
                                                    <li><a href="#">Water</a></li>
                                                    <li><a href="#">Pharmacy</a></li>
                                                    <li><a href="#">Microfinance Bank</a></li>





                                                </ul>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </li>





                            <li><a href="#">Campuses</a></li>
                            <li><a href="#">E-Learning</a></li>
                            <li><a href="#">Contact Us</a></li>









                        </ul>
                        <ul class="pull-right flip hidden-sm hidden-xs">
                            <li>
                                <!-- Modal: Book Now Starts -->
                                <a class="btn btn-colored btn-flat bg-theme-color-2 text-white font-14 bs-modal-ajax-load mt-0 p-25 pr-15 pl-15" href="portal.html">Portal</a>
                                <!-- Modal: Book Now End -->
                            </li>
                        </ul>
                        <div id="top-search-bar" class="collapse">
                            <div class="container">
                                <form role="search" action="#" class="search_form_top" method="get">
                                    <input type="text" placeholder="Type text and press Enter..." name="s" class="form-control" autocomplete="off">
                                    <span class="search-close"><i class="fa fa-search"></i></span>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <style type="text/css">
        .list-unstyled li a{
            line-height: 11px;

        }

        .list-unstyled li a:hover{
            background: #ff9900;
            font-weight: bold;

        }

        .list-unstyled li a:link{
            color: #fff;
            line-height: 11px;

        }
        .dropdown-menu  li a{
            color: #fff;
        }
        .dropdown-submenu  li a{
            color: #fff;
        }




    </style>


    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">

    </script>



    {{--    End Inc Header--}}


    <!-- Content Start -->
    @yield('content')
    <!-- Content End -->


 	<!-- footer -->
    <footer class="footer-bg footer-p pt-90" style="background-color: #125875;">
        <div class="footer-top pb-70">
            <div class="container">
                <div class="row justify-content-between">

                    <div class="col-xl-4 col-lg-4 col-sm-12">
                        <div class="footer-widget mb-30">
                            <div class="f-widget-title">
                                <h2>{{ __('footer_socials') }}</h2>
                            </div>
                            <div class="footer-social mt-10">
                                @if(isset($socialSetting->facebook))
                                <a href="{{ $socialSetting->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                @endif
                                @if(isset($socialSetting->instagram))
                                <a href="{{ $socialSetting->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                                @endif
                                @if(isset($socialSetting->twitter))
                                <a href="{{ $socialSetting->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                @endif
                                @if(isset($socialSetting->linkedin))
                                <a href="{{ $socialSetting->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                @endif
                                @if(isset($socialSetting->pinterest))
                                <a href="{{ $socialSetting->pinterest }}" target="_blank"><i class="fab fa-pinterest"></i></a>
                                @endif
                                @if(isset($socialSetting->youtube))
                                <a href="{{ $socialSetting->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-sm-6">
                        <div class="footer-widget mb-30">
                            <div class="f-widget-title">
                                <h2>{{ __('footer_links') }}</h2>
                            </div>
                            <div class="footer-link">
                                <ul>
                                    @if (Route::has('student.login'))
                                    <li><a href="{{ route('student.login') }}" target="_blank">{{ __('field_student') }} {{ __('field_login') }}</a></li>
                                    @endif
                                    @if (Route::has('login'))
                                    <li><a href="{{ route('login') }}" target="_blank">{{ __('field_staff') }} {{ __('field_login') }}</a></li>
                                    @endif

                                    @php
                                    $application = App\Models\ApplicationSetting::status();
                                    @endphp
                                    @isset($application)
                                    <li><a href="{{ route('application.index') }}" target="_blank">{{ __('navbar_admission') }}</a></li>
                                    @endisset

                                    @foreach($footer_pages as $footer_page)
                                    <li><a href="{{ route('page.single', ['slug' => $footer_page->slug]) }}">{{ $footer_page->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-sm-6">
                        <div class="footer-widget mb-30">
                            <div class="f-widget-title">
                                <h2>{{ __('footer_contact') }}</h2>
                            </div>
                            <div class="f-contact">
                                <ul>
                                    @isset($topbarSetting->phone)
                                    <li>
                                        <i class="icon fal fa-phone"></i>
                                        <span><a href="tel:{{ str_replace(' ', '', $topbarSetting->phone ?? '') }}">{{ $topbarSetting->phone ?? '' }}</a></span>
                                    </li>
                                    @endisset
                                    @isset($topbarSetting->email)
                                    <li>
                                        <i class="icon fal fa-envelope"></i>
                                        <span><a href="mailto:{{ $topbarSetting->email ?? '' }}">{{ $topbarSetting->email ?? '' }}</a></span>
                                    </li>
                                    @endisset
                                    @isset($topbarSetting->address)
                                    <li>
                                        <i class="icon fal fa-map-marker-check"></i>
                                        <span>{{ $topbarSetting->address ?? '' }}</span>
                                    </li>
                                    @endisset
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="dropdown">
                          <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ $version->name }}
                          </a>

                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            @foreach($user_languages as $user_language)
                            <li><a class="dropdown-item" href="{{ route('version', $user_language->code) }}">{{ $user_language->name }}</a></li>
                            @endforeach
                          </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 text-center">

                    </div>
                    <div class="col-lg-4 col-md-4 col-12 text-center text-md-right">
                        @isset($setting->copyright_text)
                        &copy; {!! strip_tags($setting->copyright_text, '<a><b><i><u><strong>') !!}
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->


 	<!-- Script JS -->
{{--        Included Libraries--}}
    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    <script data-cfasync="false" src="{{ asset('dashboard/tpl/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="{{ asset('dashboard/tpl/js/custom.js')}}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
          (Load Extensions only on Local File Systems !
           The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="{{ asset('dashboard/tpl/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('dashboard/tpl/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('dashboard/tpl/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('dashboard/tpl/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('dashboard/tpl/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('dashboard/tpl/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('dashboard/tpl/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('dashboard/tpl/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('dashboard/tpl/js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('dashboard/tpl/script/slick.slider.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('dashboard/tpl/script/functions.js')}}"></script>
{{--    End Included Libraries--}}
 	<script src="{{ asset('web/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('web/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('web/js/popper.min.js') }}"></script>
    <script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('web/js/slick.min.js') }}"></script>
    <script src="{{ asset('web/js/paroller.js') }}"></script>
    <script src="{{ asset('web/js/wow.min.js') }}"></script>
    <script src="{{ asset('web/js/js_isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('web/js/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('web/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('web/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('web/js/element-in-view.js') }}"></script>
    <script src="{{ asset('web/js/main.js') }}"></script>

 </body>
</html>
