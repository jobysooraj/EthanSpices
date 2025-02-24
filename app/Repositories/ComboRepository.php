<?php
namespace App\Repositories;

use App\Models\Combo;
use App\Repositories\ComboRepositoryInterface;

class ComboRepository implements ComboRepositoryInterface
{
    public function all()
    {
        return Combo::all();
    }

    public function find($id)
    {
        return Combo::findOrFail($id);
    }

    public function create(array $data)
    {
        try {
            // Try creating the combo
            return Combo::create($data);
        } catch (\Exception $e) {
           dd($e->getMessage());
            return null; // Or you can return a failure response here
        }
    }

    public function update($id, array $data)
    {
        $combo = $this->find($id);
        $combo->update($data);
        return $combo;
    }

    public function delete($id)
    {
        return Combo::destroy($id);
    }
}

