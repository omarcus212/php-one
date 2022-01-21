<?php

// $nome = "marcus";
// $marcus = "deu certo";

// echo($nome ."  ");
// echo($marcus);
// print(1+2);


// pegandos do formulario (GET);

if(isset($_GET["btnsalver"])){                            // verificando se o submit (botão) foi acionado //
    
    $name = $_GET ["textName"]; 
   $cidade = $_GET["lstcidade"];
    $sexo = $_GET["rdosexo"];
    $obs = $_GET["txtobeservacao"];

      $idiomapt = null;
      $idiomaen = null;
      $idiomaes = null;
      $idiomaout = null;


    

if(isset($_GET["ckbidiomapt"])){             //recuperar dados checkbox//

     $idiomapt = $_GET["ckbidiomapt"];
}




if(isset($_GET["ckbidiomaen"])){

    $idiomaen = $_GET["ckbidiomaen"];
}



if(isset($_GET["ckbidiomaes"])){

    $idiomaes = $_GET["ckbidiomaes"];
}



if(isset($_GET["ckbidiomaoutro"])){

    $idiomaout = $_GET["ckbidiomaoutro"];
}
/*else{
       $idiomaout = null
}*/
 

echo($name. " " );
echo($cidade. " " );
echo($sexo. " " );
echo($obs. " " );
echo($idiomaout. " " .$idiomapt. " " .$idiomaes. " " .$idiomaen);
}else{
    print("digita logo cara:");
}


?>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <style>

        /* ccs da caixa de observação para que o doido do user não aumente ou diminua o txtarea
         */
      textarea {
          resize: none;
      }

    </style>
</head>
<body>
    <!-- (tag form) method = "post ou get " 
        
        get: pega os dados que estão dentro do FORM e disponibiliza na url pra todos ver
        post : pega os dados que estão dento do FORM e disponiblizado esse dado para uso interno onde não fica a mostra
        action : utilizador para especificar em qual será o dados será disponibilizado

        (tag input) utulizado para criar textbox,checkobox,radio e etc.. 
                 
        name : nome de referencia para o uso do input por exemplo: input=text : name=textname a caixa de texto será ultilizado para colocar o nome 
        size : tamanho do input 
        maxlength : a quantidade de caracteristicas que o user poderá colocar
         

        (tag select) utilizado para selecão em uma lista de opçês 
        
        name : nome de referencia
        option : ulitilzado para criar listas e outros
        value : nome de referencia para a list no opition 

        
       
     -->
    <form name="frmCadastro" method="GET" action="formulario.php">
    nome :    <input type="text" name="textName" size=" 30" maxlength="35"> 
    cidade : 
    <select name="lstcidade" id="" >
        <option value="" selected>escolhe logo</option>
        <option value="0"> Unid States</option>
        <option value="1"> Dinamarca</option>
        <option value="2" > Mexico</option>
        <option value="3"  > Brasil</option>
        <option value="4"> Portugal</option>
    </select> <p></p>
    sexo :  <input type="radio" name="rdosexo" value="1" > F          <!-- radio da opção de escolho para que so um sejá selecionado não se esqueça de dar o memsmo nome a todos eles -->       
            <input type="radio" name="rdosexo" value="2"> M
            <input type="radio" name="rdosexo" value="3" checked> outros... 
            <p></p>

          idiomas:  <input type="checkbox" name="ckbidiomapt" value="1" checked> Pt
                     <input type="checkbox" name="ckbidiomaen" value="2"> En
                     <input type="checkbox" name="ckbidiomaes" value="3"> Es
                     <input type="checkbox" name="ckbidiomaoutro" value="4"> outros 
            <p></p> 
       
     <!-- 
             (tag input button ou submit)
 
             button : so dá para retirar os dados com Js
             submit : dá para retirar os dados do formulario com o proprio html
             reset : btn para limpar info:(não muito ultilizado).

      -->

     observação : <br> <textarea name="txtobeservacao" id="" cols="30" rows="10" maxlength="150" ></textarea> <p></p>

     <input type="submit" name="btnsalver" value="salvar">

    </form>
</body>
</html>