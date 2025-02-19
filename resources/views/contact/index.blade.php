<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contant</title>
</head>
{{--
@php
    $title = 'Contact!';
    $description = ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium at labore sapiente. Culpa amet velit deserunt
    hic iusto ab numquam enim expedita in optio? Quam dicta rerum numquam dolorem distinctio?!';
@endphp --}}

<body>
    <h2>{{ $title }}</h2>
    {{ $description }}
    <ul>
        {{-- @foreach ($books as $book)
            <li>{{ $book }}</li>
        @endforeach //ini dan bawahnya --}}
        {{-- @for ($i = 0; $i < count($books); $i++)
            <li>{{ $books[$i] }}</li>
        @endfor //ini itu sama aja beda di directive nya aja --}}
    </ul>
</body>

</html>
