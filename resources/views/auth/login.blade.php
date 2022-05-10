<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @livewireStyles
</head>
<body>
<div class="flex justify-center items-center h-screen bg-[#f5f5fb]">
    <div class="bg-white rounded-xl p-16">
        <h1 class="mb-10 text-center font-bold text-2xl">
            Login
        </h1>

        <livewire:login-form></livewire:login-form>
    </div>
</div>

@livewireScripts
</body>
</html>
