 <?php
 require '../config.php';
                if (isset($_POST['submit'])) {

                    $include=$_POST['include'];
                    $tourId=$_POST['tourId'];

                    $stmt=$db->prepare('INSERT INTO  tourincludes (include, tourId)
                      VALUES (:a, :b)');
                    $stmt->bindParam(':a', $include);
                    $stmt->bindParam(':b', $tourId);

                    if($stmt->execute())
            {
            ?>
            <script>
                alert("Trip are record successul");
                window.location.href=('tourInclude.php');
            </script>
            <?php
            }else
                 {
             ?>
            <script>
                alert("Error");
                window.location.href=('tourInclude.php');
            </script>
            <?php
             }
            
            }

     ?>
