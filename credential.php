<?php
/**
 * Created by PhpStorm.
 * User: Uroosa Sehar
 * Date: 3/20/2017
 * Time: 6:29 PM
 */
class credential{

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "dynamic_menu";
    public function get_server_name(){
        return $this->servername;
    }
    public function get_user_name(){

        return $this->username;
    }
    public function get_password(){
        return $this->password;
    }
    public function get_db_name(){
        return $this->dbname;
    }

    public function get_db_connection(){
        return new mysqli($this->servername, $this->username, $this->password,$this->dbname);
    }

}
?>
