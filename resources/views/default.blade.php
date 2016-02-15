<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>

    <style>
        body {
            font-family: 'Ubuntu', sans-serif;
        }

        .container {
            width: 960px;
            margin: 0 auto;
        }

        .main ul li a {
            color: black;
            font-size: 22px;
        }

        .main ul li a:hover {
            color: gray;
            text-decoration: none;
        }

        .errors-block span {
            color: red;
        }

        .success-block span {
            color: green;
        }

        .tree-t {
            border: 1px solid grey;
            border-spacing: 0px;
        }

        .tree-t tr td:nth-child(1) {
            border-right: 1px solid grey;
        }
    </style>
</head>
<body>
<div class="container">
    @yield('content')
</div>
</body>
</html>
