<?php 
    class Database {
        private $host = DB_HOST;
        private $user = DB_USER;
        private $password = DB_PASS;
        private $dbname = DB_NAME;

        private $dbh;
        private $statement;//Insert,delete,update,select
        private $error;//for error handling

        public function __construct(){
            //Set DSN
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;

            //Set options
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            //Create PDO instance
            try{
                $this->dbh = new PDO($dsn, $this->user, $this->password, $options);
            } catch(PDOException $e){
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

        //Prepare statement with query
        //Anytype of queary(insert,delete,update,select) can be carried out by prepared statement
        public function query($sql){
            $this->statement = $this->dbh->prepare($sql);
        }

        //Bind parameters
        //This is important to prevent SQL injection and entering malicious data
        public function bind($param, $value, $type = null){
            if(is_null($type)){
                switch(true){
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                        break;
                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                        break;
                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                        break;
                    default:
                        $type = PDO::PARAM_STR;
                }
            }
            $this->statement->bindValue($param, $value, $type);
        }

        //Execute the prepared statement
        public function execute(){
            return $this->statement->execute();
        }

        //Get multiple records as the result
        public function resultSet(){
            $this->execute();
            return $this->statement->fetchAll(PDO::FETCH_OBJ);
        }

        //Get single record as the result
        public function single(){
            $this->execute();
            return $this->statement->fetch(PDO::FETCH_OBJ);
        }

        //Get row count 
        public function rowCount(){
            return $this->statement->rowCount();
        }
    }
?>