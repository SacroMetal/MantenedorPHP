<?php
	$json = file_get_contents("php://input");
    $gestor = fopen('registros.json', "w");
    fwrite($gestor, $json);

include("conexion.php");
$data = file_get_contents("registros.json");
$products = json_decode($data, true);

$sql= '';

foreach ($products['catalogo'] as $key => $value) {
    $sql='insert into registros (CodBlt,FecDes,FecGui,NroGui,NomDes,DirDes,DesCom,Telefo,DscPrd,CanTid,Precio,Cemail,NroCot,Desest,FchCambEst,SucDes,NroBol,RutClie,MtrCub) values(\''.$value['CodBlt'].'\', \''.$value['FecDes'].'\', \''.$value['FecGui'].'\', \''.$value['NroGui'].'\' , \''.$value['NomDes'].'\', \''.$value['DirDes'].'\', \''.$value['DesCom'].'\', \''.$value['Telefo'].'\', \''.$value['DscPrd'].'\', \''.$value['CanTid'].'\', \''.$value['Precio'].'\', \''.$value['Cemail'].'\', \''.$value['NroCot'].'\', \''.$value['Desest'].'\', \''.$value['FchCambEst'].'\', \''.$value['SucDes'].'\', \''.$value['NroBol'].'\', \''.$value['RutClie'].'\', \''.$value['MtrCub'].'\');';


    echo $sql;
    //return false;


    if(mysqli_query($conn,$sql)){  
        echo "Se han insertado los datos";                
        }else{
            echo "no se han insertado los datos";
    }
}

mysqli_close($conn)

?>