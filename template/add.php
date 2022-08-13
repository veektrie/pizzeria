<?php

?>
<html lang="en">
<?php include ('template/header.php');?>
<section class="coontainer grey-text">
    <h4 class="center"> Add a Pizza</h4>
    <form class="white" action="" methods="">
        <label for="yourEmail">Your Email</label>
        <input type="text" name="email">
        <label for="PizzaTitle">Pizza Title:</label>
        <input type="text" name="title">
        <label for="Ingredients">Ingredients (comma separated):</label>
        <input type="text" name="ingredients">
        <div class="center">
            <input type"submit" class="btn brand z-depth-0" name="submit" value="submit">
        </div>
     </form>
</section>
<?php include ('template/footer.php');?>
    

</html>