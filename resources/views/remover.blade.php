<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('/css/remover.css')}}">

</head>
<body>
    
        @include('header')

        @if(isset($pic))


 

        <div   class="containerImg" >

            <img id="background"  src="{{"storage/$pic"}}" alt="">

        </div>

        <script>

            document.getElementById('background').style.maxHeight = '100%'
            document.getElementById('background').style.maxWidth = '100%'
            document.getElementById('background').style.height = '100%'
            document.getElementById('background').style.width = '100%'
            document.getElementById('background').style.backgroundSize = 'cover'
            document.getElementById('background').style.backgroundColor = 'black'
            document.getElementById('background').style.mixBlendMode = 'multiply'
            document.getElementById('background').style.filter = 'invert(100%)'
          

        </script>


        @endif
</body>
</html>