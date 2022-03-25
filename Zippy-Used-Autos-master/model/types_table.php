<?php
    class TypesTable {
        /**
         * @return { VehicleType[] }
         */
        public static function get_types() {
            $db = Database::getDB();
            $query = "SELECT * FROM types ORDER BY type_id";
            $statement = $db->prepare($query);
            $statement->execute();
            $rows = $statement->fetchAll();
            $statement->closeCursor();

            $types = [];
            foreach($rows as $row) {
                $type = new VehicleType($row['type_id'], $row['type_name']);
                $types[] = $type;
            }

            return $types;
        }

        /**
         *  @param { int } $type_id - primary key in table to search for type
         * @return { VehicleType }
         */
        public static function get_type($type_id) {
            $db = Database::getDB();
            $query = "SELECT * FROM types
                        WHERE type_id = :type_id";
            $statement = $db->prepare($query);
            $statement->bindValue(':type_id', $type_id);
            $statement->execute();
            $row = $statement->fetch();
            $statement->closeCursor();

            $type = new VehicleType($row['type_id'] ?? null, $row['type_name'] ?? null);
            return $type;
        }

        /**
         * @param { string } $type_name - Vehicle type name
         * @return { int } $count - Row affected in database
         */
        public static function add_type($type_name) {
            $db = Database::getDB();
            $count = 0;
            $query = "INSERT INTO types (type_name)
                        VALUES (:type_name)";
            try {
                $statement = $db->prepare($query);
                $statement->bindValue(':type_name', $type_name);
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
         * @param { int } $type_id - Vehicle type id
         * @return { int } $count - Row affected in database
         */
        public static function delete_type($type_id) {
            $db = Database::getDB();
            $count = 0;
            $query = "DELETE FROM types
                        WHERE type_id = :type_id";
            $statement = $db->prepare($query);
            $statement->bindValue(':type_id', $type_id);
            if ($statement->execute()) {
                $count = $statement->rowCount();
            }
            $statement->closeCursor();
            return $count;
        }
    }
?>