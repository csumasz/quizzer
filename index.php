<?php include("database.php");?>
<?php
    $query = "SELECT * FROM questions";
    $results = $mysqli->query($query) or die($mysqli->error);
    $total = $results->num_rows;
?>
<?php include('header.php');?>

    <main>
        <div class="container">
            <h2>Test Your PHP Knowledge</h2>
            <p>This is a multiple choice quiz to test your knowledge of PHP</p>
            <ul>
                <li><strong>Number of Questions: </strong><?php echo $total; ?></li>
                <li><strong>Type : </strong>Multiple Choice</li>
                <li><strong>Estimated time: </strong><?php echo $total * .5;?> Minutes</li>
            </ul>
            <a href="question.php?n=1" class="start">Start Quiz</a>
        </div>
    </main>
<?php include('footer.php');?>