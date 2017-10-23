<?php foreach($array =  json_decode($data['datarow'],true) as $value): ?>
         <ul class="list-inline">

            <a class="countryname col-lg-3 col-sm-4 col-md-3 col-xs-6" href="/numerosurgence/<?php echo  $value['alias_fr']; ?>"><li><img src="/images/grace/countryicons/32/<?php echo  trim(strtolower($value['countryiso'])); ?>.png">   <?php echo '&nbsp;'.$value['country_fr']; ?></li></a>
         </ul>
         <?php endforeach; ?>


<ul class="list-inline">
            <?php foreach($array =  json_decode($data['datarow'],true) as $value): ?>
            <a class="countryname col-lg-3 col-sm-4 col-md-3 col-xs-6" href="/numerosurgence/<?php echo  $value['alias_fr']; ?>"><li><img src="/images/grace/countryicons/32/<?php echo  trim(strtolower($value['countryiso'])); ?>.png">   <?php echo '&nbsp;'.$value['country_fr']; ?></li></a>
            <?php endforeach; ?>
         </ul>
