<?php
namespace App\Repositories;

use App\Models\Stock;
use App\Repositories\StockRepositoryInterface;

class StockRepository implements StockRepositoryInterface
{
    public function all()
    {
        return Stock::all();
    }

    public function find($id)
    {
        return Stock::findOrFail($id);
    }

    public function create(array $data)
    {
        try {
        return Stock::create($data);
    } catch (\Exception $e) {
        dd($e->getMessage());
        DB::rollBack();
        return redirect()->back()->withErrors('Error creating category. Please try again.');
    }

    }

    public function update($id, array $data)
    {
        $stock = $this->find($id);
        $stock->update($data);
        return $stock;
    }

    public function delete($id)
    {
        return Stock::destroy($id);
    }
}

