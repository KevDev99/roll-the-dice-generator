<!DOCTYPE html>
<html lang="en">

<?php include 'inc/header.php'; ?>

<body>
    <main class="p-5 ">
        <h1>Roll the Dice 🎲</h1>

        <form onsubmit="submitDiceData();return false;" id="diceForm" >
            <div class="form-group">
                <div class="input-group mb-3 mt-5">
                    <input id="numberOfRolls" name="numberOfRolls" placeholder="0" type="number" class="form-control" placeholder="How many dice to roll ?" aria-label="Username" aria-describedby="basic-addon1" />
                </div>
            </div>

            <div class="form-group">
                <label for="diceType">Type of dice</label>
                <select name="diceType" multiple class="form-control" id="diceType">
                    <option>d4</option>
                    <option>d6</option>
                    <option>d8</option>
                    <option>d10</option>
                    <option>d20</option>
                </select>
            </div>

            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Roll It</button>
            </div>

        </form>

        <div class="row mt-3" id="dicesRow">
         
        </div>
    
    </main>
    <?php include 'inc/footer.php'; ?>


</body>

</html>