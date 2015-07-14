<?php

class PhotoController extends BaseController {

    public function onInit() {
        $this->title = 'Photos';
        $this->photosModel = new PhotosModel();
        $this->albumsModel = new AlbumsModel();
    }

    public function index() {
        if ($this->isLoggedIn) {
            $this->photos = $this->photosModel->getAllWithCategoryAndAlbum();
            $this->photos = $this->photosModel->getAll();
        } else {
            $this->redirectToUrl('/account/login');
        }
    }

    public function album($id) {
        $this->albumPhotos = $this->photosModel->findByAlbum($id);
    }

    public function id($id) {
        $this->photo = $this->photosModel->findById($id);
    }

    public function add() {
        if ($this->isPost) {
            $extension = pathinfo($_FILES["fileToUpload"]['name'], PATHINFO_EXTENSION);
            $size = $_FILES["fileToUpload"]["size"];
            $name = preg_replace('/\\.[^.\\s]{3,4}$/', '', $_FILES["fileToUpload"]['name']);
            // $name = $_FILES["fileToUpload"]['name'];
            $album = $_POST['album'];
            $dir = 'content/photos/';
            $file = $dir . $album . '_' . $name . '.' . $extension;

            if(!$extension){
                $this->addErrorMessage('There is not photo extension!');
                $this->redirect('photo', 'add');
                return false;
            }
            if($size > 50000000) {
                $this->addErrorMessage('Maximum size exceeded!');
                $this->redirect('photo', 'add');
                return false;
            }
            if($extension != 'jpg' && $extension != 'jpeg' && $extension != 'png' && $extension != 'gif'){
                $this->addErrorMessage('Allowded photo types are : jpg, jpeg, png, gif!');
                $this->redirect('photo', 'add');
                return false;
            }
            if (file_exists($file)) {
                $this->addErrorMessage('File already exist!');
                $this->redirect('photo', 'add');
                return false;
            }

            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $file)) {
                $this->photosModel->create($name, $file, $album);
                $this->addInfoMessage('Successfully Create Photo!');
                $this->redirect('photo', 'album', array($album));
            } else {
                $this->addErrorMessage('Unable to Create Photo!');
                $this->redirect('photo', 'add');
            }

        } else {
            $this->albums = $this->albumsModel->getAll();
        }
    }
}
