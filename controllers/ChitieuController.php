<?php
require_once 'models/Chitieu.php';
class ChitieuController {
    public function index(){
        $items = chitieu::all();
        // echo "day la phan liet ke";
        require_once 'views/chitieu/index.php';
    }
    public function create(){
        require_once 'views/chitieu/create.php';
    }
    public function store(){
        // Goi model
        chitieu::store($_POST);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=chitieu&action=index");
        
    }
    public function edit(){
        $id = $_GET['id'];
        $row = chitieu::find($id);
        // Truyen xuong view
        require_once 'views/chitieu/edit.php';
    }
        // Xu ly chinh sua
        public function update(){
            $id = $_GET['id'];
            chitieu::update( $id, $_POST );
            // Chuyen huong ve trang danh sach
            header("Location: index.php?controller=chitieu&action=index");
        }
            // Xoa
    public function destroy(){
        $id = $_GET['id'];
        chitieu::delete($id);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=chitieu&action=index");
    }
    // Xem chi tiet
    public function show(){
        $id = $_GET['id'];
        $row = chitieu::find($id);

        // Truyen xuong view
        require_once 'views/chitieu/show.php';
    }

    
}
