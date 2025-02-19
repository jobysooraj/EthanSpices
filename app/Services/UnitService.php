<?php
namespace App\Services;

use App\Repositories\UnitRepositoryInterface;

class UnitService
{
    protected $unitRepository;

    public function __construct(UnitRepositoryInterface $unitRepository)
    {
        $this->unitRepository = $unitRepository;
    }

    public function getAllunits()
    {
        return $this->unitRepository->all();
    }

    public function getUnitById($id)
    {
        return $this->unitRepository->find($id);
    }

    public function createUnit(array $data)
    {
      
        return $this->unitRepository->create($data);
    }

    public function updateUnit($id, array $data)
    {
     
        return $this->unitRepository->update($id, $data);
    }

    public function deleteUnit($id)
    {
        return $this->unitRepository->delete($id);
    }
}
