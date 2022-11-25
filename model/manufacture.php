<?php
class Manufacture extends Db
{
    public function getAlLManus()
    {

        $sql = self::$connection->prepare("SELECT * FROM Manufactures");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductsByManuName($name)
    {
        $sql = self::$connection->prepare("SELECT * FROM Products,Manufactures WHERE Products.'manu_id' = Manufactures.'manu_id' AND manu_name LIKE ?");
        $keyword = "$name";
        $sql->bind_param('s', $keyword);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
