<?php 

    include_once('functions.php');

    if (isset($_GET['del'])) {
        $Event_ID = $_GET['del'];
        $deletedata = new DB_con();
        $sql = $deletedata->delete($Event_ID);

        if ($sql) {
            echo "<script>alert('Record Deleted Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }
    }

?>