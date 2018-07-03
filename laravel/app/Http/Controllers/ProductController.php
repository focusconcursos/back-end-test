<?php

namespace App\Http\Controllers;

use App\Exceptions\ResourceNotFoundException;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Repositories\ProductRepository;
use App\Services\FreightService;
use App\Transformer\ProductTransformer;

class ProductController extends Controller
{
    private $repository;

    public function __construct()
    {
        $this->repository = new ProductRepository();
    }

    public function index()
    {
        throw new ResourceNotFoundException();
    }

    public function getFreight($product, $origem, $destino, $quantidade)
    {
        $product = $this->repository->findByIdOrName($product);

        $total = (new FreightService($product, $origem, $destino, $quantidade))->getTotal();

        return response()->json(["total" => $total]);
    }

    /****
     * Implementação da busca pelo nome ou ID do produto.
     *
     * @param $query
     * @return XML ou JSON
     */
    public function show($query)
    {
        $product = $this->repository->findByIdOrName($query);

        $transformer = new ProductTransformer($product);

        switch (strtolower(request("formato")))
        {
            case "xml":
                return $transformer->getXML();

            case "json":
                return $transformer->getJSON();

            default:
                return $transformer->getJSON();
        }
    }

    public function create()
    {
        throw new ResourceNotFoundException();
    }

    public function store(ProductRequest $request)
    {
        $data = $request->all();

        $product = $this->repository->create($data);

        return response()->json(["status" => "OK", "product" => $product]);
    }

    public function edit($id)
    {
        throw new ResourceNotFoundException();
    }

    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->all();

        $product = $this->repository->update($product->id, $data);

        return response()->json(["status" => "OK", "product" => $product]);
    }

    public function destroy(Product $product)
    {
        $this->repository->delete($product->id);

        return response()->json(["status" => "OK"]);
    }
}
