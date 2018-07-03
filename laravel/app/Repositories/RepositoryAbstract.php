<?php

namespace App\Repositories;

abstract class RepositoryAbstract
{
    public abstract function create($data);

    public abstract function update($id, $data);

    public abstract function delete($id);
}