

<!DOCTYPE html>
<html dir="rtl" lang="hebrew">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shavuot</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>

<div class = "header">
    <img class="image-header" src="img/header.jpg" width="100%" alt="picture">
    <img class="headerMobile" src="img/headerMobile.png" width="100%" alt="picture">

</div>

<section class="container">

    <article class = "card">

        <div class="box2">  
            <h1><b>דפי אורז ממולאים בסלק וגבינת פטה</b></h1><br/>
            <p>של <b>אניה רויטפלד</b>, דיאטנית במחוז השרון</p>

            <h2>מצרכים ל - 4 מנות</h2>
                    <p> לקים גדולים מבושלים וחתוכים לקוביות או מגורדים</p>
                    <p>150 גרם גבינת פטה פיראוס 5% חתוכה לקוביות</p>
                    <p>40 גרם אגוזי מלך קצוצים / צנוברים</p>
                    <p>8 דפי אורז</p>

            <h2>אופן ההכנה</h2>

            <ul>
                <li>מערבבים את המלית )סלק, פטה ואגוזים(.</li>
                <li>טובלים את דפי האורז במים ומייבשים על מגבת מטבח.</li>
                <li>מניחים במרכז כל דף 1-2 כפיות מהמלית.</li>
                <li>מגלגלים את הדפים (כמו בלינצ'ס).</li>
                <li>מגישים עם רוטב לבחירה – סויה, טריאקי, צ'ילי...</li>

            </ul>
            <h2>ערכים תזונתיים למנה</h2>
            <p>55 קלוריות | 10 גרם פחמימות | 9 גרם שומן</p>
            <p>680 גרם נתרן | 1 גרם סיבים</p>

            <p class="size29">בתאבון!</p>
        </div>  

        <div class="box1">   
            <img class="sushi" src="img/pic.jpg" alt="picture">
        </div>

    </article>


    <div class = "form size17">
            <div id="questions">
            <p class="size25">רוצים עוד מתכונים בריאים לשבועות?</p> 
            <p class="size18">לקבלת חוברת המתכונים הדיגיטלית שלנו השאירו פרטים:</p>
        <!-- <form action="#" method="post"> -->
            </div>
            <div class="blocks">
            <div id="block1">
                <input class="myInputs name" type="text" name="name" placeholder="שם מלא:">
                
            <div class="fullphonenumber">

            <input class="phonenumber" type="text" name="phone" placeholder="טלפון:">

                <div class="field dropdown">
                    <select class="prefix" name='prefix'>
                        <option label="" value="0" selected="selected"> 
                        <option label="050" value="050">050</option>
                        <option label="051" value="051">051</option>
                        <option label="052" value="052">052</option>
                        <option label="053" value="053">053</option>
                        <option label="054" value="054">054</option>
                        <option label="055" value="055">055</option>
                        <option label="056" value="056">056</option>
                        <option label="058" value="058">058</option>
                        <option label="059" value="059">059</option>
                    </select><br/>
                </div>  
            </div>
                
            </div>
            <div id="block2">
                
                <input class="myInputs" type="email" name="mail" placeholder="מייל:"></p>
                <input class="myInputs" type="text" name="city" placeholder="עיר:"></p>
            </div>
            </div>

            <div id="block3">           
                <input id="trigger" type="checkbox" name="member" value="אני חבר/ת מכבי">
                <label for="trigger" class="checker" ></label>אני חבר/ת מכבי<br/>
                <input id="trigger1" type="checkbox"name="agree" checked="checked" value="אני מאשר/ת קבלת דיוור ו/או חומר פרסומי ממכבי שירותי בריאות">
                <label for="trigger1" class="checker1" ></label>אני מאשר/ת קבלת דיוור ו/או חומר פרסומי ממכבי שירותי בריאות 
            </div>
            <input type="submit" class="submit size26" name="submit" value="שלחו לי את החוברת >>">

        <!-- </form> -->
    </div>

    <div id="hidden_content" class="sentMessage white">
        <img class="OK" width="15%" src="img/v.png" alt="OK">
        <p class="size39"><b>תודה פנייתך התקבלה</b></p>
        <p class="size25">החוברת תשלח אליך במייל בהקדם!</p>
    </div>

</section>

<div class = "footer">
    <img style="position:absolute;top:0px;right:900px;z-index:100;" class="logo" src="img/logo.png" alt="logo">
    <img class="image-footer"  src="img/footerBackground.png" alt="footer">
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/messagewassent.js"></script>
</body>
</html>