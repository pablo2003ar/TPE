<?php
    class TrademarkModel {
        private $db;

        public function __construct() {
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_prod;charset=utf8', 'root', '');
        }

        function getTrademarks() {
            $query = $this->db->prepare('SELECT * FROM `marca`');
            $query->execute();
            $trademarks = $query->fetchAll(PDO::FETCH_OBJ); 
            return $trademarks;
        }
    }