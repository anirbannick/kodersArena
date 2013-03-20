<?php
include "authenticate.php";
include "retrieve.php";
$t=time();

$probid=$_GET['probid'];

$prob_filename="/usr/local/codecracker/questionnaire/prob".$probid.".txt";
$prob_statement="";
if(file_exists($prob_filename))
{
	$fp=fopen($prob_filename,"r");
	while(!feof($fp))
	{
	if(fgetc($fp)=='\n'){ 
	$prob_statement=$prob_statement.'<br>';}
        
        else $prob_statement=$prob_statement.fgetc($fp);
	}
	fclose($fp);
}
else
{
	$prob_statement="Question not found in the Database!";
}
include "header.php";
?>

<?php echo($prob_statement); ?>
