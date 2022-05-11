<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center mt-5 text-primary"><i class="fa-solid fa-table-list"></i> Laravel: Formulários e Validações</h1>
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissable">
            <i class="fa-solid fa-arrow-right"></i>
            {{Session::get('message')}}
        </div>
    @endif
    @yield('content')
</div>

<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/f3b5409da1.js" crossorigin="anonymous"></script>
</body>
</html>