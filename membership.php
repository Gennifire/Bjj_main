<!DOCTYPE html>
<html lang="en">

<head>
    <title>Membership page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link href="//fonts.googleapis.com/css?family=Roboto:700,500,400&amp;display=swap" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/maincss.css">
    <link rel="stylesheet" href="css/membershipCss.css">

</head>

<!--Top nav php-->
<?php
include("includes/topNav.php");
?>




<body>
    <div class="pricing-plan-container">
        <section class="pricing-plan">
            <div class="pricing-plan-header">
                <h1 class="pricing-plan-title">
                    Starter Plan
                </h1>
                <h2 class="pricing-plan-summary">
                    Beginner plan for those just starting out
                </h2>
            </div>

            <div class="pricing-plan-description">
                <ul class="pricing-plan-list">
                    <li class="pricing-plan-feature">
                        Unlimited gym access
                    </li>
                    <li class="pricing-plan-feature">
                        10 classes per month.
                    </li>
                    <li class="pricing-plan-feature">
                        Access to member area
                    </li>
                </ul>
            </div>

            <div class="pricing-plan-actions">
                <p class="pricing-plan-cost">
                    €60
                </p>
                <p class="pricing-plan-text">
                    Per Month
                </p>
                <a href="" class="pricing-plan-button">Purchase</a>
                <p class="pricing-plan-text">Minimun spend €600 per year</p>
            </div>
        </section>

        <!-- Special section -->
        <section class="pricing-plan pricing-plan-highlighted">
            <div class="pricing-plan-special-text">
                Recommended
            </div>
            <div class="pricing-plan-header">
                <h1 class="pricing-plan-title">
                    Basic Plan
                </h1>
                <h2 class="pricing-plan-summary">
                    Plan for those who know what they're doing and want a little more.
                </h2>
            </div>

            <div class="pricing-plan-description">
                <ul class="pricing-plan-list">
                    <li class="pricing-plan-feature">
                        Unlimited gym access
                    </li>
                    <li class="pricing-plan-feature">
                        25 classes per month.
                    </li>
                    <li class="pricing-plan-feature">
                        Access to member area
                    </li>
                    <li class="pricing-plan-feature">
                        Access to 1 on 1 instruction
                    </li>
                </ul>
            </div>

            <div class="pricing-plan-actions">
                <p class="pricing-plan-cost">
                    €80
                </p>
                <p class="pricing-plan-text">
                    Per Month
                </p>
                <a href="" class="pricing-plan-button">Purchase</a>
                <p class="pricing-plan-text">Minimun spend €800 per year</p>
            </div>
        </section>

        <section class="pricing-plan">
            <div class="pricing-plan-header">
                <h1 class="pricing-plan-title">
                    Expert Plan
                </h1>
                <h2 class="pricing-plan-summary">
                    Plan for those in training and need that extra push
                </h2>
            </div>

            <div class="pricing-plan-description">
                <ul class="pricing-plan-list">
                    <li class="pricing-plan-feature">
                        Unlimited gym access
                    </li>
                    <li class="pricing-plan-feature">
                        50 classes per month.
                    </li>
                    <li class="pricing-plan-feature">
                        Access to member area
                    </li>
                    <li class="pricing-plan-feature">
                        Personal development / diet plans
                    </li>

                </ul>
            </div>

            <div class="pricing-plan-actions">
                <p class="pricing-plan-cost">
                    €120
                </p>
                <p class="pricing-plan-text">
                    Per Month
                </p>
                <a href="" class="pricing-plan-button">Purchase</a>
                <p class="pricing-plan-text">Minimun spend €1000 per year</p>
            </div>
        </section>

    </div>

</body>

<script src="js/Main.js"></script>

</html>