<?php
namespace App\Services;

use App\Repositories\DiscountRepositoryInterface;

class DiscountService
{
    protected $discountRepository;

    public function __construct(DiscountRepositoryInterface $discountRepository)
    {
        $this->discountRepository = $discountRepository;
    }

    public function getAllDiscounts()
    {
        return $this->discountRepository->all();
    }

    public function getDiscountById($id)
    {
        return $this->discountRepository->find($id);
    }

    public function createDiscount(array $data)
    {
      
        return $this->discountRepository->create($data);
    }

    public function updateDiscount($id, array $data)
    {
        return $this->discountRepository->update($id, $data);
    }

    public function deleteDiscount($id)
    {
        return $this->discountRepository->delete($id);
    }
}
