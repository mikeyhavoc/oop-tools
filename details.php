<?php require_once('private/initialize.php');
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 12/21/17
 * Time: 11:52 PM
 */


if (isset($_get['t_id'])) {
    $id_num = $_GET['t_id'];
    $id = filter_input(INPUT_GET, $id_num, FILTER_SANITIZE_NUMBER_INT);



}

//if (empty($item)) {
//    header("location:catalog.php");
//    exit;
//}

$pageTitle = 'Details';

include(SHARED_PATH . '/header.php');
include (SHARED_PATH . '/nav.php');

?>

<article>
    <div class="container">
        <div class="row">
         <div class="col-xs-12 col-sm-6 col-md4">
             <?php

             ?>

         </div>
        </div>
    </div>
</article>

























<?php //include (SHARED_PATH . '/footer.php');