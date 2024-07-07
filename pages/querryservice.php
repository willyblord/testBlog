 <?php
 require '../config.php';
                if (isset($_POST['submit'])) {
                    $title=$_POST['title'];
                       $stmt=$db->prepare('INSERT INTO service (title)
                      VALUES (:a)');
                    $stmt->bindParam(':a', $title);
            if($stmt->execute())
            {
            ?>
            <script>
                alert("service are record successul");
                window.location.href=('service.php');
            </script>
            <?php
            }else
 
                 {
             ?>
            <script>
                alert("Error");
                window.location.href=('service.php');
            </script>
            <?php
             }
            
            }

     ?>
