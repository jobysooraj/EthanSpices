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
        
        return Combo::create($data);
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

