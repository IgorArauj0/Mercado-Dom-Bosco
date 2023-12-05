<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
   <header>
     <h1>Cadastro de clientes | Empório Padaria</h1>
   </header>
   
   <main class="text">
        <?php
           $nome = $_GET["nome"];
           $sobrenome = $_GET["sobrenome"];
           $telefone = $_GET["telefone"];

               
           echo "<p>É um prazer te conhecer, a Empório Padaria agradece $nome $sobrenome! Entraremos em contato com você!</p>";
        ?>

        <button class="text-js">
        <a href="javascript:history.go(-1)">Voltar para página anterior</a>
        </button>
        
   </main>
  
</body>
</html>