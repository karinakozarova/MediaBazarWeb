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
          <table class = table-bordered id="table">
            <tr>
              <th></th>
              <th>Monday</th>
              <th>Tuesday</th>
              <th>Wednesday</th>
              <th>Thursday</th>
              <th>Friday</th>
              <th>Saturday</th>
              <th>Sunday</th>
            </tr>
            <tr>
              <th>Morning</th>
              <td><input type="checkbox" name = "mon-morning" <?php if(isset($monmorning))echo $monmorning ?> >Mon - morning</td>
              <td><input type="checkbox" name = "tue-morning" <?php if(isset($tuemorning))echo $tuemorning ?> >Tue - Morning</td>
              <td><input type="checkbox" name = "wed-morning" <?php if(isset($wedmorning))echo $wedmorning ?> >Wed - Morning</td>
              <td><input type="checkbox" name = "thu-morning" <?php if(isset($thumorning))echo $thumorning ?> >Thu - Morning</td>
              <td><input type="checkbox" name = "fri-morning" <?php if(isset($frimorning))echo $frimorning ?> >Fri - Morning</td>
              <td><input type="checkbox" name = "sat-morning" <?php if(isset($satmorning))echo $satmorning ?> >Sat - Morning</td>
              <td><input type="checkbox" name = "sun-morning" <?php if(isset($sunmorning))echo $sunmorning ?> >Sun - Morning</td>
            </tr>
            <tr>
              <th>Afternoon</th>
              <td><input type="checkbox" name = "mon-afternoon" <?php if(isset($monafternoon))echo $monafternoon ?> >Mon - Afternoon</td>
              <td><input type="checkbox" name = "tue-afternoon" <?php if(isset($tueafternoon))echo $tueafternoon ?> >Tue - Afternoon</td>
              <td><input type="checkbox" name = "wed-afternoon" <?php if(isset($wedafternoon))echo $wedafternoon ?> >Wed - Afternoon</td>
              <td><input type="checkbox" name = "thu-afternoon" <?php if(isset($thuafternoon))echo $thuafternoon ?> >Thu - Afternoon</td>
              <td><input type="checkbox" name = "fri-afternoon" <?php if(isset($friafternoon))echo $friafternoon ?> >Fri - Afternoon</td>
              <td><input type="checkbox" name = "sat-afternoon" <?php if(isset($satafternoon))echo $satafternoon ?> >Sat - Afternoon</td>
              <td><input type="checkbox" name = "sun-afternoon" <?php if(isset($sunafternoon))echo $sunafternoon ?> >Sun - Afternoon</td>
            </tr>
            <tr>
              <th>Evening</th>
              <td><input type="checkbox" name = "mon-evening" <?php if(isset($monevening))echo $monevening ?> >Mon - Evening</td>
              <td><input type="checkbox" name = "tue-evening" <?php if(isset($tueevening))echo $tueevening ?> >Tue - Evening</td>
              <td><input type="checkbox" name = "wed-evening" <?php if(isset($wedevening))echo $wedevening ?> >Wed - Evening</td>
              <td><input type="checkbox" name = "thu-evening" <?php if(isset($thuevening))echo $thuevening ?> >Thu - Evening</td>
              <td><input type="checkbox" name = "fri-evening" <?php if(isset($frievening))echo $frievening ?> >Fri - Evening</td>
              <td><input type="checkbox" name = "sat-evening" <?php if(isset($satevening))echo $satevening ?> >Sat - Evening</td>
              <td><input type="checkbox" name = "sun-evening" <?php if(isset($sunevening))echo $sunevening ?> >Sun - Evening</td>
            </tr>
          </table>
        </div>
        <p><input type="submit" class = "buttonEdit" name = "assignShifts_bttn" value="Assign shift"/></p>
      </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/editWorkSchdule.js"></script>
</body>
</html>
