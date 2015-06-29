<?php

namespace Artesaos\Defender\Contracts\Repositories;

interface AbstractRepository
{
    /**
     * @param int $id
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function findById($id);

    /**
     * @param string $name
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function findByName($name);

    /**
     * @param string|int $value
     * @param string     $key
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getList($value, $key = 'id');
}
