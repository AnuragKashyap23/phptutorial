<h1>
<?php
//first we use supergloabal to check if there is any file or not.
if ($_FILES['file_name']){            // "file_name" is the name given to the file input field in the HTML form. 
                                      // this line checks if $_Files is set means file is uploaded or not.

    $name = $_FILES['file_name']['name'];  // These lines extract the name of the uploaded file from the $_FILES['file_name'] array 
                                           // and store it in the $name variable. 

    $upload_path = "./uploads/".$name;     // $upload_path stores the path where the file will be uploaded.

    if (move_uploaded_file($_FILES['file_name']['tmp_name'], $upload_path)){

        // move_uploaded_file() moves the uploaded file from its temporary location ($_FILES['file_name']['tmp_name']) 
        // to the specified upload path ($upload_path).
        echo "file uploaded";
    }
    else{
        die ("failed to upload");
    }
}else{
    die("no file found");
}




?>
</h1>