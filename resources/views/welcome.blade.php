<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    </head>
    <body>
    <div id="app">
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Тестовое задание</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </header>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">
                                    <span data-feather="home"></span>
                                    Страница 1
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file"></span>
                                    Страница 2
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">
                    <h2>Эффективность продаж</h2>
                    <div class="table-responsive pt-5">
                        <table class="table table-striped table-sm">


                            @foreach ($reports as $report)
                                @if ($loop->first)
                                    <thead>
                                    @foreach ($report as $r)
                                        <th scope="col">{{$r}}</th>
                                    @endforeach
                                    </thead>
                                @else
                                <tbody>
                                    @foreach ($report as $r)
                                        <td>{{$r}}</td>
                                    @endforeach
                                </tbody>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </div>

    </div>

    </body>
    <script src="{{ mix('/js/app.js') }}"></script>
</html>
