<?php

@include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookly-Appointment Book</title>
</head>
<script>
    var serviciiCat1=["HAIRCUT","BRETTON CUT","CUT + WASHED + HAIRED","SHORT HAIRSTYLE","DYED/BLEACHED LONG HAIR","SHORT HAIRSTYLE","DYED/BLEACHED MEDIUM HAIR","SHORT HAIRSTYLE","DYED/BLEACHED SHORT HAIR"]
    var serviciiCat2=["MAINTENANCE","APPLICATION OF FALSE NAILS","SEMI-PERMANENT PEDICURE"]
    var serviciiCat3=["THOUGHT","THOUGHT FORM","DYED EYEBROWS"]
    var serviciiCat4=["1D","2D","3D","4D","1D + LAMINATION","2D + LAMINATION","3D + LAMINATION","4D + LAMINATION"]

    function update_combo2()
    {
        var combo1_value=document.getElementById("combo1").value
        document.getElementById("combo2").options.length=0;
        switch(combo1_value)
        {
            case "1":
                /*fill combo 2 with categorie1 */
                for(i=0;i<serviciiCat1.length;i++)
                {
                    var opt=document.createElement("option")
                    opt.text=serviciiCat1[i];
                    document.getElementById("combo2").appendChild(opt)
                }
                break;
            case "2":
                for(i=0;i<serviciiCat2.length;i++)
                {
                    var opt=document.createElement("option")
                    opt.text=serviciiCat2[i];
                    document.getElementById("combo2").appendChild(opt)
                }
                break;
            case "3":
                for(i=0;i<serviciiCat3.length;i++)
                {
                    var opt=document.createElement("option")
                    opt.text=serviciiCat3[i];
                    document.getElementById("combo2").appendChild(opt)
                }
                break;
            case "4":
                for(i=0;i<serviciiCat4.length;i++)
                {
                    var opt=document.createElement("option")
                    opt.text=serviciiCat4[i];
                    document.getElementById("combo2").appendChild(opt)
                }
                break;
        }
    }
</script>
<style>

*{
    margin:0;
    padding:0;
    font-family:'Times New Roman', Times, serif;
}
.form-container{
    background:#ffcc99;
    max-width: 1280px;
    height: 800px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
}
.form{
    padding: 20px;
    border-radius:5px;
    box-shadow:0 5px 10px rgba(0,0,0,.1);
    background:#fff;
    width: 650px;
}

.form-text{
    text-align: center;
    margin: 0 0 40px 0;
}

.form-text h1{
    color: black;
    font-family:'Times New Roman', Times, serif;
    font-size: 40px;
    margin-bottom: 20px;
}

.main-form div{
    margin: 10px 10px;
    width: 300px;
    display: inline-block;
}
.main-form div input {
    width: 100%;
    font-family: 'Times New Roman', Times, serif;
    background: #eee;
    border: 1px solid black;
    border-radius:5px;
    font-size: 17px;
    
    outline: none;
    padding: 3px 0 3px 10px;
    margin-top: 10px;
}
.main-form div select{
    width: 104%;
    font-family: 'Times New Roman', Times, serif;
    background: #eee;
    border: 1px solid black;
    border-radius:5px;
    font-size: 17px;
    outline: none;
    padding: 3px 0 3px 10px;
    margin-top: 10px;
}
.main-form div span{
    width: 100%;
    font-family: 'Times New Roman', Times, serif;
    color: black;
    font-size: 17px;
}

#submit{
    width: 100%;
    text-align: center;
}
#submit input{
    font-family: 'Times New Roman', Times, serif;
    width: 200px;
    background-color: #ffcc99;
    color: black;
    transition: all .3s;
    padding: 10px;
}
#submit input:hover{
    font-family: 'Times New Roman', Times, serif;
    width: 200px;
    background-color: #ffb366;
    color: white;
}
#submit input:active{
    font-size: 19px;
    background-color: #ffb366;
    color: white;
}


@media screen and (max-width:710px) {
    .main-form{
        text-align: center;
    }
}
</style>
<body>

<body class="form-container">
    <div class="form">
        <div class="form-text">
            <h1>Book Now</h1>
        </div>
        <div class="main-form">
            <form action="index.php" method="get">
                <div>
                    <!-- <---this is the select option--->
                    <span>Category</span>
                    <select name="category" id="combo1" onchange="update_combo2()">
                        <option value="0">Select departament</option>
                        <option value="1">HAIR SALON</option>
                        <option value="2">BEAUTY</option>
                        <option value="3">MANI PEDI</option>
                        <option value="4">EYELASHES</option>
                    </select>
                    <!-- <---this is the select option--->
                </div>

                <div>
                    <!-- <---this is the select option--->
                    <span>Service</span>
                    <select name="service" id="combo2">
                        <option value="0">Please choose the desired service</option>
                        <!--<option value="1">HAIRCUT</option>
                        <option value="2">BRETTON CUT</option>
                        <option value="3">CUT + WASHED + HAIRED</option>
                        <option value="4">SHORT HAIRSTYLE</option>
                        <option value="5">DYED/BLEACHED LONG HAIR</option>
                        <option value="6">DYED/BLEACHED MEDIUM HAIR</option>
                        <option value="7">DYED/BLEACHED MEDIUM HAIR</option>
                        <option value="8">MAINTENANCE</option>
                        <option value="9">APPLICATION OF FALSE NAILS</option>
                        <option value="10">SEMI-PERMANENT PEDICURE</option>
                        <option value="11">THOUGHT</option>
                        <option value="12">THOUGHT FORM</option>
                        <option value="13">DYED EYEBROWS</option>
                        <option value="14">1D</option>
                        <option value="15">2D</option>
                        <option value="16">3D</option>
                        <option value="17">4D</option>
                        <option value="18">1D + LAMINATION</option>
                        <option value="19">2D + LAMINATION</option>
                        <option value="20">2D + LAMINATION</option>
                        <option value="20">4D + LAMINATION</option>-->
                    </select>
                    <!-- <---this is the select option--->
                </div>

                <div>
                    <span>What is the date ?</span>
                    <input type="date" name="date" id="date" placeholder="date" required>
                </div>

                <div>
                    <!-- <---this is the select option--->
                    <span>What time ?</span>
                    <select name="time" id="time" required>
                    <option value="">Please choose time</option>
                        <option value="1">9:00 am</option>
                        <option value="2">10:00 am</option>
                        <option value="3">11:00 am</option>
                        <option value="4">12:00 am</option>
                        <option value="1">1:00 pm</option>
                        <option value="2">2:00 pm</option>
                        <option value="3">3:00 pm</option>
                        <option value="4">4:00 pm</option>
                        <option value="1">5:00 pm</option>
                        <option value="2">6:00 pm</option>
                        <option value="3">7:00 pm</option>
                    </select>
                    <!-- <---this is the select option--->
                </div>
                <!--
                <div>
                    <span>Your full name ?</span>
                    <input type="text" name="name" id="name" placeholder="Write your name here" required>
                </div>

                <div>
                    <span>Your email address ?</span>
                    <input type="email" name="name" id="name" placeholder="Write your email here" required> 
                </div>
                
                <div>
                    <span>Your phone number ?</span>
                    <input type="number" name="number" id="number" placeholder="Write your number here..." required>
                </div>-->
                <div id="submit">
                    <input type="submit" value="SUBMIT" id="submit">
                </div>


            </form>
        </div>
    </div>

</body>
</html>