<?php


namespace App\DTO;


use Spatie\DataTransferObject\DataTransferObject;

class GetProductData extends DataTransferObject
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $article;

}
