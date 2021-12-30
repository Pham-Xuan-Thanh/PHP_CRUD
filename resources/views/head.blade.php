<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title }}</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="../template/plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../template/dist/css/adminlte.min.css">

<!-- jQuery -->
<script src="../template/plugins/jquery/jquery.js"></script>
<!-- Bootstrap 4 -->
<script src="../template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../template/dist/js/adminlte.min.js"></script>

<!-- <script src="../template/js/main.js"></script> -->

<meta name="csrf-token" content="{{ csrf_token() }}">

@yield('head')

<style>
    .hidden {
        display: none;
    }
</style>