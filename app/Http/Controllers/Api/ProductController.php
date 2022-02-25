<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $products = Product::all();

        if (!$products) {
            return response()->json([
                "error" => true,
                "message" => "Whoooops!!! Não há produtos cadastrados ainda!"
            ], 404);
        }

        return response()->json([
            "error" => false,
            "message" => "",
            "data" => $products
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->brand = $request->brand;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->color = $request->color;

        if (!$product->save()) {
            return response()->json([
                "error" => true,
                "message" => "Whooops!!! Ocorreu um erro ao tentar cadastrar o produto.",
                "data" => nul
            ], 400);
        }

        return response()->json([
            "error" => false,
            "message" => "Novo produto cadastrado com sucesso!",
            "data" => $product
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $product = Product::where("id", $id)->first();

        if (!$product) {
            return response()->json([
                "error" => true,
                "message" => "Whoooops!!! Produto não encontrado!",
                "data" => null
            ], 404);
        }

        return response()->json([
            "error" => false,
            "message" => "",
            "data" => $product
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $product = Product::where("id", $id)->first();

        if (!$product) {
            return response()->json([
                "error" => true,
                "message" => "Whoooops!!! Produto não encontrado!",
                "data" => null
            ], 404);
        }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->brand = $request->brand;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->color = $request->color;

        if (!$product->save()) {
            return response()->json([
                "error" => true,
                "message" => "Whooops!!! Ocorreu um erro ao tentar atualizar o produto.",
                "data" => null
            ], 400);
        }

        return response()->json([
            "error" => false,
            "message" => "Produto atualizado com sucesso!",
            "data" => $product
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $product = Product::where("id", $id)->first();

        if (!$product) {
            return response()->json([
                "error" => true,
                "message" => "Whoooops!!! Produto não encontrado!",
                "data" => null
            ], 404);
        }

        $product->delete();

        return response()->json([
            "error" => false,
            "message" => "Produto deletado com sucesso!",
            "data" => null
        ], 200);
    }
}
