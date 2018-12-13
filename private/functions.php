<?php


/**
 * License: GPL3
 * Created by PhpStorm.
 * User: mike
 * Date: 8/21/17
 * Time: 2:31 PM
 */

// script function to connect urls to root path.
/**
 * @param $script_path
 * @return string
 */
function url_for($script_path) {
    // adds leading '/' if not present.
    if ($script_path[0] != '/') {
        $script_path = '/' . $script_path;
    }

    return WWW_ROOT . $script_path;
}

/**
 * @param $node_modules
 * @return string
 */
function node_module($node_modules) {
    // leading ./ if not present.
    if ($node_modules[0] != './') {
        $node_modules = './' . $node_modules;
    }
    return $node_modules;
}



################################################# queries to database,
/**
 * @param $con
 * @param $query
 * @param $variables
 * @return mixed
 */
function execute_query($con, $query, $variables) {
    $stmt = $con->prepare($query);
    $stmt->execute($variables);
    return $stmt;

}

/**
 * @param $parameter
 * @return array|mixed
 */
function first_item_query($parameter) {
    $db = Connection::make();
    $con = $db; // the connection to the db.
    try {
        if (isset($parameter)) {
            $sql = "SELECT t.t_id AS id, t.item_code AS code, t.item_name AS name,
                       t.sale_price AS price,
                       t.sold AS sold, 
                       b.brand AS brand, c.category AS category,                                  
                       tt.tool_type AS section, i.image AS image
                       FROM Tools AS t
                       INNER JOIN Brands AS b ON t.b_id = b.b_id
                       INNER JOIN Categories AS c ON t.c_id = c.c_id
                       INNER JOIN Images AS i ON t.t_id = i.t_id
                       LEFT OUTER JOIN Types AS tt ON t.tt_id = tt.tt_id
                       WHERE tt.tool_type = :tool AND i.image_num = 1";
            /** @var $items $items */
            $items = $con->prepare($sql);
            $items->bindParam(':tool', $parameter, PDO::PARAM_STR);
            $items->execute();
            return $items;
        }
    }catch(PDOException $e) {
        $e->getMessage();
        exit;
    }
    return $items;
}
