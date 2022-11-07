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
                <option value="LAPA">LAPA</option>
                <option value="SAMAVI">SAMAVI</option>
               
              
                <option value="CD">CENTRO DE DISTRIBUIÇÃO</option>
                <option value="BARREIRAS">BARREIRAS</option>
                <option value="PARATINGA">PARATINGA</option>
                <option value="LEM">LEM</option>
                <option value="RIACHAO">RIACHÃO</option>
                <option value="FORMOSA">FORMOSA</option>
              
                <option value="CAMPOS BELOS">CAMPOS BELOS</option>
                <option value="SANTA RITA">SANTA RITA</option>
                <option value="CORRENTINA">CORRENTINA</option>
               

            </select>

            <p class="p">Selecione o Setor</p>
            <select name="sector" id="sector-select"  class="input">
                <option value="">Selecione o setor</option>
                <option value="VENDAS">VENDAS</option>
                <option value="CAIXA">CAIXA</option>
                <option value="CRED">CREDIÁRIO</option>
                <option value="ADM">ADMINISTRATIVO</option>
                
               

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