<?php 
class dataBaseConnection {

    private $dataBaseHost;
    private $dataBaseName;
    private $dataBasePassword;
    private $dataBaseUser;

    protected function connect() {
        $this -> dataBaseHost = "localhost";
        $this -> dataBaseName = "rhythmrepublic";
        $this -> dataBasePassword = " ";
        $this -> dataBaseUser = "root";
        
        $connection = new mysqli(
        $this -> dataBaseHost, $this -> dataBaseName, 
        $this -> dataBasePassword, $this -> dataBaseUser
        );

        if ($connection -> connect_errno) {
            echo "<h1>Failed to Connect MySQL: </h1>" . $connection -> connect_error; 
        } else {
            return $connection;
        }
    }
}
?>