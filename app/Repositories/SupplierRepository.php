<?php
namespace App\Repositories;

use App\Models\Supplier;
use App\Repositories\SupplierRepositoryInterface;

class SupplierRepository implements SupplierRepositoryInterface
{
    public function all()
    {
        return Supplier::all();
    }

    public function find($id)
    {
        return Supplier::findOrFail($id);
    }

    public function create(array $data)
    {
        
        return Supplier::create($data);
    }

    public function update($id, array $data)
    {
        $supplier = $this->find($id);       
        $supplier->update($data);
        return $supplier;
    }

    public function delete($id)
    {
        return Supplier::destroy($id);
    }
}

