<?php
/*
Template Name: Contact Template
*/
?>
<?php include "processform.php"; ?>


<section  id="contact">
   <div class="container" id="mail"></div>
    <div class="grad">
 <h1>Contact Me</h1>
<form id="myform" name="theform" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" class="clearfix">
        <span id="formerror" class="error" ></span>

        <div id="textfield" class="input-group">
                <label class="input-group-addon" for="textfield">Name</label>
                    <input  class="form-control"  type="text" name="senderName" autofocus required
                   placeholder="first, last" value="<?php if (isset($senderName)){echo $senderName; } ?>" pattern="[A-Za-z ]+[A-Za-z ]">
           </div>
                <?php if (isset($err_sname)) { echo $err_sname; } ?>


            <div id="emailfield" class="input-group">
            <label class="input-group-addon" for="emailfield">Email</label>
            <input  class="form-control" type="email" name="senderEmail" required  placeholder="example@host.com"
                   value="<?php if (isset($senderEmail)){echo $senderEmail; } ?>">
           </div> <?php if (isset($err_semail)) { echo $err_semail; } ?>


        <div id="messagefield"  class="input-group">
            <label class="input-group-addon" for="messagefield">Message</label>
                <textarea class="form-control" name="message" required   placeholder="hello..."
                value="<?php if (isset($message)){echo $message; } ?>"></textarea>
        </div>

            <?php if (isset($err_smessage)) { echo $err_smessage; } ?>

    <button class="btn btn-block btn-default"  type="submit" name="action" value="submit">Send</button>
</form>

      <?php if (isset($msg)) { echo '<div id="formmessage"><p>', $msg, '</p></div>'; }?>
          </div> <!-- /close gradient-->

</section>

