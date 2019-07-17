<?php
$fname=$_REQUEST["Fname"];
echo '$fname';

$Rows=$_REQUEST["Rows"];
$Cols=$_REQUEST["Cols"];
?>
<table border="1px">
<?php

for ($i=0; $i <$Rows ; $i++) { 
?>
	<tr>
		<?php
		for ($j=0; $j <$Cols ; $j++) { 
			?>
			<td>sahan</td>
			<?php
		}
		?>
	</tr>
	<?php
}
?>
</table>

