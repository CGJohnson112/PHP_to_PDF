<?php
require("fpdf.php");

$pdf = new FPDF();

if(isset($_POST['create'])) {

    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];


    $pdf->AddPage();
    $pdf->SetFont("Arial", "B", 19);


    $pdf->Cell(190, 10, "User Info", 1,1,'C');

    $pdf->Cell(50,10, "Firstname",1,0);
    $pdf->Cell(140, 10, $fname,1,1);

    $pdf->Cell(50,10, "SurName",1,0);
    $pdf->Cell(140, 10, $sname,1,1);

    $pdf->Cell(50,10, "Username",1,0);
    $pdf->Cell(140, 10, $uname,1,1);

    $pdf->Cell(50,10, "Email",1,0);
    $pdf->Cell(140, 10, $email,1,1);

    $pdf->Output();
}





?>