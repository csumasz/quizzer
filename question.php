<?php include("database.php");?>

<?php
    $number = $_GET["n"];

    $query = "SELECT * FROM questions where question_number = $number";
    $result = $mysqli->query($query) or die($mysqli->error);

    $question = $result->fetch_assoc();
    
    $query = "SELECT * FROM choics where question_number = $number";
    $choices = $mysqli->query($query) or die($mysqli->error);
    $query = "SELECT * FROM questions";
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $total = $result->num_rows;
    


?>
<?php include('header.php');?>

    <main>
        <div class="container">
            <div class="current">Question <?php echo $question["question_number"];?> of <?php echo $total;?></div>
            <p class="question">
                <?php echo $question["text"];?>
            </p>
            <form action="process.php" method="post">
                <ul class="choices">
                    <?php while($row=$choices->fetch_assoc()): ?>
                        <li><input type="radio" name="choice" value="<?php echo $row["id"];?>"><?php echo $row["text"];?></li>
                    <?php endwhile; ?>
                </ul>
                <input type="hidden" name="number" value="<?php echo $number?>">
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </main>
    
<?php include('footer.php');?>