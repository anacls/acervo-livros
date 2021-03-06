<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Acervo</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

   

</head>

<body>

 <ul class="titulo"> 
    <li><div class="brand">Acervo Pessoal</div></li>
    <li><img class="livro" src="img/livro.png"></li>
 </ul>  

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">Acervo</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Ver Livros</a>
                    </li>
                    <li>
                        <a href="cadastro.php">Cadastrar Livros</a>
                    </li>
                    <li>
                        <a href="emprestimos.php">Empréstimos</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Cadastrar empréstimos</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                   <form class= "formulario" method="POST" enctype="multipart/form-data" action="emprestimosfunc.php">
        
        <table class="emprestimos">

            
            <tr><td><label>Nome:<br><input type="text" name="nome" value="" required/></label><br><br></td>
            <td><label>Livro Emprestado:<br><select name="livroemp">
		<?php
			$con = mysql_connect('localhost', 'root') or die('Não foi possível conectar');
			mysql_select_db("acervo", $con);
			$result = mysql_query('SELECT * FROM livros');

			while ($row = mysql_fetch_array($result)){
				$livro = $row['titulo'];
				echo "<option value=" . $livro . ">" . $livro . "</option>";
				}
		?>

	</select></label><br><br></td></tr>
           
            <tr><td><label>Telefone:<br><input type="text" name="telefone" value=""  placeholder="(00)00000-0000" required pattern="^\(?\d{2}\)\d{5}[-\s]\d{4}.*?$" /></label><br><br></td>            
            <td><label>Email:<br><input type="text" name="email" value="" required/></label><br><br></td></tr>
            <tr><td><label>Data empréstimo:<br><input type="date" name="dtemp" value="" required/></label><br><br></td>
            <td><label>Data para devolução <br><input type="date" name="dtdev" value=""required/></label><br><br></td></tr>
        
            <div class="botoes2">
                <tr> <td> <input class="cadastrar" type="submit" value="Emprestar" name="funcao"/> </td>
				
                </div>
				</form>
				<form class= "formulario" method="POST" enctype="multipart/form-data" action="veremprestimos.php">
				<td> <input class="cadastrar" type="submit" value="Ver empréstimos" name="funcao"/> </td> </tr>
				</div>
				</form>
				</table>
                <div class="clearfix"></div>
            </div>
        </div>
    <!-- /.container -->

   <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>