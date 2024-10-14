<?php

class Model
{
    use Database;
    
    protected $table = 'users';
    public function where($data)
    {
        $keys = array_keys($data);

        $query = "select * from $this->table where id = :id ";
        $this->query($query, ['id'=>23]);
    }
    public function first($data) {}
    public function insert($data) {}


    public function update($id, $data, $id_column = 'id') {}

    public function delete($id, $id_column = 'id') {}
}
