  <!DOCTYPE html>
<html>
    <head>
        <title>Preço ração por quilo</title>
        
    </head>
    <body>
        <form action="" method="POST">
            <table align="center">
                <tr>
                    <td>Nome da Ração:</td>
                    <td><input type="text" name="racao"></td>
                </tr>
                <tr>
                    <td>Preço:</td>
                    <td><input type="text" name="preco"></td>
                </tr>
                <tr>
                    <td>Desconto:</td>
                    <td><input type="text" name="desconto"></td>
                </tr>        
                <tr>
                    <td>Quilo:</td>
                    <td><input type="text" name="quilo"></td>
                </tr>                                    
                <tr>
                    <td></td>
                    <td><input type="submit" name="enviar" value="Enviar"></td>
                </tr>
            </table>
        </form>
        
    </body>
</html>

<?php

if (isset($_POST["enviar"]))
{    
    $racao = $_POST["racao"];
    $preco  = $_POST["preco"];
    $desconto = $_POST["desconto"];
    $quilo = $_POST["quilo"];
    $preco_quilo = ($preco*$desconto)/$quilo;   

  
    echo "<br>Preço da  por quilo: ".$preco_quilo."<br>";   

    echo "<br>";

   
}
?>