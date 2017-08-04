  <div class="container-fluid">
            <div class=" promotext col-lg-12 col-md-12 col-xs-12">
                <h1><big>RV RENTALS</big></h1>
                  <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3  ">
                  
                            <div class=" calendar-form">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12 form-bg ">
                    <div class="row">
                        <form>
                            <div class="col-lg-12 calendar_field">
                                <label for="input-group" class="input-title">
                                    <div class="input-group input-daterange">
                                        <input type="text" name="daterange"  value="Select Pick up and Drop off dates" />
                                    </div>
                            </div>
                                </label>
                    </div>
                    <div class="row">
                    <div class="col-lg-4 col-lg-offset-4  button_search">
                        <input class="btn btn-primary" id="search_btn" value="SEARCH" onclick="sendDates()" readonly="readonly">
                    </div></div>
                    
                    </form>
                </div>
            </div>
                </div>
       </div>
        </div>
        
    </header>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4  advantage">
                    <img src="images/main_photos/rv.jpg" alt="RV brands" width="100" height="100">
                    <p>Popular RV brands</p>
                </div>
                <div class="col-lg-4 advantage">
                    <img src="images/main_photos/shield.jpg" alt="RV insurance" width="100" height="100">
                    <p>Full insurance coverage</p>
                </div>
                <div class="col-lg-4 advantage">
                    <img src="images/main_photos/tfour.jpg" alt="RV assistance" width="100" height="100">
                    <p>24/7 Road assistance</p>
                </div>
            </div>
        </div>
        <div class="container-fluid orngeline">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 orange_text">
                <img src="images/map.svg" height="70px" alt="">
                    <h2>RV Rentals near you </h2>
                    <p>Georgia Motorcoach RV Rental is a small company with a big passion for adventure. We want to help you make memories and deliver unforgettable experiences on board one of our luxury motorhomes. At Georgia Motorcoach RV Rental Company we strive to provide superior service to our customers. We are located just 15 minutes from downtown Atlanta, Georgia</p>
                </div>
            </div>
        </div>
        <div class="container whiteline">
            <div class="col-lg-12 photos-block">
                <img src="images/main_photos/vegas.jpg" alt="vegas">
                <img src="images/main_photos/cambria.jpg" alt="cambria">
                <img src="images/main_photos/gemini.jpg" alt="gemini">
                <img src="images/main_photos/nexus.jpg" alt="nexus">
                <img src="images/main_photos/view.jpg" alt="view">
                <img src="images/main_photos/phoenix.jpg" alt="phoenix">
                <img src="images/main_photos/solera.jpg" alt="solera">
                <img src="images/main_photos/btcruiser.jpg" alt="btcruiser">
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <p>Want to see all ours motorhomes?</p>
                    <div class="all_rv_listing" id="btn_book"><a href="ourfleet.html">RV LISTINGS</a></div>
                </div>
            </div>
        </div>
    </div>

    
      <!-- Include jQuery -->
    <script type="text/javascript">
    var object = {}
    function sendDates() {
    	window.location.href = "search?from=" + object.start.format('MM/DD/YYYY') + "&to=" + object.end.format('MM/DD/YYYY')
    }
    


$(function() {
	var now = new Date();
	var formated_date = now.format("mm/dd/yyyy");
  $('input[name="daterange"]').daterangepicker({
      autoUpdateInput: false,
      autoApply: true,
      minDate: formated_date,
      locale: {
          cancelLabel: 'Clear'
      }
  }, 
  function(start, end, label) {
  	  object.start = start;
  	  object.end = end;
  });
  
  
  $('input[name="daterange"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
  });

  $('input[name="daterange"]').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
  });

});
    </script>