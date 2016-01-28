<?php

namespace CodePress\CodeDatabase\Repository;

use CodePress\CodeDatabase\Models\Category;
use CodePress\CodeDatabase\AbstractRepository;


class CategoryRepository extends AbstractRepository
{


    public function all($columns = array('*'))
    {
        // TODO: Implement all() method.
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
    }

    public function update(array $data, $id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function find($id, $columns = array('*'))
    {
        // TODO: Implement find() method.
    }

    public function findBy($field, $value, $columns = array('*'))
    {
        // TODO: Implement findBy() method.
    }

    public function model()
    {
        return Category::class;
    }
}