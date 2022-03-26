<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");

if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/uplogo.png">
    <title>HOME - POV | Vax</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/home_style2.css">
    <style>
        .col-sm-6 a{
            color: #7F9FB3;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <p><li>Abarca, C. M. F. (2022, January 27). PH’s vaccine hesitancy down to 5%, says OCTA. <a href="https://mb.com.ph/2022/01/27/phs-vaccine-hesitancy-down-to-5-says-octa/"> https://mb.com.ph/2022/01/27/phs-vaccine-hesitancy-down-to-5-says-octa </a></li></p><br>
            <p><li>AstraZeneca. (n.d.). AstraZeneca - Research-Based BioPharmaceutical Company. <a href="https://www.astrazeneca.com/"> https://www.astrazeneca.com</a></li></p><br>
            <p><li>Centers for Disease Control and Prevention. (2022, January 06). Pfizer-BioNTech. <a href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/different-vaccines/Pfizer-BioNTech.html"> https://www.cdc.gov/coronavirus/2019-ncov/vaccines/different-vaccines/Pfizer-BioNTech.html </a></li></p><br>
            <p><li>IP BIOTECH, INC. (2021, November 15). Amended Emergency Use Authorization (EUA) for SARS-CoV-2 Vaccine (Vero Cell), Inactivated [CoronaVac], Sinovac Life Sciences Co., Ltd. <a href="https://www.fda.gov.ph/wp-content/uploads/2021/11/EUA-Sinovac-IP-Biotech-Amended-Booster-w.pdf"> https://www.fda.gov.ph/wp-content/uploads/2021/11/EUA-Sinovac-IP-Biotech-Amended-Booster-w.pdf </a></li></p> <br>   
            <p><li>Jeong, M. (2022, January 27). Sinovac COVID-19 vaccine: What are the side effects? <a href="https://www.medicalnewstoday.com/articles/sinovac-covid-19-vaccine-what-are-the-side-effects">https://www.medicalnewstoday.com/articles/sinovac-covid-19-vaccine-what-are-the-side-effects</a> </li></p><br>
            <p><li>Maralit, K., Cruz, K., & Maghanoy, C. C. (2022, January 29). Feb 4 and 5 jab days for pediatric kids.<a href="https://www.manilatimes.net/2022/01/29/news/national/feb-4-and-5-jab-days-for-pediatric-kids/1831030"> https://www.manilatimes.net/2022/01/29/news/national/feb-4-and-5-jab-days-for-pediatric-kids/1831030</a> </li></p><br>
            <p><li>Moderna, Inc. (n.d.). Clinical Trial Data, Moderna.<a href="https://www.modernatx.com/covid19vaccine-eua/providers/clinical-trial-data-primary-series"> https://www.modernatx.com/covid19vaccine-eua/providers/clinical-trial-data-primary-series</a></li></p><br>
            <p><li>Modernatx. (n.d.). Moderna, Inc. | Home<a href="https://www.modernatx.com/"> https://www.modernatx.com </a></li></p><br>
            <p><li>Pfizer. (n.d.). Pfizer: One of the world's premier biopharmaceutical companies.<a href="https://www.pfizer.com/"> https://www.pfizer.com </a></li></p><br>
            <p><li>Plaza, M. A. (2022, January 27). LIST: What parents need to know about COVID-19 vaccine for 5 to 11 years old. <a href="https://www.philstar.com/lifestyle/health-and-family/2022/01/27/2156743/list-what-parents-need-know-about-covid-19-vaccine-5-11-years-old"> https://www.philstar.com/lifestyle/health-and-family/2022/01/27/2156743/list-what-parents-need-know-about-covid-19-vaccine-5-11-years-old </a></li></p><br>
            <p><li>Sinovac. (n.d.). Supply Vaccines to Eliminate Human Diseases – SINOVAC. <a href="http://www.sinovac.com/index.php?lang=en"> http://www.sinovac.com/index.php?lang=en </a></li></p><br>
            <p><li>U.S. Food & Drug Administration. (2022, January 19). Moderna COVID-19 Vaccine.<a href="https://www.fda.gov/emergency-preparedness-and-response/coronavirus-disease-2019-covid-19/moderna-covid-19-vaccine"> https://www.fda.gov/emergency-preparedness-and-response/coronavirus-disease-2019-covid-19/moderna-covid-19-vaccine </a></li></p><br>
            <p><li>U.S. Food & Drug Administration. (2022, January 25). Comirnaty and Pfizer-BioNTech COVID-19 Vaccine.<a href="https://www.fda.gov/emergency-preparedness-and-response/coronavirus-disease-2019-covid-19/comirnaty-and-pfizer-biontech-covid-19-vaccine"> https://www.fda.gov/emergency-preparedness-and-response/coronavirus-disease-2019-covid-19/comirnaty-and-pfizer-biontech-covid-19-vaccine </a></li></p><br>
            <p><li>World Health Organization (2021, September 02). The Moderna COVID-19 (mRNA-1273) vaccine: What you need to know.<a href=" https://www.who.int/news-room/feature-stories/detail/the-moderna-covid-19-mrna-1273-vaccine-what-you-need-to-know?gclid=Cj0KCQiAosmPBhCPARIsAHOen-MqsBZj-6DSXYVxYNQgK9Z9bEexELzJ9cGvK9toSO6C8Cle_hU7xCgaAqc6EALw_wcB">  https://www.who.int/news-room/feature-stories/detail/the-moderna-covid-19-mrna-1273-vaccine-what-you-need-to-know?gclid=Cj0KCQiAosmPBhCPARIsAHOen-MqsBZj-6DSXYVxYNQgK9Z9bEexELzJ9cGvK9toSO6C8Cle_hU7xCgaAqc6EALw_wcB </a></li></p><br>
            <p><li>World Health Organization (2021, September 02). The Sinovac-CoronaVac COVID-19 vaccine: What you need to know. <a href=" https://www.who.int/news-room/feature-stories/detail/the-sinovac-covid-19-vaccine-what-you-need-to-know">  https://www.who.int/news-room/feature-stories/detail/the-sinovac-covid-19-vaccine-what-you-need-to-know</a> </li></p><br>
        </div>
        <div class="col-sm-3"></div>
    </div>
</body>
</html>