<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" >
    @livewireStyles

    <script src="{{ asset('js/app.js') }}" defer ></script>
    <script src="{{ asset('js/dark.js')}} "></script>
    <script src="https://cdn.tiny.cloud/1/fa5to5aij0r418tqooxyrmncb8eapldn87crb04im234j80z/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    @livewireScripts

</head>
<body class="selection-bg dark:selection-bg bg-gray-100 dark:bg-newgray-900">

    @yield('content')

</body>
</html>
