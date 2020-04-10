<?php $title = "Editschedule";
include('head.php');
include '../php/constants.php';
include '../php/config.php';
?>

<body>
<?php include('navbar.php'); ?>
  <div class="container">
    <h2 class="mb-3 sked-tape__center centered"> Change working days:</h2>
  <div>
<div class = "cover">
  <table id="table">
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
      <td>Mon - Morning</td>
      <td>Tue - Morning</td>
      <td>Wed - Morning</td>
      <td>Thu - Morning</td>
      <td>Fri - Morning</td>
      <td>Sat - Morning</td>
      <td>Sun - Morning</td>
    </tr>
    <tr>
      <th>Afternoon</th>
      <td>Mon - Afternoon</td>
      <td>Tue - Afternoon</td>
      <td>Wed - Afternoon</td>
      <td>Thu - Afternoon</td>
      <td>Fri - Afternoon</td>
      <td>Sat - Afternoon</td>
      <td>Sun - Afternoon</td>
    </tr>
    <tr>
      <th>Evening</th>
      <td>Mon - Evening</td>
      <td>Tue - Evening</td>
      <td>Wed - Evening</td>
      <td>Thu - Evening</td>
      <td>Fri - Evening</td>
      <td>Sat - Evening</td>
      <td>Sun - Evening</td>
    </tr>
  </table>
      </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/editWorkSchdule.js"></script>

</body>
</html>
