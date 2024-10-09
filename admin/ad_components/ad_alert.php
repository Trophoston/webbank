<?php if (isset($_SESSION["error"])) { ?>
     <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <i class="fa-solid fa-triangle-exclamation"></i>
          <?php echo $_SESSION["error"]; ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
<?php }
unset($_SESSION["error"]);
?>

<?php if (isset($_SESSION["success"])) { ?>
     <div class="alert alert-success alert-dismissible fade show" role="alert">
          <i class="fa-regular fa-circle-check "></i>
          <?php echo $_SESSION["success"]; ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
<?php }
unset($_SESSION["success"]);
?>