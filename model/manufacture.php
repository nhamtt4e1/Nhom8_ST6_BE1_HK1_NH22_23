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
}
