<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ config('app.name') }} - @yield('title')</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-custom bg-primary align-top">
            <div class="container px-2">
                <div class="row">
                    <div class="col">
                        <a class="navbar-brand text-white" href="{{ route('etudiant.index') }}">Accueil</a>
                    </div>
                    <div class="col">
                        <a class="navbar-brand text-white" href="{{ route('etudiant.create') }}">Ajout étudiant</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header></header>
        <!-- Content section 1-->
        <section id="scroll">
            <div class="container px-2">
            @yield('content')
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-4 bg-pink align-bottom">
            <div class="container px-2"><p class="m-0 text-white">&copy; {{ date('Y')}} {{config('app.name') }}</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>