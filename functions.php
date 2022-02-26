<?php 

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'fanclub_activity');
    
    class DB_con {

        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL : " . mysqli_connect_error();
            }
        }

        // public function insert($eventName, $artistName, $place, $eventType) {
        //     $result = mysqli_query($this->dbcon, "INSERT INTO activity(eventName, artistName, place, eventType) VALUES('$eventName', '$artistName', '$place', '$eventType')");
        //     return $result;
        // }

        public function fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM activity ");
            return $result;
        }

        public function fetchonerecord($Event_ID) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM activity WHERE Event_ID = '$Event_ID'");
            return $result;
        }

        public function promote($Event_ID) {
            $result = mysqli_query($this-> dbcon, "UPDATE `activity` SET promotestatus = 'yes' WHERE 
            Event_ID = '$Event_ID'");
            return $result;
           
        }

        public function delete($Event_ID) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM activity WHERE id = '$Event_ID'");
            return $deleterecord;
        }


    }
    
   
?>