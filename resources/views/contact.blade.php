<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact us</title>
</head>
<body>


    <h1>Contact us</h1> <br>


{{--  blade commands :)
    @php
    $nn = "This is an Echo<br>" ;
@endphp

    <h2>{{ $nn }}</h2>
    <h3> {!! $nn !!}</h3>
@if ()

@endif

@switch($type)
    @case(1)

        @break
    @case(2)

        @break
    @default

@endswitch

@for

--}}
@php

    // $title = '<h3>This is how we print using Mustache</h3>';
    $bool = false ;

@endphp
{{-- b: + ctrl+/ --}}
@if ($boolean)

    {!! $title !!}

    {!! time()  !!}

@endif


{{-- @for ($i = 0; $i < 5; $i++)
    <li>{{ $title }}</li>
@endfor --}}

{{-- <form action="">

    <input type="text">
    <input type="text">
    <input type="text">
    <input type="submit"> --}}

</form>
</body>
</html>
