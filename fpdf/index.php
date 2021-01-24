<?php
require_once ('../core/config.php');
require_once ('../core/bdd.php');
        require "fpdf.php";

        class myPDF extends FPDF
        {


            function header()
            {

                $this->Image('logo.png', 10, 6);

                $this->SetFont('Arial', 'B', 14);
                $this->Cell(276, 5, 'Exemple de fichier PDF' , 2, 0, 'C');

                $this->Ln();

                $this->SetFont('Times', '', 12);
                $this->Cell(276, 10, 'Sous titre', 0, 0, 'C');

                $this->Ln(20);
            }

            function footer()
            {
                $this->SetY(-15);

                $this->SetFont('Arial', '', 8);
                $this->Cell(0, 10, 'Page' . $this->PageNo() . '/{nb}', 0, 0, 'C');
            }

            function headerTable()
            {

                $this->SetFont('Times', 'B', 12);
                $this->Cell(20, 10, 'ID', 1, 0, 'C');
                $this->Cell(40, 10, 'Matricule', 1, 0, 'C');
                $this->Cell(40, 10, 'Nom', 1, 0, 'C');
                $this->Cell(40, 10, 'Prenom', 1, 0, 'C');
                $this->Cell(40, 10, 'Date Naissance', 1, 0, 'C');
                $this->Cell(36, 10, 'Lieu', 1, 0, 'C');
                $this->Cell(36, 10, 'Niveau', 1, 0, 'C');
                $this->Ln();

            }

            function viewTable($bd)
            {
                $this->SetFont('Times', '', 12);
                $stmt = $bd->query('SELECT * FROM etudiant');
                while ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
                    $this->Cell(20, 10, $data->id_etudiant, 1, 0, 'C');
                    $this->Cell(40, 10, $data->matricule_etudiant, 1, 0, 'L');
                    $this->Cell(40, 10, $data->nom_etudiant, 1, 0, 'L');
                    $this->Cell(40, 10, $data->prenom_etudiant, 1, 0, 'L');
                    $this->Cell(40, 10, $data->date_naissance_etudiant, 1, 0, 'L');
                    $this->Cell(36, 10, $data->lieu_naissance_etudiant, 1, 0, 'L');
                    $this->Cell(36, 10, $data->niveau_etude_etudiant, 1, 0, 'L');
                    $this->Ln();

                }
            }

        }

        //     $pdf = new fpdf();
        $pdf = new myPDF();
        $pdf->AliasNbPages();
        $pdf->AddPage('L', 'A4', 0);
        $pdf->headerTable();
        $pdf->viewTable($bd);
        //$pdf->Output('D');// telecharger
        //$pdf->Output('F', 'Reporte.pdf');//creer un ficher et telecharger
        $pdf->Output();
?>