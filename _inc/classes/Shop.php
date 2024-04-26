<?php
class Shop extends Database{
    private $db;

        public function __construct()
        {
            $this->db = $this->db_connection();
        }

        public function insert(){
            if($this->db){
            
                if(isset($_POST['contact_submitted'])){
                
                   $data = array('contact_name'=>$_POST['name'],
                      'contact_email'=>$_POST['email'],
                      'contact_message'=>$_POST['message'],
                      'contact_acceptance'=>$_POST['acceptance'],
                    );

                    try{

                      $query = "INSERT INTO contact (name, email, message, acceptance) 
                      VALUES (:contact_name, :contact_email, :contact_message, :contact_acceptance)";
                      $query_run = $this->db->prepare($query);
                      $query_run->execute($data);    

                    }catch(PDOException $e){
                     
                      echo $e->getMessage();
                    }


                }else{
                    echo 'Formulár nebol odoslaný';
                }
              }else{
                echo 'Nemám spojenie';
              }
        }

        public function select(){
          try{
            $sql = "SELECT * FROM product";
            $query = $this->db->query($sql);
            $shop = $query->fetchAll();
            return $shop;
          }catch(PDOException $e){
            echo $e->getMessage();
          }
        }
        

        public function get_shop(){
            $shop = $this->select();
            $result = '';
            for ($i=0;$i<count($shop);$i++){
                $result .= '<div class="col-sm-4">
                <div class="images"><img src="../'.$shop[$i]->img.'" style="max-width: 100%; width: 100%;"></div>
                <h2 class="den_text croissants"><a href="#">' .$shop[$i]->name .'</a></h2>
                </div>';

              }
            return $result;
        }


        public function delete(){
          try{
              $data = array(
                  'contact_id' => $_POST['delete_contact']
              );
              $query = "DELETE FROM contact WHERE id = :contact_id";
              $query_run = $this->db->prepare($query);
              $query_run->execute($data);
          }catch(PDOException $e){
              echo $e->getMessage();
          }
        }

      public function edit($contact_id, $new_data){
        try{
          
          $data = array(
              'contact_id' => $contact_id,
              'contact_name' => $new_data['name'], 
              'contact_email' => $new_data['email'],
              'contact_message' => $new_data['message']
          );
          
           $query = "UPDATE contact SET name = :contact_name, email = :contact_email, message = :contact_message WHERE id = :contact_id";
           $query_run = $this->db->prepare($query);
           $query_run->execute($data);
           
  
        }catch(PDOException $e){
       
          echo $e->getMessage();
        }
      }
      public function select_single($contact_id){
        try {
          $data = array('contact_id'=>$contact_id);
          $query = "SELECT * FROM contact WHERE id = :contact_id";
          $query_run = $this->db->prepare($query);
          $query_run->execute($data);
          
          $contact_data = $query_run->fetch();
          
          return $contact_data; 

        }catch(PDOException $e) {
       
          echo $e->getMessage();
          
        } 
    }

    
}

?>