<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>
    <title> {{ $title }} - appTest</title>
    @livewireStyles
</head>
<body>
    @if ($user)
    <div class="mg_navbar">
        <div class="gm_user_options">
            <div class="btn-group">
                <button class="btn btn-danger btn-sm dropdown-toggle" id="userDropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-timer"></i> &nbsp; 
                 {{$user->name}} &nbsp;
                </button>
                <ul class="dropdown-menu" aria-labelledby="userDropdown">
                    <li><a href='/logout' class="dropdown-item">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    @endif
    <div class="mg_layout">
        {{ $slot }}
    </div>

    @livewireScripts
</body>
</html>