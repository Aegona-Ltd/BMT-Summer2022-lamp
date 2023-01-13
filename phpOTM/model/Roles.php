<?php
class Roles{
    private $conn;
    public $id;
	public $name;

	public function __construct($db)
	{
        $this->conn = $db;
	}

    public function read(){
        $query = "SELECT * FROM roles";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function getRolebyid()
    {
        $query = "SELECT * FROM roles WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        // print_r($row);
        if ($row != null) {
            $this->name = $row['name'];
            return true;
        } else {
            return false;
        }
    }

}

?>