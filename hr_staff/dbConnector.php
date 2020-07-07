<?php

class DbConnector {

var $theQuery;
var $link;

function DbConnector(){
        // Get the main settings from the array we just loaded
//        $host = 'localhost';
//        $db = 'capstone';
//        $user = 'root';
//        $pass = '';
        $host = 'motifsdigital.co.za';
        $db = 'motifsdi_fbc';
        $user = 'motifsdi_Cheda';
        $pass = '12pattymuffinJ';
        $con= new mysqli($host,$user,'',$db)or die("Could not connect to mysql".mysqli_error($con));
        
        // Connect to the database
        $this->link = mysqli_connect($host, $user, $pass);
        mysqli_select_db($con,$db);
        register_shutdown_function(array(&$this, 'close'));

    }
	
  //*** Function: query, Purpose: Execute a database query ***
    function query($query) {

        $this->theQuery = $query;
        return mysqli_query( $this->link,$query);

    }

    //*** Function: fetchArray, Purpose: Get array of query results ***
    function fetchArray($result) {

        return mysqli_fetch_array($result);

    }

    //*** Function: close, Purpose: Close the connection ***
    function close() {

        mysqli_close($this->link);

    }
	
}

?>