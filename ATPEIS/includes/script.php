<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../js/sweetalert.js"></script>

    <?php 
   if(isset($_SESSION['status']) && $_SESSION['status'] !='')
   {
    ?>
    <script>
        swal({
            title: "<?php echo $_SESSION['status']; ?>",
             //text: "You clicked the button!",
             icon: "<?php echo $_SESSION['status_code']; ?>",
              button: "CGE GO!",
});
</script>

<?php
  unset($_SESSION['status']);
   }
   ?>