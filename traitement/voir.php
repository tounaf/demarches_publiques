<?php

include('../connexion/connexion.php');

if (!empty($_GET["id"])) {
 	$id = $_GET["id"];

	 $sqlVoir = "SELECT * FROM passager p
		LEFT JOIN demande_billet db ON p.id = db.passager_id
		LEFT JOIN profession pf ON p.profession_id = pf.id
		LEFT JOIN symptome_has_passager shp ON p.id = shp.passager_id
		LEFT JOIN symptome s ON shp.symptome_id= s.id
		LEFT JOIN civilite c ON p.civilite_id = c.id
		LEFT JOIN information_adresse ia ON p.information_adresse_id = ia.id
		WHERE p.id = $id";

		 $result = $conn->query($sqlVoir);
	     $data = $result->fetch();
	}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../assets/css/main.css" rel="stylesheet" media="all">
    <link rel="shortcut icon" href="../assets/favicon/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap5/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../assets/bootstrap5/css/bootstrap.min.css">

    <!-- Fonts & Fonticons -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/fonticons/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="../assets/fonticons/css/font-awesome.min.css">


</head>
<style type="text/css">
  html {
  scroll-behavior: smooth;
}

h1, h2, h3, h4, p {
    font-family: "Poppins", Arial, sans-serif;
}

h1, h2, h3, h4 {
    color: #ec3d3a;
}

</style>

<body>




    <div class="page-wrapper" id="section1">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-body" >


  <section class="section_top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <a href="../dashboard.php">
           <button type="button" class="btn btn-info" style="border-radius: 50%; margin-top: 10px;">
              <i class="fa fa-home" style="color: white;"></i>
           </button>
        </a>
        </div>
      </div>
    </div>
  </section>

              <!-- <form method="POST" action="traitement/traitementEnglshFormSubmission.php"> -->


                  <div id="part1">
                      <!-- GENERAL INFORMATION -->
                      <h3 class="form_title">1ST STEP - GENERAL INFORMATION</h3>
                      <p class="form_paragraph">Please provide your address</p>
                        <div class="form-row">
                            <div class="name">Permanent address (*)</div>
                            <div class="value">
                                <input disabled class="input--style-6" type="text" name="adresse_permanent" value="<?= isset($data["adresse_permanent"])? $data["adresse_permanent"]: '' ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">City (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" type="" value="<?= isset($data["ville"])? $data["ville"]: '' ?>" name="ville" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">State (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" type="" value="<?= isset($data["etat"])? $data["etat"]: '' ?>" name="etat" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Zip code (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" type="" value="<?= isset($data["code_postal"])? $data["code_postal"]: '' ?>" name="code_postal" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Arrival or Departure (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6 select_style" value="<?= isset($data["type_voyage"])? $data["type_voyage"]: '' ?>" name="type_voyage" id="movement" onclick="myMovement()">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Do you make stops in other countries ? (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6 select_style" value="<?= isset($data["is_arret_frequent"])? $data["is_arret_frequent"]: '' ?>" name="is_arret_frequent" id="stopcountry" onclick="stopCountry()">
                                </div>
                            </div>
                        </div>


                        <!-- PASSENGER INFORMATION -->
                        <h3 class="form_title">PASSENGER INFORMATION</h3>
                        <div class="form-row">
                            <div class="name">Names (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" type="" value="<?= isset($data["noms"])? $data["noms"] : ''  ?>" name="noms" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Last Names (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" type="" value="<?= isset($data["nom_famille"])? $data["nom_famille"]: '' ?>" name="nom_famille" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Date of birth (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" type="date" value="<?= isset($data["date_naissance"])? $data["date_naissance"]: '' ?>" name="date_naissance">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Gender (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6 select_style" value="<?= isset($data["genre"])? $data["genre"]: '' ?>" name="genre">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Country of birth (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" type="" value="<?= isset($data["pays_naissance"])? $data["pays_naissance"]: '' ?>" name="pays_naissance" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Country of nationality (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" type="" value="<?= isset($data["pays_nationnalite"])? $data["pays_nationnalite"]: '' ?>" name="pays_nationnalite" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Passport number (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" value="<?= isset($data["numero_passport"])? $data["numero_passport"]: '' ?>" type="" name="numero_passport" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Civil status (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled value="<?= isset($data["etat_civil"])? $data["etat_civil"]: '' ?>" name="etat_civil" class="input--style-6 select_style">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Ocupation (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6 select_style" value="<?= isset($data["libelle"])? $data["libelle"]: '' ?>" name="libelle">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Are you going to stay at a hotel?  (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6 select_style" value="<?= isset($data["accept_sejour_hotel"])? $data["accept_sejour_hotel"]: '' ?>" name="accept_sejour_hotel"  id="operation1" onclick="myOperation1()">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" id="r_yes1" >
                            <div class="name"><span class="name_option">Hotel name (*)</span></div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" type="" value="<?= isset($data["hotel_name"])? $data["hotel_name"]: '' ?>" name="hotel_name" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div id="r_no1" >
                          <div class="form-row">
                              <div class="name"><span class="name_option">PROVINCE  (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6 select_style" value="<?= isset($data["province"])? $data["province"]: '' ?>" name="province">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">MUNICIPALITY (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6" type="" value="<?= isset($data["municipality"])? $data["municipality"]: '' ?>" name="municipality" placeholder="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">SECTION</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6" type="" value="<?= isset($data["section"])? $data["section"]: '' ?>" name="section" placeholder="">
                                  </div>
                              </div>
                          </div>
                        </div>


                        <!-- FLIGHT INFORMATION -->
                        <!-- Arrival Condition Begin -->
                        <div id="r_arrival" >
                          <!-- "Do you make stops in other countries" = NO -->
                          <div id="r_no3" >
                            <h3 class="form_title">
                                FLIGHT INFORMATION <br>
                                Arrival / "Do you make stops in other countries" = NO
                            </h3>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Name of the boarding port (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="" value="<?= isset($data["name_board_port"])? $data["name_board_port"]: '' ?>" name="name_board_port" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight number (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="" value="<?= isset($data["flight_number"])? $data["flight_number"]: '' ?>" name="flight_number" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight date (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="date" value="<?= isset($data["flight_date"])? $data["flight_date"]: '' ?>" name="flight_date">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Disembarkation port (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6 select_style" value="<?= isset($data["disembarkation_port"])? $data["disembarkation_port"]: '' ?>" name="disembarkation_port">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Transportation company (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="" value="<?= isset($data["transportation_company"])? $data["transportation_company"]: '' ?>" name="transportation_company" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Travel purpose (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6 select_style" value="<?= isset($data["travel_purpose"])? $data["travel_purpose"]: '' ?>" name="travel_purpose">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Days of staying (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="" value="<?= isset($data["days_staying"])? $data["days_staying"]: '' ?>" name="days_staying" placeholder="">
                                    </div>
                                </div>
                            </div>
                          </div>
                          <!-- "Do you make stops in other countries" = NO -->

                          <!--  <br> -->
                          <div id="r_yes3" >
                            <h3 class="form_title">
                                FLIGHT INFORMATION <br>
                                Arrival / "Do you make stops in other countries" = YES
                            </h3>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Origin Port (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="" value="<?= isset($data["origin_port"])? $data["origin_port"]: '' ?>" name="origin_port" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight number (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="" value="<?= isset($data["flight_number_yes"])? $data["flight_number_yes"]: '' ?>" name="flight_number_yes" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight date (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="date" value="<?= isset($data["flight_date_yes"])? $data["flight_date_yes"]: '' ?>" name="flight_date_yes">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Name of the boarding port (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="" value="<?= isset($data["boarding_port_yes"])? $data["boarding_port_yes"]: '' ?>" name="boarding_port_yes">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight number (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="" value="<?= isset($data["flight_number_yes_2"])? $data["flight_number_yes_2"]: '' ?>" name="flight_number_yes_2" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Flight date (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="date" value="<?= isset($data["flight_date_yes_2"])? $data["flight_date_yes_2"]: '' ?>" name="flight_date_yes_2">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Disembarkation port (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6 select_style" value="<?= isset($data["disembarkation_port_yes"])? $data["disembarkation_port_yes"]: '' ?>" name="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Transportation company (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="" value="<?= isset($data["transportation_company_yes"])? $data["transportation_company_yes"]: '' ?>" name="transportation_company_yes" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Travel purpose (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6 select_style" value="<?= isset($data["travel_purpose_yes"])? $data["travel_purpose_yes"]: '' ?>" name="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name"><span class="name_option">Days of staying (*)</span></div>
                                <div class="value">
                                    <div class="input-group">
                                        <input disabled class="input--style-6" type="" value="<?= isset($data["days_staying_yes"])? $data["days_staying_yes"]: '' ?>" name="days_staying_yes" placeholder="">
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <!-- "Do you make stops in other countries" = YES -->

                        <!-- Arrival Condition End -->

                        <!-- Departure Condition Begin -->
                        <div id="r_departure" >
                          <h3 class="form_title">
                            FLIGHT INFORMATION <br>
                            Departure
                        </h3>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Name of the boarding port (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6 select_style" value="<?= isset($data["boarding_port_departure"])? $data["boarding_port_departure"]: '' ?>" name="boarding_port_departure">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Flight number (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6" type="" value="<?= isset($data["flight_number_departure"])? $data["flight_number_departure"]: '' ?>" name="flight_number_departure" placeholder="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Flight date (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6" value="<?= isset($data["flight_date_departure"])? $data["flight_date_departure"]: '' ?>" type="date" name="flight_date_departure">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Disembarkation port  (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6" type="" value="<?= isset($data["disemarkation_port_departure"])? $data["disemarkation_port_departure"]: '' ?>" name="disemarkation_port_departure" placeholder="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Transportation company (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6" type="" value="<?= isset($data["transportation_company_departure"])? $data["transportation_company_departure"]: '' ?>" name="transportation_company_departure" placeholder="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Travel purpose (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6 select_style" value="<?= isset($data["travel_purpose_departure"])? $data["travel_purpose_departure"]: '' ?>" name="travel_purpose_departure">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">Days of staying (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6" type="" value="<?= isset($data["days_staying_departure"])? $data["days_staying_departure"]: '' ?>" name="days_staying_departure" placeholder="">
                                  </div>
                              </div>
                          </div>
                        </div>
                        <!-- Departure Condition End -->


            </div>

            <!-- PARTIE 2 du formulaire -->

            <div  id="part2">

          <!-- FINAL STEP -->
          <!-- <div> SCRIPT JS : Begin 2nd part of FORM -->




                          <h3 class="form_title">FINAL STEP - Customs and public health information</h3>
                        <div class="form-row">
                            <div class="name">Do you bring with you or in your luggage a sum of money or other means of payment exceeding USD 10,000 or the equivalent in another currency?</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" type="" value="<?= isset($data["apportMontant"])? $data["apportMontant"]: '' ?>" name="apportMontant" placeholder="">
                                </div>
                            </div>
                        </div>
                        <!-- yes condition begin -->
                        <div id="r_yes2" >
                          <div class="form-row">
                              <div class="name"><span class="name_option">AMMOUNT (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6" type="" value="<?= isset($data["ammount"])? $data["ammount"]: '' ?>" name="ammount" placeholder="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">CURRENCY (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6" type="" value="<?= isset($data["currency"])? $data["currency"]: '' ?>" name="currency" placeholder="">
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name"><span class="name_option">DECLARE ORIGIN OF THE SECURITIES (*)</span></div>
                              <div class="value">
                                  <div class="input-group">
                                      <input disabled class="input--style-6" type="" value="<?= isset($data["declare_origin_security"])? $data["declare_origin_security"]: '' ?>" name="declare_origin_security" placeholder="">
                                  </div>
                              </div>
                          </div>
                        </div>
                        <!-- yes condition end -->
                        <div class="form-row">
                            <div class="name">Do you bring food, plants or animals with you or in your luggage?</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6 select_style" value="<?= isset($data["apport_nourriture"])? $data["apport_nourriture"]: '' ?>" name="apport_nourriture">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Do you bring taxable goods with you or in your luggage? </div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6 select_style" value="<?= isset($data["apport_marchandise_taxable"])? $data["apport_marchandise_taxable"]: '' ?>" name="apport_marchandise_taxable">
                                </div>
                            </div>
                        </div>





                        <!-- FINAL STEP SUITE -->
                        <h3 class="form_title">PUBLIC HEALTH</h3>
                        <p>Reporting of symptoms</p>
                        <p>Which of the following symptoms have you experienced in the last 72 hours? (*)</p>
                        <div class="form-row">
                            <table>
                              <tr>
                              	<?php
	                            	if ($data["none"] == "true") {
	                            		$none = true;
	                            	} else{
	                            		$none = false;
	                            	}
                            	?>
                                <td><input disabled class="" type="checkbox" <?= $none? "checked": ""  ?> name="none"><p>None</p></td>
                                <?php
                                	if ($data["sorethoat"] == "true") {
	                            		$sorethoat = true;
	                            	} else {
	                            		$sorethoat = false;
	                            	}
                                 ?>
                                <td><input disabled class="" type="checkbox" <?= $sorethoat? "checked": ''  ?> name="sorethoat"><p>Sore throat</p></td>
                                 <?php
                                    if ($data["muscle_paain"] == "true") {
                                        $muscle_paain = true;
                                    } else {
                                        $muscle_paain = false;
                                    }
                                 ?>
                                <td><input disabled class="" type="checkbox" <?= $muscle_paain? "checked": ''  ?> name="muscle_paain"><p>Muscle pain</p></td>
                              </tr>

                              <tr>
                                 <?php
                                    if ($data["headache"] == "true") {
                                        $headache = true;
                                    } else {
                                        $headache = false;
                                    }
                                 ?>
                                <td><input disabled class="" type="checkbox" <?= $headache? "checked": ''  ?> name="headache"><p>Headache</p></td>

                                <?php
                                    if ($data["runny_nose"] == "true") {
                                        $runny_nose = true;
                                    } else {
                                        $runny_nose = false;
                                    }
                                 ?>
                                <td><input disabled class="" type="checkbox" <?= $runny_nose? "checked": ''  ?> name="runny_nose"><p>Runny nose</p></td>


                                 <?php
                                    if ($data["cough"] == "true") {
                                        $cough = true;
                                    } else {
                                        $cough = false;
                                    }
                                 ?>
                                <td><input disabled class="" type="checkbox" <?= $cough? "checked": ''  ?> name="cough"><p>Cough</p></td>
                              </tr>

                              <tr>
                                <?php
                                    if ($data["shaking_chills"] == "true") {
                                        $shaking_chills = true;
                                    } else {
                                        $shaking_chills = false;
                                    }
                                 ?>
                                <td><input disabled class="" type="checkbox" <?= $shaking_chills? "checked": ''  ?> name="shaking_chills"><p>Shaking chills</p></td>
                                 <?php
                                    if ($data["breathing_difficulty"] == "true") {
                                        $breathing_difficulty = true;
                                    } else {
                                        $breathing_difficulty = false;
                                    }
                                 ?>
                                <td><input disabled class="" type="checkbox" <?= $breathing_difficulty? "checked": ''  ?> name="breathing_difficulty"><p>Breathing difficulty</p></td>
                                 <?php
                                    if ($data["fatigue"] == "true") {
                                        $fatigue = true;
                                    } else {
                                        $fatigue = false;
                                    }
                                 ?>
                                <td><input disabled class="" type="checkbox" <?= $fatigue? "checked": ''  ?> name="fatigue"><p>Fatigue</p></td>
                              </tr>
                              <tr>
                                <?php
                                    if ($data["fever"] == "true") {
                                        $fever = true;
                                    } else {
                                        $fever = false;
                                    }
                                 ?>
                                <td><input disabled class="" type="checkbox" <?= $fever? "checked": ''  ?> name="fever"><p>Fever</p></td>
                              </tr>
                            </table>
                        </div>


                        <!-- CONTACT DETAILS -->
                        <h3 class="form_title">YOUR CONTACT DETAILS</h3>
                        <div class="form-row">
                            <div class="name">Your e-mail address to receive your E-ticket (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" type="mail" value="<?= isset($data["email"])? $data["email"]: '' ?>" name="email" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Your phone number (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input disabled class="input--style-6" type="test" value="<?= isset($data["numero"])? $data["numero"]: '' ?>" name="numero" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <?php
                                    if ($data["accept_condition_generale"] == "true") {
                                        $accept_condition_generale = true;
                                    } else {
                                        $accept_condition_generale = false;
                                    }
                                 ?>
                            <div class="name"><input disabled <?= $accept_condition_generale? "checked": ''  ?> value="false" type="checkbox" name="accept_condition_generale"></div>
                            <div class="value">
                                <div class="input-group">
                                    <span>I accept the general conditions of sale and use and I certify on my honour the accuracy of the information provided. It's reminded that any person making a false declaration on behalf of himself or herself or another person may be liable to the penalties provided for in articles 441-1 of the penal code and following. </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <?php
                                    if ($data["demande_immediat"] == "true") {
                                        $demande_immediat = true;
                                    } else {
                                        $demande_immediat = false;
                                    }
                                 ?>
                            <div class="name"><input disabled value="false" <?= $demande_immediat? "checked": ''  ?> type="checkbox" name="demande_immediat"></div>
                            <div class="value">
                                <div class="input-group">
                                    <span>I would like my E-ticket request to start immediately. I expressly waive my right of withdrawal so that the service can begin before the end of the legal withdrawal period.</span>
                                </div>
                            </div>
                        </div>
          </div>

              </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <!-- Main JS-->
    <script src="../assets/js/global.js"></script>

</body>

</html>
