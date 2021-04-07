<?php
    require 'header.php';
?>

<div class="container-fluid">
    <div class="row">

        <div class="col-xxl-4"></div>
        
        <div class="col-xxl-4">
            <form action="javascript:void(0)" method="" class="vdaform">
               
            
            <div class="vda-group">
                <label for="name">Customer Suffix.</label>
                <select class="form-select form-select-sm" name="suffix" id="">
                    <option value="mr">Mr</option>
                    <option value="mrs">Mrs</option>
                </select>
            </div>
            <div class="vda-group">
                <label for="name">Customer Surname.</label>
                <input class="form-control" type="text" name="user" id="" placeholder="Surname...">
            </div>
            <div class="vda-group">
                <label for="name">Customer Firstname.</label>
                <input class="form-control" type="text" name="user" id="" placeholder="First Name...">
            </div>


            <div class="vda-group">
                <label for="name">Street Address</label>
                <input class="form-control" type="text" name="user" id="" placeholder="Street and Number...">
            </div>
            <div class="vda-group">
                <label for="email">Town</label>
                <input class="form-control" type="text" name="user" id="" placeholder="Town...">
            </div>

            <div class="vda-group">
                <label for="name">County</label>
                <input class="form-control" type="text" name="user" id="" placeholder="County...">
            </div>
            <div class="vda-group">
                <label for="name">Postcode</label>
                <input class="form-control" type="text" name="user" id="" placeholder="Postcode...">
            </div>

            <div class="vda-group">
                <label for="name">Claim No.</label>
                <input class="form-control" type="text" name="user" id="" placeholder="Claim...">
            </div>
            <div class="vda-group">
                <label for="email">Date of Loss</label>
                <input class="form-control" type="date" name="date" id="">
            </div>

            <div class="vda-group">
                <label for="name">Claim No.</label>
                <input class="form-control" type="text" name="user" id="" placeholder="Claim...">
            </div>
            <div class="vda-group">
                <label for="email">Date of Loss</label>
                <input class="form-control" type="date" name="date" id="">
            </div>

                <button class="btn1 btn-sm">Submit</button>
            </form>
        </div>

        <div class="col-xxl-4"></div>

    </div>
</div>


<?php
    require 'footer.php';
?>