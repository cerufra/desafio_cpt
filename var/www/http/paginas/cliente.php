 
<!-- Container (Cadastrar cliente) -->
<div id="cliente" class="container-fluid">
    <div class="panel panel-info">
        <div class="panel-heading">
            <p><i class='glyphicon glyphicon-edit'></i> CADASTRAR cliente</p>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-8">
                    <form id="form_cliente" method ="post" action="">
                        <div id="codigo_cliente" class="hidden">
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-success">Codigo</button>
                                </div>
                                <input id="cod_cliente" class="form-control" size="50" placeholder="Codigo do cliente">
                            </div><br>
                        </div>
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-success">Nome</button>
                            </div>
                            <input type="text" id="nom_cliente" class="form-control" size="255" maxlength="255"placeholder="Insira o nome do cliente" required>
                        </div><br>
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-success">Email</button>
                            </div>
                            <input type="email" id="email_cliente" class="form-control" size="100" maxlength="100" placeholder="Insira o email do cliente" required>
                        </div><br> 
                                                  

                        <div class="input-group">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-success">Senha</button>
                            </div>
                            <input type="password" id="senha_cliente" class="form-control" size="100" maxlength="100" placeholder="Insira a senha do cliente" required>
                        </div><br>

                        <div class="input-group">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-success">Celuar</button>
                            </div>
                            <input type="tel" id="cel_cliente" pattern="[0-9]{2}-[0-9]{8}" class="form-control" size="11" maxlength="11"placeholder="Insira o celular dd-numero do celular">
                        </div><br>

                               <div class="input-group">
                            <button class="btn btn-success btn-lg" id="salvar" > 
                                <span class=" glyphicon glyphicon-floppy-disk"></span> Salvar
                            </button> 
                        </div><br>






                    </form>

                </div>
            </div>
        </div>
    </div>


</div>
<div id="tabela_cliente"></div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#tabela_cliente').load('./assets/tabelas/tabela_cliente.php');
    });
</script>


<!-- Fin Container (Registrar Cliente) -->
<script>
    $('#salvar').click(function () {
        var cod_cliente = $('#cod_cliente').val();
        var nom_cliente = $('#nom_cliente').val();
        var email_cliente = $('#email_cliente').val();
        var senha_cliente = $('#senha_cliente').val();
        var cel_cliente = $('#cel_cliente').val();
        alertify.error(nom_cliente,email_cliente,senha_cliente,cel_cliente);
        if (cod_cliente == '') {
            $.ajax({
                type: "POST",
                url: "./assets/CRUD/crud_cliente.php?p=add",
                data: {nom_cliente:nom_cliente, email_cliente:email_cliente, senha_cliente:senha_cliente, cel_cliente:cel_cliente},
                success: function (r) {
                    if (r == 1) {
                        $('#tabela_cliente').load('./assets/tabelas/tabela_cliente.php');
                        alertify.success("Cadastrado com sucesso :)");
                    } else {
                        alertify.error("Erro no servidor:(");
                    }
                }
            });
        } else {
            $.ajax({
                type: "POST",
                url: "./assets/CRUD/crud_cliente.php?p=edit",
                data: {nom_cliente:nom_cliente, email_cliente:email_cliente, senha_cliente:senha_cliente, cel_cliente:cel_cliente, cod_cliente:cod_cliente},
                success: function (r) {
                    if (r == 1) {
                       $('#tabela_cliente').load('./assets/tabelas/tabela_cliente.php');
                       location.reload();
                        alertify.success("Modificado com sucesso :)");
                    } else {
                        alertify.error("Erro no servidor :(");
                    }
                }

            });
        }
    });

</script>
<script>

    function editcliente(datos) {
        $("#codigo_cliente").removeClass('hidden');
        d = datos.split('||');

        $('#cod_cliente').val(d[0]);
        $('#nom_cliente').val(d[1]);
        $('#email_cliente').val(d[2]);
        $('#cel_cliente').val(d[3]);
        $('#senha_cliente').val(d[4]);
         }
    function delcliente(datos) {
        $("#codigo_cliente").removeClass('hidden');
        d = datos.split('||');
        var cod_cliente = d[0];
        $.ajax({
            type: "POST",
            url: "./assets/CRUD/crud_cliente.php?p=del",
            data: {cod_cliente: cod_cliente},
            success: function (r) {
                if (r == 1) {
                     $('#tabela_cliente').load('./assets/tabelas/tabela_cliente.php');
                    location.reload();
                    alertify.success("cliente excluido com sucesso:)");
                } else {
                    alertify.error("Erro no servidor:(");
                }
            }
        });

          $('#tabela_cliente').load('./assets/tabelas/tabela_cliente.php');
        location.reload();
    }
</script>
