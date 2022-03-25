<?php
    /**
     * @param {Array[]} $arr - Associative array of key, value pairs
     * @return {String[]} - Array of equal comparison expressions, e.g. ["make_id = 1", "type_id = 2"]
     */
    function get_query_expressions($arr) {
        $query_array = array();
        foreach($arr as $key => $value) {
            if ($value != '') {
                $query_array[] = $key . ' = ' . $value;
            }
        }
        return $query_array;
    }
?>