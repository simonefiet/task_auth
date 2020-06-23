<?php
require_once 'inc/bootstrap.php';

$pageTitle = "Time Tracker";
$page = null;

include 'inc/header.php';

if (isOwner($user_id)) : 
  echo "string";
endif;
?>
  <?php if (isAuthenticated()) : ?>
    <div class="col-container actions-container">
      <h1>Welcome</h1>
      <p class="actions-copy">What would you like to do today?</p>
      <div class="actions-wrapper">
        <ul class="actions">
            <li class="actions-item">
                <a class="actions-link" href="task_list.php">
              <span class="actions-icon">
                <svg viewbox="0 0 64 64"><use xlink:href="#report_icon"></use></svg>
              </span>
                    View Tasks
                </a>
            </li>
          <li class="actions-item">
            <a class="actions-link" href="task.php">
              <span class="actions-icon">
                <svg viewbox="0 0 64 64"><use xlink:href="#task_icon"></use></svg>
              </span>
              Add Task
            </a>
          </li>
        </ul>
      </div>
		</div>

    <?php else :  ?>
      <div class="col-container actions-container">

      <h1>Welcome</h1>
      <p class="actions-copy">Login or register do get access</p>
      <div class="actions-wrapper">
        <ul class="actions">
          <li class="actions-item">
            <a class="actions-link" href="register.php">
              <span class="actions-icon">
                <svg viewbox="0 0 64 64"><use xlink:href="#user_icon"></use></svg>
              </span>
                Register
            </a>
          </li>
          <li class="actions-item">
            <a class="actions-link" href="login.php">
              <span class="actions-icon">
                <svg viewbox="0 0 64 64"><use xlink:href="#user_icon"></use></svg>
              </span>
                Login
            </a>
          </li>
        </ul>
      </div>
    </div>
  <?php
    endif;
  ?>

<?php include("inc/footer.php"); ?>
