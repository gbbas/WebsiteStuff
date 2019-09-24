<?php
session_start();
?>
<?php
  $conn = new mysqli("localhost","root","lolhooft6","mydatabase");

  $page = $_POST['registerform'];
  $user = $_POST['usrnme'];
  $pass = $_POST['pwd'];
  $Nchar = $_POST['CharName'];
  $Hash =  password_hash($pass, PASSWORD_DEFAULT);

  if ($page == 1)
  {
    $stmt = $conn->prepare("SELECT * FROM Users WHERE NameFull=?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $res = $stmt->get_result();
    $stmt->close();

    if ($res->num_rows !== 0)
    {
      echo " Username " .$user. " is already taken! ";
      echo '<a href="register.php">Return</a>';
    }
    else
    {
      $stmt = $conn->prepare("INSERT INTO Users(NameFull,Pass,NameChar) VALUES(?,?,?)");
      $stmt->bind_param("sss", $user, $Hash, $Nchar);
      $stmt->execute();
      $stmt->close();
      echo "REGISTERED! <BR> <a href='login.php'>Go to the login page</a>";
    }
  }
  elseif ($page == 0)
  {
    $stmt = $conn->prepare("SELECT NameFull, NameChar, Auth, Pass FROM Users WHERE NameFull = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $res = $stmt->get_result();
    $stmt->close();
    if ($res->num_rows !==0)
    {
      while($Data = $res->fetch_assoc())
      {
        $valid = password_verify($pass, $Data['Pass']);
        if ($valid) {
          $_SESSION['Name'] = $Data['NameFull'];
          $_SESSION['Auth'] = $Data['Auth'];
          $_SESSION["CharName"] = $Data['NameChar'];
          header("Location: http://undaground.ga/Website.html");
          exit;
        }
        else {
          echo "Password is incorrect";
        }
      }
    }
  }
?>
