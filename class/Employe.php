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
}
