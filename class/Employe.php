<?php
class Employe extends Db{
    public function select(){
        $sql = "SELECT * FROM `employe`";
        $result = $this->connect()->query($sql);
        if($result->rowCount()>0){
            while($rows = $result->fetch()){
                $data[]=$rows;
            }
            return $data;
        }
    }
}