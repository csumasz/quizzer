<?php
    include("database.php");
?>
<?php include('header.php');?>

    <main>
        <div class="container">
            <h2>You are Done!</h2>
            <p>Congrats! You have completed the test.</p>
            <p>Final Score: <?php echo $_SESSION["score"];?></p>
            <a href="question.php?n=1" class="start"> Take Again</a>
        </div>
    </main>
    
<?php include('footer.php');?>
<?php session_destroy();?>