<?php 
if(isset($_GET['p'])){
    if(pathinfo($_GET['p'], PATHINFO_EXTENSION)){
        echo '<script>location.href="https://www.google.com/"</script>';
    }
   
    else{
        include('pages/'.$_GET['p'].'.php');
    }
}elseif(isset($_GET['a'])){
    include('admin/'.$_GET['a'].'.php');
}

else{
    include('pages/home.php');
}

?>