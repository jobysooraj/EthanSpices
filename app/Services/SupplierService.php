<?php
namespace App\Services;

use App\Repositories\SupplierRepositoryInterface;

class SupplierService
{
    protected $supplierRepository;

    public function __construct(SupplierRepositoryInterface $supplierRepository)
    {
        $this->supplierRepository = $supplierRepository;
    }

    public function getAllsuppliers()
    {
        return $this->supplierRepository->all();
    }

    public function getSupplierById($id)
    {
        return $this->supplierRepository->find($id);
    }

    public function createSupplier(array $data)
    {
      
        return $this->supplierRepository->create($data);
    }

    public function updateSupplier($id, array $data)
    {
     
        return $this->supplierRepository->update($id, $data);
    }

    public function deleteSupplier($id)
    {
        return $this->supplierRepository->delete($id);
    }
}
