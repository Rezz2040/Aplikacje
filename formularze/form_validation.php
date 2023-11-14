<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form validation</title>
    <style>
        p{
            color:red;
        }
        .error{
            color: FF0000;
        }
    </style>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <p>* - required field</p>
        Name: <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        Website <input type="text" name="website" value="<?php echo $website?>;">
        <span class="error">* <?php echo $websiteErr;?></span><br>

        Content: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
        <br><br>
        
        Gender:
        <input type="radio" name="gender" <?php if(isset($gender) && $gender=="female") echo "checked";?> value="female">Female
        <label for="female">Female</label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><span class="error">* <?php echo $nameErr;?></span><br>
        <input type="submit" value="Submit">
        <h2>Your Input:</h2>
    </form>
</body>