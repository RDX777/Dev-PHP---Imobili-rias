<!doctype html>
<html lang="pt-br">
    <head>

        <title>DEV PHP Imobiliaria</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 200px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="">Locatários</a>
            <input class="form-control form-control-dark w-100" type="text" id="busca" name="busca" placeholder="Localizar" aria-label="Search">
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" onclick="IDPainelBusca(busca.value)" target="frame">Localizar</a>
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    <span data-feather="home"></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file"></span>
                                    <br>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/imobiliaria/imobiliaria/Locatario/cadastraLocatario" target="frame">
                                    <span data-feather="file"></span>
                                    Cadastrar
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/imobiliaria/imobiliaria/Locatario/consultaLocatario?pagina=1" target="frame">
                                    <span data-feather="bar-chart-2"></span>
                                    Listar Todos
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <div class="container-fluid">
                            <br>
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="" name="frame"></iframe>
                            </div>
                        </div>
                    </div>
                </main>

            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script>
        <script>
                        function IDPainelBusca(id)
                        {
                            window.open("http://localhost/imobiliaria/imobiliaria/Locatario/editaLocatario?id=" + id, "frame")
                        }
        </script>
    </body>
</html>
