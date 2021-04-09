<?php
    require 'header.php';
?>

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-4"></div>
        
        <div class="col-sm-4">
            <form action="">
                <div class="group">
                <h1>Claim Details</h1>
                    <div class="vda-group">
                        <label>Repair Instruction Notes</label>
                        <textarea class="form-control" name="1" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="vda-group">
                        <label>Repair Supplementary Instructions</label>
                        <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="vda-group">
                        <label>Additional Notes</label>
                        <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-sm-4"></div>

    </div>
</div>

<?php
    require 'footer.php';
?>