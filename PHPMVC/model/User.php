<?php
class User{
    private $conn;
    public $id;
	public $fullname;
	public $companyname;
	public $businessphone;
    public $email;
    public $password;

	public function __construct($db)
	{
        $this->conn = $db;
	}

    public function read(){
        $query = "SELECT * FROM user";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function getUserbyid(){
            $query = "SELECT * FROM user WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            // print_r($row);
            if ($row!=null) {
                $this->fullname = $row['fullname'];
                $this->companyname = $row['companyname'];
                $this->businessphone = $row['businessphone'];
                $this->email = $row['email'];
                $this->password = $row['password'];
                $this->created = $row['created'];
                $this->updated = $row['updated'];
            return true;
            }else {
            return false;
            }

       
    }
    public function createUser(){
        $query = "INSERT INTO user SET fullname=:fullname, companyname=:companyname, businessphone=:businessphone, 
        email=:email, password=:password, created=:created , updated=:updated ";
        $stmt = $this->conn->prepare($query);
      

        $this->fullname = htmlspecialchars(strip_tags($this->fullname));
        $this->companyname = htmlspecialchars(strip_tags($this->companyname));
        $this->businessphone = htmlspecialchars(strip_tags($this->businessphone));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = htmlspecialchars(strip_tags($this->password));
        $this->created = time();
        $this->updated = time();

        $stmt->bindParam(':fullname', $this->fullname, PDO::PARAM_STR);
        $stmt->bindParam(':companyname', $this->companyname, PDO::PARAM_STR);
        $stmt->bindParam(':businessphone', $this->businessphone, PDO::PARAM_INT);
        $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $this->password, PDO::PARAM_STR);
        $stmt->bindValue(':created', date('y-m-d H:i:s',$this->created));
        $stmt->bindValue(':updated', date('y-m-d H:i:s',$this->updated));
        if($stmt->execute()){
            return true;
        }
        printf('Error failed:%s', $stmt->error);
        return false;
    }
    public function delete(){
        $query = "DELETE FROM user WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
    }
    public function update(){
        $query = "UPDATE user SET fullname=:fullname, companyname=:companyname, businessphone=:businessphone, 
        email=:email, password=:password, created=:created , updated=:updated WHERE id=:id";
        $stmt = $this->conn->prepare($query);

        $this->fullname = htmlspecialchars(strip_tags($this->fullname));
        $this->companyname = htmlspecialchars(strip_tags($this->companyname));
        $this->businessphone = htmlspecialchars(strip_tags($this->businessphone));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = htmlspecialchars(strip_tags($this->password));
        $this->created = time();
        $this->updated = time();
        
        $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
        $stmt->bindParam(':fullname', $this->fullname, PDO::PARAM_STR);
        $stmt->bindParam(':companyname', $this->companyname, PDO::PARAM_STR);
        $stmt->bindParam(':businessphone', $this->businessphone, PDO::PARAM_INT);
        $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $this->password, PDO::PARAM_STR);
        $stmt->bindValue(':created', date('y-m-d H:i:s',$this->created));
        $stmt->bindValue(':updated', date('y-m-d H:i:s',$this->updated));
        if($stmt->execute()){
            return true;
        }
        printf('Error failed:%s', $stmt->error);
        return false;
    }
}

?>