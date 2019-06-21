<!DOCTYPE html>
<html lang="en">
    <head>

        <title>OFFICE STAFF | Diretorate of Physical Edu and Sports</title>
        <?php include('include/link.html');?>
    </head>
    <style type="text/css">
        .card {

            max-width: 288px;       
            margin: auto;
            text-align: center;
            font-family: arial;
            height: 338px;
        }

        .title {
            color: grey;
            font-size: 19px;
            margin-top: 0px;
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #0a3d62;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .faculty>a {
            text-decoration: none;
            font-size: 28px;
            color: black;
        }

        button:hover, .faculty>a:hover {
            opacity: 0.7;
        }

        .card h1{
            font-size: 24px;
            margin-top: 10px;
        }

        .card:hover{
            box-shadow: 2px 4px 8px 2px grey;
        }
        .college{
            font-size: 15px;
            margin-top: -14px;
        }

        .staffp {
            font-family:'arial';
            font-size: 18px;
            margin-top: -30px;
        }

        body{
            overflow-x: hidden;
        }

        @media only screen and (max-width: 767px) {

            body{
                overflow-x: hidden;
            }
            .staffp{
                font-family:'arial';
                font-size: 4vw;
                margin-top: -21px;
            }

            .card{
                height: 380px;
                width: 273px;
            }
            .card:hover{
                box-shadow: 2px 4px 8px 2px grey;
            }
        }

        @media only screen and (min-width: 767px) {
            .card{
                height: 367px;

            }


            .title{
                margin-top: -9px;

            }

            .college{
                margin-top: -17px;
            }
        }
    </style>

    <body>
        <?php include 'include/nav.html';?>
        <?php include 'include/header.html';?>


        <!--        **************************************OFFICE STAFF***********************************-->

        <div class="faculty" style="text-align: center; padding-top: 20px; padding-bottom:10px; background-color: white; font-family:'Belleza' ">
            <h2  class="display-4"><b>EXECUTIVE SPORTS BOARD</b></h2>
        </div>
        <div class="container">
            <div class="jumbotron" style="box-shadow: 0 0 15px grey">
                <!--
<p class="text-center staffp">Sports Committee in its meeting dated 10.09.2018 has appointed following
on the Sports Executive Committee under statirte No. 37 POWER & FUNCTIONS- 4(V)(a).
</p>
-->
                <div class="card-deck">   


                    <div class="card extra" >
                        <img src="images/faculty.jpg"  style="width:100%">
                        <h1>Prof. Rajendra Singh</h1>
                        <p class="title">Chairman</p>
                        <p class="college">Professor, Institute of Management Studies,
                            DAVV,Indore.
                        </p>

                        <p><button type="button" class="btn-info">Contact</button></p>
                    </div>

                    <div class="card">
                        <img src="images/faculty.jpg"  style="width:100%">
                        <h1>Shri Ajay Verma</h1>
                        <p class="title">Member</p>
                        <p class="college" style="padding-top: 21px;">Registrar
                            DAVV,Indore.
                        </p>

                        <p><button type="button" class="btn-info">Contact</button></p>
                    </div>

                    <div class="card">
                        <img src="images/faculty.jpg"  style="width:100%">
                        <h1>Dr. Rajesh Vyas</h1>
                        <p class="title">Member</p>
                        <p class="college">Principal, Christian Eminent College,
                            Indore.
                        </p>

                        <p><button type="button" class="btn-info">Contact</button></p>
                    </div>

                    <div class="card">
                        <img src="images/faculty.jpg"  style="width:100%">
                        <h1>Prof. Ajay Kumar</h1>
                        <p class="title">Member</p>
                        <p class="college">Professor, School of Physical Education,
                            Indore.
                        </p>

                        <p><button type="button" class="btn-info">Contact</button></p>
                    </div> 



                </div>
                <br> <br> <br>
                <div class="card-deck">

                    <div class="card">
                        <img src="images/faculty.jpg"  style="width:100%">
                        <h1>Dr. Poonam Kaushik</h1>
                        <p class="title">Member</p>
                        <p class="college">Sports Officer, Kasturba Rural Institute,
                            Indore.
                        </p>

                        <p><button type="button" class="btn-info">Contact</button></p>
                    </div>

                    <div class="card">
                        <img src="images/faculty.jpg"  style="width:100%">
                        <h1>Prof.K.N.Chaturvedi</h1>
                        <p class="title">Co-opted Member</p>
                        <p class="college">Additional Director Higher Education,
                            Indore Division, Indore.
                        </p>

                        <p><button type="button" class="btn-info">Contact</button></p>
                    </div>

                    <div class="card">
                        <img src="images/faculty.jpg"  style="width:100%">
                        <h1>Dr. L.K.Tripathi</h1>
                        <p class="title">Co-opted Member</p>
                        <p class="college">Dean Student Welfare,
                            D.A. University, Indore.
                        </p>

                        <p><button type="button" class="btn-info">Contact</button></p>
                    </div>


                    <div class="card">
                        <img src="images/excecutive/1.jpg"  style="width:80%;height:200px;display: block; margin-left: auto;margin-right: auto;">
                        <h1>Dr. Sunil Dudhale</h1>
                        <p class="title">Member-Secretary</p>
                        <p class="college">Incharge Director of Physical Education.
                        </p>

                        <p><button type="button" class="btn-info">Contact</button></p>
                    </div>


                </div>

            </div>
        </div> 
        <!--        **************************************OFFICE STAFF***********************************-->
        <?php include 'include/footer.html';?>

    </body>
</html>