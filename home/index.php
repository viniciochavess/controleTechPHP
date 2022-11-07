<?php 
    require('../function/session.php');


    // session_start();
    // if(!isset($_SESSION['LOGIN'])){
    //     header('Location: ../index.php');
    // }else{
    //     $nameSession = $_SESSION['LOGIN'];
    // }

    $nameSession =  initializeSession("../index.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        overflow: hidden;
        background-color: #7790ff;
    }
    
    .sec{
        display: flex;
        justify-content: center;
       
       
        
      
        
    }

    .container{
        width: 99%;
       
      
        display: flex;
        
        
      }
    .navBar{
        flex:1;
        max-width: 300px;
        height: 1080px;
       
        
       
        
      
       
    }

    .navBar ul li  {
        width: 99%;
        font-size: 1.2rem;
        font-weight: bold;
        text-align: center;
        color:white;
        margin-bottom: 2px;
        padding: 16px;
        list-style-type: none;
        background-color:rgba(255,255,200,0.3);
       
     
        

    }


    .navBar ul li ul li {
        text-align: left;
    }
    .navBar ul li:hover{
        background-color: #6670af;
       
       
       
    }

    .navBar ul li ul li:hover{
        background-color: #6670af;
       
       
    }



    .navBar ul li ul{
        display: none;
        
    }
   
    .navBar ul li{
       
        border-radius: 5px;
        

    }
    

    .page{
        flex:1;
        background-color: #7989f9;
    }
    a{
        width: 100%;
        text-decoration: none;
        color: white;
        
    }
    


    
    </style>
</head>
<body>
        
    <div class="sec">
      <div class="container"> 
      
        <section class="navBar">

        <div>Menu</div>
               
                <ul>
                    <li class="menuMain">Cadastro
                        <ul class="subMenu">
                        <a href="../computador/cadastro.php">  <li> Computador</li></a>
                            <li>Toner</li>
                            <li>Usuário</li>
                        </ul>
                    </li>

                    <li class="menuMain">Relatório
                        <ul class="subMenu">
                       <a href="../computador/viewer.php"><li>Computador</li> </a>
                            <li>Toner</li>
                            <li>Usuário</li>
                        </ul>
                    </li>
                </ul>


                


        </section>
        <section class="page">
            <h1> página Admin - Seja Bem vindo <?php echo " : ". $nameSession ?>  </h1> 
        </section>
      </div>


    </div>



    
</body>
<script>
    addEventListener('click',(e)=>{
       let subMenu = e.target;
       let menuMain = e.target;
       console.log(menuMain.style['background-color'])
     
        console.log(menuMain);
        subMenu = subMenu.querySelector(".subMenu");
       
        let result = subMenu.style.display=="block";

        if(result == false){
          
            subMenu.style.display="block";
            menuMain.style['background-color']= "rgba(255,255,150,0.1)";
        }else{
            
                   
            menuMain.style['background-color']=" rgba(255,255,150,0.3)";
            subMenu.style.display="none";
            
        }


   
     

    })

</script>
</html>