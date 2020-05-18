<?php
$title = "Edit Schedule";
$addEditSchedule = true;
include('head.php');
include('../php/accessControl.php');
include('../php/constants.php');
include('../php/config.php');
include('../php/assignShifts.php');
include('../php/preSelectCheckbox.php');
?>

<body>
<?php include('navbar.php'); ?>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
<div class="container">
    <h2 class="mb-3 sked-tape__center centered"> Change working days:</h2>
    <?php if (isset($_POST["assignShifts_bttn"]) && !empty($errorMessageText)) { ?>
        <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?= $errorMessageText ?> </div>
    <?php } ?>
    <div class="cover">
        <form method="post">
            <div class="table-responsive">
                <table id="table">
                    <tr>
                        <th class="tableHeader">#</th>
                        <th class="tableHeader">Monday</th>
                        <th class="tableHeader">Tuesday</th>
                        <th class="tableHeader">Wednesday</th>
                        <th class="tableHeader">Thursday</th>
                        <th class="tableHeader">Friday</th>
                        <th class="tableHeader">Saturday</th>
                        <th class="tableHeader">Sunday</th>
                    </tr>
                    <tr>
                        <th class="tableHeader">Morning</th>
                        <td><input type="checkbox"
                                   name="mon-morning" <?php if (isset($monmorning)) echo $monmorning ?> ></td>
                        <td><input type="checkbox"
                                   name="tue-morning" <?php if (isset($tuemorning)) echo $tuemorning ?> ></td>
                        <td><input type="checkbox"
                                   name="wed-morning" <?php if (isset($wedmorning)) echo $wedmorning ?> ></td>
                        <td><input type="checkbox"
                                   name="thu-morning" <?php if (isset($thumorning)) echo $thumorning ?> ></td>
                        <td><input type="checkbox"
                                   name="fri-morning" <?php if (isset($frimorning)) echo $frimorning ?> ></td>
                        <td><input type="checkbox"
                                   name="sat-morning" <?php if (isset($satmorning)) echo $satmorning ?> ></td>
                        <td><input type="checkbox"
                                   name="sun-morning" <?php if (isset($sunmorning)) echo $sunmorning ?> ></td>
                    </tr>
                    <tr>
                        <th class="tableHeader">Afternoon</th>
                        <td><input type="checkbox"
                                   name="tue-afternoon" <?php if (isset($tueafternoon)) echo $tueafternoon ?> ></td>
                        <td><input type="checkbox"
                                   name="mon-afternoon" <?php if (isset($monafternoon)) echo $monafternoon ?> ></td>
                        <td><input type="checkbox"
                                   name="wed-afternoon" <?php if (isset($wedafternoon)) echo $wedafternoon ?> ></td>
                        <td><input type="checkbox"
                                   name="thu-afternoon" <?php if (isset($thuafternoon)) echo $thuafternoon ?> ></td>
                        <td><input type="checkbox"
                                   name="fri-afternoon" <?php if (isset($friafternoon)) echo $friafternoon ?> ></td>
                        <td><input type="checkbox"
                                   name="sat-afternoon" <?php if (isset($satafternoon)) echo $satafternoon ?> ></td>
                        <td><input type="checkbox"
                                   name="sun-afternoon" <?php if (isset($sunafternoon)) echo $sunafternoon ?> ></td>
                    </tr>
                    <tr>
                        <th class="tableHeader">Evening</th>
                        <td><input type="checkbox"
                                   name="mon-evening" <?php if (isset($monevening)) echo $monevening ?> ></td>
                        <td><input type="checkbox"
                                   name="tue-evening" <?php if (isset($tueevening)) echo $tueevening ?> ></td>
                        <td><input type="checkbox"
                                   name="wed-evening" <?php if (isset($wedevening)) echo $wedevening ?> ></td>
                        <td><input type="checkbox"
                                   name="thu-evening" <?php if (isset($thuevening)) echo $thuevening ?> ></td>
                        <td><input type="checkbox"
                                   name="fri-evening" <?php if (isset($frievening)) echo $frievening ?> ></td>
                        <td><input type="checkbox"
                                   name="sat-evening" <?php if (isset($satevening)) echo $satevening ?> ></td>
                        <td><input type="checkbox"
                                   name="sun-evening" <?php if (isset($sunevening)) echo $sunevening ?> ></td>
                    </tr>
                </table>
            </div>
            <p><input type="submit" class="buttonEdit" name="assignShifts_bttn" value="Assign next week shift"/></p>
        </form>
    </div>
</div>
<script type="text/javascript" src="../js/cellHighlight.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/editWorkSchdule.js"></script>
</body>
</html>
