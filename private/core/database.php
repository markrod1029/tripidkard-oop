<?php
/**
 *  Database Connection
 */
class Database
{

    private function connect()
    {
        // Code
        $string = DBDRIVE . ":host=" . DBHOST . ";dbname =" . DBNAME;
        $string = "mysql:host=localhost;dbname=athdyimy_wpfxw";
        if(!$conn = new PDO($string, DBUSER, DBPASS))
        {
            die('Could Not Connect to Database');
        }
        return $conn;

    }
    
    public function query($query, $data = array(), $data_type = "object")
    {
        // code
        $conn = $this->connect();
        $stmt = $conn->prepare($query);
        
        if($stmt)
        {
            $check = $stmt->execute($data);
            if($check)
            {
                if($data_type == 'object')
                {

                    $data = $stmt->fetchAll(PDO::FETCH_OBJ);
                }else
                {
                    $data = $stmt->fetchAll(PDO::FETCH_OBJ);

                }

                if(is_array($data) && count($data) > 0)
                {
                    return $data;

                }

            }
        }
        return false;
    }


}