<html>
    <head>
        <title>Grid</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">  

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>Numero:</td>
                                <td>Nome:</td>
                                <td>ID:</td>
                            </tr>
                        </thead>
                        <?PHP
                        $i = 0;
                        foreach ($this->dadosretornados["data"] as $dadosview) {
                            echo "<tr>";
                            echo "<td>";
                            echo $i++;
                            echo "</td>";
                            echo "<td>";
                            echo "<a href=\"http://localhost/imobiliaria/imobiliaria/locatario/editaLocatario?id=" . $dadosview["id_pessoa_pes"] . "\">" . $dadosview["st_nome_pes"] . "</a>";
                            echo "</td>";
                            echo "<td>";
                            echo $dadosview['id_pessoa_pes'];
                            echo "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?PHP
                $paginaatual = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_NUMBER_INT);

                if ($paginaatual <> 1) {
                    $paginaanterior = $paginaatual - 1;
                    echo "<li class=\"page-item\"><a class=\"page-link\" href=?pagina=" . $paginaanterior . ">Anterior</a></li>";
                }

                if (count($this->dadosretornados["data"]) === 50) {
                    $paginaproxima = $paginaatual + 1;
                    echo "<li class=\"page-item\"><a class=\"page-link\" href=?pagina=" . $paginaproxima . ">Proxima</a></li>";
                }
                ?>
            </ul>
        </nav>

    </div>
</body>
</html>
