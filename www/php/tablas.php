<?php  

$instancia= "DESKTOP-115QQ77\SQLEXPRESS";
$usuario= "mosquedacordova";
$password= "testeando";

$serverName = $instancia; //serverName\instanceName
$connectionInfo = array( "Database"=>"testeando","UID"=>$usuario, "PWD"=>$password);
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
    
    $sql = "SELECT * FROM SYS.tables ORDER BY name";
    $params = array(1, "some data");
    $stmt = sqlsrv_query( $conn, $sql);
    $i=0;
    echo '{"data":';
    while( $obj = sqlsrv_fetch_object( $stmt )) {
        $tablas[$i] = array(
            "responsive_id" => "",
            "id" => $i,
            "full_name" => $obj->name,
            "status" => '1'
            );
        $i++;
    }
    //var_dump($tablas);
    echo json_encode($tablas);
    echo '}';
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }

}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}

?> 