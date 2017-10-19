<?php include 'head.php';?>
<?php include 'database.php';?>
<?php include 'insert_tasks.php'; ?>
<?php include 'fetch_tasks.php'; ?>

<body>
    <main> 
  
        <div class="form_container">
            <form action="index.php" method="POST">
               <h2>Enter new task:</h2>
                <input type="text" name="title" placeholder="Ex. Return books to library">
                <br></br>
                <input type="text" name="name" placeholder="Name">
                <br></br>
                <!--Sucess-message to be shown when task is entered-->
                <?php
                    if (isset($_POST["title"]) && isset($_POST["name"]) && !empty($_POST["title"]) && !empty($_POST["name"]))
                    {
                        echo '<p>' . "Nice, you added a new task!" . '</p>';
                    }
                ?> 
                <input type="submit" value="Add task">
            </form>
        </div>       
        
        <div class="all_tasks_container">
            <div class="current_tasks_container">
               <h2>Current tasks:</h2>
                
                   <?php 
                    foreach($tasks as $task): ?>
                    
                       <div class="single_task_box">
                           
                            <p>Task: <?=$task["title"]?>
                            By: <?=$task["createdBy"]?>
                            </p></div>
                    
                   <?php endforeach ?>
                
            </div> <!--Closing current task-container-->
        
            <div class="completed_tasks_container">
                 <h2>Completed tasks:</h2>
            </div>  
        </div> <!--Closing all tasks-container-->
          
           
           
           
           <footer>
            <ul>
                <li><a href="https://github.com/uddesson/todo-list">github.com/uddesson/todo-list</a></li>
                <li><a href="https://github.com/uddesson">@uddesson</a></li>
                <li><i class="fa fa-github" aria-hidden="true"></i></li>
            </ul>  
        </footer>
    </main>
<script src="https://use.fontawesome.com/67b80e2b65.js"></script>    
</body>
</html>