<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concessionaria Login</title>
    <link rel="stylesheet" href="./loginstyle.css">
    
</head>
<body>
   
   

   <div class="main">
  
   
    <form action="redirect.php" method="POST"> 
         <h1>LOGIN</h1>
       
        <p>
        <label>Login: </label>
        <input type="email" name="email" id="email" placeholder="Insira o email" required>
    </p>
       
        <p>
        <label >Senha: </label>
        <input type="password" name="password" id="password" placeholder="Insira a senha" required>
    </p>
        
        <button type="submit" class="btn1" name="entrar">ENTRAR</button>

    </form>

   </div>

</body>
</html>