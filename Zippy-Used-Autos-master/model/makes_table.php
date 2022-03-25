<?php
    class MakesTable {
        /**
         * @return { VehicleMake[] }
         */
        public static function get_makes() {
            $db = Database::getDB();
            $query = "SELECT * FROM makes ORDER BY make_id";
            $statement = $db->prepare($query);
            $statement->execute();
            $rows = $statement->fetchAll();
            $statement->closeCursor();

            $makes = [];
            foreach ($rows as $row) {
                $make = new VehicleMake($row['make_id'], $row['make_name']);
                $makes[] = $make;
            }

            return $makes;
        }

        /**
         *  @param { int } $make_id - primary key in table to search for make
         * @return { VehicleMake }
         */
        public static function get_make($make_id) {
            $db = Database::getDB();
            $query = "SELECT * FROM makes
                        WHERE make_id = :make_id";
            $statement = $db->prepare($query);
            $statement->bindValue(':make_id', $make_id);
            $statement->execute();
            $row = $statement->fetch();
            $statement->closeCursor();

            $make = new VehicleMake($row['make_id'] ?? null, $row['make_name'] ?? null);
            return $make;
        }

        /**
         * @param { string } $make_name - Vehicle make name
         * @return { int } $count - Row affected in database
         */
        public static function add_make($make_name) {
            $db = Database::getDB();
            $count = 0;
            $query = "INSERT INTO makes (make_name)
                        VALUES (:make_name)";
            try {
                $statement = $db->prepare($query);
                $statement->bindValue(':make_name', $make_name);
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
         * @param { int } $make_id - Vehicle make id
         * @return { int } $count - Row affected in database
         */
        public static function delete_make($make_id) {
            $db = Database::getDB();
            $count = 0;
            $query = "DELETE FROM makes
                        WHERE make_id = :make_id";
            $statement = $db->prepare($query);
            $statement->bindValue(':make_id', $make_id);
            if ($statement->execute()) {
                $count = $statement->rowCount();
            }
            $statement->closeCursor();
            return $count;
        }
    }
?>