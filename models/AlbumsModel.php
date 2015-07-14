<?php

class AlbumsModel extends BaseModel {
    public function getAll() {
        $statement = self::$db->query("SELECT * FROM albums");
        return $statement->fetch_all(MYSQL_ASSOC);
    }

    public function getAllByCategory() {
        $statement = self::$db->query("SELECT * FROM albums a JOIN categories c WHERE c.id = a.category_id");
        return $statement->fetch_all(MYSQL_ASSOC);
    }

    public function createAlbum($name, $categoryId) {
        if (!isset($name) || $name == '' ) {
            return false;
        }

        $statement = self::$db->prepare("INSERT INTO albums(name, category_id) VALUES (?, ?)");

        $statement->bind_param("si", $name, $categoryId);
        $statement->execute();
        var_dump(self::$db->error);
        return $statement->affected_rows > 0;
    }

    public function findById($id) {
        $statement = self::$db->prepare(
            "SELECT * FROM albums a JOIN categories c WHERE c.id = a.category_id");
        $statement->bind_param("i", $id);
        $statement->execute();
        return $statement->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function deleteAlbum($id) {
        if (!isset($id) || $id == '' ) {
            return false;
        }
        $statement = self::$db->prepare("DELETE FROM albums WHERE id = ?;");
        $statement->bind_param("i", $id);
        $statement->execute();
        return $statement->affected_rows > 0;
    }
}