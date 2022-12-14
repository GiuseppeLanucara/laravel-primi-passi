<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {


            background-repeat: no-repeat;
            background-size: cover;
            background-color: rgb(0, 0, 0, 0.8);

        }

        .container {
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        h1 {
            color: blueviolet;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-style: oblique;
        }

        p {
            font-size: 30px;
            color: rgb(175, 174, 174);
        }

        .mainContainer {
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        button {
            width: 150px;
            padding: .2rem;
            border-radius: 15px;
            background-color: black;
            margin-top: 15px;

        }

        a {
            color: antiquewhite;
            text-decoration: none;
            font-style: italic;
        }

        li {
            color: blueviolet;
            font-size: xx-large;
            font-weight: bolder;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>{{ $pageTitle }}</h1>
        <p>
            The pioneer of the trip-hop Dj Shadow is a sample artist and scracth master, one of the all time best Dj.
        </p>
    </div>
    <div class="mainContainer">
        <h2>{{ $secondaryTitle }}</h2>
        <ul>

            @foreach ($albums as $album)
                <li>{{ $album }}</li>
            @endforeach

        </ul>
        <button><a href="/second">Found more!</a></button>
    </div>

</body>

</html>
