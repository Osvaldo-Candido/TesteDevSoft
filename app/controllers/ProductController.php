<?php

namespace App\Controllers;
use App\Models\Product;
use Routes\RouteView;

class ProductController extends RouteView {
    public function index()
    {
        $product = new Product();
        $products = $product->listProduct();
        
        $this->view("listProducts",  $products);
    }

    public function create()
    {
        $this->view("insertProduct");
    }

    public function store() {
        $products = filter_input_array (INPUT_POST, FILTER_DEFAULT);
        var_dump($products);
        $product = new Product();
        $product->insertProduct($products['name']);
        if($product->getResult())
        {
            echo "Adicionado com sucesso";
        }
    }
}