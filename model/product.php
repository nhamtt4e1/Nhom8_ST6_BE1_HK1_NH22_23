<?php
class Product extends Db{
    public function getAllProducts()
        {

            $sql = self::$connection->prepare("SELECT * FROM products ORDER BY 'id' DESC");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
    public function getProductById($id)
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
            $sql->bind_param("i",$id);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
    public function getfeature()
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE feature = 1");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getNewProductById($id)
        {
            $sql = self::$connection->prepare("SELECT * FROM products ORDER BY 'id' DESC LIMIT 0,10");
            $sql->bind_param("i",$id);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
}
