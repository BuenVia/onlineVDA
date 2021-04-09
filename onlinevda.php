<?php
    require 'header.php';
?>

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-2"></div>
        
        <div class="col-sm-8">
            <form action="vda-notes.php" method="post" class="vdaform">
               
            <div class="group">
                <h1>Customer Details</h1>
                <div class="vda-group">
                    <label>Customer Suffix.</label>
                    <select class="form-select form-select-sm" name="suffix" id="">
                        <option value="mr">Mr</option>
                        <option value="mrs">Mrs</option>
                    </select>
                </div>
                <div class="vda-group">
                    <label>Customer Surname.</label>
                    <input class="form-control" type="text" name="user" id="" placeholder="Surname...">
                </div>
                <div class="vda-group">
                    <label>Customer Firstname.</label>
                    <input class="form-control" type="text" name="user" id="" placeholder="First Name...">
                </div>
            </div>


            <div class="group">
                <h1>Address Details</h1>
                <div class="vda-group">
                    <label>Street Address</label>
                    <input class="form-control" type="" name="user" id="" placeholder="Street and Number...">
                </div>
                <div class="vda-group">
                    <label>Town</label>
                    <input class="form-control" type="text" name="user" id="" placeholder="Town...">
                </div>

                <div class="vda-group">
                    <label>County</label>
                    <input class="form-control" type="text" name="user" id="" placeholder="County...">
                </div>
                <div class="vda-group">
                    <label>Postcode</label>
                    <input class="form-control" type="text" name="user" id="" placeholder="Postcode...">
                </div>
                <div class="vda-group">
                    <label>Phone Number</label>
                    <input class="form-control" type="text" name="user" id="" placeholder="Postcode...">
                </div>
            </div>
            
    <div class="group">
        <h1>Claim Details</h1>
        <div class="vda-group">
            <label>Claim No.</label>
            <input class="form-control" type="text" name="user" id="" placeholder="Claim...">
        </div>
        <div class="vda-group">
            <label>Policy Number</label>
            <input class="form-control" type="text" name="date" id="" placeholder="Policy">
        </div>
        <div class="vda-group">
            <label>Vehicle Location</label>
            <input class="form-control" type="text" name="user" id="" placeholder="Location...">
        </div>
        <div class="vda-group">
            <label>Date of Loss</label>
            <input class="form-control" type="date" name="date" id="">
        </div>
    </div>

    <div class="group">
        <h1>Vehicle Details</h1>
        <div class="vda-group">
            <label>Registration Number</label>
            <input class="form-control" type="text" name="" id="">
        </div>
        <div class="vda-group">
            <label>Make</label>
            <input class="form-control" type="text" name="" id=""> 
        </div>
        <div class="vda-group">
            <label>Model</label>
            <input class="form-control" type="text" name="" id=""> 
        </div>
        <div class="vda-group">
            <label>Mileage</label>
            <input class="form-control" type="text" name="" id=""> 
        </div>

        <div class="vda-group">
            <label>VIN</label>
            <input class="form-control" type="text" name="" id=""> 
        </div>

        <div class="vda-group">
            <label>ADAS</label>
            <select class="form-control" name="" id="">
                <option value="" readonly>Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>      
        </div>
    </div>

    <div class="group">
        <h1>Vehicle Condition</h1>
        <div class="vda-group">
            <label>Tyres</label>
            <select class="form-control" name="" id="">
                <option value="" readonly>Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>      
        </div>

        <div class="vda-group">
            <label>Brakes</label>
            <select class="form-control" name="" id="">
                <option value="" readonly>Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>      
        </div>

        <div class="vda-group">
            <label>Steering</label>
            <select class="form-control" name="" id="">
                <option value="" readonly>Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>      
        </div>

        <div class="vda-group">
            <label>Pre-Accident</label>
            <select class="form-control" name="" id="">
                <option value="" readonly>Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>      
        </div>
    </div>

    <div class="group">
        <h1>Vehicle Condition</h1>
        <div class="vda-group">
            <label>Tyres</label>
            <select class="form-control" name="" id="">
                <option value="" readonly>Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>      
        </div>

        <div class="vda-group">
            <label>Brakes</label>
            <select class="form-control" name="" id="">
                <option value="" readonly>Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>      
        </div>

        <div class="vda-group">
            <label>Steering</label>
            <select class="form-control" name="" id="">
                <option value="" readonly>Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>      
        </div>

        <div class="vda-group">
            <label>Pre-Accident</label>
            <select class="form-control" name="" id="">
                <option value="" readonly>Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>      
        </div>

        <div class="vda-group">
            <label>Paint</label>
            <select class="form-control" name="" id="">
                <option value="" readonly>Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>      
        </div>

        <div class="vda-group">
            <label>Colour</label>
            <select class="form-control" name="" id="">
                <option value="" readonly>Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>      
        </div>

        <div class="vda-group">
            <label>Body Style</label>
            <select class="form-control" name="" id="">
                <option value="" readonly>Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>      
        </div>

        <div class="vda-group">
            <label>Vehicle Status</label>
            <select class="form-control" name="" id="">
                <option value="" readonly>Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>      
        </div>
    </div>

    <div class="group">
        <h1>Tyre Condition</h1>
        <div class="vda-group">
            <label>NSF Tyre</label>
            <select class="form-control" name="" id="">
                <option value="" readonly>Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>      
        </div>

        <div class="vda-group">
            <label>OSF Tyre</label>
            <select class="form-control" name="" id="">
                <option value="" readonly>Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>      
        </div>

        <div class="vda-group">
            <label>NSR Tyre</label>
            <select class="form-control" name="" id="">
                <option value="" readonly>Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>      
        </div>

        <div class="vda-group">
            <label>OSR Tyre</label>
            <select class="form-control" name="" id="">
                <option value="" readonly>Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>      
        </div>
    </div>


                <button class="btn1">Submit</button>
            </form>
        </div>

        <div class="col-sm-2"></div>

    </div>
</div>


<?php
    require 'footer.php';
?>