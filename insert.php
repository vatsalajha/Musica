<?php
 $Password = $_POST['Password'];
 $Name = $_POST['Name'];
 $Phone = $_POST['Phone'];

 if(!empty($UserID) || !empty($Password) || !empty($Name) || !empty($Phone)){
   $host = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbname = "musica";
   $link_address = "Musica1.html";
   $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

   if(mysqli_connect_error()){
     die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
   }
   else{
     mysqli_select_db($conn, 'musica');
  //   echo "Database Connected      ";
     $sql = "INSERT INTO Users(Name, Phone, Password) VALUES('$Name', '$Phone', '$Password')";
     if($conn->query($sql)===TRUE){
       echo "<SCRIPT type = 'text/javascript'>
                  alert('Account Created Successfully');
                  window.location.replace(\"http://localhost/Musica1.html\");
                  </SCRIPT>";
     }
     else{
       echo "<SCRIPT type = 'text/javascript'>
                  alert('Phone Number Has to be 9 Characters Long');
                  window.location.replace(\"http://localhost/Musica.html\");
                  </SCRIPT>";
     }
   }
  }
   $conn->close();
  ?>

    <!-- /* $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $EmailID);
     $stmt->execute();
     $stmt->bind_result($EmailID);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if($rnum==0){
       $stmt->close();
      // $stmt->bind_param("sssi", $EmailID, $Name, $Password, $Phone);
       echo "New Record is inserted successfully";
     }
     else{
       echo "This email is already registered. Try Login";
     }
     //$stmt->close();
     $conn->close();
   }
 }
 else{
   echo "All fields are required";
   die();*/ -->
