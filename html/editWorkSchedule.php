<?php
$title = "Edit Schedule";
$addEditSchedule = true;
include('head.php');
include('../php/constants.php');
include('../php/config.php');
include('../php/assignshifts.php');
include('../php/preSelectCheckbox.php');
?>

<body>
<?php include('navbar.php'); ?>
  <div class="container">
          <h2 class="mb-3 sked-tape__center centered"> Change working days:</h2>
          <?php if (isset($_POST["assignShifts_bttn"]) && !empty($errorMessageText)) { ?>
              <div class="alert alert-danger alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <?= $errorMessageText ?> </div>
          <?php } ?>
  <div>
    <div class = "cover">
      <form method="post">
        <div  class="table-responsive">
          <table id="table">
            <tr>
              <th class="tHeader">#</th>
              <th class="tHeader">Monday</th>
              <th class="tHeader">Tuesday</th>
              <th class="tHeader">Wednesday</th>
              <th class="tHeader">Thursday</th>
              <th class="tHeader">Friday</th>
              <th class="tHeader">Saturday</th>
              <th class="tHeader">Sunday</th>
            </tr>
            <tr>
              <th class="tHeader">Morning</th>
              <td><label><input type="checkbox" name = "mon-morning" <?php if(isset($monmorning))echo $monmorning ?> ></label></td>
              <td><label><input type="checkbox" name = "tue-morning" <?php if(isset($tuemorning))echo $tuemorning ?> ></label></td>
              <td><label><input type="checkbox" name = "wed-morning" <?php if(isset($wedmorning))echo $wedmorning ?> ></label></td>
              <td><label><input type="checkbox" name = "thu-morning" <?php if(isset($thumorning))echo $thumorning ?> ></label></td>
              <td><label><input type="checkbox" name = "fri-morning" <?php if(isset($frimorning))echo $frimorning ?> ></label></td>
              <td><label><input type="checkbox" name = "sat-morning" <?php if(isset($satmorning))echo $satmorning ?> ></label></td>
              <td><label><input type="checkbox" name = "sun-morning" <?php if(isset($sunmorning))echo $sunmorning ?> ></label></td>
            </tr>
            <tr>
              <th class="tHeader">Afternoon</th>
              <td><label><input type="checkbox" name = "tue-afternoon" <?php if(isset($tueafternoon))echo $tueafternoon ?> ></label></td>
              <td><label><input type="checkbox" name = "mon-afternoon" <?php if(isset($monafternoon))echo $monafternoon ?> ></label></td>
              <td><label><input type="checkbox" name = "wed-afternoon" <?php if(isset($wedafternoon))echo $wedafternoon ?> ></label></td>
              <td><label><input type="checkbox" name = "thu-afternoon" <?php if(isset($thuafternoon))echo $thuafternoon ?> ></label></td>
              <td><label><input type="checkbox" name = "fri-afternoon" <?php if(isset($friafternoon))echo $friafternoon ?> ></label></td>
              <td><label><input type="checkbox" name = "sat-afternoon" <?php if(isset($satafternoon))echo $satafternoon ?> ></label></td>
              <td><label><input type="checkbox" name = "sun-afternoon" <?php if(isset($sunafternoon))echo $sunafternoon ?> ></label></td>
            </tr>
            <tr>
              <th class="tHeader">Evening</th>
              <td><label><input type="checkbox" name = "mon-evening" <?php if(isset($monevening))echo $monevening ?> ></label></td>
              <td><label><input type="checkbox" name = "tue-evening" <?php if(isset($tueevening))echo $tueevening ?> ></label></td>
              <td><label><input type="checkbox" name = "wed-evening" <?php if(isset($wedevening))echo $wedevening ?> ></label></td>
              <td><label><input type="checkbox" name = "thu-evening" <?php if(isset($thuevening))echo $thuevening ?> ></label></td>
              <td><label><input type="checkbox" name = "fri-evening" <?php if(isset($frievening))echo $frievening ?> ></label></td>
              <td><label><input type="checkbox" name = "sat-evening" <?php if(isset($satevening))echo $satevening ?> ></label></td>
              <td><label><input type="checkbox" name = "sun-evening" <?php if(isset($sunevening))echo $sunevening ?> ></label></td>
            </tr>
          </table>
        </div>
        <p><input type="submit" class = "buttonEdit" name = "assignShifts_bttn" value="Assign next week shift"/></p>
      </form>
    </div>
    <script type="text/javascript" src="../js/cellHighlight.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/editWorkSchdule.js"></script>
</body>
</html>
