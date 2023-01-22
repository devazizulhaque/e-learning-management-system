<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EMS - @yield('title') </title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="{{ asset('/') }}admin/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}admin/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="{{ asset('/') }}admin/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}admin/assets/css/lib/helper.css" rel="stylesheet">
    <link href="{{ asset('/') }}admin/assets/css/style.css" rel="stylesheet">
</head>

<body class="bg-primary">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#"><span>EMS</span></a>
                        </div>
                        @yield('body')
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>