<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="styles.css" class="css">

  <title>Dev.Board</title>
</head>
<body>
  <div id="content">
  <header>
    <h1>Bem vindo, <?php echo $_POST['username']?> </h1>
  </header>
  <div id="box">
   <span class="card">Domínios</span>
   <span class="card">DNS</span>
   <span class="card">Registros</span>
   <span class="card">Segurança</span>
   <span class="card">Servidores</span>
   <span class="card">Usuários</span>
  </div>
  </div>
</body>
</html>