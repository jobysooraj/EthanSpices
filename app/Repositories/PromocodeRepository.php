<?php
namespace App\Repositories;

use App\Models\Promocode;
use App\Repositories\PromocodeRepositoryInterface;

class PromocodeRepository implements PromocodeRepositoryInterface
{
    public function all()
    {
        return Promocode::all();
    }

    public function find($id)
    {
        return Promocode::findOrFail($id);
    }

    public function create(array $data)
    {
        
        return Promocode::create($data);
    }

    public function update($id, array $data)
    {
        $promocode = $this->find($id);
        $promocode->update($data);
        return $promocode;
    }

    public function delete($id)
    {
        return Promocode::destroy($id);
    }
}

