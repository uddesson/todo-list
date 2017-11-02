<?php require_once 'head.php';?>
<?php require_once 'database.php';?>
<?php require_once 'functions.php';?>

<body>
<main>
    <div class="input_task_container">
          <form action="insert_tasks.php" method="POST">
                <h2>Enter new task:</h2>
                <label for="task_title"> <p aria-hidden="true">Task title</p> </label>
                <input type="text" name="task_title" placeholder="Ex. Return books to library" required><br></br>

                <label for="task_title"> <p aria-hidden="true">Added by</p> </label>
                <input type="text" name="created_by" placeholder="Added by" required><br></br>
                <input id="submit_task" type="submit" name="submit_task" value="Add task">
           </form>
           <?php show_submit_message(); ?>
        </div> <!--Closing INPUT TASK-container -->


    <div class="all_tasks_container">
            <div class="current_tasks_container">
                <h2>Current tasks:</h2>

                <?php
                //Imports and displays tasks from database
                require 'fetch_tasks.php';

                //Loop for displaying each current (unfinished) task
                foreach($tasks as $task):

                //Checks for unfinished tasks (0=unfinished 1=completed)
                if ($task["completed"] == 0):
                ?>

                    <div class="single_task_box">
                        <?php echo '<p>' . $task["title"] . '</p>' . '</br>'
                        . '<p id="createdby_text">' . 'By: ' . $task["createdBy"] . '</p>'; ?>

                        <div class="actions_box">
                            <!--Sends chosen task to "delete.php, where task is removed from database"-->
                            <form action="delete.php" method="POST">
                                <input type="hidden" name="delete_id" value="<?= $task["id"]; ?>">
                                <input type="image" id="delete_task" src="images/trashcan.png" width="40" height="40" alt="Delete icon">
                            </form>

                            <!--Sends chosen task to "complete.php", returning task marked as complete"-->
                            <form action="complete.php" method="POST">
                                <input type="hidden" name="complete_id" value="<?= $task["id"]; ?>">
                                <input type="image" id="complete_task" src="images/checkmark.png" width="40" height="40" alt="Complete task icon">
                            </form>
                        </div> <!--Closing ACTIONS-box-->
                    </div> <!--Closing SINGLE TASK-box-->
                    <hr>

                <?php endif; ?>
                <?php endforeach; ?>
            </div> <!--Closing CURRENT task-container-->

            <div class="completed_tasks_container">
                <h2>Completed tasks:</h2>
                <?php foreach($tasks as $task): ?>
                <?php if ($task["completed"] == 1): ?>

                    <div class="single_task_box">
                        <?php echo '<p id="completedtask_title">' . $task["title"] . '</p>'
                                 . '</br>' . '<p id="createdby_text">' . 'By: ' . $task["createdBy"] . '</p>'; ?>

                      <!--Repeating delete action so user can remove completed tasks-->
                      <div class="actions_box">
                          <form action="delete.php" method="POST">
                              <input type="hidden" name="delete_id" value="<?= $task["id"]; ?>">
                              <input type="image" id="delete_completed_task" src="images/trashcan.png" width="40" height="40" alt="Delete icon">
                          </form>

                          <!--Sets completed task to uncomplete again-->
                          <form action="undo_complete.php" method="POST">
                              <input type="hidden" name="complete_id" value="<?= $task["id"]; ?>">
                              <input type="image" id="undo_completed_task" src="images/undo_icon.png" width="40" height="40" alt="Undo task icon">
                          </form>
                      </div>
                    </div> <!--Closing SINGLE TASK-box-->
                    <hr>

                <?php endif; ?>
                <?php endforeach; ?>

            </div> <!--Closing COMPLETED tasks-container-->
        </div> <!--Closing ALL TASKS-container-->

    <footer>
        <ul>
            <li><a href="https://github.com/uddesson/todo-list">A SIMPLE TO DO-LIST</a></li>
            <li><a href="https://github.com/uddesson">@UDDESSON</a></li>
            <li><i class="fa fa-github" aria-hidden="true"></i></li>
        </ul>
    </footer>
</main>
<script src="https://use.fontawesome.com/67b80e2b65.js"></script>
</body>
</html>
