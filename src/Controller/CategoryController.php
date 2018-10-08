<?php
// src/Controller/CategoryController.php
namespace Controller;
use Model\CategoryManager;
class CategoryController{
    public function index(){
        $categoryManager = new CategoryManager();
        $categoryManager = $categoryManager->selectAllCategories();
        require __DIR__ . '/../View/category.php';
        return $categoryManager;
    }
    public function show(int $id)
    {
        $categoryManager = new CategoryManager();
        $category = $categoryManager->selectOneCategory($id);
        require __DIR__ . '/../View/showCategory.php';
    }
}
?>