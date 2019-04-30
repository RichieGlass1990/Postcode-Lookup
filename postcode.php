<?php
include 'postcode_api_test.php';
?>
<!DOCTYPE html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src = "ajex_test.js"> </script>


<div class="form-group">
    <label class="control-label">Postcode</label>
   
    <input type="text" name="postcode" id="postcode" class="form-control" value = "">
    <button  onclick = "postcodelookup()"  name = "postcodebtn" id="postcodebtn">  </button>
    
    <div id= "test">
    <select name = "postcode_lookup" id = "postcode_lookup" style = "display = hidden;">
    <option value = "Please Select"> </option>
    </select>
</div>

    <div>  <input type="text" name="addressline1" id="addressline1" class="form-control" value = ""> <label> Addressline1</div>
    <div>  <input type="text" name="addressline2" id="addressline2" class="form-control" value = ""> <label> Addressline2</div>
    <div>  <input type="text" name="addressline3" id="addressline3" class="form-control" value = ""> <label> Addressline3</div>
    <div>  <input type="text" name="addressline4" id="addressline4" class="form-control" value = ""> <label> Addressline4</div>
    <div>  <input type="text" name="town" id="town" class="form-control" value = ""> <label> town</div>
    <div>  <input type="text" name="county" id="county" class="form-control" value = ""> <label> county</div>


</html>