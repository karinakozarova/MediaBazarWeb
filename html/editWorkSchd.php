<?php $title = "Edit Schedule";
$addEditSchedule = true;
include('head.php');
include '../php/constants.php';
include '../php/config.php';
include '../php/assignshifts.php';
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
              <td><input type="checkbox" name = "mon-morning">Mon - morning</td>
              <td><input type="checkbox" name = "tue-morning">Tue - Morning</td>
              <td><input type="checkbox" name = "wed-morning">Wed - Morning</td>
              <td><input type="checkbox" name = "thu-morning">Thu - Morning</td>
              <td><input type="checkbox" name = "fri-morning">Fri - Morning</td>
              <td><input type="checkbox" name = "sat-morning">Sat - Morning</td>
              <td><input type="checkbox" name = "sun-morning">Sun - Morning</td>
            </tr>
            <tr>
              <th>Afternoon</th>
              <td><input type="checkbox" name = "mon-afternoon">Mon - Afternoon</td>
              <td><input type="checkbox" name = "tue-afternoon">Tue - Afternoon</td>
              <td><input type="checkbox" name = "wed-afternoon">Wed - Afternoon</td>
              <td><input type="checkbox" name = "thu-afternoon">Thu - Afternoon</td>
              <td><input type="checkbox" name = "fri-afternoon">Fri - Afternoon</td>
              <td><input type="checkbox" name = "sat-afternoon">Sat - Afternoon</td>
              <td><input type="checkbox" name = "sun-afternoon">Sun - Afternoon</td>
            </tr>
            <tr>
              <th>Evening</th>
              <td><input type="checkbox" name = "mon-evening">Mon - Evening</td>
              <td><input type="checkbox" name = "tue-evening">Tue - Evening</td>
              <td><input type="checkbox" name = "wed-evening">Wed - Evening</td>
              <td><input type="checkbox" name = "thu-evening">Thu - Evening</td>
              <td><input type="checkbox" name = "fri-evening">Fri - Evening</td>
              <td><input type="checkbox" name = "sat-evening">Sat - Evening</td>
              <td><input type="checkbox" name = "sun-evening">Sun - Evening</td>
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
