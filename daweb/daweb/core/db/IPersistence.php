<?php
interface IPersistence
{
    public function getById($id=0);
    public function getAll();
    public function getByFiels($field, $value);
    public function save();
    public function delete($id=0);
    public function deleteAll();
}
?>