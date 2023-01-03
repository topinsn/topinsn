<?php

// include constants
include_once "contants.php";

// create class
class Contact{
    public $name;
    public $email;
    public $phone;
    public $enquiry;
    public $hyhaus;
    public $dbconn; // database connector handler

    // initialise construct
    public function __construct(){
        // create object of mysqli
        $this->dbconn = new MySQLi(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);

        // check for connectivity error

        if($this->dbconn->connect_error){
           die("failed: ".$this->dbconn->connect_error);
        }else{
            echo "connection successful";
        }
    }

    // create methods
    
    // start send message method
    function sendMessage($name, $email, $phone, $enquiry, $hyhaus){

        // prepare statment for databse

        $stmt = $this->dbconn->prepare("INSERT INTO contact_us(name, e-mail, phone, enquiry, hyhaus) VALUES(?,?,?,?,?)");

        // BIND PARAMS
        $stmt->bind_param("sssss",$name, $email, $phone, $enquiry, $hyhaus);

        // execute statement
        $stmt->execute();

        // check if input statement is successfully inserted


        if($stmt->affected_rows == 1){

            return true;
        }else{

            return false.$stmt->insert_id;
        }
    }
    // end message method

    
}
?>