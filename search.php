<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Atlanta RV booking. Book RV Georgia">
    <meta name="keywords" content="RV for rent, RV atlanta booking, book RV, book Motorhome, B class RV booking, C class RV booking, Motorcoach booking">
    <title>RV Booking at Georgia Motorcoach. Motorhome booking</title>
    <?php include ("assets.php");?>
<<<<<<< HEAD
  
</head>
<body>
    <?php include ("variables.php");?>
    <?php include ("menu.php");?>
    <?php include ("mainMenu.php");?>
    <h1 class="bookingTitle">RV Search</h1>
    </header>
    <iframe id="includeSearch" src="" height=2100 width=100% frameborder="0"></iframe>
    <?php include ("footer.php");?>
</body>

</html>
      <script> 
    
    $( function () {
        var $_GET = <?php echo json_encode($_GET); ?>;
        
        var url = "https://checkout.wheelbasepro.com/reserve?from=" + $_GET.from + "&owner_id=21291&to=" + $_GET.to
    
        document.getElementById('includeSearch').src = url;
    });
    </script>
=======
</head>
<body>
    <?php include ("menu.php");?>
    <?php include ("mainMenu.php");?>
    <h1 class="bookingTitle">RV Search</h1></header><iframe src="https://checkout.wheelbasepro.com/reserve?owner_id=21291"   height=2100 width=100% frameborder="0"></iframe>'
    <?php include ("footer.php");?>
</body>
</html>
>>>>>>> 5a7f6f48890ba04fae7ab1560cd0a548ff6ed09c
