<?php
    require_once 'Paginator.class.php';
 
    $conn       = new mysqli( '127.0.0.1', 'root', 'root', 'world' );
 
    $limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 25;
    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
    $query      = "SELECT City.Name, City.CountryCode, Country.Code, Country.Name AS Country, Country.Continent, Country.Region FROM City, Country WHERE City.CountryCode = Country.Code";
 
    $Paginator  = new Paginator( $conn, $query );
 
    $results    = $Paginator->getData( $page, $limit );
?>
<!DOCTYPE html>
    <head>
        <title>PHP Pagination</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
                <div class="col-md-10 col-md-offset-1">
                <h1>PHP Pagination</h1>
                <table class="table table-striped table-condensed table-bordered table-rounded">
                        <thead>
                                <tr>
                                <th>City</th>
                                <th width="20%">Country</th>
                                <th width="20%">Continent</th>
                                <th width="25%">Region</th>
                                </tr>
                        </thead>
                <?php for( $i = 0; $i < count( $results->data ); $i++ ) : ?>
                <tr>
                <td><?php echo $results->data[$i]['Name']; ?></td>
                <td><?php echo $results->data[$i]['Country']; ?></td>
                <td><?php echo $results->data[$i]['Continent']; ?></td>
                <td><?php echo $results->data[$i]['Region']; ?></td>
                </tr>
                <?php endfor; ?>

                        <tbody></tbody>
                </table>

                <?php echo $Paginator->createLinks( $links, 'pagination pagination-sm' ); ?> 
                </div>
        </div>
        </body>
</html>
<?php for( $i = 0; $i < count( $results->data ); $i++ ) : ?>
        <tr>
                <td><?php echo $results->data[$i]['Name']; ?></td>
                <td><?php echo $results->data[$i]['Country']; ?></td>
                <td><?php echo $results->data[$i]['Continent']; ?></td>
                <td><?php echo $results->data[$i]['Region']; ?></td>
        </tr>
<?php endfor; ?>