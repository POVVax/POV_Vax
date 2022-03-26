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
    <link rel="stylesheet" href="style/vaccine_info.css"> 
    <link rel="stylesheet" href="style/right-sidebar.css">
</head>
<body>
    <div class="row">
        <div class="col-sm-3">
            

        <div class="trends_container">
            <div class="trends_box">
                <div class="trends_header">
                    <p>Vaccine for you</p>
                </div>
            <div class="trends_body">
                <div class="trend">
                    <span>Trending</span>
                    <a href="https://www.pfizer.com"><p>#Pfizer</p></a>
                </div>
                <div class="trend">
                    <span>Trending</span>
                    <a href="https://www.modernatx.com"><p>#Moderna</p></a>
                </div>
            <div class="trends_body">
                <div class="trend">
                    <span>Trending</span>
                    <a href="https://www.astrazeneca.com"><p>#AstraZeneca</p></a>
                </div>
                <div class="trends_body">
                <div class="trend">
                    <span>Trending</span>
                    <a href="http://www.sinovac.com/index.php?lang=en"><p>#Sinovac</p></a>
                </div>
                <div class="trends_show-more">
                    <a href="">show more</a>
                </div>
            </div>
        </div>
            </div>
</div>
</div>
        


        </div>

        <div class="col-sm-6">
                <h3 class="title" id="vaccinetitle"> Vaccines </h3>
            <div class="products-container">
                <div class="product" data-name="p-1">
                    <img src="images/astra.png" alt="">
                    <h3>AstraZeneca</h3>
                    <div class="price">Oxford University </div>
                </div>
                <div class="product" data-name="p-2">
                    <img src="images/pfizer.png" alt="">
                    <h3>Pfizer</h3>
                    <div class="price">Pfizer, Inc., and BioNTech</div>
                </div>
                <div class="product" data-name="p-3">
                    <img src="images/moderna.png" alt="">
                    <h3>Moderna</h3>
                    <div class="price">ModernaTX, Inc.</div>
                </div>
                <div class="product" data-name="p-4">
                    <img src="images/sinovac.png" alt="">
                    <h3>Sinovac</h3>
                    <div class="price">Sinovac Life Sciences Co., Ltd</div>
                </div>
            </div>
            <div class="products-preview">
                <div class="preview" data-target="p-1">
                    <i class="fas fa-times"></i>
                    <img src="images/astra.png" alt="">
                        <h3>ChAdOx1-S</h3>
                        <div class="price">Covishield</div>
                            <div class="info-vac">
                                <p>Applicable Age and Recommended Dosage:</p>
                                <li>Two-dose primary series for individuals 18 years of age and older.</li>
                                <li>Recommended that priority be given to health workers at high risk of exposure and older people, including those aged 65 or older.</li>
                                <li>The recommended dosage is two doses given intramuscularly (0.5ml each) with an interval of 8 to 12 weeks.</li>
                                <br><p>Possible side effects which typically last for a few days, were:</p>
                                <li>Pain at the injection site</li>
                                <li>Headache</li>
                                <li>Muscle aches</li>
                                <li>Fever</li>
                            </div>
                        <div class="price"><a style="color:#3B4F69;" href="https://www.who.int/news-room/feature-stories/detail/the-oxford-astrazeneca-covid-19-vaccine-what-you-need-to-know?gclid=Cj0KCQiAosmPBhCPARIsAHOen-M7Rde70aYC0SsPSObj0Q1Wq0cWX1tWS-LrEV1oYGADsFaTYytrUKEaAvCCEALw_wcB"> Learn more...</div></a>
                </div>
                <div class="preview" data-target="p-2">
                    <i class="fas fa-times"></i>
                    <img src="images/pfizer.png" alt="">
                        <h3>BNT162b2</h3>
                        <div class="price">Comirnaty</div>
                            <div class="info-vac">
                                <p>Applicable Age and Recommended Dosage:</p>
                                <li>Two-dose primary series for individuals 18 years of age and older.</li>
                                <li>Two-dose primary series for individuals with comorbidities and pregnant.</li>
                                <li>Recommended third additional dose for persons aged 60 and above.</li>
                                <br><p>Possible side effects which typically last for a few days, were:</p>
                                <li>Pain at the injection site</li>
                                <li>Headache</li>
                                <li>Tiredness</li>
                                <li>Nausea and vomiting</li>
                                <li>Fever</li>
                            </div>
                    <div class="price"><a style="color:#3B4F69;" href="https://www.fda.gov/emergency-preparedness-and-response/coronavirus-disease-2019-covid-19/comirnaty-and-pfizer-biontech-covid-19-vaccine"> Learn more...</a></div>
                </div>
                <div class="preview" data-target="p-3">
                    <i class="fas fa-times"></i>
                    <img src="images/moderna.png" alt="">
                        <h3>mRNA-1273</h3>
                        <div class="price">SpikeVax</div>
                            <div class="info-vac">
                                <p>Applicable Age and Recommended Dosage:</p>
                                <li>Two-dose primary series for individuals 18 years of age and older.</li>
                                <li>Third primary series dose for individuals 18 years of age and older who have certain kinds of immunocompromise.</li>
                                <li>Single booster dose for individuals 18 years of age and older at least five months after completing a primary series of the vaccine.</li>
                                <br><p>Possible side effects which typically last for a few days, were:</p>
                                <li>Pain at the injection site</li>
                                <li>Lymph nodes</li>
                                <li>Nausea and vomiting</li>
                                <li>Fever</li>
                            </div>
                    <div class="price"><a style="color:#3B4F69;" href="https://www.fda.gov/emergency-preparedness-and-response/coronavirus-disease-2019-covid-19/moderna-covid-19-vaccine"> Learn more...</div></a>
                </div>
                <div class="preview" data-target="p-4">
                    <i class="fas fa-times"></i>
                    <img src="images/sinovac.png" alt="">
                        <h3>SARS-CoV-2 Vaccine </h3>
                        <div class="price">CoronaVac</div>
                            <div class="info-vac">
                                <p>Applicable Age and Recommended Dosage:</p>
                                <li>Two-dose primary series for individuals 18 years of age and older.</li>
                                <li>Two-dose primary series for individuals with comorbidities and pregnant.</li>
                                <li>Recommended third additional dose for persons aged 60 and above.</li>
                                <br><p>Possible side effects which typically last for a few days, were:</p>
                                <li>Pain at the injection site</li>
                                <li>Headache</li>
                                <li>Tiredness</li>
                                <li>Muscle aches</li>
                            </div>
                        <div class="price"><a style="color:#3B4F69;" href="https://www.who.int/news-room/feature-stories/detail/the-sinovac-covid-19-vaccine-what-you-need-to-know"> Learn more... </div></a>
                </div>
            </div>
            <script src="js/vacin.js"></script>
        </div>
        <div class="col-sm-3">
            

    <div class="trends_container">
        <div class="trends_box1">
            <div class="trends_header">
                <p>Band Aid</p>
                <i class="fas fa-newspaper"></i>
            </div>
            <div class="tweet_box1 tweet_add1">
                <div class="tweet_left1">
                <img src="images/manilatimes.png" id="img-manila" alt=""><br><br>
                <img src="images/philstar.png" id="img-phil" alt=""><br><br><br>
                <img src="images/mb.png" id="img-mb" alt="">
            </div>
            <div class="trends_body">
                <div class="trend">
                <a href="https://www.manilatimes.net/2022/01/29/news/national/feb-4-and-5-jab-days-for-pediatric-kids/1831030"> <p>Feb 4 and 5 jab days for pediatric kids</p></a>
                    <a href="https://www.manilatimes.net/2022/01/29/news/national/feb-4-and-5-jab-days-for-pediatric-kids/1831030"><span>manilatimes.net</span></a>
                </div>
                <div class="trend">
                <a href="https://www.philstar.com/lifestyle/health-and-family/2022/01/27/2156743/list-what-parents-need-know-about-covid-19-vaccine-5-11-years-old"> <p>LIST: What parents need to know about COVID-19 vaccine for 5 to 11 years old</p></a>
                    <a href="https://www.philstar.com/lifestyle/health-and-family/2022/01/27/2156743/list-what-parents-need-know-about-covid-19-vaccine-5-11-years-old"><span>philstar.com</span></a>
                </div>
                <div class="trend">
                <a href="https://mb.com.ph/2022/01/27/phs-vaccine-hesitancy-down-to-5-says-octa/"><p>PH’s vaccine hesitancy down to 5%, says OCTA</p></a>
                    <a href="https://mb.com.ph/2022/01/27/phs-vaccine-hesitancy-down-to-5-says-octa/"><span>mb.com.ph</span></a>
                </div>
                <div class="trends_show-more">
                    <a href="">show more</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
</html>