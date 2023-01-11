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

        $this->fullname = $row['fullname'];
        $this->companyname = $row['companyname'];
        $this->businessphone = $row['businessphone'];
        $this->email = $row['email'];
        $this->password = $row['password'];
    }
    public function createUser(){
        $query = "INSERT INTO user SET id = :id,fullname = :fullname,companyname = :companyname, businessphone =
        :businessphone, email = :email,password = :password, created = :created ,updated=:updated";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->fullname = $row['fullname'];
        $this->companyname = $row['companyname'];
        $this->businessphone = $row['businessphone'];
        $this->email = $row['email'];
        $this->password = $row['password'];
    }
    
}

?>