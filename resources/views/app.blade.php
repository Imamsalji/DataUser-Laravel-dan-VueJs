<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project VueJs</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template/assets/images/favicon.png')}}">
    <!-- chartist CSS -->
    <link href="{{ asset('template/assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet')}}">
    <link href="{{ asset('template/assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet')}}">
    <link href="{{ asset('template/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="{{ asset('template/assets/plugins/c3-master/c3.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('template/css/style.min.css')}}" rel="stylesheet">
</head>
<body>
<div id="app">
<router-view></router-view>
</div>
</body>
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('template/assets/plugins/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('template/assets/plugins/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('template/assets/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('template/js/app-style-switcher.js')}}"></script>
    <script src="{{ asset('template/js/waves.js')}}"></script>
    <script src="{{ asset('template/js/sidebarmenu.js')}}"></script>
    <script src="{{ asset('template/assets/plugins/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{ asset('template/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{ asset('template/assets/plugins/d3/d3.min.js')}}"></script>
    <script src="{{ asset('template/assets/plugins/c3-master/c3.min.js')}}"></script>
    <script src="{{ asset('template/js/pages/dashboards/dashboard1.js')}}"></script>
    <script src="{{ asset('template/js/custom.js')}}"></script>
    <script src="{{ asset('js/app.js')}}"></script>
</html>