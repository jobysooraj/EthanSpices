<?php
namespace App\Repositories;
use App\Repositories\DiscountRepositoryInterface;
use App\Models\Discount;

class DiscountRepository implements DiscountRepositoryInterface
{
    public function all()
    {
        return Discount::all();
    }

    public function find($id)
    {
        return Discount::findOrFail($id);
    }

    public function create(array $data)
    {
        
        return Discount::create($data);
    }

    public function update($id, array $data)
    {
        $discount = $this->find($id);
        $discount->update($data);
        return $discount;
    }

    public function delete($id)
    {
        return Discount::destroy($id);
    }
}
