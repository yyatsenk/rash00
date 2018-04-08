<?PHP
    session_start();
   
    $_SESSION['item'] = $_POST['item'];
    $_SESSION['count'] += 1;
   
    if(isset($_SESSION['item'])){
        header("Location: ../index.php");

    }

?>