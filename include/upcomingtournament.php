<?php
if (($myfile = fopen("calendar/$sport.csv", "r")) !== FALSE){
    while (($data = fgetcsv($myfile, 1000, ",")) !== FALSE) {
        print_r($data);
    }
}
?>
<div class="card" >
        <img class="card-img-top img-fluid" src="images/kho-kho.jpg" alt="Card image" style="width:100% ; height:170px;">
        <div class="dates">
            <span>Nov</span>
            <span>29</span>
        </div>
        <div class="card-body" style="padding-top: 0px;">
            <h4 class="card-title">Kho-Kho</h4>
            <h5>Inter College Tournament</h5>
            <a href="#" class="btn btn-primary">View PDF</a>
        </div>
    </div>