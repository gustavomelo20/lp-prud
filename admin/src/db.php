<?php

    class db{

        public function conect() {
            $db = new PDO(
				"mysql:host=us-cdbr-east-05.cleardb.net;dbname=heroku_bb3a296be36f199;charset=utf8",
				"bd8c628962eadb",
				"790cd5e4"
			);
            return $db;
        }
    }
