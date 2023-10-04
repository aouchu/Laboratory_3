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
        $session = session();
        session_start();
        $_1categ = $this->products->select('category')->orderBy('category', 'asc')->First();
        $data = [
            "category" => $this->products->select('category')->distinct()->orderBy('category', 'asc')->FindAll(),
            "products" => $this->products->where('category', $_1categ)->orderBy('category', 'asc')->FindAll(),
        ];
        return view('Homepage/Home', $data);
    }

    public function category($categ){
        $session = session();
        session_start();
        $data = [
            "category" => $this->products->select('category')->distinct()->orderBy('category', 'asc')->FindAll(),
            "products" => $this->products->where('category', $categ)->orderBy('category', 'asc')->FindAll(),
            "cate" => $categ,
        ];
        return view('Homepage/Home', $data);
    }

    public function view_product($id){
        $session = session();
        session_start();
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
        $session = session();
        session_start();
        $data = [
            'products' => $this->products->FindAll(),
            'currentuser' => $_SESSION['username'],
        ];
        return view('Admin/admin', $data);
    }

    public function Edit($id) {
        $session = session();
        session_start();
        $data = [
            'products' => $this->products->FindAll(),
            'prod' => $this->products->where('id', $id)->First(), 
            'currentuser' => $_SESSION['username'],
            'setter' => $id,
        ];
        return view('Admin/admin', $data);
    }

    public function Delete($id) {
        $session = session();
        session_start();
        $file = $this->products->select('image')->where('id', $id)->First();
        $this->products->where('id', $id)->delete();
        $path = PUBLIC_PATH.$file['image'];
        unlink($path);
        return redirect()->to('/Admin');
    }

    public function Search() {
        $session = session();
        session_start();
        $categ = $this->request->getVar('option'); 
        $search = $this->request->getVar('find');
        $data = [
            'products' => $this->products->FindAll(),
            'search' => $this->products->like($categ, $search)->FindAll(),
            'currentuser' => $_SESSION['username'],
            'set' => $search,
        ];
        return view('Admin/admin', $data);
        
    }

    public function save() {
        //session for security
        $session = session();
        session_start();

        //getting the id
        $id = $_POST['id'];

        //getting the uploaded image [Purpose: For Uploading into Public Folder]
        $file = $this->request->getFile('image');

        /* getting the current image ['Purpose: For Deleting the previous image of the current selected record 
        or to Keep the current image] */
        $currfile = $this->request->getVar('currentimage');

        //Condition to either update or save the data
        //Saving the data >>>
        if($id == null || $id == 'null') {

            //adding the image
            $file->move(PUBLIC_PATH.'\uploads\\');
            $name = $file->getClientPath();
            $path = '/uploads/'.$name;

            //data array for adding new record
            $data = [
                'name' => $this->request->getVar('name'),
                'description' => $this->request->getVar('description'),
                'image' => $path,
                'price' => $this->request->getVar('price'),
                'category' => $this->request->getVar('category'),
                'quantity' => $this->request->getVar('quantity'),
            ];

            //save the data in the database
            $this->products->save($data);

        }else if($file != null && $id != null) { //for updating the data with a new image file
           
            //deleting the previous pic
            $oldpath = PUBLIC_PATH.$currfile;
            unlink($oldpath);

            //adding the new pic
            $file->move(PUBLIC_PATH.'\uploads\\');
            $name = $file->getClientPath();
            $path = '/uploads/'.$name;

            //data array for updating the values
            $data = [
                'name' => $this->request->getVar('name'),
                'description' => $this->request->getVar('description'),
                'image' => $path,
                'price' => $this->request->getVar('price'),
                'category' => $this->request->getVar('category'),
                'quantity' => $this->request->getVar('quantity'),
            ];

            //update the data in the database
            $this->products->set($data)->where('id', $id)->update();

        }else if($file == null){  
            //for updating the data without changing the image

            //data array for updating the values
            $data = [
                'name' => $this->request->getVar('name'),
                'description' => $this->request->getVar('description'),
                'image' => $currfile,
                'price' => $this->request->getVar('price'),
                'category' => $this->request->getVar('category'),
                'quantity' => $this->request->getVar('quantity'),
            ];

                //update the data in the database
                $this->products->set($data)->where('id', $id)->update();

        }

        return redirect()->to('/Admin');
    }

}
