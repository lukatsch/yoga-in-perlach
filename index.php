<? include ("header.html"); ?>
<?
switch($_GET["site"]) {
case "start": include("start.html"); break;
case "yoga": include("yoga.html"); break;
case "kurse": include("kurse.html"); break;
case "kontakt": include("kontakt.html"); break;
case "impressum": include("impressum.html"); break;
default: include("start.html"); break;
}
?>
<? include ("footer.html"); ?>