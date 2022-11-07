<?php
    require('../function/session.php');
    initializeSession("../index.php");
    require('../bancoDados/conexaoPDO.php');

    $sql = $pdo->query('SELECT * FROM desktop');
   
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
   
  
   
?>

<table border="1" width="100%">

<tr>
  
    <th>LOJA</th>
    <th>SETOR</th>
    <th>PROCESSADOR</th>
    <th>MÉMORIA</th>
    <th>ANYDESK</th>
    <th>LACRE</th>
    <th>CONTOLE</th>

</tr>



<?php foreach($dados as $lista):?>
    <tr>
        
        <td> <?=$lista['store']; ?> </td>  
        <td> <?=$lista['sector']; ?> </td>
        <td> <?=$lista['cpu']; ?> </td>  
        <td> <?=$lista['memoria']; ?> </td>  
        <td> <?=$lista['anydesk']; ?> </td>  
        <td> <?=$lista['seal']; ?> </td> 
        <td> <a href="edit.php?id=<?=$lista["id"];?>">Edit</a> <a href="#">Delete</a>    </td>

    </tr>
<?php endforeach; ?>

</table>
