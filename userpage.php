<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Userpage</title>
    <link rel="stylesheet" href="userpage.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> -->
     
     <script src=
"https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js" 
        integrity=
"sha512vDKWohFHe2vkVWXHp3tKvIxxXg0pJxeid5eo+UjdjME3DBFBn2F8yWOE0XmiFcFbXxrEOR1JriWEno5Ckpn15A==" 
        crossorigin="anonymous">
    </script>

</head>

<?php 
$code = $_GET['code'];
$link = mysqli_connect("localhost", "root", "", "echallan");

 $result = mysqli_query($link, "Select *from userchallan where code = '{$code}'");
 $row = mysqli_fetch_assoc($result);

?>
<body>
    <div class="search">
        <h1 class="desc">E-Challan</h1>
      
                
           </button>
        <form action="home.php">
            <button type="submit" class="login">Back</button>
        </form>
        <img src="traffi.png" class="logo">
    </div>
    <form id="print" enctype="text/plain" 
          class="form-control" method="post" action="rec.php?code=<?php echo $code ?>">


        <div class="mainbox">
            <div class="leftbox">
                <div class="label"><label for="Name"><b>Name</b></label><br></div>
                <input type="text" placeholder="Enter Name" id="Name" name="Name" required class="input" value="<?php echo $row['name'] ?>">
                <br><br><br>

                <div class="label"><label for="liscence"><b>Liscence no</b></label><br></div>
                <input type="number" name="liscence" id="liscence" placeholder="Enter liscence no" required class="input " value="<?php echo $row['liscence'] ?>">
                <br> <br> <br>


                <div class="label"><label for="VehicleT"><b>Vehicle Type</b></label><br></div>
                <input type="text" name="VehicleT" id="VehicleT" placeholder="Enter Vehicle Type" required class="input" value="<?php echo $row['vehiclet'] ?>">
                <br> <br> <br>

                <div class="label"><label for="Date"><b>Challan date</b></label><br></div>
                <input type="date" name="Date" id="Date" placeholder="Enter date" required class="input" value="<?php echo $row['date'] ?>">
                <br> <br> <br>
            </div>

            <div class="rightbox">
                <div class="label"> <label for="place"><b>Place</b></label><br></div>
                <input type="text" name="place" id="place" placeholder="Enter place" required class="input" value="<?php echo $row['place'] ?>" >
                <br> <br> <br>


                <div class="label"><label for="Vehicle"><b>Vehicle no</b></label><br></div>
                <input type="number" name="Vehicle" id="Vehicle" placeholder="Enter Vehicle no" required class="input" value="<?php echo $row['vehicle'] ?>">
                <br> <br> <br>



                <div class="label"><label for="Created"><b>Created by</b></label><br></div>
                <input type="text" name="Created" id="Created" placeholder="Enter Creator's Name" required class="input" value="<?php echo $row['created'] ?>">
                <br><br> <br>

                <div class="label"><label for="Guilty"><b>Guilty for</b></label><br></div>
                <input type="text" name="Guilty" id="Guilty" placeholder="Enter Guilty for" required class="input" value="<?php echo $row['guilty'] ?>">
                <br><br> <br>
            </div>
            <div class="last">
                <div class="label"><label for="Fine"><b>Fine amount</b></label><br></div>
                <input type="number" name="Fine" id="Fine" placeholder="Enter Fine amount" required class="input" value="<?php echo $row['fine'] ?>">
                <br>
            </div>

            <button type="submit" class="button">Payment</button>
            
       

            </form>

    
  
</body>