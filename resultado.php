<?php
  session_start();


    $busqueda=$_POST['palabra'];
    


   $eliminar= trim($busqueda);
   $elimina2= trim($_SESSION['datos']); 
   $minusculas= strtolower($eliminar);
   $minusculas2= strtolower($elimina2);

  //  echo $minusculas."<br>";
//    echo $elimina2."<br>";

        $resultado=strpos($minusculas2, $minusculas);
        
         
    
            if($resultado !== FALSE){
                echo "Se ha encontrado la palabra ";  
              }    
                else{
                  echo "no se encontro!!";    
              }
    

?>
