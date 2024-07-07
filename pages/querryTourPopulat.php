 <?php
 require '../config.php';
                if (isset($_POST['submit'])) {
                    $tour_name = $_POST['tour_name'];
                    //Image declaration for resident
                    $img1=$_FILES['img1']['name'];
                    $tmp_dir=$_FILES['img1']['tmp_name'];
                    $imageSize=$_FILES['img1']['size'];
                    $upload_dir='tourImage/';
                    $imgExt=strtolower(pathinfo($img1,PATHINFO_EXTENSION));
                    $valid_extensions=array('jpeg', 'jpg', 'png', 'gif', 'pdf');
                    $photo1=rand(1000, 1000000).".".$imgExt;
                    move_uploaded_file($tmp_dir, $upload_dir.$photo1);
                    
                    //Image declaration for resident
                    $img2=$_FILES['img2']['name'];
                    $tmp_dir=$_FILES['img2']['tmp_name'];
                    $imageSize=$_FILES['img2']['size'];
                    $upload_dir='tourImage/';
                    $imgExt=strtolower(pathinfo($img2,PATHINFO_EXTENSION));
                    $valid_extensions=array('jpeg', 'jpg', 'png', 'gif', 'pdf');
                    $photo2=rand(1000, 1000000).".".$imgExt;
                    move_uploaded_file($tmp_dir, $upload_dir.$photo2);

                    //Image declaration for resident
                    $img3=$_FILES['img3']['name'];
                    $tmp_dir=$_FILES['img3']['tmp_name'];
                    $imageSize=$_FILES['img3']['size'];
                    $upload_dir='tourImage/';
                    $imgExt=strtolower(pathinfo($img3,PATHINFO_EXTENSION));
                    $valid_extensions=array('jpeg', 'jpg', 'png', 'gif', 'pdf');
                    $photo3=rand(1000, 1000000).".".$imgExt;
                    move_uploaded_file($tmp_dir, $upload_dir.$photo3);

                    //Image declaration for resident
                    $img4=$_FILES['img4']['name'];
                    $tmp_dir=$_FILES['img4']['tmp_name'];
                    $imageSize=$_FILES['img4']['size'];
                    $upload_dir='tourImage/';
                    $imgExt=strtolower(pathinfo($img4,PATHINFO_EXTENSION));
                    $valid_extensions=array('jpeg', 'jpg', 'png', 'gif', 'pdf');
                    $photo4=rand(1000, 1000000).".".$imgExt;
                    move_uploaded_file($tmp_dir, $upload_dir.$photo4);

                    $country=$_POST['country'];
                    $province=$_POST['province'];
                    $district=$_POST['district'];
                    $details=$_POST['details'];

                    $stmt=$db->prepare('INSERT INTO populattours(tour_name, img1,img2,img3,img4,country, province, district,details)
                      VALUES (:a, :b, :c, :d, :e, :f, :g, :h, :i)');
                    $stmt->bindParam(':a', $tour_name);
                    $stmt->bindParam(':b', $photo1);
                    $stmt->bindParam(':c', $photo2);
                    $stmt->bindParam(':d', $photo3);
                    $stmt->bindParam(':e', $photo4);
                    $stmt->bindParam(':f', $country);
                    $stmt->bindParam(':g', $province);
                    $stmt->bindParam(':h', $district);
                    $stmt->bindParam(':i', $details);

                    if($stmt->execute())
            {
            ?>
            <script>
                alert("Trip are record successul");
                window.location.href=('populartours.php');
            </script>
            <?php
            }else
                 {
             ?>
            <script>
                alert("Error");
                window.location.href=('populartours.php');
            </script>
            <?php
             }
            
            }

     ?>
