<?php
	/**********Connect to MySQL - score table***********/
	$teams_active=1;
	include "header.php";
	include "dbconnect.php";
?>

<script type="text/javascript">
	document.title=document.title + " | Teams";
</script>



	<?php include "rankcard.php"; ?>
	<div class="body-content">	
		<div class="teamboard">
			<table class="teamtable">
			
				
				
				<tr>
					<td colspan="6" class="team-header">Coders</td>
				</tr>
				</tr>
				<tr class="team-header-bar">
					<td width="50" align="center"><b>Rank</b></td>
					<td width="100" align="center"><b>Handle</b></td>
				<!--	<td width="100" align="center"><b>User</b></td> -->
					<td width="50" align="center"><b>Branch</b></td>
					<td width="50" align="center"><b>College</b></td>
					<td width="50" align="center"><b>Year</b></td>
				</tr>
				<?php
				$query="select rank,tname from score order by (rank) asc";
				$result=mysql_query($query) or die(mysql_error());
				$row = mysql_fetch_array($result);
				do
				{
					$query="select user1,user2 from team where tname='".$row["tname"]."'";
					$result1=mysql_query($query) or die(mysql_error());
					$row1 = mysql_fetch_array($result1);
	
					$query="select dep,college,year from user where username='".$row1['user1']."'";
					$result2=mysql_query($query) or die(mysql_error());
					$row2 = mysql_fetch_array($result2);

					$query="select dep,college,year from user where username='".$row1['user2']."'";
					$result3=mysql_query($query) or die(mysql_error());
					$row3 = mysql_fetch_array($result3);

					echo "<tr>\n";
					echo "<td align=\"center\" width=\"\">".$row["rank"]."</td>\n";
					echo "<td align=\"center\" width=\"\">".$row["tname"]."</td>\n";
				//	echo "<td align=\"center\" width=\"\">".$row1["user1"]."</td>\n";   //" | ".$row1["user2"]."</td>\n";
					echo "<td align=\"center\" width=\"\">".$row2["dep"]."</td>\n";     //  ".$row3["dep"]."</td>\n";
					echo "<td align=\"center\" width=\"\">".$row2["college"]."</td>\n";  //" | ".$row3["college"]."</td>\n";
					echo "<td align=\"center\" width=\"\">".$row2["year"]."</td>\n";     //" | ".$row3["year"]."</td>\n";
					echo "</tr>\n";
				}while($row = mysql_fetch_array($result));
				
				?>
			</table>
		</div>
	</div>

<?php include "footer.php"; ?> 
</body>
</html>

