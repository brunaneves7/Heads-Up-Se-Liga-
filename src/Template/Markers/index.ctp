<!-- <?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Marker[]|\Cake\Collection\CollectionInterface $markers
 */
?>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Marker'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="markers index large-9 medium-8 columns content">
    <h3><?= __('Markers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
               <!--  <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lng') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($markers as $marker): ?>
            <tr>
                <td><?= $this->Number->format($marker->id) ?></td>
                <td><?= h($marker->name) ?></td>
                <td><?= h($marker->address) ?></td>
                <td><?= $this->Number->format($marker->lat) ?></td>
                <td><?= $this->Number->format($marker->lng) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $marker->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $marker->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $marker->id], ['confirm' => __('Are you sure you want to delete # {0}?', $marker->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div> --> 

    <div class="markers form large-9 medium-8 columns content">


    <script type="text/javascript">

    
        function myMap() {
            var myCenter = new google.maps.LatLng(-7.92323,-34.92004);
            var mapCanvas = document.getElementById("map");
            var mapOptions = {center: myCenter, zoom: 11};
            var map = new google.maps.Map(mapCanvas, mapOptions);

            map.addListener('click', function(e) {
                var markerLatLng = e.latLng;
                document.getElementById("lat").value = e.latLng.lat();
                document.getElementById("lng").value = e.latLng.lng();
                var marker = new google.maps.Marker({
                    position: markerLatLng,
                    map: map,
                    title: "Olá"
                });
            });

        }
</script>
<fieldset>
       <!--  <legend><?= __('') ?></legend> -->
    
        <!-- <?php
            echo $this->Form->control('Título');
            echo $this->Form->control('Descrição');
            echo $this->Form->control('Data');
            echo $this->Form->control('Tipo');
            echo $this->Form->control('Local');
            echo $this->Form->control('lat');
            echo $this->Form->control('lng');
        ?> -->
<div id="map" style="width:100%;height:100vh"></div>

<?= $this->Html->script('https://maps.googleapis.com/maps/api/js?key=AIzaSyCvcFAuDX9XSqe9-OPBlYMhdb7FPYWD5W8&callback=myMap'); ?>