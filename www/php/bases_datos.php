<?php  

$instancia= $_POST['instancia'];
$usuario= $_POST['usuario'];
$password= $_POST['password'];

$serverName = $instancia; //serverName\instanceName
$connectionInfo = array( "UID"=>$usuario, "PWD"=>$password);
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
    
    echo "Conexión establecida.<br />";
    $sql = "SELECT name, database_id, create_date FROM sys.databases";
    $params = array(1, "some data");
    $stmt = sqlsrv_query( $conn, $sql);
    while( $obj = sqlsrv_fetch_object( $stmt )) {
        echo '<option value="'.$obj->name.'">'.$obj->name.'</option>';
    }
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }

}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}

?> 