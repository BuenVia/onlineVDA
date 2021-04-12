<?php
    require 'header.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>

    <div class="col-sm-8">

        <input name="file[]" type="file" />
        <button type='button' class="add_more" onclick="addNew()">Add More Files</button>
        <input type="submit" value="Upload File" id="upload"/>
    
    </div>

    <div class="col-sm-2"></div>
    </div>
</div>

<?php
    require 'footer.php';
?>