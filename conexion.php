<?php
    function conectarse_server()
    {
    	$conexion = null;
        try{                        
            $usuario= 'sa';
            $pass = 'Acci0n';            
            $servidor = '172.16.1.200'; 
            $basedatos = 'FBS_Imbaburapak';       
            $info = array('Database'=>$basedatos, 'UID'=>$usuario, 'PWD'=>$pass); 
            $conexion = sqlsrv_connect($servidor, $info);              
            if( $conexion == false )
                throw new Exception( "Error PostgreSQL ". sqlsrv_errors() );                                 
        }
        catch( Exception $e ){
            throw $e;
        }
        return $conexion;
    }
    function conectarse_pruebas()
    {
        $conexion = null;
        try{                        
            $usuario= 'sa';            
            $pass = '123456';            
            //$servidor = 'DESKTOP-TNHFPNP';
            //$basedatos = 'FBS_Imbaburapak';    
            $servidor = '172.16.1.108'; 
            $basedatos = 'FBS_ImbaburapakP';    
            $info = array('Database'=>$basedatos, 'UID'=>$usuario, 'PWD'=>$pass); 
            $conexion = sqlsrv_connect($servidor, $info);              
            if( $conexion == false )
                throw new Exception( "Error PostgreSQL ". sqlsrv_errors() );                                 
        }
        catch( Exception $e ){
            throw $e;
        }
        return $conexion;
    }
?>