<?PHP
    session_start();
   
    // Название товара
    $_SESSION['item'] = $_POST['item'];
    // Кол-во товара
    $_SESSION['count'] = $_POST['count'];
    // Цена товара
   
    if(isset($_SESSION['item'])){
        echo "Вы добавили товар в карзину!<br/>";
    }

?>