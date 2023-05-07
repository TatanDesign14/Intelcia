<?php 

class Auth extends db{
  
    public function auth($email){
        try {
			$SQL = "SELECT * FROM users where email = ?";
			$result = $this->connect()->prepare($SQL);
			$result->execute(array($email));
			return $result->fetch(PDO::FETCH_OBJ);	
		} catch (Exception $e) {
			die($e->getMessage());
		}
    }
    public static  function verify(){
        if(!$_SESSION['USER']){
           header('location:?c=auth&m=form_login');
       }
   }

}