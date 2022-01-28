<select class="form-select" id="vehiclemodel" name="vehiclemodel">
     <?php
     
     foreach($modelo as $m){
       echo "<option value='$m' name='$m' value='$m'>$m</option>";
     }
     ?>
   </select>