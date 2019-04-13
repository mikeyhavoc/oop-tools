<?php
/**
 * License: GPL3 2018. Michael Williams Manic Designer Developments.
 */
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 1/19/18
 * Time: 2:26 PM
 */

?>
        <nav role="navigation" class="nav__bar">

            <a class="nav-link" href="<?php echo url_for('/index.php') ?>">Home <span class="sr-only"></span></a>
 <!--   <div class="nav-item dropdown"> hamburger create here -->
            <a href="#" class="nav-link droptbtn"  id="hand-tools">hand tools</a>

            <div class="dropdown-menu" id="handToolsDrop">

                <a class="dropdown-item" href="<?php echo url_for( '/pages/catalog.php?cat=crimps'); ?>">Crimps/Cutters</a>

                <a class="dropdown-item" href="<?php echo url_for( '/pages/catalog.php?cat=files'); ?>">Files</a>

                <a class="dropdown-item" href="<?php echo url_for( '/pages/catalog.php?cat=hammers'); ?>">Hammers</a>

                <a class="dropdown-item" href="<?php echo url_for( '/pages/catalog.php?cat=pliers'); ?>">Pliers</a>

                <a class="dropdown-item" href="<?php echo url_for( '/pages/catalog.php?cat=bars'); ?>">pry and pic bars</a>

                <a class="dropdown-item" href="<?php echo url_for( '/pages/catalog.php?cat=ratchets'); ?>">Ratchets</a>

                <a class="dropdown-item" href="<?php echo url_for( '/pages/catalog.php?cat=screwdrivers'); ?>">Screwdrivers</a>

                <a class="dropdown-item" href="<?php echo url_for( '/pages/catalog.php?cat=spoons'); ?>">spoons</a>

                <a class="dropdown-item" href="<?php echo url_for( '/pages/catalog.php?cat=vise_grips'); ?>">Vise Grips</a>

                <a class="dropdown-item" href="<?php echo url_for( '/pages/catalog.php?cat=wrenches'); ?>">Wrenches</a>

            </div>



            <a href="#" class="nav-link dropbtn" id="tool-parts">tool parts</a>
            <div class="dropdown-content" id="toolPartsDropDown">
                <a class="dropdown-item" href="<?php echo url_for( '/pages/catalog.php?cat=bits'); ?>">Bits</a>
                <a class="dropdown-item" href="<?php echo url_for( '/pages/catalog.php?cat=blades'); ?>">Blades</a>
                <a class="dropdown-item" href="<?php echo url_for( '/pages/catalog.php?cat=cables'); ?>">cables</a>
                <a class="dropdown-item" href="<?php echo url_for( '/pages/catalog.php?cat=chisels'); ?>">chisels</a>
                <a class="dropdown-item" href="<?php echo url_for( '/pages/catalog.php?cat=discs'); ?>">Discs/wheels</a>
                <a class="dropdown-item" href="<?php echo url_for( '/pages/catalog.php?cat=extensions'); ?>">Extensions</a>
                <a class="dropdown-item" href="<?php echo url_for( '/pages/catalog.php?cat=sockets'); ?>">Sockets</a>
            </div>

            <a class="nav-link" href="<?php echo url_for( '/pages/catalog.php?cat=air-tools'); ?>">Air Tools</a>
            <a class="nav-link" href="<?php echo url_for( '/pages/catalog.php?cat=misc'); ?>">Misc Tools</a>
            <a class="nav-link" class="nav-item" href="<?php echo url_for( '/pages/catalog.php?cat=removers'); ?>">Removers</a>
            <a class="nav-link" href="<?php echo url_for( '/pages/catalog.php?cat=jacks'); ?>">Jacks</a>
            <a class="nav-link" href="<?php echo url_for( '/pages/catalog.php?cat=hcc'); ?>">Clamps/hooks/chains</a>
            <a href="<?php echo url_for('/pages/email.php'); ?>" class="nav-link">Tools Inquiry</a>
<!--              </div>-->

            <!--    <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->

        </nav>
        <main role="main">