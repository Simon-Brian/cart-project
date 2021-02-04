<?php 


 class CreateDb
 {
 	public $servername;
 	public $username;
 	public $password;
 	public $dbname;
 	public $tablename;
 	public $con;

 	//class constructor
 	public function __construct(
     $dbname="Newdb",
     $tablename="Productdb",
     $servername="localhost",
     $username="root",
     $password=""

 	)
 	{
      $this->dbname=$dbname;
      $this->tablename=$tablename;
      $this->servername=$servername;
      $this->username=$username;
      $this->password=$password;
     

      //connection
      $this->con=mysqli_connect($servername,$username,$password);

      //check connection
      if(!$this->con){
          die("Connection failed:".mysqli_connect_error());

      }




      //query
      $sql="CREATE DATABASE $dbname";

      //execute query
      if(mysqli_query($this->con,$sql)){

      	$this->con=mysqli_connect($servername,$username,$password,$dbname);

      	//sql to create new table
      	$sql="CREATE TABLE $tablename
		      	(id INT(11)NOT NULL AUTO_INCREMENT PRIMARY KEY,
		      	 product_name VARCHAR(25) NOT NULL,
		      	 product_price FLOAT,
             product_discount FLOAT,
		      	 product_image VARCHAR(100)
             );";

		  if(!mysqli_query($this->con,$sql)){
               echo "Error creating table:".mysqli_error($this->con);
		  }

      }
      else{
      	return false;
      }


 }

 // get product from database
  //public function getData(){
 //  $sql="SELECT*FROM $this->tablename";

 //  $result=mysqli_query($this->con,$sql);

 //  if(mysqli_num_rows($result) > 0){
 //    return $result;
 //  }
 //  else{
 //    echo "00000";
 //  }

 // }
 public function display(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Productdb";
              //Create connection
               $conn = new mysqli($servername, $username, $password, $dbname);
              // Check connection
              if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              }

              $sql = "SELECT id, product_name, product_price,product_image,product_discount FROM producttb";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                     echo component($row['product_name'],$row['product_price'],$row['product_image'],$row['product_discount'],$row['id']); 
                  }
              } else {
                  echo "0 results";
              }

              $conn->close();

 }


}
 function display(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Productdb";
              //Create connection
               $conn = new mysqli($servername, $username, $password, $dbname);
              // Check connection
              if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              }

              $sql = "SELECT id, product_name, product_price,product_image,product_discount FROM producttb";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                     echo component($row['product_name'],$row['product_price'],$row['product_image'],$row['product_discount'],$row['id']); 
                  }
              } else {
                  echo "0 results";
              }

              $conn->close();

 }
?>
