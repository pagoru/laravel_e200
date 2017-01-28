<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('header')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    </head>
    <body>

    <div class="container">

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand">E200</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li>
                            <a href="../user">Usuari</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="jumbotron">

            <h2>Index</h2>
            <p>@yield('content')</p>
        </div>

        <footer class="fotter">
            <p>Pablo Gonzalez Rubio - 2017</p>
        </footer>

    </div>
    </body>
</html>