<?php
class Database
{
     
//    private $host = "localhost";
//    private $db_name = "pothlako";
//    private $username = "root";
//    private $password = "";
//    public $conn;
     
    private $host = "pothlakosecurity.co.za";
    private $db_name = "pothlako_data";
    private $username = "pothlako_admin";
    private $password = "chedaflame#24";
    public $conn;
    public function dbConnection()
	{
     
	    $this->conn = null;    
        try
		{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        }
		catch(PDOException $exception)
		{
            echo "Connection error: " . $exception->getMessage();
        }
         
        return $this->conn;
    }
}
if(1){  //1=localhost
  $host = "localhost";
  $databaseName = "pothlako";
  $adminName = "root";
  $adminPassword = "";
  $applicantTable = "applicanttable";
}
else{
  $host = "pothlakosecurity.co.za";
  $databaseName = "pothlako_data";
  $adminName = "pothlako_admin";
  $adminPassword = "chedaflame#24";
  $applicantTable = "applicanttable";
}

?>


 



 
 


 















 
 
 
 
 








 
      







 

 





 


 
 

 