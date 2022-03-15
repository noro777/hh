<?php


namespace App\Interfaces;


use App\DTO\GetProductData;

interface ProductInterface
{
    /**
     * @param GetProductData $productData
     * @return mixed
     */
    public function store(GetProductData $productData);

    /**
     * @param GetProductData $productData
     * @param int $id
     * @return mixed
     */
    public function update(GetProductData $productData, int $id);

    public function send();
}
