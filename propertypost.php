<!doctype html>
<html lang="en-US">
<head>
    <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
</head>
<body style="background: ghostwhite">
<script src="js/dropdown.js"></script>
<?php include "header.php"?>
<!--header ends-->
<!--Breadcumb Start-->
<br>
<div class="container">
    <ol class="breadcrumb" style="background: darkblue">
        <li class="breadcrumb-item" >
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Post-Property</li>
    </ol>
</div>
<!--Breadcumb End-->
<div class="container">
    <div class="row">
        <div class="col-md-offset-1 col-md-12 col-md-offset-1" style="background-color:  #fdfdfe;margin-left: 17px" >
            <b><h2 style="color: #008000">PropertyInfo:-</h2></b><br>
            <form class="form-inline" action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Property For</label>&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="property_for"  class="radio-inline "  value="sell" required> Sale
                    <input type="radio" name="property_for" class="radio-inline" value="rent" required> Rent
                </div>
                <br><br>
                <div id="PropertyType" class="form-group">
                    <label>Property Type</label>&nbsp;
                    <select id="Property" name="property_type" class="form-control" onchange="DropDownChange();" required>
                        <div id = "drop">
                        <option value="FLAT">Flat</option>
                        <option value="VILLA">Villa</option>
                            <option value="PLOT"> Plot</option></div>
                    </select>
<!--                    <script type="text/javascript">-->
<!--                        $( document ).ready(function() {-->
<!--                           $("#drop").option:selected(value="flats");-->
<!--                            //$("option:selected", value="flats");{-->
<!--                                $("#l").hide();-->
<!--                            });-->
<!--                        });-->
<!--                    </script>-->
                </div>
                <b><h2 style="color: #008000">Location:-</h2></b><br>
                <div class="form-group">

                    <label>City</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select class="form-control" name="city" required>
                        <option value='Adilabad'>Adilabad</option>
                        <option value='Agra'>Agra</option>
                        <option value='Ahmedabad'>Ahmedabad</option>
                        <option value='Ahmednagar'>Ahmednagar</option>
                        <option value='Aizawl'>Aizawl</option>
                        <option value='Ajitgarh (Mohali)'>Ajitgarh (Mohali)</option>
                        <option value='Ajmer'>Ajmer</option>
                        <option value='Akola'>Akola</option>
                        <option value='Alappuzha'>Alappuzha</option>
                        <option value='Aligarh'>Aligarh</option>
                        <option value='Alirajpur'>Alirajpur</option>
                        <option value='Allahabad'>Allahabad</option>
                        <option value='Almora'>Almora</option>
                        <option value='Alwar'>Alwar</option>
                        <option value='Ambala'>Ambala</option>
                        <option value='Ambedkar Nagar'>Ambedkar Nagar</option>
                        <option value='Amravati'>Amravati</option>
                        <option value='Amreli district'>Amreli district</option>
                        <option value='Amritsar'>Amritsar</option>
                        <option value='Anand'>Anand</option>
                        <option value='Anantapur'>Anantapur</option>
                        <option value='Anantnag'>Anantnag</option>
                        <option value='Angul'>Angul</option>
                        <option value='Anjaw'>Anjaw</option>
                        <option value='Anuppur'>Anuppur</option>
                        <option value='Araria'>Araria</option>
                        <option value='Ariyalur'>Ariyalur</option>
                        <option value='Arwal'>Arwal</option>
                        <option value='Ashok Nagar'>Ashok Nagar</option>
                        <option value='Auraiya'>Auraiya</option>
                        <option value='Aurangabad'>Aurangabad</option>
                        <option value='Aurangabad'>Aurangabad</option>
                        <option value='Azamgarh'>Azamgarh</option>
                        <option value='Badgam'>Badgam</option>
                        <option value='Bagalkot'>Bagalkot</option>
                        <option value='Bageshwar'>Bageshwar</option>
                        <option value='Bagpat'>Bagpat</option>
                        <option value='Bahraich'>Bahraich</option>
                        <option value='Baksa'>Baksa</option>
                        <option value='Balaghat'>Balaghat</option>
                        <option value='Balangir'>Balangir</option>
                        <option value='Balasore'>Balasore</option>
                        <option value='Ballia'>Ballia</option>
                        <option value='Balrampur'>Balrampur</option>
                        <option value='Banaskantha'>Banaskantha</option>
                        <option value='Banda'>Banda</option>
                        <option value='Bandipora'>Bandipora</option>
                        <option value='Bangalore Rural'>Bangalore Rural</option>
                        <option value='Bangalore Urban'>Bangalore Urban</option>
                        <option value='Banka'>Banka</option>
                        <option value='Bankura'>Bankura</option>
                        <option value='Banswara'>Banswara</option>
                        <option value='Barabanki'>Barabanki</option>
                        <option value='Baramulla'>Baramulla</option>
                        <option value='Baran'>Baran</option>
                        <option value='Bardhaman'>Bardhaman</option>
                        <option value='Bareilly'>Bareilly</option>
                        <option value='Bargarh (Baragarh)'>Bargarh (Baragarh)</option>
                        <option value='Barmer'>Barmer</option>
                        <option value='Barnala'>Barnala</option>
                        <option value='Barpeta'>Barpeta</option>
                        <option value='Barwani'>Barwani</option>
                        <option value='Bastar'>Bastar</option>
                        <option value='Basti'>Basti</option>
                        <option value='Bathinda'>Bathinda</option>
                        <option value='Beed'>Beed</option>
                        <option value='Begusarai'>Begusarai</option>
                        <option value='Belgaum'>Belgaum</option>
                        <option value='Bellary'>Bellary</option>
                        <option value='Betul'>Betul</option>
                        <option value='Bhadrak'>Bhadrak</option>
                        <option value='Bhagalpur'>Bhagalpur</option>
                        <option value='Bhandara'>Bhandara</option>
                        <option value='Bharatpur'>Bharatpur</option>
                        <option value='Bharuch'>Bharuch</option>
                        <option value='Bhavnagar'>Bhavnagar</option>
                        <option value='Bhilwara'>Bhilwara</option>
                        <option value='Bhind'>Bhind</option>
                        <option value='Bhiwani'>Bhiwani</option>
                        <option value='Bhojpur'>Bhojpur</option>
                        <option value='Bhopal'>Bhopal</option>
                        <option value='Bidar'>Bidar</option>
                        <option value='Bijapur'>Bijapur</option>
                        <option value='Bijapur'>Bijapur</option>
                        <option value='Bijnor'>Bijnor</option>
                        <option value='Bikaner'>Bikaner</option>
                        <option value='Bilaspur'>Bilaspur</option>
                        <option value='Bilaspur'>Bilaspur</option>
                        <option value='Birbhum'>Birbhum</option>
                        <option value='Bishnupur'>Bishnupur</option>
                        <option value='Bokaro'>Bokaro</option>
                        <option value='Bongaigaon'>Bongaigaon</option>
                        <option value='Boudh (Bauda)'>Boudh (Bauda)</option>
                        <option value='Budaun'>Budaun</option>
                        <option value='Bulandshahr'>Bulandshahr</option>
                        <option value='Buldhana'>Buldhana</option>
                        <option value='Bundi'>Bundi</option>
                        <option value='Burhanpur'>Burhanpur</option>
                        <option value='Buxar'>Buxar</option>
                        <option value='Cachar'>Cachar</option>
                        <option value='Central Delhi'>Central Delhi</option>
                        <option value='Chamarajnagar'>Chamarajnagar</option>
                        <option value='Chamba'>Chamba</option>
                        <option value='Chamoli'>Chamoli</option>
                        <option value='Champawat'>Champawat</option>
                        <option value='Champhai'>Champhai</option>
                        <option value='Chandauli'>Chandauli</option>
                        <option value='Chandel'>Chandel</option>
                        <option value='Chandigarh'>Chandigarh</option>
                        <option value='Chandrapur'>Chandrapur</option>
                        <option value='Changlang'>Changlang</option>
                        <option value='Chatra'>Chatra</option>
                        <option value='Chennai'>Chennai</option>
                        <option value='Chhatarpur'>Chhatarpur</option>
                        <option value='Chhatrapati Shahuji Maharaj Nagar'>Chhatrapati Shahuji Maharaj Nagar</option>
                        <option value='Chhindwara'>Chhindwara</option>
                        <option value='Chikkaballapur'>Chikkaballapur</option>
                        <option value='Chikkamagaluru'>Chikkamagaluru</option>
                        <option value='Chirang'>Chirang</option>
                        <option value='Chitradurga'>Chitradurga</option>
                        <option value='Chitrakoot'>Chitrakoot</option>
                        <option value='Chittoor'>Chittoor</option>
                        <option value='Chittorgarh'>Chittorgarh</option>
                        <option value='Churachandpur'>Churachandpur</option>
                        <option value='Churu'>Churu</option>
                        <option value='Coimbatore'>Coimbatore</option>
                        <option value='Cooch Behar'>Cooch Behar</option>
                        <option value='Cuddalore'>Cuddalore</option>
                        <option value='Cuttack'>Cuttack</option>
                        <option value='Dadra and Nagar Haveli'>Dadra and Nagar Haveli</option>
                        <option value='Dahod'>Dahod</option>
                        <option value='Dakshin Dinajpur'>Dakshin Dinajpur</option>
                        <option value='Dakshina Kannada'>Dakshina Kannada</option>
                        <option value='Daman'>Daman</option>
                        <option value='Damoh'>Damoh</option>
                        <option value='Dantewada'>Dantewada</option>
                        <option value='Darbhanga'>Darbhanga</option>
                        <option value='Darjeeling'>Darjeeling</option>
                        <option value='Darrang'>Darrang</option>
                        <option value='Datia'>Datia</option>
                        <option value='Dausa'>Dausa</option>
                        <option value='Davanagere'>Davanagere</option>
                        <option value='Debagarh (Deogarh)'>Debagarh (Deogarh)</option>
                        <option value='Dehradun'>Dehradun</option>
                        <option value='Deoghar'>Deoghar</option>
                        <option value='Deoria'>Deoria</option>
                        <option value='Dewas'>Dewas</option>
                        <option value='Dhalai'>Dhalai</option>
                        <option value='Dhamtari'>Dhamtari</option>
                        <option value='Dhanbad'>Dhanbad</option>
                        <option value='Dhar'>Dhar</option>
                        <option value='Dharmapuri'>Dharmapuri</option>
                        <option value='Dharwad'>Dharwad</option>
                        <option value='Dhemaji'>Dhemaji</option>
                        <option value='Dhenkanal'>Dhenkanal</option>
                        <option value='Dholpur'>Dholpur</option>
                        <option value='Dhubri'>Dhubri</option>
                        <option value='Dhule'>Dhule</option>
                        <option value='Dibang Valley'>Dibang Valley</option>
                        <option value='Dibrugarh'>Dibrugarh</option>
                        <option value='Dima Hasao'>Dima Hasao</option>
                        <option value='Dimapur'>Dimapur</option>
                        <option value='Dindigul'>Dindigul</option>
                        <option value='Dindori'>Dindori</option>
                        <option value='Diu'>Diu</option>
                        <option value='Doda'>Doda</option>
                        <option value='Dumka'>Dumka</option>
                        <option value='Dungapur'>Dungapur</option>
                        <option value='Durg'>Durg</option>
                        <option value='East Champaran'>East Champaran</option>
                        <option value='East Delhi'>East Delhi</option>
                        <option value='East Garo Hills'>East Garo Hills</option>
                        <option value='East Khasi Hills'>East Khasi Hills</option>
                        <option value='East Siang'>East Siang</option>
                        <option value='East Sikkim'>East Sikkim</option>
                        <option value='East Singhbhum'>East Singhbhum</option>
                        <option value='Eluru'>Eluru</option>
                        <option value='Ernakulam'>Ernakulam</option>
                        <option value='Erode'>Erode</option>
                        <option value='Etah'>Etah</option>
                        <option value='Etawah'>Etawah</option>
                        <option value='Faizabad'>Faizabad</option>
                        <option value='Faridabad'>Faridabad</option>
                        <option value='Faridkot'>Faridkot</option>
                        <option value='Farrukhabad'>Farrukhabad</option>
                        <option value='Fatehabad'>Fatehabad</option>
                        <option value='Fatehgarh Sahib'>Fatehgarh Sahib</option>
                        <option value='Fatehpur'>Fatehpur</option>
                        <option value='Fazilka'>Fazilka</option>
                        <option value='Firozabad'>Firozabad</option>
                        <option value='Firozpur'>Firozpur</option>
                        <option value='Gadag'>Gadag</option>
                        <option value='Gadchiroli'>Gadchiroli</option>
                        <option value='Gajapati'>Gajapati</option>
                        <option value='Ganderbal'>Ganderbal</option>
                        <option value='Gandhinagar'>Gandhinagar</option>
                        <option value='Ganganagar'>Ganganagar</option>
                        <option value='Ganjam'>Ganjam</option>
                        <option value='Garhwa'>Garhwa</option>
                        <option value='Gautam Buddh Nagar'>Gautam Buddh Nagar</option>
                        <option value='Gaya'>Gaya</option>
                        <option value='Ghaziabad'>Ghaziabad</option>
                        <option value='Ghazipur'>Ghazipur</option>
                        <option value='Giridih'>Giridih</option>
                        <option value='Goalpara'>Goalpara</option>
                        <option value='Godda'>Godda</option>
                        <option value='Golaghat'>Golaghat</option>
                        <option value='Gonda'>Gonda</option>
                        <option value='Gondia'>Gondia</option>
                        <option value='Gopalganj'>Gopalganj</option>
                        <option value='Gorakhpur'>Gorakhpur</option>
                        <option value='Gulbarga'>Gulbarga</option>
                        <option value='Gumla'>Gumla</option>
                        <option value='Guna'>Guna</option>
                        <option value='Guntur'>Guntur</option>
                        <option value='Gurdaspur'>Gurdaspur</option>
                        <option value='Gurgaon'>Gurgaon</option>
                        <option value='Gwalior'>Gwalior</option>
                        <option value='Hailakandi'>Hailakandi</option>
                        <option value='Hamirpur'>Hamirpur</option>
                        <option value='Hamirpur'>Hamirpur</option>
                        <option value='Hanumangarh'>Hanumangarh</option>
                        <option value='Harda'>Harda</option>
                        <option value='Hardoi'>Hardoi</option>
                        <option value='Haridwar'>Haridwar</option>
                        <option value='Hassan'>Hassan</option>
                        <option value='Haveri district'>Haveri district</option>
                        <option value='Hazaribag'>Hazaribag</option>
                        <option value='Hingoli'>Hingoli</option>
                        <option value='Hissar'>Hissar</option>
                        <option value='Hooghly'>Hooghly</option>
                        <option value='Hoshangabad'>Hoshangabad</option>
                        <option value='Hoshiarpur'>Hoshiarpur</option>
                        <option value='Howrah'>Howrah</option>
                        <option value='Hyderabad'>Hyderabad</option>
                        <option value='Hyderabad'>Hyderabad</option>
                        <option value='Idukki'>Idukki</option>
                        <option value='Imphal East'>Imphal East</option>
                        <option value='Imphal West'>Imphal West</option>
                        <option value='Indore'>Indore</option>
                        <option value='Jabalpur'>Jabalpur</option>
                        <option value='Jagatsinghpur'>Jagatsinghpur</option>
                        <option value='Jaintia Hills'>Jaintia Hills</option>
                        <option value='Jaipur'>Jaipur</option>
                        <option value='Jaisalmer'>Jaisalmer</option>
                        <option value='Jajpur'>Jajpur</option>
                        <option value='Jalandhar'>Jalandhar</option>
                        <option value='Jalaun'>Jalaun</option>
                        <option value='Jalgaon'>Jalgaon</option>
                        <option value='Jalna'>Jalna</option>
                        <option value='Jalore'>Jalore</option>
                        <option value='Jalpaiguri'>Jalpaiguri</option>
                        <option value='Jammu'>Jammu</option>
                        <option value='Jamnagar'>Jamnagar</option>
                        <option value='Jamtara'>Jamtara</option>
                        <option value='Jamui'>Jamui</option>
                        <option value='Janjgir-Champa'>Janjgir-Champa</option>
                        <option value='Jashpur'>Jashpur</option>
                        <option value='Jaunpur district'>Jaunpur district</option>
                        <option value='Jehanabad'>Jehanabad</option>
                        <option value='Jhabua'>Jhabua</option>
                        <option value='Jhajjar'>Jhajjar</option>
                        <option value='Jhalawar'>Jhalawar</option>
                        <option value='Jhansi'>Jhansi</option>
                        <option value='Jharsuguda'>Jharsuguda</option>
                        <option value='Jhunjhunu'>Jhunjhunu</option>
                        <option value='Jind'>Jind</option>
                        <option value='Jodhpur'>Jodhpur</option>
                        <option value='Jorhat'>Jorhat</option>
                        <option value='Junagadh'>Junagadh</option>
                        <option value='Jyotiba Phule Nagar'>Jyotiba Phule Nagar</option>
                        <option value='Kabirdham (formerly Kawardha)'>Kabirdham (formerly Kawardha)</option>
                        <option value='Kadapa'>Kadapa</option>
                        <option value='Kaimur'>Kaimur</option>
                        <option value='Kaithal'>Kaithal</option>
                        <option value='Kakinada'>Kakinada</option>
                        <option value='Kalahandi'>Kalahandi</option>
                        <option value='Kamrup'>Kamrup</option>
                        <option value='Kamrup Metropolitan'>Kamrup Metropolitan</option>
                        <option value='Kanchipuram'>Kanchipuram</option>
                        <option value='Kandhamal'>Kandhamal</option>
                        <option value='Kangra'>Kangra</option>
                        <option value='Kanker'>Kanker</option>
                        <option value='Kannauj'>Kannauj</option>
                        <option value='Kannur'>Kannur</option>
                        <option value='Kanpur'>Kanpur</option>
                        <option value='Kanshi Ram Nagar'>Kanshi Ram Nagar</option>
                        <option value='Kanyakumari'>Kanyakumari</option>
                        <option value='Kapurthala'>Kapurthala</option>
                        <option value='Karaikal'>Karaikal</option>
                        <option value='Karauli'>Karauli</option>
                        <option value='Karbi Anglong'>Karbi Anglong</option>
                        <option value='Kargil'>Kargil</option>
                        <option value='Karimganj'>Karimganj</option>
                        <option value='Karimnagar'>Karimnagar</option>
                        <option value='Karnal'>Karnal</option>
                        <option value='Karur'>Karur</option>
                        <option value='Kasaragod'>Kasaragod</option>
                        <option value='Kathua'>Kathua</option>
                        <option value='Katihar'>Katihar</option>
                        <option value='Katni'>Katni</option>
                        <option value='Kaushambi'>Kaushambi</option>
                        <option value='Kendrapara'>Kendrapara</option>
                        <option value='Kendujhar (Keonjhar)'>Kendujhar (Keonjhar)</option>
                        <option value='Khagaria'>Khagaria</option>
                        <option value='Khammam'>Khammam</option>
                        <option value='Khandwa (East Nimar)'>Khandwa (East Nimar)</option>
                        <option value='Khargone (West Nimar)'>Khargone (West Nimar)</option>
                        <option value='Kheda'>Kheda</option>
                        <option value='Khordha'>Khordha</option>
                        <option value='Khowai'>Khowai</option>
                        <option value='Khunti'>Khunti</option>
                        <option value='Kinnaur'>Kinnaur</option>
                        <option value='Kishanganj'>Kishanganj</option>
                        <option value='Kishtwar'>Kishtwar</option>
                        <option value='Kodagu'>Kodagu</option>
                        <option value='Koderma'>Koderma</option>
                        <option value='Kohima'>Kohima</option>
                        <option value='Kokrajhar'>Kokrajhar</option>
                        <option value='Kolar'>Kolar</option>
                        <option value='Kolasib'>Kolasib</option>
                        <option value='Kolhapur'>Kolhapur</option>
                        <option value='Kolkata'>Kolkata</option>
                        <option value='Kollam'>Kollam</option>
                        <option value='Koppal'>Koppal</option>
                        <option value='Koraput'>Koraput</option>
                        <option value='Korba'>Korba</option>
                        <option value='Koriya'>Koriya</option>
                        <option value='Kota'>Kota</option>
                        <option value='Kottayam'>Kottayam</option>
                        <option value='Kozhikode'>Kozhikode</option>
                        <option value='Krishna'>Krishna</option>
                        <option value='Kulgam'>Kulgam</option>
                        <option value='Kullu'>Kullu</option>
                        <option value='Kupwara'>Kupwara</option>
                        <option value='Kurnool'>Kurnool</option>
                        <option value='Kurukshetra'>Kurukshetra</option>
                        <option value='Kurung Kumey'>Kurung Kumey</option>
                        <option value='Kushinagar'>Kushinagar</option>
                        <option value='Kutch'>Kutch</option>
                        <option value='Lahaul and Spiti'>Lahaul and Spiti</option>
                        <option value='Lakhimpur'>Lakhimpur</option>
                        <option value='Lakhimpur Kheri'>Lakhimpur Kheri</option>
                        <option value='Lakhisarai'>Lakhisarai</option>
                        <option value='Lalitpur'>Lalitpur</option>
                        <option value='Latehar'>Latehar</option>
                        <option value='Latur'>Latur</option>
                        <option value='Lawngtlai'>Lawngtlai</option>
                        <option value='Leh'>Leh</option>
                        <option value='Lohardaga'>Lohardaga</option>
                        <option value='Lohit'>Lohit</option>
                        <option value='Lower Dibang Valley'>Lower Dibang Valley</option>
                        <option value='Lower Subansiri'>Lower Subansiri</option>
                        <option value='Lucknow'>Lucknow</option>
                        <option value='Ludhiana'>Ludhiana</option>
                        <option value='Lunglei'>Lunglei</option>
                        <option value='Madhepura'>Madhepura</option>
                        <option value='Madhubani'>Madhubani</option>
                        <option value='Madurai'>Madurai</option>
                        <option value='Mahamaya Nagar'>Mahamaya Nagar</option>
                        <option value='Maharajganj'>Maharajganj</option>
                        <option value='Mahasamund'>Mahasamund</option>
                        <option value='Mahbubnagar'>Mahbubnagar</option>
                        <option value='Mahe'>Mahe</option>
                        <option value='Mahendragarh'>Mahendragarh</option>
                        <option value='Mahoba'>Mahoba</option>
                        <option value='Mainpuri'>Mainpuri</option>
                        <option value='Malappuram'>Malappuram</option>
                        <option value='Maldah'>Maldah</option>
                        <option value='Malkangiri'>Malkangiri</option>
                        <option value='Mamit'>Mamit</option>
                        <option value='Mandi'>Mandi</option>
                        <option value='Mandla'>Mandla</option>
                        <option value='Mandsaur'>Mandsaur</option>
                        <option value='Mandya'>Mandya</option>
                        <option value='Mansa'>Mansa</option>
                        <option value='Marigaon'>Marigaon</option>
                        <option value='Mathura'>Mathura</option>
                        <option value='Mau'>Mau</option>
                        <option value='Mayurbhanj'>Mayurbhanj</option>
                        <option value='Medak'>Medak</option>
                        <option value='Meerut'>Meerut</option>
                        <option value='Mehsana'>Mehsana</option>
                        <option value='Mewat'>Mewat</option>
                        <option value='Mirzapur'>Mirzapur</option>
                        <option value='Moga'>Moga</option>
                        <option value='Mokokchung'>Mokokchung</option>
                        <option value='Mon'>Mon</option>
                        <option value='Moradabad'>Moradabad</option>
                        <option value='Morena'>Morena</option>
                        <option value='Mumbai City'>Mumbai City</option>
                        <option value='Mumbai suburban'>Mumbai suburban</option>
                        <option value='Munger'>Munger</option>
                        <option value='Murshidabad'>Murshidabad</option>
                        <option value='Muzaffarnagar'>Muzaffarnagar</option>
                        <option value='Muzaffarpur'>Muzaffarpur</option>
                        <option value='Mysore'>Mysore</option>
                        <option value='Nabarangpur'>Nabarangpur</option>
                        <option value='Nadia'>Nadia</option>
                        <option value='Nagaon'>Nagaon</option>
                        <option value='Nagapattinam'>Nagapattinam</option>
                        <option value='Nagaur'>Nagaur</option>
                        <option value='Nagpur'>Nagpur</option>
                        <option value='Nainital'>Nainital</option>
                        <option value='Nalanda'>Nalanda</option>
                        <option value='Nalbari'>Nalbari</option>
                        <option value='Nalgonda'>Nalgonda</option>
                        <option value='Namakkal'>Namakkal</option>
                        <option value='Nanded'>Nanded</option>
                        <option value='Nandurbar'>Nandurbar</option>
                        <option value='Narayanpur'>Narayanpur</option>
                        <option value='Narmada'>Narmada</option>
                        <option value='Narsinghpur'>Narsinghpur</option>
                        <option value='Nashik'>Nashik</option>
                        <option value='Navsari'>Navsari</option>
                        <option value='Nawada'>Nawada</option>
                        <option value='Nawanshahr'>Nawanshahr</option>
                        <option value='Nayagarh'>Nayagarh</option>
                        <option value='Neemuch'>Neemuch</option>
                        <option value='Nellore'>Nellore</option>
                        <option value='New Delhi'>New Delhi</option>
                        <option value='Nilgiris'>Nilgiris</option>
                        <option value='Nizamabad'>Nizamabad</option>
                        <option value='North 24 Parganas'>North 24 Parganas</option>
                        <option value='North Delhi'>North Delhi</option>
                        <option value='North East Delhi'>North East Delhi</option>
                        <option value='North Goa'>North Goa</option>
                        <option value='North Sikkim'>North Sikkim</option>
                        <option value='North Tripura'>North Tripura</option>
                        <option value='North West Delhi'>North West Delhi</option>
                        <option value='Nuapada'>Nuapada</option>
                        <option value='Ongole'>Ongole</option>
                        <option value='Osmanabad'>Osmanabad</option>
                        <option value='Pakur'>Pakur</option>
                        <option value='Palakkad'>Palakkad</option>
                        <option value='Palamu'>Palamu</option>
                        <option value='Pali'>Pali</option>
                        <option value='Palwal'>Palwal</option>
                        <option value='Panchkula'>Panchkula</option>
                        <option value='Panchmahal'>Panchmahal</option>
                        <option value='Panchsheel Nagar district (Hapur)'>Panchsheel Nagar district (Hapur)</option>
                        <option value='Panipat'>Panipat</option>
                        <option value='Panna'>Panna</option>
                        <option value='Papum Pare'>Papum Pare</option>
                        <option value='Parbhani'>Parbhani</option>
                        <option value='Paschim Medinipur'>Paschim Medinipur</option>
                        <option value='Patan'>Patan</option>
                        <option value='Pathanamthitta'>Pathanamthitta</option>
                        <option value='Pathankot'>Pathankot</option>
                        <option value='Patiala'>Patiala</option>
                        <option value='Patna'>Patna</option>
                        <option value='Pauri Garhwal'>Pauri Garhwal</option>
                        <option value='Perambalur'>Perambalur</option>
                        <option value='Phek'>Phek</option>
                        <option value='Pilibhit'>Pilibhit</option>
                        <option value='Pithoragarh'>Pithoragarh</option>
                        <option value='Pondicherry'>Pondicherry</option>
                        <option value='Poonch'>Poonch</option>
                        <option value='Porbandar'>Porbandar</option>
                        <option value='Pratapgarh'>Pratapgarh</option>
                        <option value='Pratapgarh'>Pratapgarh</option>
                        <option value='Pudukkottai'>Pudukkottai</option>
                        <option value='Pulwama'>Pulwama</option>
                        <option value='Pune'>Pune</option>
                        <option value='Purba Medinipur'>Purba Medinipur</option>
                        <option value='Puri'>Puri</option>
                        <option value='Purnia'>Purnia</option>
                        <option value='Purulia'>Purulia</option>
                        <option value='Raebareli'>Raebareli</option>
                        <option value='Raichur'>Raichur</option>
                        <option value='Raigad'>Raigad</option>
                        <option value='Raigarh'>Raigarh</option>
                        <option value='Raipur'>Raipur</option>
                        <option value='Raisen'>Raisen</option>
                        <option value='Rajauri'>Rajauri</option>
                        <option value='Rajgarh'>Rajgarh</option>
                        <option value='Rajkot'>Rajkot</option>
                        <option value='Rajnandgaon'>Rajnandgaon</option>
                        <option value='Rajsamand'>Rajsamand</option>
                        <option value='Ramabai Nagar (Kanpur Dehat)'>Ramabai Nagar (Kanpur Dehat)</option>
                        <option value='Ramanagara'>Ramanagara</option>
                        <option value='Ramanathapuram'>Ramanathapuram</option>
                        <option value='Ramban'>Ramban</option>
                        <option value='Ramgarh'>Ramgarh</option>
                        <option value='Rampur'>Rampur</option>
                        <option value='Ranchi'>Ranchi</option>
                        <option value='Ratlam'>Ratlam</option>
                        <option value='Ratnagiri'>Ratnagiri</option>
                        <option value='Rayagada'>Rayagada</option>
                        <option value='Reasi'>Reasi</option>
                        <option value='Rewa'>Rewa</option>
                        <option value='Rewari'>Rewari</option>
                        <option value='Ri Bhoi'>Ri Bhoi</option>
                        <option value='Rohtak'>Rohtak</option>
                        <option value='Rohtas'>Rohtas</option>
                        <option value='Rudraprayag'>Rudraprayag</option>
                        <option value='Rupnagar'>Rupnagar</option>
                        <option value='Sabarkantha'>Sabarkantha</option>
                        <option value='Sagar'>Sagar</option>
                        <option value='Saharanpur'>Saharanpur</option>
                        <option value='Saharsa'>Saharsa</option>
                        <option value='Sahibganj'>Sahibganj</option>
                        <option value='Saiha'>Saiha</option>
                        <option value='Salem'>Salem</option>
                        <option value='Samastipur'>Samastipur</option>
                        <option value='Samba'>Samba</option>
                        <option value='Sambalpur'>Sambalpur</option>
                        <option value='Sangli'>Sangli</option>
                        <option value='Sangrur'>Sangrur</option>
                        <option value='Sant Kabir Nagar'>Sant Kabir Nagar</option>
                        <option value='Sant Ravidas Nagar'>Sant Ravidas Nagar</option>
                        <option value='Saran'>Saran</option>
                        <option value='Satara'>Satara</option>
                        <option value='Satna'>Satna</option>
                        <option value='Sawai Madhopur'>Sawai Madhopur</option>
                        <option value='Sehore'>Sehore</option>
                        <option value='Senapati'>Senapati</option>
                        <option value='Seoni'>Seoni</option>
                        <option value='Seraikela Kharsawan'>Seraikela Kharsawan</option>
                        <option value='Serchhip'>Serchhip</option>
                        <option value='Shahdol'>Shahdol</option>
                        <option value='Shahjahanpur'>Shahjahanpur</option>
                        <option value='Shajapur'>Shajapur</option>
                        <option value='Shamli'>Shamli</option>
                        <option value='Sheikhpura'>Sheikhpura</option>
                        <option value='Sheohar'>Sheohar</option>
                        <option value='Sheopur'>Sheopur</option>
                        <option value='Shimla'>Shimla</option>
                        <option value='Shimoga'>Shimoga</option>
                        <option value='Shivpuri'>Shivpuri</option>
                        <option value='Shopian'>Shopian</option>
                        <option value='Shravasti'>Shravasti</option>
                        <option value='Sibsagar'>Sibsagar</option>
                        <option value='Siddharthnagar'>Siddharthnagar</option>
                        <option value='Sidhi'>Sidhi</option>
                        <option value='Sikar'>Sikar</option>
                        <option value='Simdega'>Simdega</option>
                        <option value='Sindhudurg'>Sindhudurg</option>
                        <option value='Singrauli'>Singrauli</option>
                        <option value='Sirmaur'>Sirmaur</option>
                        <option value='Sirohi'>Sirohi</option>
                        <option value='Sirsa'>Sirsa</option>
                        <option value='Sitamarhi'>Sitamarhi</option>
                        <option value='Sitapur'>Sitapur</option>
                        <option value='Sivaganga'>Sivaganga</option>
                        <option value='Siwan'>Siwan</option>
                        <option value='Solan'>Solan</option>
                        <option value='Solapur'>Solapur</option>
                        <option value='Sonbhadra'>Sonbhadra</option>
                        <option value='Sonipat'>Sonipat</option>
                        <option value='Sonitpur'>Sonitpur</option>
                        <option value='South 24 Parganas'>South 24 Parganas</option>
                        <option value='South Delhi'>South Delhi</option>
                        <option value='South Garo Hills'>South Garo Hills</option>
                        <option value='South Goa'>South Goa</option>
                        <option value='South Sikkim'>South Sikkim</option>
                        <option value='South Tripura'>South Tripura</option>
                        <option value='South West Delhi'>South West Delhi</option>
                        <option value='Sri Muktsar Sahib'>Sri Muktsar Sahib</option>
                        <option value='Srikakulam'>Srikakulam</option>
                        <option value='Srinagar'>Srinagar</option>
                        <option value='Subarnapur (Sonepur)'>Subarnapur (Sonepur)</option>
                        <option value='Sultanpur'>Sultanpur</option>
                        <option value='Sundergarh'>Sundergarh</option>
                        <option value='Supaul'>Supaul</option>
                        <option value='Surat'>Surat</option>
                        <option value='Surendranagar'>Surendranagar</option>
                        <option value='Surguja'>Surguja</option>
                        <option value='Tamenglong'>Tamenglong</option>
                        <option value='Tarn Taran'>Tarn Taran</option>
                        <option value='Tawang'>Tawang</option>
                        <option value='Tehri Garhwal'>Tehri Garhwal</option>
                        <option value='Thane'>Thane</option>
                        <option value='Thanjavur'>Thanjavur</option>
                        <option value='The Dangs'>The Dangs</option>
                        <option value='Theni'>Theni</option>
                        <option value='Thiruvananthapuram'>Thiruvananthapuram</option>
                        <option value='Thoothukudi'>Thoothukudi</option>
                        <option value='Thoubal'>Thoubal</option>
                        <option value='Thrissur'>Thrissur</option>
                        <option value='Tikamgarh'>Tikamgarh</option>
                        <option value='Tinsukia'>Tinsukia</option>
                        <option value='Tirap'>Tirap</option>
                        <option value='Tiruchirappalli'>Tiruchirappalli</option>
                        <option value='Tirunelveli'>Tirunelveli</option>
                        <option value='Tirupur'>Tirupur</option>
                        <option value='Tiruvallur'>Tiruvallur</option>
                        <option value='Tiruvannamalai'>Tiruvannamalai</option>
                        <option value='Tiruvarur'>Tiruvarur</option>
                        <option value='Tonk'>Tonk</option>
                        <option value='Tuensang'>Tuensang</option>
                        <option value='Tumkur'>Tumkur</option>
                        <option value='Udaipur'>Udaipur</option>
                        <option value='Udalguri'>Udalguri</option>
                        <option value='Udham Singh Nagar'>Udham Singh Nagar</option>
                        <option value='Udhampur'>Udhampur</option>
                        <option value='Udupi'>Udupi</option>
                        <option value='Ujjain'>Ujjain</option>
                        <option value='Ukhrul'>Ukhrul</option>
                        <option value='Umaria'>Umaria</option>
                        <option value='Una'>Una</option>
                        <option value='Unnao'>Unnao</option>
                        <option value='Upper Siang'>Upper Siang</option>
                        <option value='Upper Subansiri'>Upper Subansiri</option>
                        <option value='Uttar Dinajpur'>Uttar Dinajpur</option>
                        <option value='Uttara Kannada'>Uttara Kannada</option>
                        <option value='Uttarkashi'>Uttarkashi</option>
                        <option value='Vadodara'>Vadodara</option>
                        <option value='Vaishali'>Vaishali</option>
                        <option value='Valsad'>Valsad</option>
                        <option value='Varanasi'>Varanasi</option>
                        <option value='Vellore'>Vellore</option>
                        <option value='Vidisha'>Vidisha</option>
                        <option value='Viluppuram'>Viluppuram</option>
                        <option value='Virudhunagar'>Virudhunagar</option>
                        <option value='Visakhapatnam'>Visakhapatnam</option>
                        <option value='Vizianagaram'>Vizianagaram</option>
                        <option value='Vyara'>Vyara</option>
                        <option value='Warangal'>Warangal</option>
                        <option value='Wardha'>Wardha</option>
                        <option value='Washim'>Washim</option>
                        <option value='Wayanad'>Wayanad</option>
                        <option value='West Champaran'>West Champaran</option>
                        <option value='West Delhi'>West Delhi</option>
                        <option value='West Garo Hills'>West Garo Hills</option>
                        <option value='West Kameng'>West Kameng</option>
                        <option value='West Khasi Hills'>West Khasi Hills</option>
                        <option value='West Siang'>West Siang</option>
                        <option value='West Sikkim'>West Sikkim</option>
                        <option value='West Singhbhum'>West Singhbhum</option>
                        <option value='West Tripura'>West Tripura</option>
                        <option value='Wokha'>Wokha</option>
                        <option value='Yadgir'>Yadgir</option>
                        <option value='Yamuna Nagar'>Yamuna Nagar</option>
                        <option value='Yanam'>Yanam</option>
                        <option value='Yavatmal'>Yavatmal</option>
                        <option value='Zunheboto'>Zunheboto</option>
                    </select>

                </div>
                <br><br>
                    <div class="form-group">
                        <label>Locality</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="locality" class="form-control" id="l" required><br><br>
                        <label>Name of Project<br>/Society</label>&nbsp;&nbsp;&nbsp;
                        <input type="text" name="nameproject" class="form-control"><br><br>
                        <label>Address</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="address" class="form-control" required><br><br>
                        <label>Landmark</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="landmark" class="form-control" required><br><br>
                        <label>Overlooking</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="overlooking" class="form-control"><br><br>
                        <label>Facing</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <select class="form-control" name="facing" required>
                            <option value="select" >Select</option>
                            <option value="east">East</option>
                            <option value="west">West</option>
                            <option value="north">North</option>
                            <option value="south">South</option>
                        </select>
                    </div>
                    <br><br>
                <b><h2 style="color: #008000">Area:-</h2></b><br>
                    <div class="form-group">
                        <label>Plot Area</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="number" name="plotarea" class="form-control" required>Sq.ft<br><br>
                        <div id="details">
                        <label>BedRooms</label>&nbsp;&nbsp;&nbsp;
                        <input type="text" name="bedrooms" class="form-control" ><br><br>
                        <label>Car Parking</label>&nbsp;&nbsp;&nbsp;
                        <input type="text" name="parking" class="form-control"><br><br>
                        <label>Water Availabilty</label>&nbsp;&nbsp;&nbsp;
                        <input type="text" name="wavailable" class="form-control"><br><br>
                        <label>Status Of Electricity</label>&nbsp;&nbsp;&nbsp;
                        <input type="text" name="eavailable" class="form-control"><br><br>
                        <label>Floor</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="floor" class="form-control"><br><br>
                        <div id="lift">
                        <label>Lift</label>&nbsp;&nbsp;
                        <select class="form-control" name="lift">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select><br><br></div>
                        <label>Furnishing</label>&nbsp;&nbsp;
                        <select class="form-control" name="furnishing">
                            <option value="unfurnished">UnFurnished</option>
                            <option value="semifurnished">SEMI-Furnished</option>
                            <option value="fullyfurnished">FULLY-Furnished</option>
                        </select><br><br></div>
                        <label>Description</label>&nbsp;
                        <textarea rows="8" cols="30" name="desp" required></textarea> <br><br>
                    </div>
                <br><br>
                <b><h2 style="color: #008000">Property Availability:-</h2></b><br>
                <div class="form-group">
                    <label>Transaction Type</label>&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="transaction_type" class="radio-inline"  value="newproperty"required> New Property
                    <input type="radio" name="transaction_type" class="radio-inline" value="resale"required> Resale

                </div>
                <br><br>
                <b><h2 style="color: #008000">Price Details:-</h2></b><br>
                <div class="form-group">
                    <label>Expected Price</label>&nbsp;&nbsp;&nbsp;
                    Rs.<input type="number" name="price" class="form-control"required><br>

                </div>
                <br><br>
                <b><h2 style="color: #008000">Photos:-</h2></b><br>
                <div class="form-group">
                <input type="file" name="pro_img" required>
                    <br>
                    <input type="file" name="pro_img1" required>
                    <br>
                    <input type="file" name="pro_img2" required>
                    <br>
                    <input type="file" name="pro_img3" required>
                </div>
                <br><br>
                <input type="checkbox"  required>
                    I am the owner/I have the authority to post this property.<br>
                    I agree not to provide incorrect property information or state a discriminatory preference.<br>
                    In case, the information does not comply with PropertyListers terms, PropertyListers.com has the <br>right to edit/remove the property from their site.
                <br><br>
                <center>  <?php
                    if(isset($_SESSION['user_name']))
                    {
                        ?>
                        <input type="submit" class="btn btn-success" value="Submit" name="post">
                        <?php
                    }
                    else
                    {
                        ?>
                        <button class="btn-danger btn" type="button"><a class="a" href="Login.php"> Login and Submit</a></button>
                        <?php
                    }
                    ?></center>
    </form>
        </div>
</div>
    <?php
    if(isset($_POST['post'])&&isset($_FILES['pro_img']))
    {
        $property_for=mysqli_real_escape_string($con,$_POST['property_for']);
        $property_type=mysqli_real_escape_string($con,$_POST['property_type']);
        $city=mysqli_real_escape_string($con,$_POST['city']);
        $locality=mysqli_real_escape_string($con,$_POST['locality']);
        $nameproject=isset($_POST['nameproject'])?mysqli_real_escape_string($con,$_POST['nameproject']):null;
        $address=mysqli_real_escape_string($con,$_POST['address']);
        $landmark=mysqli_real_escape_string($con,$_POST['landmark']);
        $facing=mysqli_real_escape_string($con,$_POST['facing']);
        $plotarea=mysqli_real_escape_string($con,$_POST['plotarea'])."sq-ft";
        $bedrooms=isset($_POST['bedrooms'])?mysqli_real_escape_string($con,$_POST['bedrooms']):null;
        $parking=isset($_POST['parking'])?mysqli_real_escape_string($con,$_POST['parking']):null;
        $wavailable=isset($_POST['wavailable'])?mysqli_real_escape_string($con,$_POST['wavailable']):null;
        $eavailable=isset($_POST['eavailable'])?mysqli_real_escape_string($con,$_POST['eavailable']):null;
        $floor=isset($_POST['floor'])?mysqli_real_escape_string($con,$_POST['floor']):null;
        $desp=mysqli_real_escape_string($con,$_POST['desp']);
        $transaction_type=mysqli_real_escape_string($con,$_POST['transaction_type']);
        $price=mysqli_real_escape_string($con,$_POST['price']);
        $lift=isset($_POST['lift'])?mysqli_real_escape_string($con,$_POST['lift']):null;
        $furnishing=isset($_POST['furnishing'])?mysqli_real_escape_string($con,$_POST['furnishing']):null;
        $overlooking=isset($_POST['overlooking'])?mysqli_real_escape_string($con,$_POST['overlooking']):null;
        $pro_img=$_FILES['pro_img']['name'];
        $tmp_pro_img=$_FILES['pro_img']['tmp_name'];
        $path="images/".$property_type."/".$pro_img;
        move_uploaded_file($tmp_pro_img,$path);
        $pro_img1=$_FILES['pro_img1']['name'];
        $tmp_pro_img1=$_FILES['pro_img1']['tmp_name'];
        $path1="images/".$property_type."/".$pro_img1;
        move_uploaded_file($tmp_pro_img1,$path1);
        $pro_img2=$_FILES['pro_img2']['name'];
        $tmp_pro_img2=$_FILES['pro_img2']['tmp_name'];
        $path2="images/".$property_type."/".$pro_img2;
        move_uploaded_file($tmp_pro_img2,$path2);
        $pro_img3=$_FILES['pro_img3']['name'];
        $tmp_pro_img3=$_FILES['pro_img3']['tmp_name'];
        $path3="images/".$property_type."/".$pro_img3;
        move_uploaded_file($tmp_pro_img3,$path3);
        $uname=$_SESSION['user_name'];
        $uid=mysqli_fetch_assoc(mysqli_query($con,"select id from user WHERE email='$uname'"))['id'];
        $fulladdress=$city." ".$nameproject." ".$address;
        $query="INSERT INTO properties(BEDROOMS,CARPET_AREA,PRICE,FLOOR,ADDRESS,LANDMARK,FACING,OVERLOOKING,CAR_PARKING,WATER_AVAILABILITY,STATUS_OF_ELECTRICITY,LIFT,FURNISHING,DESCRIPTION,PROPERTY_TYPE,UID,PROPERTY_FOR,TRANSACTION_TYPE,NAME ) VALUES('$bedrooms','$plotarea','$price','$floor','$fulladdress','$landmark','$facing','$overlooking','$parking','$wavailable','$eavailable','$lift','$furnishing','$desp','$property_type','$uid','$property_for','$transaction_type','$pro_img')";
        $insert_pro=mysqli_query($con,$query);
        if($insert_pro)
        {
            echo "<script>alert('Property is posted sucessfully')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
        else
        {
            echo "<script>alert('Not sucessful')</script>";
            echo "<script>window.history.back()</script>";
        }

    }?>
</div>
<?php
include "footer3.php";?>
</body>