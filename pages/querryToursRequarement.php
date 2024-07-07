 <?php
 require '../config.php';
                if (isset($_POST['submit'])) {

                    $requarements=$_POST['requarements'];
                    $tourId=$_POST['tourId'];

                    $stmt=$db->prepare('INSERT INTO  participation_requirements(requarements, tourId)
                      VALUES (:a, :b)');
                    $stmt->bindParam(':a', $requarements);
                    $stmt->bindParam(':b', $tourId);

                    if($stmt->execute())
            {
            ?>
            <script>
                alert("Trip are record successul");
                window.location.href=('tourRequarement.php');
            </script>
            <?php
            }else
                 {
             ?>
            <script>
                alert("Error");
                window.location.href=('tourRequarement.php');
            </script>
            <?php
             }
            
            }

     ?>
