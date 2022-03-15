<?php


namespace App\Service;


use App\DTO\GetProductData;
use App\Interfaces\ProductInterface;
use App\Models\Product;

class ProductService implements ProductInterface
{
    /**
     * @param GetProductData $productData
     * @return mixed|void
     */
    public function store(GetProductData  $productData)
    {
        Product::create([
            "name" => $productData->name,
            "article" => $productData->article
        ]);
    }

    /**
     * @param GetProductData $productData
     * @param int $id
     * @return mixed|void
     */
    public function update(GetProductData $productData, int $id)
    {
        $product = Product::find($id);

        $product->name = $productData->name;
        $product->article = $productData->article;

        $product->save();
    }

}
