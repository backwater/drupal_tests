

<div>

   Licensed Vendors !!

</div>

<?php 
   
     foreach( $vendors as $vendor ){

          echo $vendor->title . '<br/>';

          echo $vendor->field_lv_city['und'][0]['value'] . '<br/>';

          echo $vendor->region;

          echo "<br/><hr/>";
  
     }

?>