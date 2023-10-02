<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Process extends BaseController
{
    private $products;
    private $users;
    
    public function __construct(){
        $this->products = new \App\Models\Products();
    }

    public function index()
    {
        $_1categ = $this->products->select('category')->orderBy('category', 'asc')->First();
        $data = [
            "category" => $this->products->select('category')->distinct()->orderBy('category', 'asc')->FindAll(),
            "products" => $this->products->where('category', $_1categ)->orderBy('category', 'asc')->FindAll(),
        ];
        return view('Homepage/Home', $data);
    }

    public function category($categ){
        $data = [
            "category" => $this->products->select('category')->distinct()->orderBy('category', 'asc')->FindAll(),
            "products" => $this->products->where('category', $categ)->orderBy('category', 'asc')->FindAll(),
            "cate" => $categ,
        ];
        return view('Homepage/Home', $data);
    }

    public function view_product($id){
        $_1categ = $this->products->select('category')->orderBy('category', 'asc')->First();
        $data = [
            "category" => $this->products->select('category')->distinct()->orderBy('category', 'asc')->FindAll(),
            "products" => $this->products->where('category', $_1categ)->orderBy('category', 'asc')->FindAll(),
            "vprod" => $this->products->where('id', $id)->FindAll(),
            "ProdID" => $id,
        ];
        return view('Homepage/Home', $data);
    }

    public function admin() {
        return view('Admin/admin');
    }

}
