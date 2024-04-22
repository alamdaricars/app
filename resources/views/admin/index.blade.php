<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>admin panel</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- offline bootstrap -->
    <link rel="stylesheet" href={{asset("admin/css/bootstrap.css")}}>
    <link rel="stylesheet" href={{asset("admin/css/style3.css")}}>
    <link rel="stylesheet" href={{asset("admin/css/sigin-form.css")}}>
    <link rel="stylesheet" href={{asset("admin/css/errors-alert.css")}}>
    <link rel="stylesheet" href={{asset("admin/css/tables.css")}}>
    <link rel="stylesheet" href="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.css">
    <script type="text/javascript" src="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.js"></script>
</head>
<body>
<div class="main d-flex min-vh-100">
    <!-- rgiht sidebar-menu -->
    @include('admin.layouts.sidebar')
    <!-- left side -->
    <div class="my-container d-flex flex-column col-12">
        <!-- header -->
        @include('admin.layouts.header')
        <!-- content -->
        <div class="content">
            <div class="d-block col-12">
            @yield('content')
            <!-- row1 -->

        </div>
            <!-- row2 -->
            <!-- row3 -->
        </div>
    </div>
</div>


<script src={{asset("admin/js/sidebar.js")}}></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src={{asset("admin/js/main.js")}}></script>

<script>
    jalaliDatepicker.startWatch({
        minDate: "attr",
        maxDate: "attr",

    }); </script>


</body>
</html>
