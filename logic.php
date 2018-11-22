<?  
//    /로직만 담당
    $main = 'maincont';
    if( isset($_GET['main']) ){
        $main = $_GET['main'];
    } 
    $mainUrl = "$main.php";

?>