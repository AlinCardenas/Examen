
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
</body>
</html>