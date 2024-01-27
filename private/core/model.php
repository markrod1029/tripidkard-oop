<?php

/**
 * Main Model
 */
class Model extends Database
{
    protected $table;
    protected $allowedColumns = [];
    protected $beforeInsert = [];

    public function __construct()
    {
        if (!property_exists($this, 'table')) {
            $this->table = strtolower(get_class($this));
        }
    }


    
    public function where($column, $value)
    {
        $column = addslashes($column);
        $query = "SELECT * FROM $this->table WHERE $column = :value";
        return $this->query($query, ['value' => $value]);
    }



    public function authentication($column, $value)
    {
        $column = addslashes($column);
        $query = "SELECT m.id, m.password, b.enterprise_id, 'merchant' AS user_type
            FROM merchant m
            LEFT JOIN business b ON m.id = b.merchant_id
            WHERE m.$column = :value

            UNION ALL

            SELECT e.id, e.password, NULL AS enterprise_id, 'enterprise' AS user_type
            FROM enterprise e
            WHERE e.$column = :value";
            echo $query;

        return $this->query($query, ['value' => $value]);
    }



    public function findAll()
    {
        $query = "SELECT * FROM $this->table";
        return $this->query($query);
    }




    public function insert($data)
    {
        // Remove unwanted columns
        if (!empty($this->allowedColumns)) {
            $data = array_intersect_key($data, array_flip($this->allowedColumns));
        }

        // Run functions before insert
        if (!empty($this->beforeInsert)) {
            foreach ($this->beforeInsert as $func) {
                $data = $this->$func($data);
            }
        }

        $keys = implode(',', array_keys($data));
        $values = ':' . implode(',:', array_keys($data));
        $query = "INSERT INTO $this->table ($keys) VALUES($values)";

        return $this->query($query, $data);
    }




    public function update($id, $data)
    {
        $setStatements = [];
        foreach ($data as $key => $value) {
            $setStatements[] = "$key = :$key";
        }
        $data['id'] = $id;

        $query = "UPDATE $this->table SET " . implode(', ', $setStatements) . " WHERE id = :id";
        return $this->query($query, $data);
    }




    public function delete($id)
    {
        $query = "DELETE FROM $this->table WHERE id = :id";
        return $this->query($query, ['id' => $id]);
    }
}
