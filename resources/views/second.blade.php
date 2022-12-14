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
            width: 70%;
        }

        .mainContainer {
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        input {
            padding: 10px;
            border-radius: 0.7rem;
            background-color: black;
            margin-bottom: 15px;
            color: white;
        }

        a {
            color: antiquewhite;
            text-decoration: none;
            font-style: italic;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Dj Shadow Info</h1>
        <p>
            Dj Shadow it's not really young at the moment, he got almost {{ $age }} years, but he do what he
            alwayls love to do, his profession the {{ $profession }}. Along his career he dropped {{ $totalAlbum }}
            albums and he sell globally the amount of {{ $sellRecords }} units.
        </p>
    </div>

    <div class="mainContainer">
        <p>Type the most selling and famous album of Dj Shadow</p>
        <input type="text" name="know" placeholder="write the correct album">
        <button>Press!</button>
        <h1></h1>
        <a href="/">Go back to Home Page</a>
    </div>



    <script>
        let button = document.querySelector('button');
        let title = document.querySelector('h1');
        let numero = document.querySelector('input');

        function indovina(know = "Non hai inserito alcun Album") {
            if (know.value == 'Endtroducing') {
                title.innerHTML = "Corretto";
            } else {
                title.innerHTML = "Non sei un grande fan";
            }

            button.addEventListener('click', () => {
                indovina(know.value);

            })
        }
    </script>
</body>

</html>
