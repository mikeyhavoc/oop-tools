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
<?php include SHARED_PATH . '/header.php'; ?>
<!-- header contains nav section too -->
    <div class="container main">
        <div class="text-info">
          <section class="greeting intro__section">
              <h2 class="text--center">Info</h2>
              <p class="intro__text intro__text--left">
                  Hi I am Gary and have been working in body shops over 40 years.
                  I have been in local <em>Bradenton</em> shops for about 25 years. I am <em>selling
                      off my tools</em>.<br> If you are interested I can provide work place references.
                  <br>These tools are my own tools, not selling other peoples tools for them so <em>do not ask</em>.
                  Also, These are mostly <strong>American made tools</strong>, All still usable, many are lightly used,
                  some even new.
              </p>
          </section>
          <section class="notes">
              <h2 class="text--center">Tool Info</h2>
              <p>Important to note:</p>
                <ul role="list" class="listing--li">
                  <li>Generally <em>most</em> of these items there is only one of said item.</li>
                  <li>if any questions about an Item please email</li>
                  <li>listing will be updated asap after sales occur</li>
                  <li>Sales are local only</li>
                  <li>No Shipping Tools</li>
                </ul>
          </section>
        </div>

        <div class="container--fluid">
            <section class="img__section">
                <div class="card">

                        <a class="btn btn-lg btn-outline-danger" href="<?php echo url_for( 'pages/catalog.php?cat=sockets'); ?>" >
                           <button class="btn btn--index">
                               Sockets
                           </button>

                        </a>

                    <p class="text--center">
                        Tool Type: Sockets.
                    </p>
                    <a href="<?php echo url_for( 'pages/catalog.php?cat=sockets'); ?>">
                        <img class="catalog-images center-block img-responsive img-rounded" src="<?php echo  IMAGES . '/img/socket/i322-socket-1.jpg'; ?>" >
                    </a>
                </div>

                <div class="card">
                    <a href="<?php echo url_for( 'pages/catalog.php?cat=wrenches'); ?>" >
                        <buttton class="btn btn--index">
                            Wrenches
                        </buttton>
                    </a>
                    <p class="text--center">
                        Tool Type: Mostly wrench sets some singles.
                    </p>
                    <div class="catalog__img">
                        <a href="<?php echo url_for( 'pages/catalog.php?cat=wrenches'); ?>">
                            <img class="img--responsive img--round" src="<?php echo IMAGES . '/img/wrench/a2-wrench.jpg'; ?>" >
                        </a>
                    </div>
                </div>
                <div class="card">
                    <a  href="<?php echo url_for( 'pages/catalog.php?cat=air-tools'); ?>" >
                        <button class="btn btn--index">
                            Air Tools
                        </button>
                    </a>

                    <p class="text--center">
                            Tool Type: Air drills, etc.
                    </p>
                    <a href="<?php echo url_for( 'pages/catalog.php?cat=air-tools'); ?>">
                        <img class="img--responsive img--round" src="<?php echo  IMAGES . '/img/air/b48-air.jpg'; ?>" >
                    </a>
                </div>
            </section>
        </div>
    </div><!-- //main-container around everything -->

<?php require(SHARED_PATH . '/footer.php'); ?>
