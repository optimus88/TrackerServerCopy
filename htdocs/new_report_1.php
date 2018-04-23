<?php 
include('blogic.php');
$ob = new blogic();
session_start();
if(isset($_SESSION['admin']) || isset($_SESSION['guest']))
{
//============Old Code for report generation

    $matchIdValue= $_GET["Pid"];
    $calculateQuery="SELECT tnt.tally_net_amt,tb.bidder_name,tnt.tally_net_tranc_mdate, tmd.tally_team1, tmd.tally_team2,tmd.tally_match_winner_team,ttd.tally_team_name FROM tally_bidders tb 
            INNER JOIN tally_net_transaction tnt ON tb.bidder_id=tnt.tally_net_bidder_name
            INNER JOIN tally_match_details tmd ON tmd.match_details_id=tnt.tally_net_match_details_id_fk
            INNER JOIN tally_transaction_details ttd ON ttd.tally_transc_id=tnt.tally_net_transc_details_id_fk
            WHERE tb.bidder_id='$matchIdValue' AND YEAR(tmd.tally_match_date)= 2018";
    //echo $calculateQuery;

		$result=$ob->fetch_values($calculateQuery);
	    $num_fields = mysql_num_fields($result);
        $header = array();
		$header[] = array("Net Amount","Bidder's Name","Date of Bidding","Winner Of the Match", "Bidder's Team");

		require('fpdf/fpdf.php');
		$pdf = new FPDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);

		foreach($header as $heading) {
			foreach($heading as $column_heading)
				$pdf->Cell(95,12,$column_heading,1);
		}
		foreach($result as $row) {
			$pdf->Ln();
			foreach($row as $column)
				$pdf->Cell(95,12,$column,1);
		}
		$pdf->Output();
?>
