 <?php 
        $con = mysql_connect("localhost","root","") or die(mysql_error());
        $sql = "SHOW databases";
        $result = mysql_query($sql);
        $counter = 0;
        while($row=mysql_fetch_array($result)){
          if($row['Database']=="rcstacloban"){
            $counter++;
          }
        }

        if($counter==0){
          $sql = "CREATE database rcstacloban" or die();
          mysql_query( $sql) or die();
        }

          $hostname = "localhost"; 
          $username = "root"; 
          $password = ""; 
          $dbname   = "rcstacloban";

          if(isset($_POST['restore'])){

            $filetype = $_FILES['rfile']['type'];
            $filename = $_FILES['rfile']['tmp_name'];

             $command = exec('C:\wamp\bin\mysql\mysql5.6.12\bin\mysql --user='.$username.' --password='.$password.' --host='.$hostname.' '.$dbname.' < '.$filename.'');
             if(isset($command)){
                  echo '<script>
                          window.alert("Database Successfully Restored.");
                          window.location="restore.php";
                      </script>';
                  exit();
                  
             }else{
                  die(mysql_error());
             }
          }

?>