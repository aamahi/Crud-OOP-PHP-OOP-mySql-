<?php
class Employe extends Db
{
    public function select()
    {
        $sql = "SELECT * FROM `employe`";
        $result = $this->connect()->query($sql);
        if ($result->rowCount() > 0) {
            while ($rows = $result->fetch()) {
                $data[] = $rows;
            }
            return $data;
        }
    }
    public function save($data)
    {
        $name = $data['name'];
        $city = $data['city'];
        $digination = $data['digination'];
        $sql = "INSERT INTO `employe` (`name`, `city`, `digination`) VALUES ('{$name}', '{$city}', '{$digination}');";
        $result = $this->connect()->query($sql);
        if ($result) {
            header("location:index.php");
            echo "<script>alert('Sucessfully, Data Insert')</script>";
            
        } else {
            echo "<script>alert('Failed ! Data Insert')</script>";
        }
    }
    public function delete($id){
        $sql = "DELETE FROM `employe` WHERE `employe`.`id` = {$id}";
        $result = $this->connect()->query($sql);
        if ($result) {
            header("location:index.php");
            echo "<script>alert('Sucessfully, Data Delete')</script>";
            
        } else {
            echo "<script>alert('Failed ! Data Deleted')</script>";
        }
    }
    public function updateUser($id)
    {
        $sql = "SELECT * FROM `employe` WHERE `id` = '{$id}'";
        $result = $this->connect()->query($sql);
        if ($result->rowCount() > 0) {
            while ($rows = $result->fetch()) {
                $data[] = $rows;
            }
            return $data;
        }
    }
    public function update(){
        $id =   $_POST['id'];
        $name = $_POST['name'];
        $city = $_POST['city'];
        $digination = $_POST['digination'];
        $sql = "UPDATE `employe` SET `name`='{$name}',`city`='{$city}',`digination`='{$digination}' WHERE `id`= '{$id}'";
        $result = $this->connect()->query($sql);
        if ($result) {
            header("location:index.php");
            echo "<script>alert('Sucessfully, Data Updated')</script>";
            
        } else {
            echo "<script>alert('Failed ! Data Update')</script>";
        }
    }
}
