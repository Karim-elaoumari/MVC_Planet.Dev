<?php
if(isset($_SESSION['seccess'])){ ?>
<div class="alert alert-success d-flex align-items-center p-1 ms-2 me-2" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    <?= $_SESSION['seccess'] ?>
    <?php unset($_SESSION['seccess']);?>
  </div>
</div>
<?php
}
else if(isset($_SESSION["error"])){?>
<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
  <?= $_SESSION['error'] ?>
  <?php unset($_SESSION['error']);?>
  </div>
</div>
<?php
}
?>