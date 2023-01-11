<?php
class User{
    protected $id;
    protected $fullname;
    protected $companyname;
    protected $businessphone;
    protected $email;
    protected $password;
    protected $role;
    //get methods
    public function getId(){
        return $this->id;
    }
    public function getFullname(){
        return $this->fullname;
    }
    public function getCompanyname(){
        return $this->companyname;
    }
    public function getBusinessphone(){
        return $this->businessphone;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getRole(){
        return $this->role;
    }

    //set methods

    public function setFullname(string $fullname){
        return $this->fullname = $fullname;
    }
    public function setCompanyname(string $companyname){
        return $this->companyname = $companyname;
    }
    public function setBusinessphone(string $businessphone){
        return $this->businessphone = $businessphone;
    }
    public function setEmail(string $email){
        return $this->email = $email;
    }
    public function setPassword(string $password){
        return $this->password = $password;
    }
    public function setRole(string $role){
        return $this->role = $role;
    }
    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function read(int $id)
    {

    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}

?>