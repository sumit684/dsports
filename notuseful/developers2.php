
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Director's Message | Diretorate of Physical Edu and Sports</title>
    <?php include('include/link.html');?>
    <style>
        .hero-bkg-animated {
            background: gray url(https://subtlepatterns.com/patterns/geometry2.png) repeat 0 0;
            width: 100%;
            margin: 0;
            text-align: center;
            height: 300px;
            padding-top: 120px;
            box-sizing: border-box;
            -webkit-animation: slide 20s linear infinite;
        }

        .hero-bkg-animated h1 {
            font-family: sans-serif;
        }

        @-webkit-keyframes slide {
            from { background-position: 0 0; }
            to { background-position: -400px 0; }
        }



        .col-md-5.img
        {
            text-align: center;
            width: 90%;
        }



        .overimage
        {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-image:  url("team.jpeg");
            width: 90%;
            opacity: 0;
            transition: .9s ease;


        }
        .abc:hover .overimage {
            opacity: 1;
        }


        .center
        {
            margin-left: auto;
            margin-right: auto;
        }
        .container {
            position: relative;
            width: 50%;
        }

        .image {
            display: block;
            width: 380px;
            height: auto;
        }

        .overlay {
            position: absolute;
            bottom:100%;
            left: 0;
            right: 0;
            background-color: #2980b9;
            overflow: hidden;

            width:70%;
            height: 0;
            transition: .5s ease;
        }

        .col-md-5:hover .overlay {
            bottom: 0;
            height: 100%;

        }
        .col-md-5.h4
        {
            position: relative;
            left:20%;
        }

        .text {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }



        .carousel-inner img {
            width: 100%;
            height: 400px;
        }



    </style>
</head>
<body>
    <?php include 'include/nav.html';?>
    <?php include 'include/header.html';?>

    <div class="container-fluid abc" style="background-color:#2980b9">  

        <h1  style="color:white;text-align: center;font-family: 'Cutive';font-size:50px;">Our Team</h1><br>
        <h3 style="text-align: center"><i>"The difference between success and failure is the great Team"</i></h3>



        <img src="images/team/team.jpeg" class="mx-auto d-block" width="1100" height="500" style="width:80%; border-radius: 40px;border: 5px solid #321e1e; position: relative;top: 20px;">


        <div class="container-fluid jumbotron" style="background-color:#e9ecef">

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">


                    <img src="images/team/sumit.jpeg" alt="Avatar" class="image" style="width: 70% ">
                    <h4>Sumit Kumar Singh</h4>

                    <div class="overlay">
                        <div class="text"><h1>Sumit Kumar Singh</h1><br>
                            Institute of Engineering and Technology,DAVV<br><br>
                            <a href="#" class="fa fa-facebook" style="color: white;width: 50px;height: 50px; font-size: 40px"></a>


                            <a href="#" class="fa fa-twitter" style="color: white;width: 50px;height: 50px;font-size: 40px"></a>
                            <a href="#" class="fa fa-google" style="color: white;width: 50px;height: 50px;font-size: 40px"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>

                <div class="col-md-5">


                    <img src="images/team/niti.jpeg" alt="Avatar" class="image" style="width: 70% ">
                    <h4>Niti Mangwani</h4>

                    <div class="overlay">
                        <div class="text"><h1>Niti Mangwani</h1><br> Institute of Engineering and Technology,DAVV<br><br>
                            <a href="#" class="fa fa-facebook" style="font-size: 40px;color: white"></a>
                            <a href="#" class="fa fa-twitter" style="color: white;width: 50px;height: 50px;font-size: 40px"></a>
                            <a href="#" class="fa fa-google" style="color: white;width: 50px;height: 50px;font-size: 40px"></a>


                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row" style="height: 40px">
                    <div class="col-md-6">
                        <h4 style="text-align: center;"></h4></div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">


                        <img src="images/team/pratik.jpeg" alt="Avatar" class="image" style="width: 70%">
                        <h4 >Pratik Mehta</h4>

                        <div class="overlay">
                            <div class="text"><h1>Pratik Mehta</h1><br> Institute of Engineering and Technology,DAVV<br><br>
                                <a href="#" class="fa fa-facebook" style="color: white;width: 50px;height: 50px;font-size: 40px;"></a>
                                <a href="#" class="fa fa-twitter" style="color: white;width: 50px;height: 50px;font-size: 40px"></a>
                                <a href="#" class="fa fa-google" style="color: white;width: 50px;height: 50px;font-size: 40px"></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>

                    <div class="col-md-5">


                        <img src="images/team/rudransh.jpeg" alt="Avatar" class="image" style="width: 70%">
                        <h4>Rudransh Choudhary</h4>

                        <div class="overlay">
                            <div class="text"><h1>Rudransh Choudhary</h1><br> Institute of Engineering and Technology,DAVV<br><br>
                                <a href="#" class="fa fa-facebook" style="color: white;width: 50px;height: 50px;font-size: 40px"></a>
                                <a href="#" class="fa fa-twitter" style="color: white;width: 50px;height: 50px;font-size: 40px"></a>
                                <a href="#" class="fa fa-google" style="color: white;width: 50px;height: 50px;font-size: 40px"></a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo" style="margin-left: auto;margin-right: auto; position: center width:100px;background-color: #2980b9;color: white">Mentors</button>
                    <div id="demo" class="collapse" style="font-size:16px; font-family:sans-serif">
                        <br>
                        Dr. Vrinda Tokekar<br>
                        Dr. Maya Ingle<br>
                        Mr. Sachin Mandwariya<br>
                        (CEO, Workaholics Infocorp.)<br>
                        Miss Anshika Jain
                    </div>
                </div>
            </div>
            <br>
        </div>

        <?php include 'include/footer.html';?>
    </body>
    </html>