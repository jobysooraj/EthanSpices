<?php
namespace App\Services;

use App\Repositories\GstTaxRepositoryInterface;

class GstTaxService
{
    protected $gstTaxRepository;

    public function __construct(GstTaxRepositoryInterface $gstTaxRepository)
    {
        $this->gstTaxRepository = $gstTaxRepository;
    }

    public function getAllGstTaxes()
    {
        return $this->gstTaxRepository->all();
    }

    public function getGstTaxById($id)
    {
        return $this->gstTaxRepository->find($id);
    }

    public function createGstTax(array $data)
    {
      
        return $this->gstTaxRepository->create($data);
    }

    public function updateGstTax($id, array $data)
    {
        return $this->gstTaxRepository->update($id, $data);
    }

    public function deleteGstTax($id)
    {
        return $this->gstTaxRepository->delete($id);
    }
}
