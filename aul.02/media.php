<?php





if(isset($_POST["btncalc"])){   //calcular depois que o botão for clicked//

$nota1=(double)0;
$nota2=(double)0;
$nota3=(double)0;
$nota4=(double)0;


$nota1 = $_POST["txtn1"];
$nota2 = $_POST["txtn2"];
$nota3 = $_POST["txtn3"];
$nota4 = $_POST["txtn4"];


$totalmedia = ($nota1 + $nota2 + $nota3 + $nota4)/4;
  

}else{     //deixando as variaveis em branco caso o butão não tenha sido clicked//
    $nota1=null; 
    $nota2=null; 
    $nota3=null;  
    $nota4=null; 
    $totalmedia=null;
}





if(isset($_POST["media.php"])){     //zerar as variaveis para uma novo calculo//

    $nota1=null; 
    $nota2=null; 
    $nota3=null;  
    $nota4=null; 
    $totalmedia=null;
}



?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Média</title>
       <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="utf-8">
    </head>
	<body>
        
        <div id="conteudo">
            <header id="titulo">
                Calculo de Médias
            </header>

            <div id="form">
                <form name="frmMedia" method="post" action="media.php">
                    <div>
                        <label>Nota 1:</label>
                        <input type="text" name="txtn1" value="<?php echo($nota1) ?>"  > 
                    </div>
                    
                    <div>
                        <label>Nota 2:</label>
                        <input type="text" name="txtn2" value="<?php echo($nota2) ?>" > 
                    </div>
                    
                    <div>
                        <label>Nota 3:</label>
                        <input type="text" name="txtn3" value="<?php echo($nota3) ?>" > 
                    </div>
                    
                    <div>
                        <label>Nota 4:</label>
                        <input type="text" name="txtn4" value="<?php echo($nota4) ?>" >
                    </div>
                    <div>
                        <input type="submit" name="btncalc" value ="Calcular" >
                        <div id="botaoReset">
                            <a href="media.php">
                                Novo Cálculo   
                            </a>    
                        </div>
                    </div>
                </form>

            </div>
            <footer id="resultado">
                A média é:  <?php echo($totalmedia) ?>
            </footer>
        </div>
        
		
	</body>

</html>