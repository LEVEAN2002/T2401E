<?php 
class HomeModel  {
    private $__conn  ; 
    public function __construct($conn) {
        $this->__conn = $conn;
      

    }

    public function getAll($table) {
        try {
            if(isset($this->__conn)) {
                $sql = "select * from $table";
                $stmt = $this->__conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $result;
            } else {
                echo "not connection";
                die();
            }
        } catch (PDOException $e) {
            echo "". $e->getMessage();
        }
        return null;   
    }
    public function getitemidtable($id,$table) {
        try {
            if(isset($this->__conn)) {
                $sql = "select * from $table where id = $id";
                $stmt = $this->__conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $result;
            } else {
                echo "not connection";
                die();
            }
        } catch (PDOException $e) {
            echo "". $e->getMessage();
        }
        return null;   
    }

      public function createProduct($data)
      {
          try {
              $sql = "INSERT INTO sanphamdh (`name`, `fullname`, `describes`, `pricebuy`, `priceshop`, `quantity`, `img1`, `img2`, `img3`, `img4`, `img5`)
                      VALUES (:name, :fullname, :describes, :pricebuy, :priceshop, :quantity, :img1, :img2, :img3, :img4, :img5)";
  
              $stmt = $this->__conn->prepare($sql);
              $stmt->bindParam(':name', $data['name']);
              $stmt->bindParam(':fullname', $data['fullname']);
              $stmt->bindParam(':describes', $data['describes']);
              $stmt->bindParam(':pricebuy', $data['pricebuy']);
              $stmt->bindParam(':priceshop', $data['priceshop']);
              $stmt->bindParam(':quantity', $data['quantity']);
              $stmt->bindParam(':img1', $data['img1']);
              $stmt->bindParam(':img2', $data['img2']);
              $stmt->bindParam(':img3', $data['img3']);
              $stmt->bindParam(':img4', $data['img4']);
              $stmt->bindParam(':img5', $data['img5']);
  
              if ($stmt->execute()) {
                echo "insert into successfully";
                  return true;
                  
              } else {
                  throw new Exception("Failed to insert data");
              }
          } catch (PDOException $e) {
              throw new Exception($e->getMessage());
          }
      }
      public function deleteProduct($id)
      {
        try {
           
            // set the PDO error mode to exception
            $this->__conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
            // sql to delete a record
            $sql = "DELETE FROM sanphamdh WHERE id=$id";
          
            // use exec() because no results are returned
            $this->__conn->exec($sql);
            echo "Record deleted successfully";
          } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }
          

          
}
public function updateSanphamDh($id, $data)
{
    try {
        $sql = "UPDATE sanphamdh 
                SET `name` = :name, 
                    `fullname` = :fullname, 
                    `describes` = :describes, 
                    `pricebuy` = :pricebuy, 
                    `priceshop` = :priceshop, 
                    `quantity` = :quantity, 
                    `img1` = :img1, 
                    `img2` = :img2, 
                    `img3` = :img3, 
                    `img4` = :img4, 
                    `img5` = :img5 
                WHERE `id` = :id";

        $stmt = $this->__conn->prepare($sql);
        $stmt->bindParam(':id', $data['id']);
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':fullname', $data['fullname']);
        $stmt->bindParam(':describes', $data['describes']);
        $stmt->bindParam(':pricebuy', $data['pricebuy']);
        $stmt->bindParam(':priceshop', $data['priceshop']);
        $stmt->bindParam(':quantity', $data['quantity']);
        $stmt->bindParam(':img1', $data['img1']);
        $stmt->bindParam(':img2', $data['img2']);
        $stmt->bindParam(':img3', $data['img3']);
        $stmt->bindParam(':img4', $data['img4']);
        $stmt->bindParam(':img5', $data['img5']);

        if ($stmt->execute()) {
            echo "Record update successfully";
            return true;
        } else {
            throw new Exception("Failed to update data");
        }
    } catch (PDOException $e) {
        throw new Exception($e->getMessage());
    }
}
}



?>