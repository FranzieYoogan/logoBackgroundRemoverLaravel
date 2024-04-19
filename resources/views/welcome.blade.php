<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{asset('/css/home.css')}}">

       
    </head>
    <body class="antialiased">
        
        @include('header')

        <section class="containerFile">

            <form method="POST" action="/remover" class="containerItems" enctype="multipart/form-data">
                @csrf

                <label for="formFileLg" class="form-label">Choose Your Pic</label>
                <input class="form-control form-control-lg" id="formFileLg" name="inputPic" type="file"  accept="image/png, image/jpeg">
                <button type="submit" name="submit" class="btn btn-secondary">Remove It</button>
            </form>

        </section>


    </body>
</html>
