
<?php

require('fpdf.php');
 $db= new PDO('mysql:host=localhost;dbname=artini', 'root', '');
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('assets/img/v3.png',10,6);
    $this->SetFont('Arial','B',16);
    $this->ln();
    $this->SetFont('Times','',20);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(150,8,'Liste des produits',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

 function headerTable(){
    $this->SetFont('Times','B',12);
    $this->Cell(70,10,'ID',1,0,'C');
    $this->Cell(70,10,'Nom du categorie',1,0,'C');
    $this->Cell(70,10,'Nom du produit',1,0,'C');
    $this->Cell(70,10,'Prix',1,0,'C');
    $this->Cell(70,10,'Categorie',1,0,'C');
    $this->ln();

 }
 function viewTable($db){
    $this->SetFont('Times','',12);
    $liste=$db->query('select * from produit inner join categorie on produit.id_categorie=categorie.id');
    while($data= $liste->fetch(PDO::FETCH_OBJ)){
        $this->Cell(70,10,$data->id_prod,1,0,'C');
        $this->Cell(70,10,$data->nom_categorie,1,0,'C');
        $this->Cell(70,10,$data->nom_prod,1,0,'L');
        $this->Cell(70,10,$data->prix_prod,1,0,'L');
        $this->Cell(70,10,$data->id_categorie,1,0,'L');
        $this->ln();
    }
 }
}
$pdf = new PDF();
//header
$pdf->AddPage('L','A3',0);
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();
?>
