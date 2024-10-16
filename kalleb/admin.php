<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de controle</title>
    <link rel="stylesheet" href="./adminstyle.css">
</head>
<body>
<div class="main">
    
    
        
        <form action="" method="post">
            <h1>
                Cadastro de veículo
            </h1>
            <br>
            <p>
                <label > Chassi: </label>
                <br>
                <input type="text" name="chassi" placeholder="Digite o chassi do carro..." required>
            </p>
            <p>
                <label > Marca: </label>
                <br>
                <input type="text" name="marca" placeholder="Digite a marca do carro..." required>
            </p>
            <p>
                <label > Modelo: </label>
                <br>
                <input type="text" name="modelo" placeholder="Digite o modelo do carro..." required>
            </p>
            <p>
                <label > Ano: </label>
                <br>
                <input type="number" name="ano" id="ano" placeholder="Ano do carro" required>
            </p>
            <p>
                <label > Cor: </label>
                <br>
                <input type="text" name="cor" placeholder="Digite a cor do carro... " required>
            </p>
            <p>
                <br>
                <label > Cambio: </label>
              <select name="cambio" id="cambio" required>
                <option selected disabled> Selecione</option>
                <option value="1"> Manual </option>
                <option value="2">Automatico</option>
              </select> 
              
            </p>
            <br>
            <p>
                <label > Rastreador?</label>
                
                <select name="rastri" id="rastri" required>
                    <option selected disabled> Selecione</option>
                    <option value="1"> Sim </option>
                    <option value="2">Não</option>
                  </select> 
            </p>
            <br>

            <button type="submit" class="btn1">Cadastrar</button>
            
        
        </form>
        
</div>
</body>
</html>