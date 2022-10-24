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
<body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  

    <div class="container d-block justify-content-center align-items-center w-25 p-5">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="">
            <label for="username">Username</label>
            <input type="text" id="username" class="username" name="username"></input>
            <label for="email">Email</label>
            <input type="text" id="email" class="email" name="email"></input>
            <label for="password">Password</label>
            <input type="text" id="password" class="password" name="password"></input>
            <label for="password-confirm">Confirm Password</label>
            <input type="text" id="password-confirm" class="password-confirm" name="password-confirm"></input>
            <label for="company">Company Name</label>
            <input type="text" id="company" class="company" name="company"></input>
            <select class="form-select continent" id="continent" aria-label="Default select continent" onchange="changeRegion();">
                <option disabled selected>--- Choose Region ---</option>
                <option value="africa">Africa</option>
                <option value="asia">Asia</option>
                <option value="australia">Australia</option>
                <option value="europe">Europe</option>
                <option value="northam">North America</option>
                <option value="southam">South America</option>
            </select>
            <select class="form-select africa" id="africa" aria-label="Default select africa">
                <option disabled selected>--- Choose City ---</option>
                <option value="">Africa</option>
                <option value="">Africa</option>
                <option value="">Africa</option>
                <option value="">Africa</option>
                <option value="">Africa</option>
                <option value="">Africa</option>
            </select>
            <select class="form-select asia" id="asia" aria-label="Default select asia">
                <option disabled selected>--- Choose City ---</option>
                <option value="">Beijing, China</option>
                <option value="">Mumbai, India</option>
                <option value="">Osaka, Japan</option>
                <option value="">Tokyo, Japan</option>
                <option value="">Seoul, South Korea</option>
            </select>
            <select class="form-select australia" id="australia" aria-label="Default select australia">
                <option disabled selected>--- Choose City ---</option>
                <option value="">Melbourne, Australia</option>
                <option value="">Sydney, Australia</option>
                <option value="">Wellington, New Zealand</option>
            </select>
            <select class="form-select europe" id="europe" aria-label="Default select europe">
                <option disabled selected>--- Choose City ---</option>
                <option value="">Brussels, Belgium</option>
                <option value="">Paris, France</option>
                <option value="">Berlin, Germany</option>
                <option value="">Dublin, Ireland</option>
                <option value="">Rome, Italy</option>
                <option value="">Amsterdam, Netherlands</option>
                <option value="">Belfast, N. Ireland, UK</option>
                <option value="">Cardiff, Wales, UK</option>
                <option value="">Edinburgh, Scotland, UK</option>
                <option value="">London, England, UK</option>
            </select>
            <select class="form-select northam" id="northam" aria-label="Default select northam">
                <option disabled selected>--- Choose City ---</option>
                <option value="">Montreal, Canada</option>
                <option value="">Toronto, Canada</option>
                <option value="">Mexico City, Mexico</option>
                <option value="">Chicago, IL, USA</option>
                <option value="">Las Vegas, NV, USA</option>
                <option value="">Los Angeles, CA, USA</option>
                <option value="">New York, NY, USA</option>
                <option value="">Orlando, FL, USA</option>
                <option value="">Philadelphia, PA< USA</option>
            </select>
            <select class="form-select southam" id="southam" aria-label="Default select southam">
                <option disabled selected>--- Choose City ---</option>
                <option value="">Beunes Aires, Argentina</option>
                <option value="">Rio de Jeneiro, Brazil</option>
                <option value="">Sao Paolo, Brazil</option>
            </select>
        </form>
    </div>
</body>

<script>
    const continent = document.getElementById('continent');
    const africa = document.getElementById('africa');
    const asia = document.getElementById('asia');
    const australia = document.getElementById('australia');
    const europe = document.getElementById('europe');
    const northam = document.getElementById('northam');
    const southam = document.getElementById('southam');

    function hideAll() {
        africa.style.display = "none";
        asia.style.display = "none";
        australia.style.display = "none";
        europe.style.display = "none";
        northam.style.display = "none";
        southam.style.display = "none";
    }

    hideAll();

    function changeRegion() {
        hideAll();
        switch(continent.value) {
            case 'africa':
                africa.style.display = "block";
                break;
            case 'asia':
                asia.style.display = "block";
                break;
            case 'australia':
                australia.style.display = "block";
                break;
            case 'europe':
                europe.style.display = "block";
                break;
            case 'northam':
                northam.style.display = "block";
                break;
            case 'southam':
                southam.style.display = "block";
                break;
        }
    }
</script>

</html>