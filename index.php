<?php include 'head.php';?>
<?php include 'database.php';?>
<?php include 'fetch_tasks.php'; ?>
<body>
    <main> 
         
        <form action="index.php" method="POST">
           <h2>Set a task:</h2>
            <input type="text" name="title">
            <br></br>
            <input type="checkbox" name="completed" value="1">Done!<br>
            <br></br>
            <input type="submit">
        </form>
           
           
<!-- SKA COMMITA FETCH TASKS, TEST OCH TILLÄGG I LOOP -->
           
        
        <div class="task_list_box">
           <h1>TASKLIST</h1>
            <?php
                foreach($tasks as $tasks)
                {
                    echo '<p>' . '</br>';
                    echo 'Task: ' . $tasks["title"] . '</p>';
                }
            ?>
        </div>  
           
           
           <footer>
            <ul>
                <li><a href="https://github.com/uddesson">github.com/uddesson/todo-list</a></li>
                <li><a href="https://github.com/uddesson">@uddesson</a></li>
                <li><i class="fa fa-github" aria-hidden="true"></i></li>
            </ul>  
        </footer>
    
    </main>
<script src="https://use.fontawesome.com/67b80e2b65.js"></script>    
</body>
</html>
