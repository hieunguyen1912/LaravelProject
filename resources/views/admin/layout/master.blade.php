<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="icon" type="image/png" href="uploads/favicon.png">
    <title>Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dist/css/iziToast.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('admin/style.css') }}">
    <script src="{{ asset('dist/js/iziToast.min.js') }}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
<div id="app">
    <div class="d-flex min-vh-100">

        @yield('main_content')

    </div>
</div>

<script src="{{ asset('dist/js/scripts.js') }}"></script>
<script src="{{ asset('dist/js/custom.js') }}"></script>
@if($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            iziToast.show({
                message: '{{$error}}',
                color: 'red',
                position: 'topRight'
            });
        </script>
    @endforeach
@endif
@if(session('success'))
    <script>
        iziToast.show({
            message: '{{ session("success") }}',
            color: 'green',
            position: 'topRight'
        });
    </script>
@endif

@if(session('error'))
    <script>
        iziToast.show({
            message: '{{ session("error") }}',
            color: 'red',
            position: 'topRight'
        });
    </script>
@endif

</body>
</html>