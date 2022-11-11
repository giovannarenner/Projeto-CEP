<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>CEP</title>
</head>
<body>
    
    <div class="titulo">
        <h1 class="CEP">Digite o seu CEP </h1>
    </div>
<form  method="POST">
   <div class="input1">
            <p class="input2">
           <input class="input" type="text" name="cep" />
            </p>
            </div>
        <button class="resposta">Calcular</button> <br>
        
        <?php
      if(isset($_POST['cep'])){
      $cep = $_POST['cep'];
      $Digitos = substr($cep, 5,8);

        echo "<p style='margin-top: 15px; font-size: 35px; color: black;'>
        Os 3 últimos digitos do seu CEP são: $Digitos </p>";
      }
            
         ?>
        </form>
       
</body>
</html>