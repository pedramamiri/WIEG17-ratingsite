<!DOCTYPE html>
<html>
    <head>
        <title>Ranking Website</title>
        <style>
            body{
                background-color:black;
                color:white;
                filter:saturate(10);
            }
            .header{
                display:flex;
                flex-direction: row;
                
            }
            .about{
                margin-right:30px;
                
                
            }
            a{
                text-decoration: none;
                color:#ff3333;
                font-size:16px;
                filter:saturate(5);
            }
            .footer{
                position: fixed;
                left: 10px;
                bottom: 20px;
            }
            .bott1{
                background-color:rgb(64, 64, 64);                
                color: red;
                padding: 3px;
                width:100px;
                font-size: 20px;
                border: 0.5px solid red;
                border-radius:2px;
                margin-bottom:1px;          
            }
            .bott2{
                background-color:rgb(64, 64, 64);                
                color: red;
                padding: 3px;
                width:100px;
                font-size: 20px;
                border: 0.5px solid red;
                border-radius:2px;
                margin-bottom:1px;          
            }
            .about:hover .bott1{
                font-weight: bold;
                background-color:black; 
            }
            .beskriv:hover .bott2{
                font-weight: bold;
                background-color:black; 
            }
            .arv1{
                display:none;
                position: absolute;
                padding-bottom:5px;
            }
            .arv2{
                display:none;
                position: absolute;
                padding-bottom:5px;
            }
            .about:hover .arv1{
                background-color:black;
                opacity: 0.9;
                display:inline;
            }
            .beskriv:hover .arv2{
                background-color:black;
                opacity: 0.9;
                display:inline;
            }
             

        </style>    
    </head>
<body>
<?php include 'sorter.php';?>
<?php $detail = array(
    "The Weekend"=>"The Weekend is a song recorded by American singer-songwriter SZA for her debut studio album, Ctrl (2017).<br/> It was released to urban contemporary radio on September 26, 2017, as the album's third single (second radio single).<br/> The song was written by SZA and Cody Fayne, while Justin Timberlake, Timbaland, and Danja were also credited as the song samples Set the Mood <br/>(Prelude)/Until the End of Time from the 2006 album FutureSex/LoveSounds.<br/> Lyrically, the song is about sharing a lover with other women.[2] A remix version by Calvin Harris was also released.<br/> The song received a Grammy nomination at the 60th Annual Grammy Awards for Best R&B Performance.",
    "Thats What I Like"=>"Thats What I Like is a song by American singer and songwriter Bruno Mars from his third studio album 24K Magic (2016).<br/> The song was released as the albums second single on January 30, 2017.<br/> It is the highest charting single in the United States from Mars studio album 24K Magic, surpassing the single of the same name by reaching number one on the Billboard Hot 100.<br/> The songs also received remixes, featuring artists including Gucci Mane, PartyNextDoor and Alan Walker.<br/> That's What I Like won the Song of the Year, the Best R&B Song, and Best R&B Performance at the 60th Annual Grammy Awards.",
    "Redbone"=>"Redbone is a song recorded by American rapper and singer Childish Gambino (musical stage name used by actor Donald Glover).<br/> It was released on November 17, 2016, and serves as the second single from his third studio album Awaken, My Love![1]<br/> The song received three Grammy Award nominations including Record of the Year at the 60th Annual Grammy Awards, eventually winning the award for Best Traditional R&B Performance.[2]",
    "Shether"=>"Shether is a song released by American rapper Remy Ma. It is a diss track aimed at American rapper Nicki Minaj. It was released on February 25, 2017, by Empire Distribution.<br/> The song's beat is lifted from the diss track Ether by Nas.",
    "New Rules"=>"New Rules is a song by English singer Dua Lipa from her eponymous debut studio album (2017).<br/> The track was written by Caroline Ailin, Emily Warren and Ian Kirkpatrick, while production was handled by the latter.<br/> It was released to contemporary hit radio in the United Kingdom on 21 July 2017 as the album's sixth single.<br/> It impacted the same format in the United States on 22 August 2017.",
    "Bodak Yellow"=>"Bodak Yellow (alternatively titled Bodak Yellow (Money Moves)) is a song written and recorded by American rapper Cardi B.<br/> It was released on June 16, 2017 by Atlantic Records as her debut single on a major record label.<br/> The song was influenced by American rapper Kodak Blacks song No Flockin.<br/> It has topped the US Billboard Hot 100 chart for three consecutive weeks, making Cardi B the fifth female rapper to ever lead the chart,<br/> and the second-ever to do so with a solo output after Lauryn Hills Doo Wop (That Thing) in 1998."
);
?>
<pre>
<div class="header">
    <div class="about">
    <button class="bott1">< ... ></button>
<div class="arv1">
    <a  href="index.php?id=Home page">home page</a>
    <a  href="listan.php?id=Top list">Top list</a>
    <a  href="kontakt.php?id=Kontakt page">Information</a>       
</div>     
    </div>
    <div class="beskriv">   
    <button class="bott2">< ... ></button>
<div class="arv2">
<?php showDetaile($detail) ;?>
</div>    
    </div>
</div>
<?php
if($_GET == false ){
    $pageName = "home page";
}else {
    $pageName = $_GET['id'];
}
define("PAGENAME",$pageName);
echo "<h1>Welcome to ". constant("PAGENAME") ."</h1><br/>";
if(!isset($_GET['id']) || $_GET['id'] == "Home page") {
$test = " If albums had something of a soft landing on the pop landscape in 2017, then songs more than picked up the headline-grabbing slack.
It was a year of Cardi B replacing Taylor Swift atop the Billboard Hot 100, of Rihanna and Justin Bieber dominating the calendar without so much as a solo lead single from either, of Camila Cabello and
Harry Styles striking out of their own, and of DJ Khaled and Calvin Harris going pop-star crowd-sourcing.
It was a year of Despacito and BTS making international chart history, while Portugal.
The Man and Sam Hunt did so domestically.
And even with all this, it was still a year where the very best singles might not have been the very biggest. 
From Paris to Malibu, North East South West and everywhere in between, here are Billboard's 100 favorite songs of 2017.";
print_r($test);
};





?>

<div class="footer">
<p>Pedram &copy;</p>
</div>

</pre>

</body>
</html>

