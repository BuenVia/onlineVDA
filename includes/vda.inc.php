<?php

if (isset($_POST['customer-submit'])) {

    require 'dbh.inc.php';

    $date = date("Y-m-d H:i:s");

    $suffix = $_POST['suffix'];
    $sname = $_POST['sname'];
    $fname = $_POST['fname'];

    $street = $_POST['street'];
    $town = $_POST['town'];
    $county = $_POST['county'];
    $postcode = $_POST['postcode'];
    $phone = $_POST['phone'];
    
    if (empty($sname)) {
        header("Location: ../vda-form-customer.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT date FROM vdaform WHERE date=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.html?error=sqlerror");
            exit();
        }
        else {
                $sql = "INSERT INTO vdaform (date) VALUES (?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../index.html?error=sqlerror1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "s", $date);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../vda-form-claim.php");
                    exit();
                    }
            }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}

else {
    echo "false";
}

?>