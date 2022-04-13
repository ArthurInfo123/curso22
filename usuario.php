<html>
    <head>
        
    </head>
    <body>
        <form>
        <input type="Number" name="num">
        <input type="submit" name="" value="Enviar">
        </form>
        <?php                       
           echo "{$_REQUEST['num']}<br><br>";
            if($_REQUEST['num']%2 == 0){
                echo "É par";
                

             }
             else{
                echo "É impar";
            }

           $soma = 0;
           $valor1 = 10;
           $valor2 = 20;
           $soma = $valor1 + $valor2;
           $soma += 29;
           echo "<br><br>A soma dos numeros {$valor1} {$valor2} é: {$soma}";          
           $soma += 29;
           $palavra = "info";
           $palavra = "serv";

           $array = [10];
           for($a = 0; $a < 10; $a++)
           {
                echo "$array[$a]";
           };

 
        ?>  
    </body>
</html>




