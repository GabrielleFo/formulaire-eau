<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Prestation </title>
  
    <link rel="stylesheet" href="styles.css">
</head>
<body>
   
    <div class="container">

        <form action="index.php">
                    <button class="precedent">Revenir à l'accueil</button>
        </form>


        <h1> TAUX DE TVA APPLICABLE AUX PRESTATIONS RELATIVES A L’EAU</h1>
       
        <form id="prestationForm">
            <!-- Question 1 -->
            <label for="question1">1-La prestation concerne-t-elle des travaux d'analyses sur <abbr title="
            Travaux d'analyses sur l'eau  : 
                ⦁       Gestion du service d'abonnés
                ⦁	Études, travaux d'analyses ou de contrôle sanitaire (prélèvements, analyses physiques, bactériologiques, etc.)
                ⦁	Surveillance de la potabilité de l'eau, jaugeage, contrôle sanitaire de l'eau
                ⦁	Mesures de débit
                ⦁	Mesures de paramètres physicochimiques
                ⦁	Assainissement ou traitement de l'eau
                ⦁	Transport des eaux usées"style="font-weight: bold;font-size:20px;">l'eau</abbr> ou <abbr title="
                Travaux d'analyses sur les installations : 
                ⦁	Balayage et nettoyage des caniveaux à l'occasion de l'entretien des réseaux d'égouts
                ⦁	Curage et nettoyage des réseaux municipaux d'égouts et des stations d'épuration
                ⦁	Dératisation, désinfection, désinsectisation, désodorisation, détartrage des installations publiques du réseau municipal
                ⦁	Enlèvement des obstacles à l'intérieur de ces installations ainsi que leur entretien, étanchement des joints, inspection
                ⦁	Entretien des installations publiques
                ⦁	Études et enquêtes sur les stations d'épuration
                ⦁	Évacuation et transport des boues extraites des stations d'épuration
                ⦁	Élimination des boues d'épuration
                ⦁	Suppression des fuites d'eau
                ⦁	Vidanges de cuvettes de décantation des égouts municipaux
                ⦁	Services rendus dans le cadre des contrats d'abonnement proposés par les sociétés d'économie d'eau"style="font-weight: bold;font-size:20px;">les installations</abbr> nécessaires au service public municipal de l'eau ou de l’assainissement (collectif ou non collectif) ou un contrôle sanitaire ?</label><br>
            <input type="radio" id="q1_yes" name="question1" value="yes" onclick="handleQuestion1('yes')"> Oui<br>
            <input type="radio" id="q1_no" name="question1" value="no" onclick="handleQuestion1('no')"> Non<br>
             <!-- Question 1-1 -->
             <div id="question1-2" class="hidden">
                <label for="question1-2">1-2 La prestation concerne t'elle des travaux d'analyses sur l'eau sur un navire  ?</label><br>
                <input type="radio" id="q1-2_yes" name="question1-2" value="yes" onclick="handleSubQuestion1('yes')"> Oui<br>
                <input type="radio" id="q1-2_no" name="question1-2" value="no" onclick="handleSubQuestion1('no')"> Non<br>
            </div>
             <!-- Question 1-2 -->
             <div id="checkboxes" class="hidden">
                <label> conditions du navire : </label><br>
                <p class="condition">Veuillez vérifier auprès du client les informations nécessaires. <a href="https://bofip.impots.gouv.fr/bofip/9765-PGP.html/identifiant=BOI-LETTRE-000235-20190109" target="_blank">Attestation ici</a>.</p>
                <input type="checkbox" class="nav-checkbox" id="cb1" name="checkbox1"data-checkbox> navire inscrit à un registre commercial<br>
                <input type="checkbox" class="nav-checkbox"id="cb2" name="checkbox2"data-checkbox> navire doté d'un équipage permanent<br>
                <input type="checkbox" class="nav-checkbox"id="cb3" name="checkbox3"data-checkbox> navire exclusivement affecté à une activité<br>
                <input type="checkbox" class="nav-checkbox"id="cb4" name="checkbox4"data-checkbox> navire mesurant au moins 15 m de long<br>
                <input type="checkbox" id="cb5" name="checkbox5"data-checkbox> navire effectuant au moins 70% de ses trajets en dehors des eaux territoriales françaises<br>
              
            </div>
            <div id="yes-no-question" class="hidden">
                <label for="yes-no-question">1-3 Avez vous coché toutes les propositions au dessus ?</label><br>
                <input type="radio" id="yes-no-yes" name="yes-no-question" value="yes" onclick="handleYesNo('yes')"> Oui<br>
                <input type="radio" id="yes-no-no" name="yes-no-question" value="no" onclick="handleYesNo('no')"> Non<br>
            </div>
            <!-- Question 2 -->
            <div id="question2" class="hidden">
                <label for="question2">2-La prestation est-elle effectuée pour permettre à la commune d'assurer <abbr title="Gestion du service public municipal de l'eau :
⦁	Captage : Prélèvement de l'eau dans une ressource naturelle (rivière, nappe phréatique, etc.).
⦁	Traitement : Processus visant à rendre l'eau potable (filtration, désinfection, etc.).
⦁	Adduction : Transport de l'eau depuis son point de captage jusqu'aux réservoirs ou aux stations de traitement.
⦁	Distribution : Acheminement de l'eau potable jusqu'aux usagers finaux (habitants, industries, etc.).
⦁	Évacuation : Collecte des eaux usées pour les diriger vers les stations de traitement.
⦁	Assainissement : Ensemble des opérations visant à traiter et épurer les eaux usées avant leur rejet dans le milieu naturel."style="font-weight: bold;font-size:20px;"> la gestion du service public municipal de l'eau ou de l'assainissement </abbr>?</label><br>
                <input type="radio" id="q2_yes" name="question2" value="yes" onclick="handleQuestion2('yes')"> Oui<br>
                <input type="radio" id="q2_no" name="question2" value="no" onclick="handleQuestion2('no')"> Non<br>
            </div>

            <!-- Question 3 -->
            <div id="question3" class="hidden">
                <label for="question3">3-Type de cours d'eau : L'analyse concerne-t-elle des cours d'eau (domaniaux ou non domaniaux), canaux de navigation, rivières canalisées, étangs, lacs domaniaux, eaux embouteillées, etc. ?</label><br>
                <input type="radio" id="q3_yes" name="question3" value="yes" onclick="handleQuestion3('yes')"> Oui<br>
                <input type="radio" id="q3_no" name="question3" value="no" onclick="handleQuestion3('no')"> Non<br>
            </div>

            <!-- Question 4 -->
            <div id="question4" class="hidden">
                <label for="question4">4-Entité responsable : Qui est le commanditaire de l'analyse ?</label><br>
                <input type="radio" id="q4_commune" name="question4" value="commune" onclick="handleQuestion4('commune')"> Commune ou groupement de communes exploitant le service municipal de l’eau lui-même<br>
                <input type="radio" id="q4_ars" name="question4" value="ars" onclick="handleQuestion4('ars')"> Agence Régionale de Santé (ARS)<br>
                <input type="radio" id="q4_entreprise" name="question4" value="entreprise" onclick="handleQuestion4('entreprise')"> Entreprise privée<br>
                <input type="radio" id="q4_particulier" name="question4" value="particulier" onclick="handleQuestion4('particulier')"> Particulier<br>
            </div>

            <!-- Question 4.1 for Entreprise privée -->
            <div id="question4_1_entreprise" class="hidden">
                <label for="question4_1_entreprise">4-1 L'analyse est-elle réalisée dans le cadre d'un contrat avec la commune pour la gestion du service public municipal de l'eau ou de l'assainissement ?</label><br>
                <input type="radio" id="q4_1_entreprise_yes" name="question4_1" value="yes" onclick="handleQuestion4_1('yes')"> Oui<br>
                <input type="radio" id="q4_1_entreprise_no" name="question4_1" value="no" onclick="handleQuestion4_1('no')"> Non<br>
            </div>

            <!-- Question 4.1 for Particulier -->
            <div id="question4_1_particulier" class="hidden">
                <label for="question4_1_particulier">4-1 L'analyse est-elle réalisée pour un particulier dans le cadre de la gestion municipale du service public de l'eau ou de l'assainissement ?</label><br>
                <input type="radio" id="q4_1_particulier_yes" name="question4_1" value="yes" onclick="handleQuestion4_1('yes')"> Oui<br>
                <input type="radio" id="q4_1_particulier_no" name="question4_1" value="no" onclick="handleQuestion4_1('no')"> Non<br>
            </div>

            <!-- Question 5 -->
            <div id="question5" class="hidden">
                <label for="question5">5-La prestation fait-elle partie d'une opération d'ensemble ayant le caractère de travaux immobiliers ?</label><br>
                <input type="radio" id="q5_yes" name="question5" value="yes" onclick="handleQuestion5('yes')"> Oui<br>
                <input type="radio" id="q5_no" name="question5" value="no" onclick="handleQuestion5('no')"> Non<br>
            </div>

            <!-- Result -->
            <div id="result20" class="hidden">
                Le taux applicable est de 20%.
            </div>
            <div id="result10" class="hidden">
                Le taux applicable est de 10%.
            </div>
            <div id="result0" class="hidden">
                Le taux applicable est de 0%.
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>