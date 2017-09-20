<?php

require_once '../model/BoatRepository.php';

class BoatController
{
    public function addBoat($name, $description, $weight, $loginId){
        $br = new BoatRepository();
        $boat = $br->addBoat($name, $description, $weight, $loginId);
        return $boat;
    }

    public function getAllBoats(){
        $br = new BoatRepository();
        $boats = $br->getAllBoats();
        return $boats;
    }

    public function getBoat($id){
        $br = new BoatRepository();
        $boat = $br->getBoat($id);
        return $boat;
    }

    public function deleteBoat($id){
        $br = new BoatRepository();
        $boat = $br->deleteBoat($id);
        return $boat;
    }

    public function updateBoat($name, $description, $weight, $id){
        $br = new BoatRepository();
        $boat = $br->updateBoat($name, $description, $weight,$id);
        header("Location: ../view/view.php");
    }

    public function getUserName($id){
        $br = new BoatRepository();
        $user = $br->getUserName($id);
        return $user;
    }
}