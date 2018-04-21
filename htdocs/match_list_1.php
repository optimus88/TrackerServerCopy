<?php
include('blogic.php');
$ob = new blogic();
session_start();
if(isset($_SESSION['admin']))
{
include ('sudo_header.php');
}
$rec_limit = 10;
$matchListcount = "SELECT count(*) FROM tally_match_details ";
//$matchListDisplay = "SELECT * FROM tally_match_details ORDER BY tally_match_date DESC ";
//$matchDetailsList = $ob-> fetch_values($matchListDisplay);
$matchDetailsCount = $ob-> fetch_values($matchListcount);
echo "hello $matchDetailsCount";
$row = mysql_fetch_array($matchDetailsCount, MYSQL_NUM );
$rec_count = $row[0];
echo "yes you $rec_count ";
         
         if( isset($_GET{'page'} ) ) 
         {
            $page = $_GET{'page'} + 1;
            $offset = $rec_limit * $page ;
         }else {
            $page = 0;
            $offset = 0;
         }
         $left_rec = $rec_count - ($page * $rec_limit);
         $matchListDisplay = "SELECT * FROM tally_match_details ORDER BY tally_match_date DESC LIMIT $offset, $rec_limit";
         $matchDetailsList = $ob-> fetch_values($matchListDisplay);
?>
<br />
<fieldset>
<legend>Match Fixtures :</legend>
<br />

<form>
<table class="match-list" >
<tr><th>Teams</th><th>Match Type</th><th>Match Venue</th><th>Match Date</th><th>Match Result</th></tr>
<?php
while ($row = mysql_fetch_array($matchDetailsList))
{
    $match_id = $row['match_details_id'];
    $teamName_1= $row['tally_team1'];
    $teamName_2= $row['tally_team2'];
    $matchType= $row['tally_match_type'];
    $matchVenue= $row['tally_match_venue'];
    $matchdate= $row['tally_match_date'];
    $flag=$row['tally_match_flag'];
    if ($flag == 0)
    {
        $flag_value="Not yet Decided";
    }
    else
    {
        $flag_value="Declared";
    }
    ?>
<tr><td><a href="match_details_player_addition.php?id=<?php echo $match_id;?> "><?php echo $teamName_1; ?> vs <?php echo $teamName_2; ?></a></td><td><?php echo $matchType; ?></td><td><?php echo $matchVenue; ?></td><td><?php echo $matchdate; ?></td><td><?php echo $flag_value; ?></td></tr>

</form>
<?php
         if( $page > 0 ) 
         {
            $last = $page - 2;
            echo "<a href = 'match_list.php?page = $last'>Last 10 Records</a> |";
            echo "<a href = 'match_list.php?page = $page'>Next 10 Records</a>";
         }else if( $page == 0 ) {
            echo "<a href = 'match_list.php?page = $page'>Next 10 Records</a>";
         }else if( $left_rec < $rec_limit ) {
            $last = $page - 2;
            echo "<a href = 'match_list.php?page = $last'>Last 10 Records</a>";
         }
?>
</fieldset>
<?php 
}
?>
