
<?php
include_once('partials/header.php');

?>

<main>
    <section>
        <div class="d-flex justify-content-center">
        <div class="container-lg row justify-content-end">
        <div class="leftPart">
            <div class="chatcontainer">
                <?php include_once('partials/chat.php');  ?>
            </div>
  
            <div class="form-container">
                <?php include_once('partials/formSendMessage.php');  ?>
            </div>
        </div>
        <aside>
            <?php include_once('partials/userOnline.php');  ?>
        </aside>
        </div>
        </div>
    </section>
</main>



<?php

include_once('partials/footer.php');

?>
