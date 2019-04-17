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
        <nav role="navigation" class="navbar" aria-label="main navigation">
            <div class="navbar-brand">
                <a href="<?php echo url_for( 'index.php'); ?>" class="navbar-item">
                    <h1>Garys Tools</h1>
                </a>
                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="toolNavbar">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="toolNavbar" class="navbar-menu" >
                <div class="navbar-start">
                    <a class="navbar-item" href="<?php echo url_for('/index.php') ?>">Home <span class="sr-only"></span></a>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a href="#" class="navbar-link">hand tools</a>

                        <div class="navbar-dropdown" >

                            <a class="navbar-item" href="<?php echo url_for( '/pages/catalog.php?cat=crimps'); ?>">Crimps/Cutters</a>

                            <a class="navbar-item" href="<?php echo url_for( '/pages/catalog.php?cat=files'); ?>">Files</a>

                            <a class="navbar-item" href="<?php echo url_for( '/pages/catalog.php?cat=hammers'); ?>">Hammers</a>

                            <a class="navbar-item" href="<?php echo url_for( '/pages/catalog.php?cat=pliers'); ?>">Pliers</a>

                            <a class="navbar-item" href="<?php echo url_for( '/pages/catalog.php?cat=bars'); ?>">pry and pic bars</a>

                            <a class="navbar-item" href="<?php echo url_for( '/pages/catalog.php?cat=ratchets'); ?>">Ratchets</a>

                            <a class="navbar-item" href="<?php echo url_for( '/pages/catalog.php?cat=screwdrivers'); ?>">Screwdrivers</a>

                            <a class="navbar-item" href="<?php echo url_for( '/pages/catalog.php?cat=spoons'); ?>">spoons</a>

                            <a class="navbar-item" href="<?php echo url_for( '/pages/catalog.php?cat=vise_grips'); ?>">Vise Grips</a>

                            <a class="navbar-item" href="<?php echo url_for( '/pages/catalog.php?cat=wrenches'); ?>">Wrenches</a>

                        </div>
                    </div>
                    <div class="navbar-item has-dropdown is-hoverable">

                        <a href="#" class="navbar-link" >tool parts</a>

                        <div class="navbar-dropdown">

                            <a class="navbar-item" href="<?php echo url_for( '/pages/catalog.php?cat=bits'); ?>">Bits</a>

                            <a class="navbar-item" href="<?php echo url_for( '/pages/catalog.php?cat=blades'); ?>">Blades</a>

                            <a class="navbar-item" href="<?php echo url_for( '/pages/catalog.php?cat=cables'); ?>">cables</a>

                            <a class="navbar-item" href="<?php echo url_for( '/pages/catalog.php?cat=chisels'); ?>">chisels</a>

                            <a class="navbar-item" href="<?php echo url_for( '/pages/catalog.php?cat=discs'); ?>">Discs/wheels</a>

                            <a class="navbar-item" href="<?php echo url_for( '/pages/catalog.php?cat=extensions'); ?>">Extensions</a>

                            <a class="navbar-item" href="<?php echo url_for( '/pages/catalog.php?cat=sockets'); ?>">Sockets</a>

                        </div>
                    </div>

                    <a class="navbar-item" href="<?php echo url_for( '/pages/catalog.php?cat=air-tools'); ?>">Air Tools</a>

                    <a class="navbar-item" href="<?php echo url_for( '/pages/catalog.php?cat=misc'); ?>">Misc Tools</a>

                    <a class="navbar-item" class="nav-item" href="<?php echo url_for( '/pages/catalog.php?cat=removers'); ?>">Removers</a>

                    <a class="navbar-item" href="<?php echo url_for( '/pages/catalog.php?cat=jacks'); ?>">Jacks</a>

                    <a class="navbar-item" href="<?php echo url_for( '/pages/catalog.php?cat=hcc'); ?>">Clamps/hooks/chains</a>

                    <a class="navbar-item" href="<?php echo url_for('/pages/email.php'); ?>" >Tools Inquiry</a>

                </div>
        </nav>
        <main role="main">