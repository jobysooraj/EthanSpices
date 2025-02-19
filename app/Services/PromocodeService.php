<?php
namespace App\Services;

use App\Repositories\PromocodeRepositoryInterface;

class PromocodeService
{
    protected $promocodeRepository;

    public function __construct(PromocodeRepositoryInterface $promocodeRepository)
    {
        $this->promocodeRepository = $promocodeRepository;
    }

    public function getAllpromocodes()
    {
        return $this->promocodeRepository->all();
    }

    public function getPromocodeById($id)
    {
        return $this->promocodeRepository->find($id);
    }

    public function createPromocode(array $data)
    {
      
        return $this->promocodeRepository->create($data);
    }

    public function updatePromocode($id, array $data)
    {
        return $this->promocodeRepository->update($id, $data);
    }

    public function deletePromocode($id)
    {
        return $this->promocodeRepository->delete($id);
    }
}
