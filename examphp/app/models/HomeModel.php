<?php 
class HomeModel {
    private $__conn;
    public function __construct($conn) {
        $this->__conn = $conn;
    }

    public function getAllitem_sale() {
        try {
            if(isset($this->__conn)) {
                $sql = "select * from item_sale";
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
    function insertData() {
        
        if (isset($_POST['item_code'], $_POST['item_name'], $_POST['quantity'], $_POST['expriced_date'], $_POST['note'])) {
            $item_code = trim($_POST['item_code']);
            $item_name = trim($_POST['item_name']);
            $quantity = $_POST['quantity'];
            $expired_date = $_POST['expriced_date'];
            $note = $_POST['note'];
            if (empty($item_code) || empty($item_name)) {
        
                echo "no isert because item_code or item_name cannot be left blank ";
            }
            
            // Check if item_code and item_name contain special characters
            if (!preg_match('/^[a-zA-Z0-9]+$/', $item_code) || !preg_match('/^[a-zA-Z0-9]+$/', $item_name)) {
                echo " no isert because item_code or item_name cannot contain special characters";
                
            }
            else{
        
            $sql = "INSERT INTO item_sale (item_code, item_name, quantity, expired_date, note) VALUES (:item_code, :item_name, :quantity, :expired_date, :note)";
            
            $stmt = $this->__conn->prepare($sql);
            
            $stmt->bindParam(':item_code', $item_code);
            $stmt->bindParam(':item_name', $item_name);
            $stmt->bindParam(':quantity', $quantity);
            $stmt->bindParam(':expired_date', $expired_date);
            $stmt->bindParam(':note', $note);
            
            if ($stmt->execute()) {
                echo "insert sussection";
                return true; // Insert successful
            } else {
                return false; // Insert failed
            }}
        } else {
            return false; // Missing POST data
        }
    }
    public function getitem_sale($id) {
        try {
            if(isset($this->__conn)) {
                $sql = "select * from item_sale where id=$id";
                $stmt = $this->__conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    public function updatedata($id, $data)
{
    try {
        $sql = "UPDATE item_sale 
                SET `item_code` = :item_code, 
                    `item_name` = :item_name, 
                    `expired_date` = :expired_date, 
                    `quantity` = :quantity, 
                    `note` = :note, 
                 
                WHERE `id` = $id";

        $stmt = $this->__conn->prepare($sql);
        $stmt->bindParam(':id', $data['id']);
        $stmt->bindParam(':item_code', $data['item_code']);
        $stmt->bindParam(':item_name', $data['item_name']);
        $stmt->bindParam(':expired_date', $data['expired_date']);
        $stmt->bindParam(':quantity', $data['quantity']);
        $stmt->bindParam(':note', $data['note']);
       

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