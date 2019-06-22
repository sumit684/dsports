
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Gallery | Diretorate of Physical Edu and Sports</title>
    <?php include('include/link.html');?>
    <style>
        body{
            font-family:'Times New Roman', Times, serif;
        }
        html {
            box-sizing: border-box;
        }

        *, *:before, *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 30%;
            margin-bottom: 50px;
            padding: 0 30px;
            margin-left: 20px;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }
        .card:hover{
            box-shadow: 2px 2px 5px 2px #bdc3c7;
        }

        .card {
            box-shadow: 2px 2px 20px 8px #bdc3c7 ;    /*#8395a7*/
            border-radius: 0px;
            transition: 0.3s ease-in;
        }

        .container {
            padding: 0 20px;
        }

        .container::after, .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }
        body{
            background-color:#ecf0f1;
        }
        .button {
            border: none;
            border-radius: 20px;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #e67e22;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }
        .card img{
            padding:7px;
        }
        .button:hover {
            background-color: #d35400;
        }
        .row{
            padding-left: 80px;
            padding-right: 80px;
        }
    </style>
</head>
<body>


    <?php include 'include/nav.html';?>
    <?php include 'include/header.html';?>
    <!--    ***********************************GALLERY************************-->
    <div style="text-align: center; padding-top: 20px; padding-bottom: 20px; "  > 
        <h1 style="color:black;"> SPORTS GALLERY </h1>
        <hr> 
    </div>
    <div class="row">


        <div class="column">
            <div class="card">
                <img src="images/gallery/1.jpg" alt="Jane" style="width:100%;  ">
                <div class="container">
                    <h2>Runathon </h2>
                    <p class="title">12/12/2018</p>
                    <a href="tournament.php"><p><button class="button" >See Photos</button></p></a>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="images/gallery/2.jpg" alt="Mike" style="width:100%">
                <div class="container">
                    <h2>PSA tournment</h2>
                    <p class="title">28/12/18</p>
                    <a href="tournament.php"><p><button class="button">See Photos</button></p></a>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="images/gallery/3.jpg" alt="Mike" style="width:100%">
                <div class="container">
                    <h2>SAI 2K18</h2>
                    <p class="title">31/12/18</p>
                    <a href="tournament.php"> <p><button class="button">See Photos</button></p></a>
                </div>
            </div>
        </div>


        <div class="column">
            <div class="card">
                <img src="images/gallery/4.jpg" alt="Mike" style="width:100%">
                <div class="container">
                    <h2>Saimsthon </h2>
                    <p class="title">10/01/19</p>
                    <a href="tournament.php"> <p><button class="button">See Photos</button></p></a>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="images/gallery/5.jpg" alt="Mike" style="width:100%">
                <div class="container">
                    <h3>VolleyBall Tournament </h3>
                    <p class="title">24/01/19</p>
                    <a href="tournament.php"> <p><button class="button">See Photos</button></p></a>
                </div>
            </div>
        </div>


        <div class="column">
            <div class="card">
                <img src="images/gallery/6.jpg" alt="John" style="width:100%">
                <div class="container">
                    <h2>UTKARSHA</h2>
                    <p class="title">05/02/18</p>
                    <a href="tournament.php"> <p><button class="button">See Photos</button></p></a>
                </div>
            </div>
        </div>


    </div>


    <!--***********************************GALLERY***************************-->

    <?php include 'include/footer.html';?>
</body>
</html>
