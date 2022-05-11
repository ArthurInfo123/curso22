<html>
    <head>
        
    </head>
    <body>
        <form>
        <input type="Number" name="num">
        <input type="submit" name="" value="Enviar">
        </form>
        <?php 
        $resto = $_REQUEST['num'] % 2; 
        $array = [
            0 => "é par",
            1 => "é impar",
        ];
        
        echo $array[$resto] ?? " Nao foi possivel calcular ";
        $numero = [4,2,5,1,10,100,50,3,9,12];

        $contPares = 0;
        $i = 0;

        while ($contPares <= 5){
            $resto = $numero[$i] %2;
            
            if($resto == 0){
                $contPares++;
            }            
            $i++;           
        }
        echo "{$i} {$contPares}";        
       
    
            if($resto == 0 && $_REQUEST['num'] == 2){
                echo "É par e 2";               

             }             
             else{
                echo "É impar";
            }

        for($i = 0; $i < 5; $i++){            
            $resto = $numeros[$i];            
            if($resto == 0){
                $contPares += 1;
            }            
        }    
        echo " dolar i{$i}";

        function contadorParesfor($num)
        {
              $contPar = 0;
              for($i = 0; $i < 5; $i++)
              {
                  $resto = $num[$i] % 2;
                  if($resto == 0){
                      $contPar += 1;
                  }                 
              }
              echo " Quantidade de pares {$contPar}";
        }

        function contadorParesWhile($num)
        {
            $i = 0;
            $contPar = 0;
            while($contPar < 5)
            {
                $resto = $num[$i] % 2;
                if($resto == 0){
                    $contPar += 1;
                }
                $i++;
            }
            echo " Quantidade de pares{$i}";
        }

        function contadorParesDo($num)
        {   
            $contPar = 0;
            $i = 0;
           do{              
                $resto = $num[$i] % 2;
                if($resto == 0)  
                 {
                     $contPar += 1;
                 }
                 $i++;               
           }while($contPar < 5);          
           echo "Quantidade de pares {$i}"; 
        }

        function DataHora($num){           
           echo date('l jS \of F Y h:i:s A');
           echo "<br><br>";
        }
        echo "<br><br>";
        contadorParesfor($array);
        echo "<br><br>";
        contadorParesWhile($array);
        echo "<br><br>";     
        contadorParesDo($array); 
        echo "<br><br>";
        DataHora($array);
           $soma = 0;
           $valor1 = 10;
           $valor2 = 20;
           $soma = $valor1 + $valor2;
           $soma += 29;
           echo "<br><br>A soma dos numeros {$valor1} {$valor2} é: {$soma}";          
           $soma += 29;
           $palavra = "info";
           $palavra = "serv";

           switch($_REQUEST['num'] % 2)
           {
                case 0: echo "O numero é par";
                break;
                default: echo "O numero é impar";
                break; 
           }

           $numero = [4,2,5,1,10,100,50,3,9,12];
           $pares = [];
           $impar = [];           
           $contpar = 0;
           $contImpar = 0;
           $tamanhoNumeros = count($numero);
           for($is = 0; $is < $tamanhoNumeros; $is++)
           {
               $restos = $numero[$is] % 2;
               if($restos == 0)
               {
                   $contpar += 1;
                   $pares[$is] = $numero[$is];
                   
               }
               else
               {
                   $contImpar += 1;
                   $impar[$is] = $numero[$is];

               }

           }   
           echo "<br>";      
           

           echo "<br>";
           echo " Numero de pares{$contpar}";
           echo "<br>";
           echo " Numero de impares {$contImpar}<br>";

           print_r($pares);
           echo "<br>";
           print_r($impar);

        
        
        
        $numerosPrimos = [2];
        $numerosNaoPrimos = [];
        $numeros = 0;
        
        for($divisao = 2; $divisao < 15; $divisao++)
        {
           for($divisores = 2; $divisores < 15; $divisores++)
           {
               $resultado = $divisao / $divisores;
               $resto = $divisao % $divisores;
               if($resto == 0)
               {
                   continue;
               }
               if($resultado < $divisores && $resto != 0)
               {
                   $numerosPrimos[$divisao] = $divisao;
               }
           }
        }     
        echo "<br>";
        print_r($numerosPrimos);

       
      
         
  
        ?>  
    </body>
</html>




