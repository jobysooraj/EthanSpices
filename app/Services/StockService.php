<?php
namespace App\Services;

use App\Repositories\StockRepositoryInterface;

class StockService
{
    protected $stockRepository;

    public function __construct(StockRepositoryInterface $stockRepository)
    {
        $this->stockRepository = $stockRepository;
    }

    public function getAllStocks()
    {
        return $this->stockRepository->all();
    }

    public function getStockById($id)
    {
        return $this->stockRepository->find($id);
    }

    public function createStock(array $data)
    {
        
        return $this->stockRepository->create($data);
    
    }

    public function updateStock($id, array $data)
    {
        return $this->stockRepository->update($id, $data);
    }

    public function deleteStock($id)
    {
        return $this->stockRepository->delete($id);
    }
}
