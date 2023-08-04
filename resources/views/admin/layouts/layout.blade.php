<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}" >
<link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}" >
<link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}" >
<link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}" >
<link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}" >
<link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}" >
<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}" >
<link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}" >
<link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}" >
<link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}" >
<link rel="stylesheet" href="{{asset('css/admin/home.css')}}" >
<link  rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
<link  rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
<body class="hold-transition sidebar-mini">
<div class="wrapper">
@include('admin.layouts.header')
<div class="content-wrapper">

    @yield('content')
</div>

<footer class="main-footer">
    @include('admin.layouts.footer')
</footer>
</div>
</body>
<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.js/bootstrap.min.js')}}"></script>

<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<script src="{{asset('dist/js/demo.js')}}"></script>
<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="{{ asset('upload_file/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('upload_file/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('upload_file/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script>
    $(function(){
        function readURL(input, selector) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();

                reader.onload = function (e) {
                    $(selector).attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#image").change(function () {
            readURL(this, '#image_preview');
        });

    });
</script>
