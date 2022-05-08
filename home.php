<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Traffic Registration</title>
    <link rel="stylesheet" href="home page.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>


<body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <div class="search">
        <h1 class="desc">E-Challan</h1>
        <div class="search-box">
            <input type="text" autocomplete="off" placeholder="Search and Pay challan..." />
            <div class="result"></div>
        </div>

        <form action="secondpage.html">
            <button type="submit" class="login">login</button>
        </form>
        <img src="traffi.png" class="logo">
    </div>
    <section class="registration-part">
        <img src="Traffic.png" alt="Logo" width="1480" height="620" class="img" />
        <div class="inside">
            <p>Check and pay traffic police fine in Nepal</p>
            <a href="#sector"> <button>Read more</button></a>
        </div>

        <section id="sector">
            <div class="about">
                <h2 class="head">About E-Challan </h2><br><br><br>
                <p class="info">An e-challan is an electronically generated challan document that is issued with the help of Electronic Challan System. E-challan is an initiative provided by the Government with an aim to improve its services and ensure transparency.
                    With the concept of digitalization, traffic violators can now pay e-challan online or offline, depending on the service provided by their state or city. E-challan process has negated the bribing process and has eliminated the use of
                    any cash transactions.in contrast to your mood, you are stillvery much on Earth and in Kathmandu.
                </p><br><br><br>
                <p class="info2" ">Nepal where CCTV cameras have been installed across the city. Disrupting your elation, you hear your message tone calling you to a text from the KTM Traffic Police Department notifying you that an e-challan has been generated to your name
                    for inadvertently crossing a red light. This is how an e-challan works</p>

            </div>
        </section>

        <div class="showbox">
            <h3>Trending News</h3>
        </div>
        <div class="news">
            <a href="https://www.usatoday.com/story/money/cars/2019/09/18/california-emissions-waiver-trump-electric-cars/2365337001/"><img src="news1.png" alt="no" height="300" width="400"></a>
            <p class="one">Traffic in Calafornia roads</p>
            <a class="sec" href="https://thehimalayantimes.com/opinion/kathmandus-notorious-traffic-jams-a-few-solutions"><img src="news2.png" alt="no" height="300" width="400"></a>
            <p class="two">Kathmandu's notorious <br>traffic jams</p>
            <a class="thi" href="https://thehimalayantimes.com/kathmandu/500-volunteers-to-be-mobilised-for-traffic-management-in-kathmandu-valley"><img src="news3.png" alt="no" height="300" width="400"></a>
            <p class="three">500 volunteers to be mobilised <br>for traffic management </p>
        </div>
        <script>
            $(document).ready(function() {
                $('.search-box input[type="text"]').on("keyup input", function() {
                    /* Get input value on change */
                    var inputVal = $(this).val();
                    var resultDropdown = $(this).siblings(".result");
                    if (inputVal.length) {
                        $.get("http://localhost/search/backend-search.php", {
                            term: inputVal
                        }).done(function(data) {
                            // Display the returned data in browser
                            resultDropdown.html(data);
                        });
                    } else {
                        resultDropdown.empty();
                    }
                });

                // Set search input value on click of result item
                $(document).on("click", ".result p", function() {
                    $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                    $(this).parent(".result").empty();
                });
            });
        </script>
</body>