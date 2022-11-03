<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/forms.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="get" action="receberDados.php">
            <p class="p">Selecione a Loja</p>
             <select name="store" id="store-select"  class="input">
                <option value="">Selecione a loja</option>
                <option value="1">LAPA</option>
                <option value="2">SAMAVI</option>
               
              
                <option value="5">CENTRO DE DISTRIBUIÇÃO</option>
                <option value="6">BARREIRAS</option>
                <option value="7">PARATINGA</option>
                <option value="8">LEM</option>
                <option value="9">RIACHÃO</option>
                <option value="11">FORMOSA</option>
              
                <option value="13">CAMPOS BELOS</option>
                <option value="14">SANTA RITA</option>
                <option value="15">CORRENTINA</option>
               

            </select>

            <p class="p">Selecione o Setor</p>
            <select name="sector" id="sector-select"  class="input">
                <option value="">Selecione o setor</option>
                <option value="1">VENDAS</option>
                <option value="2">CAIXA</option>
                <option value="3">CREDIÁRIO</option>
                <option value="4">ADMINISTRATIVO</option>
                
               

            </select>

         


        <p class="p">CPU</p>
            <input type="text" name="cpu" class="input">
        <p class="p">MEMORIA</p>
            <input type="text" name="memoria" class="input" >
            <p class="p">NÚMERO DO ANYDESK</p>
            <input type="number" name="anyDesk"  class="input">
            <p class="p">NÚMERO DO LACRE</p>
            <input type="number" name="numberSeal"  class="input">
            <input type="submit" value="Cadastrar" class="login" >




        </form>

    </div>
    
</body>
</html>