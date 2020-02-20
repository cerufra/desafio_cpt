 

<div class="container fluid">

    <table class="table table-striped table-bordered">
       
        <thead>
            <tr>
                <th style="width:5%;">Codigo</th>
                <th style="width:20%;">Nome</th>
                <th style="width:20%;">Email</th>
                <th style="width:12%;">Celular</th>
                <th style="width:5%;">Editar</th>
                <th style="width:5%;">Excluir</th>
            </tr>
        </thead>
        <tbody>




            <?php
            require '..\listas\listar_cliente.php';
            while ($ver = pg_fetch_row($cliente)) {

                $datos = $ver[0] . "||" .
                        $ver[1] . "||" .
                        $ver[2] . "||" .
                        $ver[3] . "||" .
                        $ver[4];
                ?>

                <tr>
                    <td style="width:5%;"><?php echo $ver[0] ?></td>
                    <td style="width:8%;"><?php echo $ver[1] ?></td>
                    <td style="width:9%;"><?php echo $ver[2] ?></td>
                    <td style="width:15%;"><?php echo $ver[3] ?></td>
                      
                    <td style="width:5%; align-items:text-top;" class="align-bottom">
                        <button class="btn btn-warning glyphicon glyphicon-pencil btn-xs lign-text-top" data-toggle="form" data-target="#form_cliente" onclick="editcliente('<?php echo $datos ?>')" style="vertical-align: top">

                        </button>
                    </td>
                    <td style="width:5%; align-items:text-top;" class="align-bottom" >
                        <button class="btn btn-danger glyphicon glyphicon-remove btn-xs lign-text-top" data-toggle="form" data-target="#form_cliente" onclick="delcliente('<?php echo $datos ?>')" style="vertical-align: top">
                        
                        </button>
                    </td>

                </tr>
            <?php
                }
            ?>

        </tbody>

        


    </table>

</div>
