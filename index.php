<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>
<script src="script.js"></script> 
<link href="style.css" rel="stylesheet">

<?php
    $naamErr = $EmailErr = "";
    $naam = $Email = "";
    $fields = TRUE;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $naamErr = "Name is required";
          $fields = FALSE;
        } else {
          $naam = test_input($_POST["name"]);
        }

        if (empty($_POST["Email"])) {
          $EmailErr = "Email is vereist";
          $fields = FALSE;
        } else {
          $Email = test_input($_POST["Email"]);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    ?>
<?php
// define variables and set to empty values
$name = $email = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $gender = test_input($_POST["gender"]);
}
  ?>
  <h2>Hallo, <?php echo $naam ?></h2> 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $naamErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $EmailErr;?></span>
  <br><br>
  Gender:
  <input type="checkbox" onclick="veranderKleur('#B22222');" ondblclick="wit()" name="gender" value="lesbisch">L
  <input type="checkbox" onclick="veranderKleur('#CD5C5C');" ondblclick="wit()" name="gender" value="Homosexual">H
  <input type="checkbox" onclick="veranderKleur('#BA55D3');" ondblclick="wit()" name="gender" value="Bisexual">B
  <input type="checkbox" onclick="veranderKleur('#00FFFF');" ondblclick="wit()" name="gender" value="Transgender">T
  <input type="checkbox" onclick="veranderKleur('#4169E1');" ondblclick="wit()" name="gender" value="Man">M
  <input type="checkbox" onclick="veranderKleur('#FF69B4');" ondblclick="wit()" name="gender" value="Vrouw">V
  <script>
            function veranderKleur(kleur) {
                document.body.style.background = kleur;
            }
        
            function wit () {
                document.body.style.backgroundColor="#FFFFFF"
            }
        </script>
  <br><br>
 wilt u beoordelen:<input type="checkbox" id="myCheck" onclick="myFunction()">
 <div id="text" style="display:none">
        <input type="checkbox"><img  src="donker_groen_face_trans.png"></input>
        <input type="checkbox"><img  src="groen_face_trans.png"></input>
        <input type="checkbox"><img src="geel_face_trans.png"></input>
        <input type="checkbox"><img  src="oranje_face_trans.png"></input>
        <input type="checkbox"><img src="Rood_face_trans.png"></input>
    </div>
  <input type="submit" name="submit" value="Submit"> 
 
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>"
?>
<script>function myFunction() {
    // Get the checkbox
    var checkBox = document.getElementById("myCheck");
    // Get the output text
    var text = document.getElementById("text");
  
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      text.style.display = "block";
    } else {
      text.style.display = "none";
    }
  }
  </script>
</body>
</html>