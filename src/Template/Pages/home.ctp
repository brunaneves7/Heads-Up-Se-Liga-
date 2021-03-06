<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'Se Liga - Igarassu';
?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->script('jquery.min.js'); ?>    


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
 <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <!-- <?= $this->Html->css('base.css') ?> -->
    <!-- <?= $this->Html->css('cake.css') ?> -->
    <?= $this->Html->css('home.css') ?>
    <?= $this->Html->css('w3.css') ?>
    <?= $this->Html->css('seLiga.css') ?>
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono') ?>
    <?php
$dsn = 'mysql://Heads_up:ifpe@localhost/heads_up_db';
ConnectionManager::config('home', ['url' => $dsn]);
$connection = ConnectionManager::get('home');
$results = $connection->execute('SELECT * FROM markers')->fetchAll('assoc'); 
// var_dump($results);
?>

<script type="text/javascript">

    
        function myMap() {
            var myCenter = new google.maps.LatLng(-7.836800, -34.915441);
            var mapCanvas = document.getElementById("map");
            var mapOptions = {center: myCenter, zoom: 14, 
  mapTypeId: 'roadmap'};
            var map = new google.maps.Map(mapCanvas, mapOptions);
            map.addListener('click', function(e) {
                var markerLatLng = e.latLng;
                var marker = new google.maps.Marker({
                    position: markerLatLng,
                    map: map
                });
            });

var heatmapData = [
  // new google.maps.LatLng(-7.8348985, -34.88723365),
  // new google.maps.LatLng(-7.8505436, -34.8412284),
  // new google.maps.LatLng(-7.8342182, -34.8982199),
  // new google.maps.LatLng(-7.8668683, -34.9229392),
  // new google.maps.LatLng(37.782, -122.439),
  // new google.maps.LatLng(37.782, -122.437),
  // new google.maps.LatLng(37.782, -122.435),
  // new google.maps.LatLng(37.785, -122.447),
  // new google.maps.LatLng(37.785, -122.445),
  // new google.maps.LatLng(37.785, -122.443),
  // new google.maps.LatLng(37.785, -122.441),
  // new google.maps.LatLng(37.785, -122.439),
  // new google.maps.LatLng(37.785, -122.437),
  // new google.maps.LatLng(37.785, -122.435)
  <?php foreach ($results as $marker): ?>
    new google.maps.LatLng(<?=$marker['lat']?>, <?=$marker['lng']?>),
  <?php endforeach ?>
];


var heatmap = new google.maps.visualization.HeatmapLayer({
  data: heatmapData
});
heatmap.set('radius', 50);
heatmap.setMap(map);


<?php foreach ($results as $marker): ?>
  new google.maps.Marker({
    position: {lat: <?=$marker['lat']?>, lng: <?=$marker['lng']?>},
    map: map
  });
<?php endforeach ?>
        }

      

        
</script>
</head>
<body>
  <div class="w3-top">
    <nav class="w3-bar top-bar expanded" data-topbar role="navigation">
       
  
        <div class="navbar a">
            <a href="../" class="link-seliga w3-bar-item w3-button prin" style="color: white;font-size:  40px;" >Se Liga</a>
            <a href="../contacts/add" class="link-contato w3-bar-item w3-button w3-right" style="color: white;font-size:  20px;" >Fale Conosco</a>
        </div>
          </nav>
      </div>
      
  
<div class="w3-container">
    <div id="left" align="center">
        <a href="markers/add" style="color: white; position: absolute;  top: 15%!important;    right: 9%!important; font-size: 25px;"><b>Registrar Crime</b></a>    
    </div>
</div>
<div id="map"></div>

<?= $this->Html->script('https://maps.googleapis.com/maps/api/js?key=AIzaSyCvcFAuDX9XSqe9-OPBlYMhdb7FPYWD5W8&callback=myMap&libraries=visualization'); ?>


   
    </body>
</html>
