<!DOCTYPE HTML>

<html>
<?

$fichierdate = fopen('date.txt', 'r+');
$lignedate = fgets($fichierdate);
fclose($fichierdate);
if ($lignedate != "")
	{
	$datedate = strtotime("$lignedate");
	$datejour = date('d/m/Y', $datedate);
	$dateref = strtotime('-2 weeks');
	$dateref2 = date('d/m/Y', $dateref);
	if ($datedate < $dateref)
		{
		$aleat = rand(1, 10);
		$datejour = strtotime("-$aleat days");
		$datejour = date('d/m/Y', $datejour);
		$datein = str_replace("/", "-", $datejour);
		echo $datein;
		$fichierdate = fopen('date.txt', 'w+');
		fwrite($fichierdate, $datein, strlen($datein));
		fclose($fichierdate);
		}
	}
else 
	{
	

	$datejour = date('d/m/Y');
	$fichierdate = fopen('date.txt', 'w+');
	fwrite($fichierdate, $datejour, strlen($datejour));
	fclose($fichierdate);
	
	}

?>
<style>


.datmaj {
	color: #000000;
}


</style>

<footer>
<div class="classfoo">
<span class="datmaj"> Dernière mise à jour : <? echo $datejour; ?> </span>
<span class="aligndroite">
<a href="mentions.php">Mentions légales</a>
</span>
</div>
</footer>


</html>