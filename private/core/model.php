<?php

/**
 * 
 * Main Model
 */

class Model extends Database
{
    public $errors = array();
    
    public function __construct()
    {
        // code...
        if (!property_exists($this, 'table')) {
            $this->table = strtolower(get_class($this));
        }
    }
    
    

    public function where($column, $value)
    {
       $column =  addslashes($column);
        $query = "SELECT * FROM $this->table WHERE $column = :value";
        echo $query;
        return $this->query($query,[
            'value' => $value
        ]);
        
    }



    public function findAll()
    {
        $query = "SELECT * FROM $this->table";
        return $this->query($query);
        
    }


    public function insert($data)
    {


        // Remove unwanted columns
        if (property_exists($this, 'allowedColumns'))
        {
            foreach($data as $key => $column)
            
              foreach($this->allowedColumns as $column)
            {
                if(!in_array($key, $this->allowedColumns ))
                {
                    unsent($data[$key]);
                    // $data = $this->$column($data);
                }

            }
        }
        
        //run function before insert 
        if (property_exists($this, 'beforeInsert'))
        {
            foreach($this->beforeInsert as $func)
            {
                $data = $this->$func($data);

            }
        }
        

        $keys = array_keys($data);
        $columns = implode(',', $keys);
        $values = implode(',:', $keys);

        $query = "INSERT INTO $this->table ($columns) VALUES(:$values)";
        
        return $this->query($query, $data);
        
    }

    public function update($id, $data)
    {
        print_r($data);
        $str = "";
        foreach( $data as $key => $value ){
            $str .= $key. '=:' . $key . ','; 
        }
        $str = trim($str, ",");
        $data['id'] = $id;

        $query = "UPDATE $this->table SET $str WHERE id = :id ";
        echo $query;
        return $this->query($query, $data);
        
    }


    public function delete($id)
    {
      

        $query = "DELETE FROM $this->table WHERE id = :id";
        $data['id'] = $id;
        return $this->query($query, $data);
        
    }


}