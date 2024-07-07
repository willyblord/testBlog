 <?php
 require '../config.php';
                if (isset($_POST['submit'])) {
                    $title=$_POST['title'];
                    //Image declaration for resident
                    $img=$_FILES['img']['name'];
                    $tmp_dir=$_FILES['img']['tmp_name'];
                    $imageSize=$_FILES['img']['size'];
                    $upload_dir='blogImage/';
                    $imgExt=strtolower(pathinfo($img,PATHINFO_EXTENSION));
                    $valid_extensions=array('jpeg', 'jpg', 'png', 'gif', 'pdf');
                    $photo=rand(1000, 1000000).".".$imgExt;
                    move_uploaded_file($tmp_dir, $upload_dir.$photo);
                    $more=$_POST['more'];
                    $autho=$_POST['autho'];
                       $stmt=$db->prepare('INSERT INTO blog_table (title,img,more,autho)
                      VALUES (:a, :b, :c, :d)');
                    $stmt->bindParam(':a', $title);
                    $stmt->bindParam(':b', $photo);
                    $stmt->bindParam(':c', $more);
                    $stmt->bindParam(':d', $autho);
            if($stmt->execute())
            {
            ?>
            <script>
                alert("brog are record successul");
                window.location.href=('blog.php');
            </script>
            <?php
            }else
 
                 {
             ?>
            <script>
                alert("Error");
                window.location.href=('blog.php');
            </script>
            <?php
             }
            
            }

     ?>
