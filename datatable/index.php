<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
<script src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<script src="https://unpkg.com/phosphor-icons"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div class="container-fluid" style="margin-top: 30px">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-9">
                    <h1>Teste Datatables CRUD</h1>
                </div>
                <div class="col-md-3">
                    <button type="button" id="insert-btn" class="btn btn-primary" style="float: right;">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3" id="form-body">
                    <div class="card-header">
                        Inserir Dados
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" class="form-control" id="nome" placeholder="Informe o nome">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Informe o email">
                            </div>
                            <button type="submit" class="btn btn-primary mt-2" id="submit">Enviar</button> 
                        </form>
                    </div>
                </div>

                <div class="col-md-9">
                    <?php
                    require_once('./conexao.php');
                    $sql = "SELECT
                            u.id_usuario,
                            u.no_usuario,
                            u.nu_cpf_usuario,
                            u.email_usuario,
                            p.no_perfil,
                            a.descricao_ativo
                            FROM 
                            tb_usuario as u
                            INNER JOIN tb_perfil as p ON
                            p.cod_perfil = u.cod_perfil
                            INNER JOIN tb_ativo as a ON
                            a.cod_ativo = u.cod_ativo 
                            ORDER BY no_usuario;";
                    $resultado = mysqli_query($con,$sql);
                    ?>

                    <table id="tblUser">
                        <thead>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>CPF</th>
                            <th>Perfil</th>         
                            <th>Status</th>
                            <th>Ação</th>
                        </thead>
                        <tbody>
                            <?php while($usuario = mysqli_fetch_assoc($resultado)){ ?>
                            <tr>
                                <td><?php echo $usuario['id_usuario']; ?></td>
                                <td><?php echo $usuario['no_usuario']; ?></td>
                                <td><?php echo $usuario['email_usuario']; ?></td>
                                <td><?php echo $usuario['nu_cpf_usuario']; ?></td>
                                <td><?php echo $usuario['no_perfil']; ?></td>
                                <td><?php echo $usuario['descricao_ativo']; ?></td>
                                <td>
                                <a href="../datatable/update_form.php?id=<?php echo $usuario['id_usuario']; ?>" class="btn btn-primary btn-sm"><i class="ph-pencil-simple"></i></a>
                                <a href="../datatable/delete_form.php?id=<?php echo $usuario['id_usuario']; ?>" class="btn btn-danger btn-sm"><i class="ph-trash"></i></a>
                                </td>
                            </tr> 
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
                
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>

<script>
        jquery(document).ready(function($){
            $('#tblUser').DataTable();
            $("#form-body").hide();

            $("#insert-btn").on('click',function(){
                $("#form-body").toggle(500);
            });

            $("#submit").on('click',function(e){
                e.preventDefault();

                var nome = $('#nome').val();
                var email = $('#email').val();

                $.ajax({
                    url: "insert_data.php",
                    type: "POST",
                    data: {nome:nome, email:email},
                    success: function(data){
                    alert("Dados gravados com sucesso!");
                    $("#form-body").hide();
                    location.reload(true);
                    }

                });
            });
        });
        </script>

    
</body>
</html>


