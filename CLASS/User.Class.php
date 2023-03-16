<?php 
Class User extends QueryBuilder{
    public $insert_succesfull=NULL;
    public $login_succesfull = NUll;
public $register_result = NULL;
    public function insertUser() {
        $reg_name = $_POST['reg_name'];
        $reg_email = $_POST['reg_email'];
        $reg_pass = $_POST['reg_pass'];


        $sql="INSERT INTO users (name,email,password) VALUES (:name,:email,:password)";
        $query=$this->db->prepare($sql);
        $result=$query->execute(['name'=>$reg_name, 'email' => $reg_email , 'password'=>$reg_pass]);
        $this->insert_succesfull = true;  
    }

 public function loginUser()
 {
        $log_email = $_POST['log_email'];
        $log_pass= $_POST['log_pass'];



        $sql="SELECT * FROM users WHERE email=:email AND password=:password";
        $query=$this->db->prepare($sql);
        $query->execute(['password'=>$log_pass, 'email'=> $log_email ]);
        $LogUser=$query->fetch(PDO::FETCH_OBJ);
        

      
        
        if( $LogUser  !=NULL)
        {
            $_SESSION['loggedUser'] = $LogUser;
           
            $this->login_succesfull = true;
            
        }
        
 }
public function getUserWhoCreated($user_id)
{
    $sql="SELECT name FROM users WHERE id=$user_id ";
    $query=$this->db->prepare($sql);
    $query->execute();
    $whoCreatedPost=$query->fetch(PDO::FETCH_OBJ);
        return $whoCreatedPost;
 

}


}
 ?>
      