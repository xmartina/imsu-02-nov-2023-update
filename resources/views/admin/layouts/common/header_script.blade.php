        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="robots" content="noindex" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @if(isset($setting))
        <!-- App Title -->
        <title>@yield('title') | {{ $setting->meta_title ?? '' }}</title>

        <meta name="description" content="{!! str_limit(strip_tags($setting->meta_description), 160, ' ...') !!}">
        <meta name="keywords" content="{!! strip_tags($setting->meta_keywords) !!}">

        @if(is_file('uploads/setting/'.$setting->favicon_path))
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('uploads/setting/'.$setting->favicon_path) }}" type="image/x-icon">
        @endif
        @endif

        @if(empty($setting))
        <!-- App Title -->
        <title>@yield('title')</title>
        @endif

        <!-- fontawesome icon -->
        <link rel="stylesheet" href="{{ asset('dashboard/fonts/fontawesome/css/fontawesome-all.min.css') }}">
        <!-- data tables css -->
        <link rel="stylesheet" href="{{ asset('dashboard/plugins/data-tables/css/datatables.min.css') }}">
        <!-- select2 css -->
        <link rel="stylesheet" href="{{ asset('dashboard/plugins/select2/css/select2.min.css') }}">
        <!-- material datetimepicker css -->
        <link rel="stylesheet" href="{{ asset('dashboard/plugins/material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}">
        <!-- minicolors css -->
        <link rel="stylesheet" href="{{ asset('dashboard/plugins/mini-color/css/jquery.minicolors.css') }}">
        <!-- toastr css -->
        <link rel="stylesheet" href="{{ asset('dashboard/plugins/toastr/css/toastr.min.css') }}">

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

{{--        End Included Template Files--}}


        <!-- page css -->
        @yield('page_css')


        <!-- vendor css -->
        <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}" type="text/css" media="screen, print">

        @php
        $version = App\Models\Language::version();
        @endphp
        @if($version->direction == 1)
        <!-- RTL css -->
        <link rel="stylesheet" href="{{ asset('dashboard/css/layouts/rtl.css') }}" type="text/css" media="screen, print">
        @endif
