<?php
require_once "Cliente.php";

$id_cliente = $_GET["id"];

Cliente::$client_list = array ( '1' => new Cliente(1,"Jaques Moura","385.222.682-15","Av. Parintins 489 - Cachoeirinha"),
                                '2' => new Cliente(2,"Lucilana Moura","222.222.222-22","Av. Parintins 489 - Cachoeirinha"),
                                '3' => new Cliente(3,"Evelyn Moura","333.222.222-22","Av. Parintins 489 - Cachoeirinha"),
                                '4' => new Cliente(4,"Emanuele Moura","444.222.222-22","Av. Parintins 489 - Cachoeirinha"),
                                '5' => new Cliente(5,"Kaleb Santos","555.222.222-22","Av. Dois 543 - Centro"),
                                '6' => new Cliente(6,"Fred Krueger","666.222.222-22","Av. Dois 543 - Centro"),
                                '7' => new Cliente(7,"Jason Mraz","777.222.222-22","Av. Itacolomy 200 - Cidade Nova"),
                                '8' => new Cliente(8,"Jackson Five","888.222.222-22","Av. Wakusese 111 - Flores"),
                                '9' => new Cliente(9,"Luana Piovani","999.222.222-22","Av. Wandyn 2389 - Flores"),
                                '10' => new Cliente(10,"Maysa Carvalho","111.222.222-22","Av. Conte Teles 999 - Aleixo")
                        );

$cliente = Cliente::$client_list[$id_cliente]; 

?>

<!DOCTYPE html>
<html>
<head>
        <title>Clientes</title>

        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/bootstrap-theme.css">
        <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Clientes</a>
        </div>
      </div>
    </nav>

<div class="container theme-showcase" role="main">

        <div class="page-header">
                <h1>Visualizando usuário: <strong> <?= $cliente->nome ?>  </strong></h1>
        </div>
        <div class="row">
                <div class="col-md-12">
                        <div class="panel panel-default">
                                <div class="panel-body">
                                        <form>
                                                <div class="form-group">
                                                        <label for="nome">Nome</label>
                                                        <input type="text" class="form-control" value="<?= $cliente->nome  ?>" disabled>
                                                </div>
                                                <div class="form-group">
                                                        <label for="cpf">CPF</label>
                                                        <input type="text" class="form-control" value="<?= $cliente->cpf ?>" disabled>
                                                </div>

                                                <div class="form-group">
                                                        <label for="endereco">Endereco</label>
                                                        <input type="text" class="form-control" value="<?= $cliente->endereco ?>" disabled>
                                                </div>
                                                <!-- <a href="/usuarios" class="btn btn-info btn-sm">Voltar</a>                            
                                                <a href="/usuarios/{{ $usuario->id }}/editar" class="btn btn-info btn-sm">Editar cadastro</a>-->

                                        </form>
                                </div>
                        </div>
                </div>
        </div>

</div>

</body>

</html>
