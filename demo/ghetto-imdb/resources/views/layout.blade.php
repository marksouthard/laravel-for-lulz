<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ghetto IMDB</title>

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,200' rel='stylesheet' type='text/css'>

    <style type="text/css">
        body {
            font: 22px/1.4 Source Sans Pro, sans-serif;
            font-weight: 400;
        }
        .wrapper {
            margin: 0 auto;
            width: 90%;
        }
        h1 {
            font-weight: 200;
        }
        a {
            color: #f4645f;
            text-decoration: none;
        }
        a:hover {
            color: #525252;
        }
        ul {
            margin-bottom: 0.5em;
        }
        label {
            display: block;
            font-size: 0.875em;
        }
        input {
            border: 1px solid #aeaeae;
            border-radius: 5px;
            color: #525252;
            font-size: 22px;
            line-height: 1.2;
            margin: 0.125em 0 2em;
            padding: 1em;
            width: 400px;
        }
        input[type="submit"] {
            background: #f4645f;
            border: none;
            border-radius: 5px;
            color: #ffffff;
            padding: 1em 3em;
            width: auto;
        }
        input[type="submit"]:hover {
            background: #525252;
        }
        .error {
            color: red;
            font-size: 0.875em;
            font-style: italic;
            margin-left: 1em;
        }
        header {
            border-bottom: 1px solid #f0f2f1;
            margin: 1em 0 2em;
            overflow: hidden;
        }
        header h1 {
            color: #f4645f;
            float: left;
            font-weight: 200;
            width: 50%;
        }
        nav {
            float: right;
            margin-top: 2.3em;
            text-align: right;
            width: 50%;
        }
        nav a {
            color: #525252;
            margin-left: 1em;
            text-decoration: none;
        }
        nav a:hover {
            color: #f4645f;
        }
        footer {
            background: #fafafa;
            color: #aeaeae;
            font-size: 0.875em;
            margin-top: 4em;
            overflow: hidden;
            padding: 3em 0;
        }
        footer nav {
            float: left;
            margin-top: 0;
            text-align: left;l
            width: 50%;
        }
        footer nav a {
            margin-left: 0;
            margin-right: 1em;
        }
        footer .copyright {
            float: right;
            text-align: right;
            width: 50%;
        }
    </style>

</head>
<body>


    <header>
        <div class="wrapper">
            <h1>Ghetto IMDB</h1>

            <nav>
                <a href="/actor">Actors</a>
                <a href="/movie">Movies</a>
            </nav>
        </div>
    </header>

    <div class="wrapper">
        @yield('content')
    </div>

    <footer>
        <div class="wrapper">
            <nav>
                <a href="/actor">Actors</a>
                <a href="/movie">Movies</a>
            </nav>
            <div class="copyright">&copy; {!! date('Y') !!}  &mdash;  The Ghetto IMDB</div>
        </div>
    </footer>

</body>
</html>