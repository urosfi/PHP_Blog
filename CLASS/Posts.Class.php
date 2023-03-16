<?php
class Post extends QueryBuilder {
    public $post_inserted; 
 
   public function insertPost()
   {
        $title=$_POST['title'];
        $new_post= $_POST['new_post'];
        $user_id= $_SESSION['loggedUser']->id;
        $image = "images/" . $_FILES['image']['name'];
        $created_at = date("Y-m-d h:i:s");
        $sql="INSERT INTO posts (title,description,user_id,created_at,image) VALUES (:title,:new_post,:user_id,:created_at,:image)";
        $query=$this->db->prepare($sql);
        $result=$query->execute(['title'=>$title,'new_post'=> $new_post,'user_id'=>$user_id,'created_at'=>$created_at,'image'=>$image]);
        $this->post_inserted = true;
    }

public function SelectPost()
{
    $sql="SELECT * FROM posts";
    $query=$this->db->prepare($sql);
    $query->execute();
    $allPosts=$query->fetchAll(PDO::FETCH_OBJ);
        return $allPosts;
 

}
public function deletePost($id)
{
    $sql="DELETE  FROM posts WHERE id=$id";
    $query=$this->db->prepare($sql);
        $deleted_post=$query->execute();
    
        
 

} 

  public function pre_r($array)
  { 
    echo '<pre>';
        print_r($array);
        echo '</pre>';

  }
  public function SelectUserPost($id)
{
    $sql="SELECT * FROM posts WHERE user_id=$id";
    $query=$this->db->prepare($sql);
    $query->execute();
    $allPosts=$query->fetchAll(PDO::FETCH_OBJ);
        return $allPosts;
 

}
   }














?>