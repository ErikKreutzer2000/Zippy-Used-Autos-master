<?php
    class ClassesTable {
        /**
         * @return { VehicleClass[] }
         */
        public static function get_classes() {
            $db = Database::getDB();
            $query = "SELECT * FROM classes ORDER BY class_id";
            $statement = $db->prepare($query);
            $statement->execute();
            $rows = $statement->fetchAll();
            $statement->closeCursor();

            $classes = [];
            foreach ($rows as $row) {
                $class = new VehicleClass($row['class_id'], $row['class_name']);
                $classes[] = $class;
            }

            return $classes;
        }

        /**
         *  @param { int } $class_id - primary key in table to search for class
         * @return { VehicleClass }
         */
        public static function get_class($class_id) {
            $db = Database::getDB();
            $query = "SELECT * FROM classes
                        WHERE class_id = :class_id";
            $statement = $db->prepare($query);
            $statement->bindValue(':class_id', $class_id);
            $statement->execute();
            $row = $statement->fetch();
            $statement->closeCursor();

            $class = new VehicleClass($row['class_id'] ?? null, $row['class_name'] ?? null);
            return $class;
        }

        /**
         * @param { string } $class_name - Vehicle class name
         * @return { int } $count - Row affected in database
         */
        public static function add_class($class_name) {
            $db = Database::getDB();
            $count = 0;
            $query = "INSERT INTO classes (class_name)
                        VALUES (:class_name)";
            try {
                $statement = $db->prepare($query);
                $statement->bindValue(':class_name', $class_name);
                if ($statement->execute()) {
                    $count = $statement->rowCount();
                }
            } catch (PDOException $e) {
                $count = 0;
            } finally {
                $statement->closeCursor();
            }
            return $count;
        }

        /**
         * @param { int } $class_id - Vehicle class id
         * @return { int } $count - Row affected in database
         */
        public static function delete_class($class_id) {
            $db = Database::getDB();
            $count = 0;
            $query = "DELETE FROM classes
                        WHERE class_id = :class_id";
            $statement = $db->prepare($query);
            $statement->bindValue(':class_id', $class_id);
            if ($statement->execute()) {
                $count = $statement->rowCount();
            }
            $statement->closeCursor();
            return $count;
        }

    }
?>