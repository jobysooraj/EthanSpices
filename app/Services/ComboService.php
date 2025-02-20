<?php
namespace App\Services;

use App\Repositories\ComboRepositoryInterface;

class ComboService
{
    protected $comboRepository;

    public function __construct(ComboRepositoryInterface $comboRepository)
    {
        $this->comboRepository = $comboRepository;
    }

    public function getAllCombos()
    {
        return $this->comboRepository->all();
    }

    public function getComboById($id)
    {
        return $this->comboRepository->find($id);
    }

    public function createCombo(array $data)
    {
      
        return $this->comboRepository->create($data);
    }

    public function updateCombo($id, array $data)
    {
        return $this->comboRepository->update($id, $data);
    }

    public function deleteCombo($id)
    {
        return $this->comboRepository->delete($id);
    }
}
