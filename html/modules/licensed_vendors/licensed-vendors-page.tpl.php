

<div>

   Licensed Vendors !!

</div>

<?php 
   
     foreach( $vendors as $vendor ){
 
          echo $vendor->title . '<br/>';

          echo $vendor->field_vendor_address['und'][0]['value'] . '<br/>';
        
     }

?>