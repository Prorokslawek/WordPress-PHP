
<?php
/*
Plugin Name: english-table
Description: Wtyczka do nauki jezyka angielskiego!
Version: 3.0.1
Author: Sławek Stefański
*/


// Zadanie z czasownikami z j.angielskiego
//Tablice wielowymiarowe

//Tablica wszystkich słówek

function ESTS_tablica_nauka(){

    $group[] = array("Grupa 1",array(
    array("ring", "rang", "rung"),
    array("sing", "sang", "sung"),
    array("sink", "sank", "sunk"),
    array("drink", "drank", "drunk"),
    array("shrink", "shrank", "shrunk"),
    array("swim", "swam", "swum"),
    array("begin", "began", "begun"),
    array("run", "ran", "run"),)
    );
    $group[] = array("Grupa 2",array( 
    array("feed", "fed", "fed"),
    array("lead", "led", "led"),
    array("breed" ,"bred" ,"bred"),
    array("bleed", "bled", "bled"),
    array("read" ,"read" ,"read"),
    array("tell", "told", "told"),
    array("slide" ,"slid", "slid"),
    array("hold", "held", "held"),)
    );
    $group[] = array("Grupa 3",array( 
    array("hit", "hit", "hit"),
    array("fit", "fit", "fit"),
    array("spit" ,"spit" ,"spit"),
    array("knit", "knit", "knit"),
    array("quit" ,"quit" ,"quit"),
    array("let", "let", "let"),
    array("set" ,"set", "set"),
    array("upset", "upset", "upset"),
    array("shut", "shut", "shut"),
    array("cut", "cut", "cut"),
    array("put", "put", "put"),
    array("cost", "cost", "cost"),
    array("hurt", "hurt", "hurt"),
    array("burst", "burst", "burst"),
    array("spread", "spread", "spread"),
    array("broadcast", "broadcast", "broadcast"),)
    );
    $group[] = array("Grupa 4",array(
    array("buy", "bought", "bought"),
    array("fight" ,"fought" ,"fought"),
    array("seek", "sought", "sought"),
    array("think" ,"thought" ,"thought"),
    array("bring", "brought", "brought"),
    array("teach", "taught", "taught"),
    array("catch", "caught" ,"caught"),)
    );
    $group[] = array("Grupa 5",array(
    array("bend", "bent", "ben"),
    array("send", "sent", "sent"),
    array("lend", "lent", "lent"),
    array("spend", "spent", "spent"),
    array("build", "built", "built"),
    array("sleep", "slept", "slept"),
    array("keep", "kept", "kept"),
    array("creep", "crept", "crept"),
    array("weep", "wept", "wept"),
    array("sweep", "swept", "swept"),
    array("leap", "leapt", "leapt"),
    array("feel", "felt", "felt"),
    array("deal", "dealt", "dealt"),
    array("mean", "meant", "meant"),
    array("burn", "burnt", "burnt"),//simple past i past pariciple moze byc tez burned
    array("dream", "dreamt", "dreamt"),//simple past i past pariciple moze byc tez dreamed
    array("meet", "met", "met"),
    array("leave", "left", "left"),
    array("lose" ,"lost" ,"lost"),)
    );
    $group[] = array("Grupa 6",array( 
    array("hang", "hung", "hung"),
    array("hang", "hanged", "hange"),
    array("dig", "dug", "dug"),
    array("shoot", "shot", "shot"),
    array("stand", "stood", "stood"),
    array("understand", "understood", "understood"),
    array("stick", "stuck", "stuck"),
    array("strike", "struck", "struck"),
    array("sit", "sat", "sat"),
    array("win", "won", "won"),
    array("make", "made", "made"),
    array("pay", "paid", "paid"),
    array("lay", "laid", "laid"),
    array("say","said", "said"),
    array("light", "lit", "lit"),//lighted
    array("find", "found", "found"),
    array("found", "founded", "founded"),)
    );
    $group[] = array("Grupa 7",array(
    array("throw", "threw", "thrown"),
    array("grow", "grew", "grown"),
    array("blow", "blew", "blown"),
    array("draw", "drew", "drawn"),
    array("withdraw" ,"withdrew", "withdrawn"),
    array("withdraw", "withdrew", "withdrawn"),
    array("fly", "flew", "flown"),
    array("know", "knew", "known"),)
    );
    $group[] = array("Grupa 8",array(
    array("write", "wrote", "written"),
    array("ride", "rode", "ridden"),
    array("rise", "rose", "risen"),
    array("choose", "chose", "chosen"),
    array("freeze", "froze", "frozen"),
    array("speak", "spoke", "spoken"),
    array("awake", "awoke", "awoken"),
    array("wake", "woke", "woken"), //waked
    array("break", "broke", "broken"),
    array("steal", "stole", "stolen"),
    array("weave", "wove", "woven"),
    array("give", "gave", "given"),
    array("forgive", "forgave", "forgiven"),
    array("forget", "forgot", "forgotten"),
    array("forbid", "forbade", "forbidden"),
    array("hide", "hid", "hidden"),
    array("drive", "drove", "driven"),
    array("shake", "shook", "shaken"),
    array("take", "took", "taken"),
    array("overtake", "overtook", "overtaken"),
    array("mistake", "mistook", "mistaken"),
    array("prove", "proved", "proven"), //nic/proved
    array("tear", "tore", "torn"),
    array("swear", "swore", "sworn"),
    array("wear", "wore", "worn"),
    array("bite", "bit", "bitten"),
    array("beat", "beat", "beaten"),
    array("eat", "ate", "eaten"),
    array("get", "got", "got"),//nic/gotten
    array("fall", "fell", "fallen"),
    array("shave", "shaved", "shaven"),//nic/shaved
    array("show", "showed", "shown"),)
    );
    
    $group[] = array("Grupa 9",array( 
    array("dive", "dived", "dived"), //dove
    array("do", "did", "done"),
    array("go", "went", "gone"),
    array("hear", "heard", "heard"),
    array("have", "had", "had"),
    array("be", "was", "been"),// (am,is,are)/(were)
    array("come", "came", "come"),
    array("become", "became", "become"),
    array("overcome", "overcame", "overcome"),
    array("see", "saw", "seen"),
    array("saw", "sawed", "sawn"),//nic/sawed
    array("mow", "mowed", "mown"),
    array("lie", "lied", "lied"),
    array("lie", "lay", "lain"),
    array("lay", "laid", "laid"),)
    );
    //Wyswietlanie nagłowków
    $naglowek=array("Simple Form", "Simple Past", "Past Participle");

    ?>
    
    <style>
    .popup .overlay{
        position: fixed;
        top:0px;
        left:0px;
        width:100vw;
        height:100vh;
        background: rgba(0,0,0,0.7);
        z-index: 1;
        display:none;
    }
    .popup .content{
        position: fixed;
        top:50%;
        left:50%;
        transform: translate(-50%,-50%) scale(0);
        background:#fff;
        width:450px;
        height: 220px;
        z-index: 2;
        text-align:center;
        padding:20px;
        box-sizing: border-box;
    }
    .popup .close-btn{
        cursor:pointer;
        position:fixed;
        right: 20px;
        top:20px;
        width: 30px;
        height: 30px;
        background: #222;
        color:#fff;
        font-size: 25px;
        font-weight: 600;
        line-height: 30px;
        text-align:center;
        border-radius: 50%;
    }
    .popup.active .overlay {
      display:block;  
    }
    .popup.active .content{
        transition:all 300ms ease-in-out;
        transform: translate(-50%,-50%) scale(1);
    }
    
    .table-english, .table-english td {
        border: 1px solid black;
        padding: 4px;
        margin: 2px;
        text-align: center;
     }
     .przycisk{
        background-color: lightblue;
        border: none;
        color: white;
        padding: 10px;
        margin: 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 13px;
     }
     .guzik{
        padding:15px;
        color:firebrick;
        margin-top:5px;
        margin-bottom:20px;
     }
     .sprawdź{
        padding:15px;
        margin-top:20px;
        margin-bottom:20px;
     }

    </style>


     <?php //Robienie własnego alertu?>
     <div class="popup" id="popup-1">
         <div class="overlay"></div>
         <div class="content">
            <div class="close-btn" onclick="ESTS_togglePopup()">&times;</div>
    <h1>Komunikat</h1>
    <textarea type="text" wrap="soft" id="okno_id" value="">Nie masz jeszcze żadnej wartości wpisanej w pola!</textarea>
         </div>
     </div>


        <?php
        for ($a=0;$a<count($group);$a++){?>
            <table class="table-english"> 
            <tr>
            <?php //Wypisywnaie nagłowków!?>
            <td><center><b> <?php echo $naglowek[0]?></b></center></td>
            <td><center><b> <?php echo $naglowek[1]?></b></center></td>
            <td><center><b> <?php echo $naglowek[2]?></b></center></td>
            </tr>
            <tr>
                <td style="background-color: lightgreen" colspan="3"><center><b><?php echo $group[$a][0]; ?></b></center></td>
            </tr>
            <?php
            for ($i=0;$i<count($group[$a][1]);$i++){?>
                <tr>
                    <td><?php echo ($group[$a][1][$i][0]);?></td>
                    <td><input type="text" placeholder="Podaj simple past" id="<?php echo $a; ?>_<?php echo $i; ?>" name="Simple_Past" value="" odpowiedz="<?php echo ($group[$a][1][$i][1]);?>"></td>
                    <td><?php echo ($group[$a][1][$i][2]);?></td>
                    <td><button  name="podpowiedz" identyfikator="<?php echo $a; ?>_<?php echo $i; ?>" class="przycisk">podpowiedź</button></td>
                   
                    
                    
                </tr>
                <?php
                    
            }?>
<?php
?>

  
   
      </table>
      <button class="sprawdź" name="sprawdzenie">sprawdź</button>

      <?php
      echo '<br>';
        } 
    
    ?>
    <button class="guzik" name="wszystko">zakończ</button>

<script>
    //Zmienne globalne w js
    var okienko;
    var inputUserNames = document.getElementsByName('Simple_Past');
    var punkty_koniecGry=0;
    var ilosc_wierszy=inputUserNames.length;
    var odpowiedz;
    var idSplit;
    var licz=0;
    var punkty=0;
    var articles=document.getElementsByName("sprawdzenie");
    var dlugoscWyrazu;
    var slowo;
    for (var i=0; i<articles.length;i++){
        articles[i].addEventListener('click',ESTS_spr);
    }
        function ESTS_spr(){
           
            for(var i = 0, l = inputUserNames.length; i < l; i++){
                if((inputUserNames[i].value)==(inputUserNames[i].getAttribute('odpowiedz'))){
                inputUserNames[i].setAttribute('style','border: 2px solid green');
            }
            else{
                inputUserNames[i].setAttribute('style','border: 2px solid red');    
            }

                //console.log(inputUserNames[i].value);
                console.log(inputUserNames[i].getAttribute('odpowiedz'));
            } 

            for(var i = 0; i < inputUserNames.length; i++){
                if((inputUserNames[i].style.borderColor== "green")){
                licz+=1;
                punkty=punkty+2;
            }
           
        }
        
    }
    
    var zmienna=document.getElementsByName("wszystko");
    zmienna[0].addEventListener('click',ESTS_end);
    function ESTS_end(){
        
        var inputUserNames = document.getElementsByName('Simple_Past');
         document.getElementById("popup-1").classList.toggle("active");
            for(var i=0;i<zmienna.length;i++){
                if (licz == ilosc_wierszy){
                    if((punkty + punkty_koniecGry>1)&&punkty + punkty_koniecGry<5){
                        document.getElementById("okno_id").value=('Brawo, zdałeś caly test i '+' uzyskałes '+ (punkty + punkty_koniecGry) +' punkty');
                    console.log('Masz '+(punkty +punkty_koniecGry) +' punkty');
                   
                    }
                    if(punkty + punkty_koniecGry==1 ||punkty + punkty_koniecGry==-1){
                        document.getElementById("okno_id").value=('Brawo, zdałeś caly test i '+' uzyskałes '+ (punkty + punkty_koniecGry) +' punkt');
                        console.log('Masz '+(punkty +punkty_koniecGry) +' punkty');
                    }
                    if(punkty+punkty_koniecGry<-1 &&punkty+punkty_koniecGry>-5){
                        document.getElementById("okno_id").value=('Brawo, zdałeś caly test i '+' uzyskałes '+ (punkty + punkty_koniecGry) +' punkty');
                        console.log('Masz '+(punkty +punkty_koniecGry) +' punkty');
                    }
                    if(punkty+punkty_koniecGry>4 ||punkty+punkty_koniecGry<-4){
                        document.getElementById("okno_id").value=('Brawo, zdałeś caly test i '+' uzyskałes '+ (punkty + punkty_koniecGry) +' punktów');
                    console.log('Masz '+(punkty +punkty_koniecGry) +' punktów')
                    }   
                }

                else{
                    if(punkty + punkty_koniecGry>1 && punkty + punkty_koniecGry<5){
                        document.getElementById("okno_id").value=('Musisz jeszcze coś poprawić! '+ 'Jeszcze ' + (ilosc_wierszy-licz)+ " słów. " + " Aktualnie masz: "+(punkty +punkty_koniecGry) +' punkty');
                    }
                    if(punkty+punkty_koniecGry<-1 &&punkty+punkty_koniecGry>-5){
                        document.getElementById("okno_id").value=('Musisz jeszcze coś poprawić! '+ 'Jeszcze ' + (ilosc_wierszy-licz)+ " słów. " + " Aktualnie masz: "+(punkty +punkty_koniecGry) +' punkty'); 
                    }
                    if(punkty + punkty_koniecGry==1 || punkty + punkty_koniecGry==-1){
                        document.getElementById("okno_id").value=('Musisz jeszcze coś poprawić! '+ 'Jeszcze ' + (ilosc_wierszy-licz)+ " słów. " + " Aktualnie masz: "+(punkty +punkty_koniecGry) +' punkt');
                    }
                    if(punkty+punkty_koniecGry>4 ||punkty+punkty_koniecGry<-4){
                        document.getElementById("okno_id").value=('Musisz jeszcze coś poprawić! '+ 'Jeszcze ' + (ilosc_wierszy-licz)+ " słów. "+ "Aktualnie masz: "+(punkty +punkty_koniecGry) +' punktów');
                    }
                    
                    //console.log (licz);
                    //console.log('Masz '+(punkty +punkty_koniecGry) +' Punktów');
                    
                }
            }
            licz=0;
            punkty=0;
        }

    //zmienna od przyciskow
    var przyciskPodpowiedz=document.getElementsByName('podpowiedz');
    for (var i=0; i<przyciskPodpowiedz.length;i++){//petla dla kazdego przycisku
        przyciskPodpowiedz[i].addEventListener('click',function(e){//klikniecie w kazdy przycisk podpowiedz
            var identyfikator=e.target.getAttribute("identyfikator");//identyfikator przycisku podpowiedz
            var odpowiedz=document.getElementById(identyfikator).getAttribute("odpowiedz");
            var odpowiedz_obj=document.getElementById(identyfikator);
            var uzytkownik_odp=odpowiedz_obj.value

            if (uzytkownik_odp==""){
            	odpowiedz_obj.value=odpowiedz.substr(0,1);
            }
      

            for(var c=0;c<uzytkownik_odp.length;c++){
            if(odpowiedz_obj.value.substring(0,c+1)!=odpowiedz.substring(0,c+1)){
                   alert('Coś jest nie tak!');
                   break;
               }
            if(odpowiedz_obj.value==odpowiedz.substr(0,c+1)){
                    odpowiedz_obj.value=odpowiedz.substring(0,c+2);
                  
               }
            if(uzytkownik_odp.length==odpowiedz.length && odpowiedz_obj.value==odpowiedz.substring(0,c+1)){
                   alert("Brawo, koniec wyrazu");
                   break;
               }
            if(uzytkownik_odp.length>odpowiedz.length){
                   alert("Wyjechałeś poza wyraz");
                   break;
            }
        }

            punkty_koniecGry-=1;
        });
     }



     function ESTS_togglePopup(){
         document.getElementById("popup-1").classList.toggle("active");
     }



</script>
     <?php
      
    
    //WYŚWIETLANIE STRUKTURY $GROUP
    /*
    echo "<pre>";
        print_r($group);
        echo "</pre>";
        */
    
    
        }
    add_shortcode('nauka','ESTS_tablica_nauka');


