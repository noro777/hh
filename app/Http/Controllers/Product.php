<?php

namespace App\Http\Controllers;

use App\DTO\GetProductData;
use App\Http\Requests\ProductRequest;
use App\Interfaces\ProductInterface;
use App\Service\ProductService;

class Product extends Controller
{
    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function update_view($id){
        return view('updateProduct',compact('id'));
    }

    /**
     * @param ProductRequest $request
     * @param ProductInterface $interface
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Spatie\DataTransferObject\Exceptions\UnknownProperties
     */
    public  function store(ProductRequest $request, ProductInterface $interface){
        $data = new GetProductData($request->validated());

        $interface->store($data);

        return redirect()->route('admin');
    }

    /**
     * @param ProductRequest $request
     * @param ProductInterface $interface
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Spatie\DataTransferObject\Exceptions\UnknownProperties
     */
    public  function  update(ProductRequest $request,ProductInterface $interface, int $id){
        $data = new GetProductData($request->validated());

        $interface->update($data,$id);

        return redirect()->route('admin');
    }
}
