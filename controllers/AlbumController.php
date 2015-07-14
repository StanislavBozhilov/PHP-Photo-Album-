<?php

class AlbumController extends BaseController {
    private $db;

    public function onInit() {
        $this->title = "Albums";
        $this->db = new AlbumsModel();
    }

    public function index() {
        if ($this->isLoggedIn) {
            $this->albums = $this->db->getAll();
        } else {
            $this->redirectToUrl('/account/login');
        }
    }

    public function create() {
        if ($this->isPost) {
            $name = $_POST['album-name'];
            $categoryId = $_POST['category-id'];

            if($this->album = $this->db->createAlbum($name, $categoryId)){
                $this->addInfoMessage("Album created");
            }
            else{
                $this->addErrorMessage("Error occurred during inserting new album.");
            }
            //$this->redirect('album');
        }

        $categoryModel = new CategoriesModel();
        $this->category = $categoryModel->getAll();
    }

    public function id($id) {
        $this->albums = $this->albumsModel->findById($id);
    }

    public function delete() {
        $this->albums = $this->db->getAll();

        if ($this->isPost) {
            $id = $_POST['album-id'];

            if($this->albums = $this->db->deleteAlbum($id)){
                $this->addInfoMessage("Album deleted successfully");
            }
            else{
                $this->addErrorMessage("Error occurred during deleting.");
            }
            $this->redirect('album');
        }
    }
}