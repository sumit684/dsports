
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include/link.html');?>
    <title>Downloads | Diretorate of Physical Edu and Sports</title>
    <style>
        .accordion {
            background-color: #ccc;
            color: #444;
            cursor: pointer;
            padding: 10px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 18px;
            font-family: sans-serif;
            font-weight: 550;
            transition: 0.4s;
            font-family: 'Merriweather';
            border-radius: 4px;
            padding-left: 10px;
        }

        .active, {
            background-color: #eee;
        }

        .accordion:after {
            content: '\f0aa'; /*upper arrow*/ 
            font-family: "FontAwesome";
            color: #777;
            font-weight: bold;
            float: right;

        }

        .active:after {
            content: "\f0ab"; /*lower arrow*/ 
            font-family: "FontAwesome";
            color:#0074fc;
        }

        .downloads div.panel {
            padding: 0 18px;
            background-color: #eee;
            display: block;
            overflow: hidden;
            font-size: 16px;

        }
        .downloads div.panel li{
            list-style-type: none;
        }
        .downloads div.panel li:before{
            content: "\f138";
            font-family: "FontAwesome";
            width: 10px;
            height: 10px;
            margin-right: 5px;
            color: #147efb;
        }
        .container{
            box-shadow: 5px 5px 30px grey;
            /*                margin-top: 10px;*/
            padding-bottom:30px;
        }
        .downloads h1{
            font-family: 'Merriweather';
            color: #100e33d6;
        }
        .icon_style{
            padding-right:8px;
        }


        .blink_me {
            animation: blinker 1s linear infinite;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }
    </style>
</head>
<body>


    <?php include 'include/nav.html';?>
    <?php include 'include/header.html';?>
    
    <div class="container downloads">
        <br>
        <h1><center>DOWNLOADS</center></h1>
        <div class="panel">
            <ul>
                <li>1<span class="badge badge-info blink_me" style="font-size:10px; font-family:monospace;">new</span></li>
                <li>2</li>
            </ul>
        </div>
        
    </div>
    <?php include 'include/footer.html';?>
</body>
</html>