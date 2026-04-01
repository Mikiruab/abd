<?php
if (isset($_GET['pdf'])) {
    require('fpdf.php');
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0, 10, 'Cennik MKTech', 0, 1, 'C');
    $pdf->Ln(10);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(80, 10, 'Produkt', 1);
    $pdf->Cell(40, 10, 'Cena', 1);
    $pdf->Ln();
    $pdf->SetFont('Arial', '', 12);
    $items = array(
        array('Monitor 24"', '500 zl'),
        array('Klawiatura mechaniczna', '150 zl'),
        array('Mysz optyczna', '50 zl'),
        array('Dysk SSD 1TB', '300 zl'),
        array('Plyta glowna', '400 zl'),
        array('Procesor Intel i5', '600 zl'),
        array('RAM 8GB', '200 zl'),
        array('Obudowa komputerowa', '100 zl')
    );
    foreach ($items as $item) {
        $pdf->Cell(80, 10, $item[0], 1);
        $pdf->Cell(40, 10, $item[1], 1);
        $pdf->Ln();
    }
    $pdf->Output();
} else {
    ?>
    <!DOCTYPE html>
    <html lang="pl">
    <head>
    <meta charset="UTF-8">
    <title>MKTech - Serwis Sprzętu Komputerowego</title>
    </head>
    <body>
    <h1>MKTech</h1>
    <p>Witamy w MKTech, specjalistycznym serwisie sprzętu komputerowego. Oferujemy naprawę, sprzedaż i doradztwo.</p>
    <h2>Cennik usług i produktów</h2>
    <table border="1">
    <tr><th>Produkt</th><th>Cena</th></tr>
    <?php
    $items = array(
        array('Monitor 24"', '500 zl'),
        array('Klawiatura mechaniczna', '150 zl'),
        array('Mysz optyczna', '50 zl'),
        array('Dysk SSD 1TB', '300 zl'),
        array('Plyta glowna', '400 zl'),
        array('Procesor Intel i5', '600 zl'),
        array('RAM 8GB', '200 zl'),
        array('Obudowa komputerowa', '100 zl')
    );
    foreach ($items as $item) {
        echo '<tr><td>' . $item[0] . '</td><td>' . $item[1] . '</td></tr>';
    }
    ?>
    </table>
    <p><a href="?pdf=1">Pobierz cennik w PDF</a></p>
    </body>
    </html>
    <?php
}
?>