<?php
namespace App\Repositories;

use App\Models\Unit;
use App\Repositories\UnitRepositoryInterface;

class UnitRepository implements UnitRepositoryInterface
{
    public function all()
    {
        return Unit::all();
    }

    public function find($id)
    {
        return Unit::findOrFail($id);
    }

    public function create(array $data)
    {
        
        return Unit::create($data);
    }

    public function update($id, array $data)
    {
        $unit = $this->find($id);
        $unit->update($data);
        return $unit;
    }

    public function delete($id)
    {
        return Unit::destroy($id);
    }
}

