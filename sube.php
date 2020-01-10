<?php
error_reporting(0);
$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];
if(!file_exists('archivo')){
    mkdir('archivos',0777,true);
    if(file_exists('archivos')){
        if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
           echo "Archivo guardado con exito."; 
           //consulta de inserción a la base de datos con la variable $nombre.
        }else{
            echo "Archivo no se pudo guardar";
        }
    }
}else{

    if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
        echo "Archivo guardado con exito."; 
        //consulta de inserción a la base de datos con la variable $nombre.
     }else{
         echo "Archivo no se pudo guardar";
     }

}
?>