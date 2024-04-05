<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about me</title>
</head>

<body>

    <h1> Mahmod Website !</h1>
    <p> Hi,
        <b>my name is {{ $name }} , and welcom to my <i>very basic
                <abbr title="{{ $html }}">HTML</abbr> website . </i> </b>
    </p>
    <hr>
    <br>
    <h1> {{ $aboutme }} </h1>
    <a href="{{ $facebooklink }}">My facebook page</a>
    <br>
    <p>My e-mail is {{ $email }}</p>
    <br>

    <img src="{{ $photo2 }}" alt="My image" width="200px" height="250px">
    <br><br>
    <img src="{{ $photo1 }}" alt="image from web" width="400px" height="250px">
    <p>
        {{ $sometext }}
    </p>
    <hr>

    <h1>A random list with normal HTML </h1>

    <p>who doesn't love a good ol'fashioned random list?</p>
    <br>

    <ul>
        <li>HTML
            <ol>
                <li>HTML-4</li>
                <li>HTML-5</li>
            </ol>

        </li>
        <li>CSS</li>
        <li>JAVA SCRIPT</li>
    </ul>
    <hr>
    <h1>Another random list with Blade.php </h1>
    <br>

    <ol>
        @foreach ($skills as $skill)
            <li>{{ $skill }}</li><br>
        @endforeach
    </ol>

</body>

</html>
