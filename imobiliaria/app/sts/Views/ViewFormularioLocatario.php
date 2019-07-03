<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Cadastro locatário</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body class="bg-light">

        <div class="container">
            <div class="py-5 text-center">
                <h2>Formulário para cadastro - edição</h2>
            </div>

            <?PHP
            if (isset($_POST["salvar"])) {
                if ($this->dadosretornados["status"] == "200") {
                    echo "<div class = \"alert alert-success text-center\" role = \"alert\">";
                    echo "Usuario salvo com sucesso!";
                    echo "</div>";
                } else {
                    echo "<div class = \"alert alert-danger text-center\" role = \"alert\">";
                    echo "Problema ao salvar!";
                    echo "</div>";
                }
            }
            ?>

            <div class="row">
                <div class="col-md-12 order-md-1">
                    <form class="needs-validation" method="POST" action="" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="Nome">ID Locatário</label>
                                <input type="text" class="form-control" id="ID_PESSOA_PES" name="ID_PESSOA_PES" value="<?PHP echo $this->dadosretornados['data'][0]['id_pessoa_pes']; ?>" readonly>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="Nome">Nome</label>

                                <input type="text" class="form-control" id="ST_NOME_PES" name="ST_NOME_PES" placeholder="" value="<?PHP echo $this->dadosretornados['data'][0]['st_nome_pes']; ?>" required>
                                <div class="invalid-feedback">
                                    É obrigatório inserir um nome válido.
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="CPF">CPF</label>
                                <input type="text" class="form-control" id="ST_CNPJ_PES" name="ST_CNPJ_PES" placeholder="" value="<?PHP echo $this->dadosretornados['data'][0]['st_cnpj_pes']; ?>" required>
                                <div class="invalid-feedback">
                                    É obrigatório inserir um CPF válido.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="RG">RG</label>
                                <input type="text" class="form-control" id="ST_RG_PES" name="ST_RG_PES" placeholder="" value="<?PHP echo $this->dadosretornados['data'][0]['st_rg_pes']; ?>" >
                                <div class="invalid-feedback">
                                    É obrigatório inserir um RG válido.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email">Email <span class="text-muted">(Opcional)</span></label>
                            <input type="email" class="form-control" id="ST_EMAIL_PES" name="ST_EMAIL_PES" placeholder="fulano@exemplo.com" value="<?PHP echo $this->dadosretornados['data'][0]['st_email_pes']; ?>">
                            <div class="invalid-feedback">
                                Por favor, insira um endereço de e-mail válido, para atualizações de entrega.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="endereco">Endereço</label>
                            <input type="text" class="form-control" id="ST_ENDERECO_PES" name="ST_ENDERECO_PES" placeholder="" value="<?PHP echo $this->dadosretornados['data'][0]['st_endereco_pes']; ?>">
                            <div class="invalid-feedback">
                                Por favor, insira seu endereço de entrega.
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="cep">Numero</label>
                                <input type="text" class="form-control" id="ST_NUMERO_PES" name="ST_NUMERO_PES" placeholder="" value="<?PHP echo $this->dadosretornados['data'][0]['st_numero_pes']; ?>">
                                <div class="invalid-feedback">
                                    Por favor, insira um numero.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="bairro">Bairro</label>
                                <input type="text" class="form-control" id="ST_BAIRRO_PES" name="ST_BAIRRO_PES" placeholder="" value="<?PHP echo $this->dadosretornados['data'][0]['st_bairro_pes']; ?>">
                                <div class="invalid-feedback">
                                    Por favor, insira um bairro.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cidade">Cidade</label>
                                <input type="text" class="form-control" id="ST_CIDADE_PES" name="ST_CIDADE_PES" placeholder="" value="<?PHP echo $this->dadosretornados['data'][0]['st_cidade_pes']; ?>">
                                <div class="invalid-feedback">
                                    É obrigatório inserir uma cidade.
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="complemento">Complemento</label>
                                <input type="text" class="form-control" id="ST_COMPLEMENTO_PES" name="ST_COMPLEMENTO_PES" placeholder="" value="<?PHP echo $this->dadosretornados['data'][0]['st_complemento_pes']; ?>">
                                <div class="invalid-feedback">
                                    Por favor, insira um numero.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="estado">Estado</label>
                                <input type="text" class="form-control" id="ST_COMPLEMENTO_PES" name="ST_COMPLEMENTO_PES" placeholder="" value="<?PHP echo $this->dadosretornados['data'][0]['st_estado_pes']; ?>">
                                <div class="invalid-feedback">
                                    Por favor, insira um estado.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="CEP">CEP</label>
                                <input type="text" class="form-control" id="ST_CEP_PES" name="ST_CEP_PES" placeholder="" value="<?PHP echo $this->dadosretornados['data'][0]['st_cep_pes']; ?>">
                                <div class="invalid-feedback">
                                    É obrigatório inserir um CEP.
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" id="ST_TELEFONE_PES" name="ST_TELEFONE_PES" placeholder="" value="<?PHP echo $this->dadosretornados['data'][0]['st_telefone_pes']; ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="celular">Celular</label>
                                <input type="text" class="form-control" id="ST_TELEFONE_PES" name="ST_TELEFONE_PES" placeholder="" value="<?PHP echo $this->dadosretornados['data'][0]['st_celular_pes']; ?>">
                                <div class="invalid-feedback">
                                    O celular é obrigatório.
                                </div>
                            </div>
                        </div>

                        <hr class="mb-4">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <button class="btn btn-primary btn-lg btn-block" type="submit" name="salvar" value="salvar">Salvar</button>
                            </div>
                            <div class="col-md-6 mb-3">
                                <button class="btn btn-primary btn-lg btn-block" type="submit" name="excluir" value="exluir">Excluir</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <footer class="my-5 pt-5 text-muted text-center text-small">

            </footer>
        </div>

        <!-- Principal JavaScript do Bootstrap
        ================================================== -->
        <!-- Foi colocado no final para a página carregar mais rápido -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <script src="../../assets/js/vendor/holder.min.js"></script>
        <script>
            // Exemplo de JavaScript para desativar o envio do formulário, se tiver algum campo inválido.
            (function () {
                'use strict';

                window.addEventListener('load', function () {
                    // Selecione todos os campos que nós queremos aplicar estilos Bootstrap de validação customizados.
                    var forms = document.getElementsByClassName('needs-validation');

                    // Faz um loop neles e previne envio
                    var validation = Array.prototype.filter.call(forms, function (form) {
                        form.addEventListener('submit', function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
    </body>
</html>