<?php 
if(isset($_GET['p'])){
    if(pathinfo($_GET['p'], PATHINFO_EXTENSION)){
        echo '<script>location.href="https://www.google.com/"</script>';
    }
    else{
        include('pages/'.$_GET['p'].'.php');
    }
}else{
    include('pages/home.php');
}
?>