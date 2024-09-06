<?php 

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];

    if(!empty($height) && is_numeric($height) && !empty($weight) && is_numeric($weight)){
        $heightInMeter = $height / 100;
        $accurateBmi = $weight / ($heightInMeter * $heightInMeter);
        $bmi = round($accurateBmi,1);
        $message = "Your BMI is: " . $bmi . "\\n";

        if ($bmi < 18.5) {
            $message .= "you are Underweight & You might need to gain weight. Consider consulting a nutritionist.";
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            $message .= "You are Normal, Great! Keep maintaining your current lifestyle.";
        } elseif ($bmi >= 25 && $bmi < 29.9) {
            $message .= "You are Overweigh & You might want to consider lifestyle changes like a balanced diet and exercise.";
        } else {
            $message .= "Obesity. It is advisable to consult a healthcare provider for guidance.";
        }

        //echo "Your bmi is:" .$bmi;
        echo "<script>alert('$message');</script>";    
        }else{
        echo "please input valid data.";
    }
}
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles.css" type="text/css">
</head>
<body>
    <!-- BMI Calculator Section Begin -->
    <section class="bmi-calculator-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title chart-title">
                        <span>check your body</span>
                        <h2>BMI CALCULATOR CHART</h2>
                    </div>
                    <div class="chart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Bmi</th>
                                    <th>WEIGHT STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="point">Below 18.5</td>
                                    <td>Underweight</td>
                                </tr>
                                <tr>
                                    <td class="point">18.5 - 24.9</td>
                                    <td>Healthy</td>
                                </tr>
                                <tr>
                                    <td class="point">25.0 - 29.9</td>
                                    <td>Overweight</td>
                                </tr>
                                <tr>
                                    <td class="point">30.0 and Above</td>
                                    <td>Obese</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title chart-calculate-title">
                        <span>check your body</span>
                        <h2>CALCULATE YOUR BMI</h2>
                    </div>
                    <div class="chart-calculate-form">
                        <p>Discover the path to a healthier you. Your BMI calculation is the first step toward understanding your body's fitness.</p>
                        <form action="index.php" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" name="height" placeholder="Height / cm">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="weight" placeholder="Weight / kg">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="age" placeholder="Age">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="sex" placeholder="Sex">
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit">Calculate</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BMI Calculator Section End -->
</body>
</html>