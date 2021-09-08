<h1>Here is the link to you file</h1>
<?php
if(isset($_FILES['file']))  {
  $file = $_FILES['file'];
  
  // File properties
  $file_name = $file['name'];
  $file_tmp = $file['tmp_name'];
  $file_size = $file['size'];
    
  // Work out the file extension
  $file_ext = explode('.', $file_name);
  $file_ext = strtolower(end($file_ext));
  
  $disallowed = array('php', 'phtml', 'php4', 'php5');
  
  if(in_array($file_ext, $disallowed))  {
    echo 'This file extension is disallowed';
    exit();
  }
  
  $file_name_new = uniqid('', true) . '.' . $file_ext;
  $file_destination = 'uploads/' . $file_name_new;
  echo $file_destination_print = 'https://hackingtest-1.csfg4.repl.co/uploads/' . $file_name_new;
  
  if(move_uploaded_file($file_tmp, $file_destination)) {
    
  }

}
