<?php
    require 'header.php';
?>

<div class="container-fluid">
            <div class="row">

                <div class="col-sm-4"></div>
                
                <div class="col-sm-4">
                    <form action="login.php" method="">
                       
                    <div class="form-group">
                            <label for="name">Username</label>
                            <input class="form-control" type="text" name="user" id="" placeholder="Username...">
                        </div>
                        <div class="form-group">
                            <label for="email">Password</label>
                            <input class="form-control" type="text" name="psw" id="" placeholder="Password...">
                        </div>

                        <button class="btn1 btn-sm">Submit</button>
                    </form>
                </div>

                <div class="col-sm-4"></div>

            </div>
        </div>

<?php
    require 'footer.php';
?>