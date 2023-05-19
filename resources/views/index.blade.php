
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @php
    // Esto separa la letra especifica
        $letra = str_replace('DR5', '', $palabra->word);
    @endphp
    <p>Letra 1:</p>
    {{ $letra }}
    {{$letras = str_split($palabra);}}
    {{$letra1 = $letras[0];}}
{{$letra2 = $letras[1];}}
{{$letra3 = $letras[2];}}
{{$letra4 = $letras[3];}}
</body>
</html>