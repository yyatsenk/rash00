<style type="text/css">
    .stl
    {
        position: absolute;
        left:1%;
        top:20%;
        font-family: arial;
        color: #666666;

    }
</style>
<?php
if ($_SESSION) {
    if ($_SESSION['loggued_on_user'] && $_SESSION['root'])
        echo $_SESSION['root'] . " " . $_SESSION['loggued_on_user'] . "\n";
    else
        echo "Login\n";
    if ($_SESSION['item'] && $_SESSION['root']!== "adm")
    {
    	echo "\n\n<p class=\"stl\">You have booked  ".$_SESSION['count']." items</p>";
    	//echo "<form method=\"post\" action=\"../vi.php\" name=\"basc_view\"><input name=\"view\" type=\"submit\" value=\"View\"/></form>";
    }
    else
    {   
        if ($_SESSION['root']!== "adm")
    	   echo "\n\n<p class=\"stl\">You have no bookings yet\n</p>";
    }
}
?>