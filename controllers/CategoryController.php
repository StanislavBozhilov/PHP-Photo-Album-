<?php

class CategoryController extends BaseController {
    private $db;

    public function onInit() {
        $this->title = "Categories";
        $this->db = new CategoriesModel();
    }

    public function index() {
        if ($this->isLoggedIn) {
            $this->categories = $this->db->getAll();
        } else {
            $this->redirectToUrl('/account/login');
        }
    }

    public function create() {
        if ($this->isPost) {
            $name = $_POST['category-name'];

            if($this->categories = $this->db->createCategory($name)){
                $this->addInfoMessage("Category created");
            }
            else{
                $this->addErrorMessage("Error creating category.");
            }
            $this->redirect('category');
        }
    }

    public function delete() {
        $this->categories = $this->db->getAll();

        if ($this->isPost) {
            $id = $_POST['category-id'];

            if($this->categories = $this->db->deleteCategory($id)){
                $this->addInfoMessage("Category deleted successfully");
            }
            else{
                $this->addErrorMessage("Error occurred during deleting.");
            }
            $this->redirect('category');
        }
    }
}