<?php



class BoatRepository
{
    public $databaseHost = 'localhost';
    public $databaseName = 'boats';
    public $databaseUsername = 'root';
    public $databasePassword = 'root';
    public $mysqli;


    public function getAllBoats(){
        $mysqli = mysqli_connect($this->databaseHost, $this->databaseUsername, $this->databasePassword, $this->databaseName);
        $result = mysqli_query($mysqli, "SELECT * FROM boats ORDER BY id DESC");
        return $result;
    }

    public function getBoat($id){
        $mysqli = mysqli_connect($this->databaseHost, $this->databaseUsername, $this->databasePassword, $this->databaseName);
        $result = mysqli_query($mysqli, "SELECT * FROM boats WHERE id ='$id'");
        return $result->fetch_assoc();
    }

    public function addBoat($name, $description, $weight, $loginId){
        $mysqli = mysqli_connect($this->databaseHost, $this->databaseUsername, $this->databasePassword, $this->databaseName);
        $result = mysqli_query($mysqli, "INSERT INTO boats(name, description, weight, created, login_id) VALUES('$name','$description','$weight', NOW(), '$loginId')");
        return $result;
    }

    public function deleteBoat($id){
        $mysqli = mysqli_connect($this->databaseHost, $this->databaseUsername, $this->databasePassword, $this->databaseName);
        $result = mysqli_query($mysqli, "DELETE FROM boats WHERE id=$id");
        return $result;
    }

    public function updateBoat($name, $description, $weight, $id){
        $mysqli = mysqli_connect($this->databaseHost, $this->databaseUsername, $this->databasePassword, $this->databaseName);
        $result = mysqli_query($mysqli, "UPDATE boats SET name='$name', description='$description',weight='$weight', created=NOW() WHERE id='$id'");
        return $result;
    }

    public function getUserName($id){
        $mysqli = mysqli_connect($this->databaseHost, $this->databaseUsername, $this->databasePassword, $this->databaseName);
        $result = mysqli_query($mysqli, "SELECT name FROM login WHERE id ='$id'");
        return $result->fetch_assoc();
    }
}