<!DOCTYPE html>
<html lang="en">
<head>
    <title>Join Us</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200&display=swap');
    body{
        text-align:center;
        margin-left:400px;
        margin-right:400px;
        margin-top:50px;
        font-family: 'Fira Sans', sans-serif;
        background-image: url("https://us.123rf.com/450wm/baldion/baldion1705/baldion170500105/78955422-dark-sky-with-stars-vector-texture-or-background.jpg");
        color:white;
    }
    fieldset{
        background-color: #181818;
    }

      legend{
        color: #3d3d3d;
        text-shadow: -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff, 1px 1px 0 #fff;
        font-size:30px;

    }
    .bttn{
        background-color:#3f3e3e;
        color:white;

    }
    .bttn:hover{
        background-color: #4d4d4d;
        cursor:pointer;
    }

   #pengav, #catav,#jagav {
        position: absolute;
        opacity: 0;
        width: 0;
        height: 0;
    }

    [type=radio] + img {
        cursor: pointer;
    }

    [type=radio]:checked + img {
        outline: 2px solid #fde695;
    }
    a{
        color: #fde695;
        font-weight: bolder;
        text-decoration: none;
    }
    a:hover{
        color: #ffb591;
    }
    em{
        color: #fde695;
        text-shadow: 0px 0px 5px black;
    }
    b{
        color: #fde695;

    }

    @media only screen and (max-width: 1200px) {
        body {
            margin-left:20vw;
            margin-right:20vw;
        }
    }
</style>
<body>
    <?php
    if(!isset($_POST["submit"]))
    {
        ?>
    <form method="post" action ="index.php" id="myform">
        <fieldset>
            <legend><h1>Join Us</h1></legend>
            <table style="margin-left:auto;margin-right:auto;">
            <tr>
                <td>
                    <label for="uname">Name:</label>
                </td>
                <td>
                    <input type="text" id="uname" name="username" maxlength="15" minlength="2" placeholder="Enter name" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="uname">Surname:</label>
                </td>
                <td>
                    <input type="text" id="uname" name="surname" maxlength="15" minlength="2" placeholder="Enter surname" required>
                </td>
            </tr>
                <tr>
                    <td>
                        <label for="uname">Nickname:</label>
                    </td>
                    <td>
                        <input type="text" id="nname" name="nickname" maxlength="15" minlength="3" placeholder="Enter nickname" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="uname">Password:</label>
                    </td>
                    <td>
                        <input type="password" id="pword" name="password" minlength="8" placeholder="Enter password" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="uname">Mail:</label>
                    </td>
                    <td>
                        <input type="email" id="mymail" name="mailme" placeholder="Enter mail" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="usertel">Telephone:</label>
                    </td>
                    <td>
                        <input type="tel" name="usertel" placeholder="(###)###-####" pattern ="\(\d{3}\)+\d{3}-\d{4}" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="continent">Continent:</label>
                    </td>
                    <td>
                        <select name="continent">
                            <option value="Europe">Europe</option>
                            <option value="Asia">Asia</option>
                            <option value="NorthAmerica">North America</option>
                            <option value="SouthAmerica">South America</option>
                            <option value="Africa">Africa</option>
                            <option value="Australia">Australia</option>
                            <option value ="Antarctica">Antarctica</option>
                        </select>                    </td>
                </tr>


                <tr>
                    <td>
                        <label for="userage">Age:</label>
                    </td>
                    <td>
                        <select name="userage" id="uage">
                            <?php
                            for($i=10;$i<=100;$i++)
                            {
                                echo "<option>$i</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for ="usergender">Gender:</label>
                    </td>
                    <td>
                        <input type="radio" id="ugender" name="usergender" value="are a male">Male
                        <input type="radio" id="ugender" name="usergender" value="are a female">Female
                        <input type="radio" id="ugender" name="usergender" value="don't want to mention your gender" checked>Don't mention
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for ="avatar">Select Avatar:</label>
                    </td>
                    <td>
                        <label>
                            <input type="radio" name="avatar" id ="catav" checked value="cat">
                            <img src="https://img.icons8.com/flat-round/64/000000/cat--v1.png" alt="cat">
                        </label>

                        <label>
                            <input type="radio" name="avatar" id="pengav" value="penguin">
                            <img src="https://img.icons8.com/flat-round/64/000000/pinguin--v1.png" alt="penguin"/>
                        </label>

                        <label>
                            <input type="radio" name="avatar" value="jaguar" id ="jagav">
                            <img src="https://img.icons8.com/flat-round/64/000000/black-jaguar.png" alt="jaguar">
                        </label>

                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="arttype">I am interested in...</label>
                    </td>
                    <td>
                        <label>Painting</label><input type="checkbox"  name="arttype[]" value="painting" class="interest">
                        <label>Sculpture</label><input type="checkbox"  name="arttype[]" value="sculpture" class="interest">
                        <label>Literature</label><input type="checkbox"  name="arttype[]" value="literature" class="interest"><br>
                        <label>Architecture</label><input type="checkbox"  name="arttype[]" value="architecture" class="interest">
                        <label>Music</label><input type="checkbox"  name="arttype[]" value="music" class="interest">
                        <label>Cinema</label><input type="checkbox"  name="arttype[]" value="cinema" class="interest"><br>
                        <label>Photography</label><input type="checkbox" name="arttype[]" value="photography" class="interest">
                        <label>Digital Arts</label><input type="checkbox"  name="arttype[]" value="digital arts" class="interest">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Your Website:</label>
                    </td>
                    <td>
                        <input type="url" placeholder="Enter your website" name="yoururl" size="30" required>

                    </td>
                </tr>
                <tr>
                    <td>
                            <label>About You:</label>
                    </td>
                         <td>
                             <textarea name="notes" rows="3" cols="30" placeholder="Tell us more about yourself!" required></textarea>
                    </td>
                </tr>
            </table>

            <br>
            <input class="bttn" type="reset" value="RESET FORM">
            <input class="bttn" type="submit" name="submit" value="SEND FORM">
        </fieldset>
    </form>

    <?php
    }else {
        echo "<fieldset><legend><h1>Welcome ". $_POST["username"] ."!</h1></legend>";
        $a = $_POST["avatar"];
        switch ($a) {
            case "cat" :
                $filepath="cat--v1.png";
                echo '<img src="'.$filepath.'">';
                break;
            case "penguin":
                $filepath="pinguin--v1.png";
                echo '<img src="'.$filepath.'">';
                break;
            case "jaguar" :
                $filepath="black-jaguar.png";
                echo '<img src="'.$filepath.'">';
                break;
            default:
                echo "I don't know why you don't like fb";
        }
        echo "<br>We are happy to have you in our community, <b>". $_POST["username"] ." ". $_POST["surname"]. "</b>!<br>";
        echo "From now on we can call you <b> " . $_POST["nickname"] . "</b> :) <br><br> Let's see what we know about you...<br><br>";
        echo "We can contact you on <b>" . $_POST["usertel"] . "</b><br>";
        echo "You live in <b>" . $_POST["continent"] . "</b> but we are all so close on this website!<br>";
        echo "You are <b>" . $_POST["userage"] . "</b> years old.<br>";
        echo "You <b>" . $_POST["usergender"] . "</b>.<br><br>";

        echo "You are interested in ";
        $interests = $_POST["arttype"];
        for($i = 0; $i< count($interests) ; $i++) {
            echo "<b>$interests[$i]</b>";
            if ($i == count($interests)-1)
                echo ".";
            else
                echo ", ";
        }
        echo "<br>Can't wait to see you grow!<br><br>";
        echo 'Here is your website:  <a target ="_blank" href="' . $_POST["yoururl"] . '">CLICK</a>, surely it is awesome!<br><br>';
        echo "You describe yourself as...<br><em>" . $_POST["notes"] . "</em>";
        echo "<br><br>Our newsletter will be sent to <b>" . $_POST["mailme"] . "</b> ASAP.";
        echo "<br><br>Nice to meet you!</fieldset>";
    }
    ?>
 <br> Lamia Demirok | MIS 233

<script>
    (function() {
        const formSelect = document.querySelector('#myform');
        const checkMyBoxes = formSelect.querySelectorAll('input[type=checkbox]');
        const checkboxLength = checkMyBoxes.length;
        const firstCheckbox = checkboxLength > 0 ? checkMyBoxes[0] : null;

        function init() {
            if (firstCheckbox) {
                for (let i = 0; i < checkboxLength; i++) {
                    checkMyBoxes[i].addEventListener('change', checkValidity);
                }

                checkValidity();
            }
        }

        function isChecked() {
            for (let i = 0; i < checkboxLength; i++) {
                if (checkMyBoxes[i].checked) return true;
            }

            return false;
        }

        function checkValidity() {
            const errorMessage = !isChecked() ? 'At least one checkbox must be selected.' : '';
            firstCheckbox.setCustomValidity(errorMessage);
        }

        init();
    })();
</script>
</body>
</html>

