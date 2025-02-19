<?php
namespace App\Repositories;

use App\Models\GstTax;
use App\Repositories\GstTaxRepositoryInterface;

class GstTaxRepository implements GstTaxRepositoryInterface
{
    public function all()
    {
        return GstTax::all();
    }

    public function find($id)
    {
        return GstTax::findOrFail($id);
    }

    public function create(array $data)
    {
        
        return GstTax::create($data);
    }

    public function update($id, array $data)
    {
        $GstTax = $this->find($id);
        $GstTax->update($data);
        return $GstTax;
    }

    public function delete($id)
    {
        return GstTax::destroy($id);
    }
}

