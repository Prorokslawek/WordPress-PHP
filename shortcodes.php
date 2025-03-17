<?php
//Wypisz linijke kodu
function wypiszText(){
	return 'To jest mój pierwszy shortcode.';
}
add_shortcode('text','wypiszText');

//2 shortcode wyswietl zdjęcie statyczne
function pokazZdj(){
    //sciezkaa do motywow $path=get_template_directory_uri();
    $sciezka=get_theme_root_uri();
    $sciezkaZdj='/twentyseventeen/assets/images/header.jpg';
    $image=$sciezka.$sciezkaZdj;
    //echo $sciezkaa;
    //Dodawniae pustego wiersza
    echo '<br>';
 
?>    
<img src='<?php echo $image;?>'/>
<?php

}
add_shortcode('zdj','pokazZdj');


//Short code wyświetlający ścieżkę
function pokazLokalizacje(){
    echo getcwd ();
}
add_shortcode('pokaz','pokazLokalizacje');



//Wyswietlanie zdjęcia wyróżniającego
function dynamiczneZdj(){
    $zdjecieStrony=the_post_thumbnail();
    echo $zdjecieStrony;
}
add_shortcode('wyswietl','dynamiczneZdj');

//shortcode wyswietlajacy date
function czas(){
    $data=date("d-m-Y");
    echo $data;
}
add_shortcode('data','czas');



