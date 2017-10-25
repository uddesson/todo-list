<?php require_once 'head.php';?>
<?php require_once 'database.php';?>
<?php require_once 'functions.php';?>

<body>
<main> 
    <div class="input_task_container">
            
            <form action="index.php" method="POST">
               
                <h2>Enter new task:</h2>  
                
                <input type="text" name="task_title" placeholder="Ex. Return books to library"><br></br>
                
                <input type="text" name="added_by" placeholder="Added by"><br></br>
                
                <input id="submit_task" type="submit" name="submit_task" value="Add task">
                
                <?php check_if_task_is_entered(); ?> 
                
                <?php submit_task($pdo); ?>
                
            </form>   
            
        </div> <!--Closing input task-container -->
        
        
        <div class="all_tasks_container">
           
            <div class="current_tasks_container">
              
               <h2>Current tasks:</h2>
                
               <?php 
                require_once 'fetch_tasks.php';
                    
                        foreach($tasks as $task): ?>                    
                            
                            <div class="single_task_box">
                                
                                <p>Task: <?=$task["title"]?>
                                
                                By: <?=$task["createdBy"]?></p>
                                
                                <form action="delete.php" method="POST">
                                   
                                    <input type="hidden" name="delete_id" value="<?= $task["id"]; ?>">
                                    
                                    <input id="delete_task" type="submit" value="Delete">
                                    
                                </form>    
                                

                                <input id="complete_task" type="submit" name="complete_task" value="Complete">
                                
                                
                                
                            </div>
                           
                                         
               <?php endforeach; ?>
            
                
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