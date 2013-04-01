<?php

class access {
    
    private $db;

    public function __construct($host,$username,$password,$database){
   
        // database include and object instantiation 
        require 'database/database.php';
        
        $this->db = new database();
 
        $this->db->debug = TRUE;
        
        $this->db->connect($host, $username, $password, $database);
        
    }
    
    public function login($sql,$post){
        
        $this->db->query($sql,$post);
  
        $result = $this->db->fetch_assoc_all();
   
        return $result;
    }
    
    public function logout($get){
        
        unset($_SESSION['userid']);
        
        session_destroy();
        
        return TRUE;
   
    }
    
    public function secure($rec=NULL){
        
        session_start();
        
        if($rec==NULL){

            if(isset($_SESSION['userid'])){
                
                return TRUE;
                
            }else{
                
                return FALSE;               
            }

        }else{

            $_SESSION['userid'] = $rec;

            return true;
        }
    }
    
    public function debug(){
        
        $this->db->debug = TRUE;
    }
}


?>
