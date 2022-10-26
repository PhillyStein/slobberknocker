<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>SlobberKnocker</title>
</head>
<body class="bg-dark">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  

    <div class="container d-block justify-content-center align-items-center w-25" id="container">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="">
            <div id="form1">
                <div class="mb-3">
                    <label for="username" class="form-label text-light">Username</label>
                    <input type="text" class="form-control" id="username" name="username" onchange="checkForm();"></input>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label text-light">Email</label>
                    <input type="text" class="form-control" id="email" name="email" onchange="checkForm();"></input>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-light">Password</label>
                    <input type="password" class="form-control" id="password" name="password" onchange="checkForm();"></input>
                </div>
                <div class="mb-3">
                    <label for="confirm" class="form-label text-light">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm" onchange="checkForm();"></input>
                </div>
            </div>
            <div id="form2">
                <div class="mb-3">
                    <label for="company" class="form-label text-light">What would you like your company to be called?</label>
                    <input type="text" class="form-control" id="company" name="company" onchange="checkForm();"></input>
                </div>
            </div>
            <div id="form3">
                <div class="d-flex justify-content-center">
                    <?php include "images/WorldMap.svg" ?>
                </div>
                <div class="d-flex justify-content-center">
                    <p class="text-warning" id="city_name">NAME OF CITY</p>
                </div>
            </div>
            <div id="form4">
                <div class="mb-3">
                    <label for="continent" class="form-label text-light">Where is your company based?</label>
                    <select class="form-select continent" id="continent"aria-label="Default select continent" onchange="changeRegion();">
                        <option disabled selected>--- Choose Region ---</option>
                        <option value="africa">Africa</option>
                        <option value="asia">Asia</option>
                        <option value="europe">Europe</option>
                        <option value="northam">North America</option>
                        <option value="oceania">Oceania</option>
                        <option value="southam">South America</option>
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select africa" id="africa" name="city" onchange="checkForm();" aria-label="Default select africa">
                        <option disabled selected value="">--- Choose City ---</option>
                        <option value="a1">Africa</option>
                        <option value="a2">Africa</option>
                        <option value="a3">Africa</option>
                        <option value="a4">Africa</option>
                        <option value="a5">Africa</option>
                        <option value="a6">Africa</option>
                    </select>
                    <select class="form-select asia" id="asia" name="city" onchange="checkForm();" aria-label="Default select asia">
                        <option disabled selected value="">--- Choose City ---</option>
                        <option value="beijing">Beijing, China</option>
                        <option value="mumbai">Mumbai, India</option>
                        <option value="osaka">Osaka, Japan</option>
                        <option value="tokyo">Tokyo, Japan</option>
                        <option value="seoul">Seoul, South Korea</option>
                    </select>
                    <select class="form-select oceania" id="oceania" name="city" onchange="checkForm();" aria-label="Default select oceania">
                        <option disabled selected value="">--- Choose City ---</option>
                        <option value="melbourne">Melbourne, Australia</option>
                        <option value="sydney">Sydney, Australia</option>
                        <option value="wellington">Wellington, New Zealand</option>
                    </select>
                    <select class="form-select europe" id="europe" name="city" onchange="checkForm();" aria-label="Default select europe">
                        <option disabled selected value="">--- Choose City ---</option>
                        <option value="brussels">Brussels, Belgium</option>
                        <option value="paris">Paris, France</option>
                        <option value="berlin">Berlin, Germany</option>
                        <option value="dublin">Dublin, Ireland</option>
                        <option value="rome">Rome, Italy</option>
                        <option value="amsterdam">Amsterdam, Netherlands</option>
                        <option value="belfast">Belfast, N. Ireland, UK</option>
                        <option value="cardiff">Cardiff, Wales, UK</option>
                        <option value="edinburgh">Edinburgh, Scotland, UK</option>
                        <option value="london">London, England, UK</option>
                    </select>
                    <select class="form-select northam" id="northam" name="city" onchange="checkForm();" aria-label="Default select northam">
                        <option disabled selected value="">--- Choose City ---</option>
                        <option value="montreal">Montreal, Canada</option>
                        <option value="toronto">Toronto, Canada</option>
                        <option value="mexico-city">Mexico City, Mexico</option>
                        <option value="chicago">Chicago, IL, USA</option>
                        <option value="las-vegas">Las Vegas, NV, USA</option>
                        <option value="los-angeles">Los Angeles, CA, USA</option>
                        <option value="new-york">New York, NY, USA</option>
                        <option value="orlando">Orlando, FL, USA</option>
                        <option value="philadelphia">Philadelphia, PA< USA</option>
                    </select>
                    <select class="form-select southam" id="southam" name="city" onchange="checkForm();" aria-label="Default select southam">
                        <option disabled selected value="">--- Choose City ---</option>
                        <option value="buenos-aires">Buenos Aires, Argentina</option>
                        <option value="rio-de-janeiro">Rio de Jeneiro, Brazil</option>
                        <option value="sao-paolo">Sao Paolo, Brazil</option>
                        <option value="santiago">Santiago, Chile</option>
                        <option value="lima">Lima, Peru</option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-secondary" id="btn-back" disabled>Back</button>
                <button type="button" class="btn btn-warning" id="btn-next" disabled>Next</button>
            </div>
        </form>
    </div>
</body>

<script>
    const container = document.getElementById('container');

    container.className = "container d-block justify-content-center align-items-center w-25";

    let city = '';
    const continent = document.getElementById('continent');
    const africa = document.getElementById('africa');
    const asia = document.getElementById('asia');
    const oceania = document.getElementById('oceania');
    const europe = document.getElementById('europe');
    const northam = document.getElementById('northam');
    const southam = document.getElementById('southam');

    const backButton = document.getElementById('btn-back');
    const nextButton = document.getElementById('btn-next');
    toggleButton(backButton, "disabled");
    toggleButton(nextButton, "disabled");

    const username = document.getElementById('username');
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const confirm = document.getElementById('confirm');

    const company = document.getElementById('company');

    const form1 = document.getElementById('form1');
    const form2 = document.getElementById('form2');
    const form3 = document.getElementById('form3');
    const form4 = document.getElementById('form4');
    let formStage = 1;
    form2.style.display = "none";
    form3.style.display = "none";
    form4.style.display = "none";

    function hideAll() {
        africa.style.display = "none";
        asia.style.display = "none";
        oceania.style.display = "none";
        europe.style.display = "none";
        northam.style.display = "none";
        southam.style.display = "none";
    }

    hideAll();

    nextButton.addEventListener('click', nextForm);
    backButton.addEventListener('click', backForm);

    function toggleButton(button, state) {
        if(state == 'disabled'){
            button.disabled = true;
            //button.className = "btn btn-secondary";
        } else {
            button.disabled = false;
            //button.className = "btn btn-warning";
        }
    }

    function checkForm() {
        switch(formStage) {
            case 1:
                (usernameCheck() && emailCheck() && passwordCheck()) ? toggleButton(nextButton, "enabled") : toggleButton(nextButton, "disabled");
                break;
            case 2:
                companyCheck() ? toggleButton(nextButton, "enabled") : toggleButton(nextButton, "disabled");
                break;
            case 3:
                cityCheck() ? toggleButton(nextButton, "enabled") : toggleButton(nextButton, "disabled");
                break;
        }
    }

    function nextForm() {
        switch(formStage) {
            case 1:
                form1.style.display = "none";
                form2.style.display = "block";
                formStage = 2;
                container.className = "container d-block justify-content-center align-items-center w-25";
                checkForm();
                toggleButton(backButton, "enabled");
                break;

            case 2:
                form2.style.display = "none";
                form3.style.display = "block";
                formStage = 3;
                container.className = "container d-block justify-content-center align-items-center w-75";
                checkForm();
                break;

            case 3:
                //form4.style.display = "none";
                //form4.style.display = "block";
                formStage = 4;
                container.className = "container d-block justify-content-center align-items-center w-25";
                checkForm();
                break;
        }
    }

    function backForm() {
        switch(formStage) {
            case 2: 
                form1.style.display = "block";
                form2.style.display = "none";
                formStage = 1;
                container.className = "container d-block justify-content-center align-items-center w-25";
                checkForm();
                toggleButton(backButton, "disabled");
                break;
            case 3: 
                form3.style.display = "none";
                form2.style.display = "block";
                formStage = 2;
                container.className = "container d-block justify-content-center align-items-center w-25";
                checkForm();
                break;
        }
    }

    function changeRegion() {
        city = '';
        hideAll();
        switch(continent.value) {
            case "africa":
                city = africa.value;
                africa.style.display = "block";
                break;
            case "asia":
                city = asia.value;
                asia.style.display = "block";
                break;
            case "oceania":
                city = oceania.value;
                oceania.style.display = "block";
                break;
            case "europe":
                city = europe.value;
                europe.style.display = "block";
                break;
            case "northam":
                city = northam.value;
                northam.style.display = "block";
                break;
            case "southam":
                city = southam.value;
                southam.style.display = "block";
                break;
        }
        checkForm();
    }

    function usernameCheck() {
        return username.value != '' ? true : false;
    }

    function emailCheck() {
        return email.value != '' ? true : false;
    }

    function passwordCheck() {
        return (password.value != '' && password.value === confirm.value) ? true : false;
    }

    function companyCheck() {
        return company.value != '' ? true : false;
    }

    function cityCheck() {
        console.log(city);
        return (city != null && city.value != '') ? true : false;
    }

    // FIX UPDATING CITY VALUE

    function checkCity() {
        switch(continent.value) {
            case 'africa':
                city = africa.value;
                console.log(africa.value);
                break;
            case 'asia':
                city = asia.value;
                console.log(asia.value);
                break;
            case 'oceania':
                city = oceania.value;
                console.log(oceania.value);
                break;
            case 'europe':
                city = europe.value;
                console.log(europe.value);
                break;
            case 'northam':
                city = northam.value;
                console.log(northam.value);
                break;
            case 'southam':
                city = southam.value;
                console.log(southam.value);
                break;
        }
        return (city != '') ? true : false;
    }

    document.addEventListener('keypress', logKey);

    function logKey(e) {
        if(e.code=="ArrowRight") {
            nextForm();
        }
        if(e.code=="ArrowLeft") {
            backForm();
        }
    }
</script>

</html>