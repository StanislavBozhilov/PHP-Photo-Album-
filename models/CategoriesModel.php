<?php

class CategoriesModel extends BaseModel {
    public function getAll() {
        $statement = self::$db->query("SELECT * FROM categories");
        return $statement->fetch_all(MYSQL_ASSOC);
    }

    public function createCategory($name) {
        if (!isset($name) || $name == '' ) {
            return false;
        }
        $statement = self::$db->prepare("INSERT INTO categories VALUES (NULL,?)");
        $statement->bind_param("s", $name);
        $statement->execute();
        return $statement->affected_rows > 0;
    }

    public function deleteCategory($id) {
        if (!isset($id) || $id == '' ) {
            return false;
        }
        $statement = self::$db->prepare("DELETE FROM categories WHERE id = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        return $statement->affected_rows > 0;
    }
}