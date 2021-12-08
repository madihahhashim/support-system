  <?php
  
  if(isset($_POST['submit'])){
    $update = false;
    $id = $_POST['id'];

        $imgFile = $_FILES['siteimage']['name'];
		$tmp_dir = $_FILES['siteimage']['tmp_name'];
		$imgSize = $_FILES['siteimage']['size'];
					
		if($imgFile)
		{
			$upload_dir = 'imagedump/'; // upload directory	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
			$valid_extensions = array('zip'); // valid extensions
			$image = $imgFile.".". rand(1000,1000000).".".$imgExt;
			
			if(in_array($imgExt, $valid_extensions))
			{			
				if($imgSize < 5000000)
				{
					unlink($upload_dir.$edit_row['userPic']);
					move_uploaded_file($tmp_dir,$upload_dir.$image);
				}
				else
				{
					$errMSG = "Sorry, your file is too large it should be less then 5MB";
				}
			}
			else
			{
				$errMSG = "Sorry, only zip files are allowed.";		
			}	
		}
		else
		{
            // if no image selected the old image remain as it is.
        $img2 = mysqli_query($db, "SELECT * from actions ");
        while($row=mysqli_fetch_array($img2)){
        $actiondate =  $row['actiondate'];
         }
		}

		?>