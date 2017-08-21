<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 7/13/17
 * Time: 5:47 AM
 */


require( '../inc/header.php');
require('../inc/nav.php');
try {
    require_once '../inc/connection.php';
    $sql = 'SELECT item, price, sold
            FROM tools limit 10';
    $tools = $con->query($sql);
}catch(Exception $e){
    echo $error = $e->getMessage();

}
?>
    <div class="container-fluid">
        <div class="row">
            <section>
              <article class="info col-xs-12 col-sm-3 col-sm-offset-3">
                <h2>Info</h2>
                <p>
                  Greetings, I am a retired body and fender man. I am selling off my tools now. I am located in the West Bradenton area. Sales are local only, no shipping tools.
                </p>
              </article>
              <article class="tool-info col-xs-12 col-sm-3">
                  <h2>Tool Info</h2>
                  <p>
                    Important to note:
                    <ul>
                      <li>Generally <em>most</em> of these items there is only one of said item.</li>
                      <li>if any questions about an Item please email</li>
                      <li>listing will be updated asap after sales occur</li>
                    </ul>
              </article>
            </section><!--article section -->
       </div><!-- / row -->
    </div><!--/ container-fluid-->
    <div class="container-fluid">
        <section class="tools-display">

        </section>
    </div>



<?php
 require('../inc/footer.php');
 ?>