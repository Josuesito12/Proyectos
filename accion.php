<html DOCTYPE>
    

<title>Registro</title>
    
    <header>
    
        <link rel="StyleSheet" href="styles.css" media="screen">
    
    </header>
    
    <body>
    
  
    
    <h3>Resultados del Registro</h3>
    
    <b>A continuacion se muestran el registro hecho satisfactoriamente</b>
    <br>
    <br>

      <?php 
   

         $grados=$_POST['estudios'];
         $separa=explode(",", $grados);
         session_start();
         $_SESSION['datos']=$grados;
         //str_remplace($valor_cambiar,$valor_entrante_$cadena) remplaza un elemento de la cadena por el elemento pasado por parametro
        echo strtolower(implode("-",$separa))."<br><br>";
    
        //$separa es un arreglo de strings $separa[i] es un string
    
           echo "Los grados capturados son los siguentes: \n"."<br>";
           ///usar while o foreach 
           for($i=0;$i<count($separa);$i++){
                 echo ucwords(strtolower($separa[$i]))." -> ".strlen($separa[$i])."<br>";
               }
   

        ?>  

<!--

al imprimirla lista de grados escolares poner el tamaño de la cadena
p/e : 
asd ->  3
asdf -> 4

imprimir cadena quitando espacios al principio y al final, respetando espacios dentro 
de la cadena, primera con mayuscula y las demas  con minuscula. separ cada 
grado escolar con un guion poner antes que la lista 
No hacer: 
echo $separa[0]-$separa[1]..$separa[]n
no poner el guion manualmente

-->
       <form action="buscar.php"  method="POST">
   
              <input type="submit">
  </body>
</html>
 
