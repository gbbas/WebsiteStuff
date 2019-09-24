<?php
  if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    print_r($file);
    $fileName = $_FILES['file']['name'];
    $fileTmpname = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileExtActual = strtolower($fileExt[1]);

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileExtActual, $allowed)) {
      if ($fileError === 0) {
        if ($fileSize < 1500000) {
          $fileDestination = 'uploads/' .$fileName;
          move_uploaded_file($fileTmpname, $fileDestination);
          header("Location: http://undaground.ga/FileServerPage.html");
        }
        else {
          echo "File is too large";
        }
      }
      else {
        echo "Error uploading";
      }
    }
  }
?>
