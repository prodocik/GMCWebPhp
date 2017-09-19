 <?php
        if ($_GET['page'] == '') {
        include ('mainpage.php');
        }
 	 
        if ($_GET['page'] == 'trailers') {
        include ('trailers.php');
        }
        if ($_GET['page'] == 'ourfleet') {
        include ('forsale.php');
        }
        if ($_GET['page'] == 'faq') {
        include ('faq.php');
        }
        if ($_GET['page'] == 'package') {
        include ('package.php');
        }
        ///Show RV page
	      if ($_GET['page'] == 'gemini') {
        include ('rv/gemini.php');
        }

	      if ($_GET['page'] == 'nexus') {
        include ('rv/nexus.php');
        }
	      if ($_GET['page'] == 'btcruiser') {
        include ('rv/btcruiser.php');
        }
        if ($_GET['page'] == 'btcruisersale') {
        include ('rv/btcruisersale.php');
        }
        if ($_GET['page'] == 'phoenixsale') {
        include ('rv/phoenixsale.php');
        }

	      if ($_GET['page'] == 'vegas') {
        include ('rv/vegas.php');
        }
        if ($_GET['page'] == 'cambria') {
        include ('rv/cambria.php');
        }
        if ($_GET['page'] == 'view') {
        include ('rv/view.php');
        }
        if ($_GET['page'] == 'solera') {
        include ('rv/solera.php');
        }
        ////Trailers

        if ($_GET['page'] == 'mallard_1') {
        include ('rv/mallard_1.php');
        }
        if ($_GET['page'] == 'mallard_2') {
        include ('rv/mallard_2.php');
        }
        /// Show booking page

          if ($_GET['page'] == 'mallard_1_booking') {
         echo '<h1 class="bookingTitle">Hertland Mallard M185 booking</h1></header><iframe src="https://checkout.wheelbasepro.com/reserve/21908"   height=2100 width=100% frameborder="0"></iframe>';
         }

         if ($_GET['page'] == 'mallard_2_booking') {
        echo '<h1 class="bookingTitle">Hertland Mallard M185 booking</h1></header><iframe src="https://checkout.wheelbasepro.com/reserve/22545"   height=2100 width=100% frameborder="0"></iframe>';
        }

         if ($_GET['page'] == 'gemini_booking') {
        echo '<h1 class="bookingTitle">2017 Thor Gemini booking</h1></header><iframe src="https://checkout.wheelbasepro.com/reserve/12342"   height=2100 width=100% frameborder="0"></iframe>';
        }

        if ($_GET['page'] == 'nexus_booking') {
        echo '<h1 class="bookingTitle">2012 Nexus Phantom booking</h1></header><iframe src="https://checkout.wheelbasepro.com/reserve/12296" height=2300px width=100% frameborder="0"></iframe>';
        }

       if ($_GET['page'] == 'btcruiser_booking') {
        echo '<h1 class="bookingTitle">2007 Gulf Stream BT Cruiser booking</h1></header><iframe src="https://checkout.wheelbasepro.com/reserve/12761" height=2100 width=100% frameborder="0"></iframe>';
        }

        if ($_GET['page'] == 'vegas_booking') {
        echo '<h1 class="bookingTitle">2017 Thor Vegas booking</h1></header><iframe src="https://checkout.wheelbasepro.com/reserve/7970" height=2100 width=100% frameborder="0"></iframe>';
        }
        if ($_GET['page'] == 'cambria_booking') {
        echo '<h1 class="bookingTitle">2014 Itasca Cambria booking</h1></header><iframe src="https://checkout.wheelbasepro.com/reserve/5322" height=2280 width=100% frameborder="0" ></iframe>';
        }
        if ($_GET['page'] == 'view_booking') {
        echo '<h1 class="bookingTitle">2013 Winnebago View Profile booking</h1></header><iframe src="https://checkout.wheelbasepro.com/reserve/5324" height=2050 width=100% frameborder="0"></iframe>';
        }
        if ($_GET['page'] == 'solera_booking') {
        echo '<h1 class="bookingTitle">2010 Forest River Solera booking</h1></header><iframe src="https://checkout.wheelbasepro.com/reserve/5323" height=2250 width=100% frameborder="0"></iframe>';
        }
?>
