<?php

    if(!session_start()) {
		$error = "Uh oh";
		exit;
	}
	
	$loggedIn = empty($_SESSION['loggedIn']) ? false : $_SESSION['loggedIn'];
	if (!$loggedIn) {
		header("Location: login.php");
		exit;
	}
?>

<!DOCTYPE html>
<html lang="en">
    
    <!--
        Name: Darian Bilderback
        Pawprint: dlb3x6
        Date: 5/4/2020
        Challenge: Final Project
    -->
    <head>
        <meta charset="utf-8">
        <title>Video Game History Journey</title>
        <link rel="stylesheet" type="text/css" href="dlb3x6FinalProject.css">
        <link rel="stylesheet" type="text/css" href="jquery-ui-1.12.1.custom/jquery-ui.min.css">
        
        <script src="jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
        <script src="jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
        
        <script>
            
            
            
            function doThing(gen){
                switch (gen) {
                    case 'gen1' :
                        $(".systems").hide();
                        $("#gen1").fadeIn(); //https://www.w3schools.com/jquery/eff_fadein.asp
                        $(".tab").removeClass("active");
                        $("#gen1T").addClass("active");
                        break;
                    case 'gen2' :
                        $(".systems").hide();
                        $("#gen2").fadeIn();
                        $(".tab").removeClass("active");
                        $("#gen2T").addClass("active");
                        break;
                    case 'gen3' :
                        $(".systems").hide();
                        $("#gen3").fadeIn();
                        $(".tab").removeClass("active");
                        $("#gen3T").addClass("active");
                        break;
                    case 'gen4' :
                        $(".systems").hide();
                        $("#gen4").fadeIn();
                        $(".tab").removeClass("active");
                        $("#gen4T").addClass("active");
                        break;
                    case 'gen5' :
                        $(".systems").hide();
                        $("#gen5").fadeIn();
                        $(".tab").removeClass("active");
                        $("#gen5T").addClass("active");
                        break;
                    case 'gen6' :
                        $(".systems").hide();
                        $("#gen6").fadeIn();
                        $(".tab").removeClass("active");
                        $("#gen6T").addClass("active");
                        break;
                    case 'gen7' :
                        $(".systems").hide();
                        $("#gen7").fadeIn();
                        $(".tab").removeClass("active");
                        $("#gen7T").addClass("active");
                        break;
                    case 'gen8' :
                        $(".systems").hide();
                        $("#gen8").fadeIn();
                        $(".tab").removeClass("active");
                        $("#gen8T").addClass("active");
                        break;
                    case 'gen9' :
                        $(".systems").hide();
                        $("#gen9").fadeIn();
                        $(".tab").removeClass("active");
                        $("#gen9T").addClass("active"); //https://stackoverflow.com/questions/20403892/change-active-tab-using-jquery
                        break;
                } //https://www.tutorialspoint.com/cprogramming/switch_statement_in_c.htm
            }
            
            function makeDraggable(){
            $(function(){ 
                
                $(".gamePic").draggable();
                
                $("#magnavoxOdyssey").droppable({
                accept: "#football", //https://api.jqueryui.com/droppable/#option-accept
                drop: function(event, ui) {
                $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/YobdRHQz3zI?start=17\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>"); //https://support.google.com/youtube/answer/171780?hl=en
                $("#game1gen1").html("<h3 class=\"centerThis\">Magnavox Odyssey(1972)</h3><p class=\"centerThis smol\">The Magnavox Odyssey was the very first commercially sold console. It had \"game cards\" instead of your ROM cartridges that had printed circuit boards to change the inner workings of the console. As the console could only display 3 square dots and a line, plastic overlays were put over the TV to simulate the environment and the console had many elements of traditional board games with play money, poker chips, and various other gadgets. The video shown is an emulation, no sound was available for any game.</p>"); //https://en.wikipedia.org/wiki/Magnavox_Odyssey
                }
                });
                
                $("#atari2600").droppable({
                accept: "#pacMan",
                drop: function(event, ui) {
                $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/HL2p2ANFlQ4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
                $("#game1gen2").html("<h3 class=\"centerThis\">Atari 2600(1980)</h3><p class=\"centerThis smol\">This is closer to what more veteran gamers would call \"retro\". Leveraging heavily off the golden age of arcade games, the Atari brought many of those games to the TV, albeit in a less desirable fashion. At this time many arcade machines had gotten advanced enough to have soundtracks, RGB, and even psudo-3D graphics!</p>"); //https://en.wikipedia.org/wiki/Atari_2600
                }
                });
                
                $("#lotsOfConsoles").droppable({
                accept: "#donkeyKongJr",
                drop: function(event, ui) {
                $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/6uhdO-r2l_Q\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
                $("#game2gen2").html("<h3 class=\"centerThis\">Lots and Lots of Consoles(1976-1982)</h3><p class=\"centerThis smol\">Along with the golden age of arcades came the video game crash of 1983 where consoles flooded the market, leaving 15 competitors on the field with a rather expensive price tag and no great games to show for it. This led to the famous landfill full of E.T. games.</p>"); //https://en.wikipedia.org/wiki/Second_generation_of_video_game_consoles
                }
                });
                
                $("#nes").droppable({
                accept: "#smb3",
                drop: function(event, ui) {
                $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/82TL-Acm4ts\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
                $("#game1gen3").html("<h3 class=\"centerThis\">Nintendo Entertainment System(1985)</h3><p class=\"centerThis smol\">The NES was an 8-bit console and pretty much the only console available to Americans in this generation. Luckily Nintendo did not hold back on designing legendary games that now span decades such as Mario, The Legend of Zelda, Metroid, and more. This not only lifted us out of the crash but made consoles a legit business.</p>"); //https://en.wikipedia.org/wiki/Nintendo_Entertainment_System
                }
                });
                
                $("#sg1000").droppable({
                accept: "#girlsGarden",
                drop: function(event, ui) {
                $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/ctssz_GpafI\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
                $("#game2gen3").html("<h3 class=\"centerThis\">SG-1000 (1983 JP/NZ only)</h3><p class=\"centerThis smol\">The SG-1000 is the basic prototype for what will soon be Nintendo's rival. There were many iterations of this console but most would not know who Sega was until next generation.</p>"); //https://en.wikipedia.org/wiki/SG-1000
                }
                });
                
                $("#snes").droppable({
                accept: "#dkc",
                drop: function(event, ui) {
                $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/DoaaAuLmGyU?start=10\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
                $("#game1gen4").html("<h3 class=\"centerThis\">Super Nintendo Entertainment System (1991)</h3><p class=\"centerThis smol\">The SNES was the jump into 16-bit graphics. While it couldn't hold a candle to something like the TurboGrafx 16, the many loveable reoccuring characters kept many fans who fell in love with the NES. Games such as Star Fox broke the limit making the first polygonal 3D game. Eventually a CD function would be available as an add-on but it was never utilized well.</p>"); //https://en.wikipedia.org/wiki/Super_Nintendo_Entertainment_System
                }
                });
                
                $("#genesis").droppable({
                accept: "#sonic",
                drop: function(event, ui) {
                $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/Pl4oqV7T7_k\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
                $("#game2gen4").html("<h3 class=\"centerThis\">Sega Genesis (1989)</h3><p class=\"centerThis smol\">The Genesis was Nintendo's real first competitor as Atari and other consoles fell behind considerably. This console brought one major maskot with them, Sonic, as well as more mature games such as Mortal Kombat, which was so violent it brought in the ESRB rating system we see today. Eventually a CD function would be available as an add-on but it was never utilized well.</p>"); //https://en.wikipedia.org/wiki/Sega_Genesis
                }
                });
                
                $("#gb").droppable({
                accept: "#tetris",
                drop: function(event, ui) {
                $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/bOYoBkZV9RU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
                $("#game2gen4").html("<h3 class=\"centerThis\">Nintendo Game Boy (1989)</h3><p class=\"centerThis smol\">The Game Boy is what popularized handheld gaming today. While there were handhelds before this such as the Game&Watch and mini comuters, this was the first to take off with 8-bit black and white games such as the famous Tetris and Pokemon Red/Blue. There was no backlight so it was rather difficult to play.</p>"); //https://en.wikipedia.org/wiki/Game_Boy
                }
                });
                
                $("#n64").droppable({
                accept: "#ocarinaOfTime",
                drop: function(event, ui) {
                $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/67Z5VKTwAls\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
                $("#game1gen5").html("<h3 class=\"centerThis\">Nintendo 64 (1996)</h3><p class=\"centerThis smol\">The Nintendo 64 was the pioneer of 3D graphics, with it's first and most ambitious game, reaching 32MB in size, The Legend of Zelda: Ocarina of Time. All of the great Nintendo worlds were now lifelike, bringing in some of the highest rated games of all time. But this would not be the only player on the field as the constraints of cartridges become apparent.</p>"); //https://en.wikipedia.org/wiki/Nintendo_64
                }
                });
                
                $("#ps").droppable({
                accept: "#ff7",
                drop: function(event, ui) {
                $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/KhSicdniIng\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
                $("#game2gen5").html("<h3 class=\"centerThis\">Sony PlayStation (1995)</h3><p class=\"centerThis smol\">While Sega failed at taking on Nintendo, Sony would show the world the power of CD technology, being able to hold around 700MB of data. Though the CD became easily pirated, PlayStation saw huge success, selling over 3 times more than the Nintendo 64, creating its own lineup of exclusive games such as Crash Bandicoot, Metal Gear Solid, and Final Fantasy.</p>"); //https://en.wikipedia.org/wiki/PlayStation_(console)
                }
                });
                
                $("#xbox").droppable({
                accept: "#halo2",
                drop: function(event, ui) {
                $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/DtWI2Tbxr0g\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
                $("#game1gen6").html("<h3 class=\"centerThis\">Microsoft Xbox (2001)</h3><p class=\"centerThis smol\">With Nintendo's relunctance to switch to full CD-ROMs because of pirating possibilities, the Xbox took its place, starting a console war that would last decades. Xbox had much greater computing power, being able to match PCs of the time. But not only that, it was the first console to really integrate multiplayer gaming online. Taking advantage of the internet, Xbox Live allowed you to play games like Halo 2 with anyone around the world.</p>"); //https://en.wikipedia.org/wiki/Xbox_(console)
                }
                });
                
                $("#ps2").droppable({
                accept: "#gtaSA",
                drop: function(event, ui) {
                $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/PpAM6fVvopI\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
                $("#game2gen6").html("<h3 class=\"centerThis\">Sony PlayStation 2 (2000)</h3><p class=\"centerThis smol\">While the Xbox may have put up a good fight, PlayStation was building a massive fanbase against Nintendo, bringing more varied titles rather than familiar classics. The PS2 is the highest selling console of all time. During this time, games began taking a more narrative approach where the line between game and movie began to become blurred, with such amazing cinematic titles like Metal Gear Solid 2: Sons of Liberty.</p>"); //https://en.wikipedia.org/wiki/PlayStation_2
                }
                });
                
                $("#xbox360").droppable({
                accept: "#skyrim",
                drop: function(event, ui) {
                $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/DuKON7BL8ho?start=540\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
                $("#game1gen7").html("<h3 class=\"centerThis\">Microsoft Xbox 360 (2005)</h3><p class=\"centerThis smol\">Many would consider this a golden age in gaming as online becomes normalized with greater structure. Open world games keep getting bigger and stories more in depth. And everything is in crisp 1080p. Xbox 360 expands on its Halo and Gears of War franchises it has gained and the console wars are apparent, each choosing their own niche. But games keep getting bigger, sometimes taking up more than 2 discs, leaving Sony's newest invention to take the cake...kinda.</p>"); //https://en.wikipedia.org/wiki/Xbox_360
                }
                });
                
                $("#ps3").droppable({
                accept: "#lastOfUs",
                drop: function(event, ui) {
                $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/lq87zba2LHQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
                $("#game1gen7").html("<h3 class=\"centerThis\">Sony PlayStation 3 (2006)</h3><p class=\"centerThis smol\">Many would consider this a golden age in gaming as online becomes normalized with greater structure. Open world games keep getting bigger and stories more in depth. And everything is in crisp 1080p. PlayStation 3 adds more exclusives to their system as a major selling point, holding most of the Japanese games on the market as well as loved titles like The Last of Us and Uncharted. But to add to that they also have the Blu-Ray disc which can hold 50GB of data. Sadly they fell behind because of bad marketing.</p>"); //https://en.wikipedia.org/wiki/PlayStation_3
                }
                });
                
                $("#wii").droppable({
                accept: "#wiiSports",
                drop: function(event, ui) {
                $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/Ftyg6Sej3Kc?start=12\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
                $("#game2gen7").html("<h3 class=\"centerThis\">Nintendo Wii (2006)</h3><p class=\"centerThis smol\">While Microsoft and Sony focused on enhancing graphics and online capabilites, Nintendo focused more on trying something completely new, motion controls. The Wii remote would simulate movement in the game in various ways and allow for new ways of playing never before seen. Xbox and PlayStation tried to mimic its fame with the Kinect and the Move but both could not compete. This selling point helped it explode in popularity, despite its lack of graphics technology.</p>"); //https://en.wikipedia.org/wiki/Wii
                }
                });
                
                $("#ds").droppable({
                accept: "#pokemonRuby, #nsmb", //https://stackoverflow.com/questions/23806478/accept-multiple-elements-droppable-jquery-ui
                drop: function(event, ui) {
                if (ui.draggable.attr("id") == "pokemonRuby"){
                    $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/bZhgY212MO8\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
                }
                if (ui.draggable.attr("id") == "nsmb"){
                    $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/FZX_tOO5sTE?start=139\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
                }
                $("#game2gen7").html("<h3 class=\"centerThis\">Nintendo DS (2004)</h3><p class=\"centerThis smol\">The Nintendo DS was another hop that helped Nintendo dominate the handheld industry. While some such as the PlayStation Portable tried to compete, its iconic touch screen and memorable titles ultimately won. The device was backwards compatible with the Game Boy and Game Boy Advance, making it an all-in-one with multiple versions made with a backlight and even camera!</p>"); //https://en.wikipedia.org/wiki/Nintendo_DS
                }
                });
                
                $("#xb1").droppable({
                accept: "#halo5",
                drop: function(event, ui) {
                $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/xPYw3vJ59zs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
                $("#game1gen8").html("<h3 class=\"centerThis\">Microsoft Xbox One (2013)</h3><p class=\"centerThis smol\">Focusing more on UI design and alternate entertainment like movie and TV streaming services this time around, Xbox fell in many places including marketing and game development, now letting go of exclusives that gave consoles an advantage in the market. The Xbox One could handle a lot more than its predecessor and later versions allowed for 4K upscaling. The console has blu-ray capability and as games are getting bigger (100GB+), physical copies are looking less and less common. </p>"); //https://en.wikipedia.org/wiki/Xbox_One
                }
                });
                
                $("#ps4").droppable({
                accept: "#uncharted4",
                drop: function(event, ui) {
                $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/d5nfXqffvyc?start=4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
                $("#game1gen8").html("<h3 class=\"centerThis\">Sony PlayStation 4 (2013)</h3><p class=\"centerThis smol\">PlayStation 4's main advantage in this generation has been focusing on developing for their first party exclusives to keep people buying their consoles. Their focus on single player games gave them a massive advantage. Other versions of the PS4 have 4K upsacling. Most of the differences in taste were preference of game and platform. The console has blu-ray capability like its predecessor and as games are getting bigger (100GB+), physical copies are looking less and less common.</p>"); //https://en.wikipedia.org/wiki/PlayStation_4
                }
                });
                
                $(".ns").droppable({
                accept: "#ssbu",
                drop: function(event, ui) {
                $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/kvvefxJfWNE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
                $("#game2gen8").html("<h3 class=\"centerThis\">Nintendo Switch (2017)</h3><p class=\"centerThis smol\">Nintendo fell behind at the beginning of this generation, flopping miserably with the Wii U. But they came back strong giving one of the greatest handhelds on the market and one of the greatest consoles for couch co-op. Switch's functionality has made it incredibly popular in a short time and has put Nintendo back near the top with classics and new IPs alike, modernizing their thinking and technology.</p>"); //https://en.wikipedia.org/wiki/Nintendo_Switch
                }
                });
                
                $("#xbsx").droppable({
                accept: "#haloInfinite",
                drop: function(event, ui) {
                $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/ZtgzKBrU1GY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
                $("#game1gen9").html("<h3 class=\"centerThis\">Microsoft Xbox Series X (2020)</h3><p class=\"centerThis smol\">The Xbox Series X is a recently announced console that so far oubeats its main competitor in specs. Now that it has ditched the exclusives all its franchises can also be found on PC and the line between PC and console is becoming thinner as ray tracing and other technologies become available at a cheaper price for newer consoles. An SSD was added to increase loading times as well. Most developers are not yet taking full advantage of this new generation.</p>"); //https://en.wikipedia.org/wiki/Xbox_Series_X
                }
                });
                
                $("#ps5").droppable({
                accept: "#godfall",
                drop: function(event, ui) {
                $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/yhAIEHQZZiI\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
                $("#game1gen9").html("<h3 class=\"centerThis\">Sony PlayStation 5 (2020)</h3><p class=\"centerThis smol\">Though PlayStation 5 is falling behind in specs and backwards compatibility features, they may be able to hold out as exclusives harbor in new players who want to see familiar franchises. Not much has been said baout this console hence the lack of a picture. Most developers are not yet taking full advantage of this new generation.</p>"); //https://en.wikipedia.org/wiki/PlayStation_5
                }
                });
                
                $("#pc").droppable({
                accept: "#axiomVerge2",
                drop: function(event, ui) {
                $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/BhWRJb2hLi0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
                $("#game2gen9").html("<h3 class=\"centerThis\">Personal Computers</h3><p class=\"centerThis smol\">PCs have always been there alongside gaming consoles and both end up playing a cat and mouse game with PC usually taking the first step. Though with graphics becoming increasingly difficult to improve upon, people are looking for style over graphics. Indie developers are booming in this time because of their unique ideas where graphics may fall short.</p>");
                }
                });
                
                $("#valveIndex").droppable({
                accept: "#hla",
                drop: function(event, ui) {
                $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/LTLotwKpLgk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
                $("#game2gen9").html("<h3 class=\"centerThis\">Valve Index (And Other Virtual Reality)</h3><p class=\"centerThis smol\">Virtual Reality started long ago with such devices like the Nintendo Virtual Boy but only recently have we made great leaps towards actual games through the Oculus Rift, HTC Vive, and Valve Index. The displays for high end VRs can reach 1600p combined for both eyes. This allows for the science fiction concept of \"being in the game\" that so many generations sought to experience. Many insane additions have been invented such as full motion gloves, it's just a matter of commercializing it.</p>");
                }
                });
        
            
                });
                
            }
            
            function getVideo(){
                $("#video").html("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/pvX6Bv94M3M\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
                $("#game2gen1").html("<h3 class=\"centerThis\">Pong Clones (1975)</h3><p class=\"centerThis smol\">After the creation of one of the earliest Pong arcade machines, many people began replicating the fame of the game by making home versions of it. This will become a trend as consoles become comercially successful. The one displayed in the video is an Atari Home Pong, where the sound of the game came out of the console itself.<p>"); //https://en.wikipedia.org/wiki/Pong#Home_version
            }
            
            function reset(){
                $activeGroup = document.querySelector('.active').id; //https://stackoverflow.com/questions/6773550/get-id-of-div-from-its-class-name
                
                switch($activeGroup) {
                    case 'gen1T' :
                        $("#game1gen1").html("<h3 class=\"centerThis\">Magnavox Odyssey (1972)</h3><img src=\"footballGame.jpg\" class=\"gamePic\" id=\"football\" alt=\"football game overlay for Odyssey\">");
                        $("#game2gen1").html("<h3 class=\"centerThis\">Pong Clones (1975)</h3><p class=\"centerThis\">Plug and play console so just click on the Atari Home Pong</p>");
                        makeDraggable();
                    case 'gen2T' :
                        $("#game1gen2").html("<h3 class=\"centerThis\">Atari 2600 (1980)</h3><img src=\"pacMan.jpg\" class=\"gamePic\" id=\"pacMan\" alt=\"Pac-Man game cartridge for Atari\">");
                        $("#game2gen2").html("<h3 class=\"centerThis\">Lots and Lots of Consoles (1976-1982)</h3><img src=\"donkeyKongJr.jpg\" class=\"gamePic\" id=\"donkeyKongJr\" alt=\"Donkey Kong Jr. game cartridge for ColecoVision\">");
                        makeDraggable();
                    case 'gen3T' :
                        $("#game1gen3").html("<h3 class=\"centerThis\">Nintendo Entertainment System (1985)</h3><img src=\"smb3.jpg\" class=\"gamePic\" id=\"smb3\" alt=\"Super Mario Bros. 3 game cartridge for NES\">");
                        $("#game2gen3").html("<h3 class=\"centerThis\">SG-1000 (1983 JP/NZ only)</h3><img src=\"girlsGarden.jpg\" class=\"gamePic\" id=\"girlsGarden\" alt=\"Girl's Garden cartridge for SG-1000\">");
                        makeDraggable();
                    case 'gen4T' :
                        $("#game1gen4").html("<h3 class=\"centerThis\">Super Nintendo Entertainment System (1991)</h3><img src=\"donkeyKongCountry.jpg\" class=\"gamePic\" id=\"dkc\" alt=\"Donkey Kong Country cartridge for the SNES\">");
                        $("#game2gen4").html("<h3 class=\"centerThis\">Sega Genesis (1989) / Nintendo Game Boy (1989)</h3><img src=\"sonicTheHedgehog.jpg\" class=\"gamePic float\" id=\"sonic\" alt=\"Sonic the Hedgehog cartridge for Genesis\"><img src=\"tetris.jpg\" class=\"gamePic float\" id=\"tetris\" alt=\"Tetris for the Game Boy\">");
                        makeDraggable();
                    case 'gen5T' :
                        $("#game1gen5").html("<h3 class=\"centerThis\">Nintendo 64 (1996)</h3><img src=\"ocarinaOfTime.jpg\" class=\"gamePic\" id=\"ocarinaOfTime\" alt=\"The Legend of Zelda: Ocarina of Time cartridge for the Nintendo 64\">");
                        $("#game2gen5").html("<h3 class=\"centerThis\">Sony PlayStation (1995)</h3><img src=\"ff7.jpg\" class=\"gamePic\" id=\"ff7\" alt=\"Final Fantasy VII disc for the PlayStation\">");
                        makeDraggable();
                    case 'gen6T' :
                        $("#game1gen6").html("<h3 class=\"centerThis\">Microsoft Xbox (2001)</h3><img src=\"halo2.jpg\" class=\"gamePic\" id=\"halo2\" alt=\"Halo 2 disc for the Xbox\">");
                        $("#game2gen6").html("<h3 class=\"centerThis\">Sony PlayStation 2 (2000)</h3><img src=\"gtaSA.jpg\" class=\"gamePic\" id=\"gtaSA\" alt=\"Grand Theft Auto: San Andreas\">");
                        makeDraggable();
                    case 'gen7T' :
                        $("#game1gen7").html("<h3 class=\"centerThis\">Microsoft Xbox 360 (2005) / Sony PlayStation 3 (2006)</h3><img src=\"skyrim.jpg\" class=\"gamePic float\" id=\"skyrim\" alt=\"Skrim disc for Xbox 360\"><img src=\"lastOfUs.png\" class=\"gamePic float\" id=\"lastOfUs\" alt=\"The Last of Us disc for PS3\">");
                        $("#game2gen7").html("<h3 class=\"centerThis\">Nintendo Wii (2006) / Nintendo DS (2004)</h3><img src=\"wiiSports.jpg\" class=\"gamePic float\" id=\"wiiSports\" alt=\"Wii Sports disc for the Wii\"><img src=\"pokemonRuby.jpg\" class=\"gamePic float\" id=\"pokemonRuby\" alt=\"Pokemon Ruby cartridge for the GBA\"><img src=\"nsmb.jpg\" class=\"gamePic float\" id=\"nsmb\" alt=\"New Super Mario Bros cartridge for the DS\">");
                        makeDraggable();
                    case 'gen8T' :
                        $("#game1gen8").html("<h3 class=\"centerThis\">Microsoft Xbox One (2013) / Sony PlayStation 4 (2013)</h3><img src=\"halo5.jpg\" class=\"gamePic float\" id=\"halo5\" alt=\"Halo 5 disc for Xbox One\"><img src=\"uncharted4.jpg\" class=\"gamePic float\" id=\"uncharted4\" alt=\"Uncharted 4: A Thief's End disc for PS4\">");
                        $("#game2gen8").html("<h3 class=\"centerThis\">Nintendo Switch (2017)</h3><img src=\"ssbu.jpg\" class=\"gamePic\" id=\"ssbu\" alt=\"Super Smash Bros Ultimate cartridge for the Switch\">");
                        makeDraggable();
                    case 'gen9T' :
                        $("#game1gen9").html("<h3 class=\"centerThis\">Microsoft Xbox Series X (2020) / Sony PlayStation 5 (2020)</h3><img src=\"haloInfinite.jpg\" class=\"gamePic float\" id=\"haloInfinite\" alt=\"Halo Infinite box art for XBSX\"><img src=\"godfall.jpg\" class=\"gamePic float\" id=\"godfall\" alt=\"Godfall title drop for PS5\">");
                        $("#game2gen9").html("<h3 class=\"centerThis\">???</h3><img src=\"axiomVerge2.jpg\" class=\"gamePic float\" id=\"axiomVerge2\" alt=\"Axiom Verge 2 title drop\"><img src=\"hla.jpg\" class=\"gamePic float\" id=\"hla\" alt=\"Half Life: Alyx title drop for VR\">");
                        makeDraggable();
                }
            }
            
        </script>
    </head>
    
    <body onload="makeDraggable()">
        
        <form action="logout.php" method="get">
            <button id="logout">Logout</button>
        </form>
        <div id="wrapper">
            <div id="intro">
                <h1>A Journey Through The History of Video Games</h1>
                <br>
                <h3>Welcome to the video game time machine! Here you will be able to go generation to generation to discover just how far
                video gaming has gone over the past 40 years. This will be focusing primarily on consoles and handhelds, though one must not
                forget the important developments PC gaming and arcades had on the industry.</h3>
            </div>
            <div id="video">
                <p id="videoText">[Place game in console to begin playing]</p>
            </div>
            <div id="consolesInteractable" class="clearfix">
                <div id="tabs">
                    <ul>
                        <li onclick="doThing('gen1')" class="tab active" id="gen1T">Gen 1</li>
                        <li onclick="doThing('gen2')" class="tab" id="gen2T">Gen 2</li>
                        <li onclick="doThing('gen3')" class="tab" id="gen3T">Gen 3</li>
                        <li onclick="doThing('gen4')" class="tab" id="gen4T">Gen 4</li>
                        <li onclick="doThing('gen5')" class="tab" id="gen5T">Gen 5</li>
                        <li onclick="doThing('gen6')" class="tab" id="gen6T">Gen 6</li>
                        <li onclick="doThing('gen7')" class="tab" id="gen7T">Gen 7</li>
                        <li onclick="doThing('gen8')" class="tab" id="gen8T">Gen 8</li>
                        <li onclick="doThing('gen9')" class="tab" id="gen9T">Gen 9</li>
                    </ul>
                </div>
                <div class="systems" id="gen1">
                    <div class="columns systemImages">
                    <img class="systemPic" id="magnavoxOdyssey" src="magnavoxOdyssey.jpg" alt="Magnavox Odyssey"> <!--https://en.wikipedia.org/wiki/Magnavox_Odyssey#/media/File:Magnavox-Odyssey-Console-Set.jpg-->
                    </div>
                    <div class="columns games">
                        <div class="game1" id="game1gen1">
                            <h3 class="centerThis">Magnavox Odyssey (1972)</h3>
                            <img src="footballGame.jpg" class="gamePic" id="football" alt="football game overlay for Odyssey"> <!--https://www.uvlist.net/game-104716-Football-->
                        </div>
                        <div class="game2" id="game2gen1">
                            <h3 class="centerThis">Pong Clones (1975)</h3>
                            <p class="centerThis">Plug and play console so just click on the Atari Home Pong</p>
                        </div>
                    </div>
                    <div class="columns systemImages">
                        <img src="atariClone.png" class="systemPic" id="atariClone" onclick=getVideo() alt="Atari Home Pong"> <!--https://en.wikipedia.org/wiki/Pong#/media/File:TeleGames-Atari-Pong.png-->
                    </div>
                </div>
                
                <div class="systems" id="gen2">
                    <div class="columns systemImages">
                    <img class="systemPic" id="atari2600" src="atari2600.jpg" alt="Atari 2600"> <!--https://en.wikipedia.org/wiki/Atari_2600#/media/File:Atari-2600-Wood-4Sw-Set.jpg-->
                    </div>
                    <div class="columns games">
                        <div class="game1" id="game1gen2">
                            <h3 class="centerThis">Atari 2600 (1980)</h3>
                            <img src="pacMan.jpg" class="gamePic" id="pacMan" alt="Pac-Man game cartridge for Atari"> <!--https://www.ebay.com/itm/PAC-MAN-ATARI-2600-VINTAGE-VIDEO-GAME-/162709262575-->
                        </div>
                        <div class="game2" id="game2gen2">
                            <h3 class="centerThis">Lots and Lots of Consoles (1976-1982)</h3>
                            <img src="donkeyKongJr.jpg" class="gamePic" id="donkeyKongJr" alt="Donkey Kong Jr. game cartridge for ColecoVision"> <!--https://www.powerupgaming.ca/products/col-gm-dkjnr?variant=31297012804-->
                        </div>
                    </div>
                    <div class="columns systemImages">
                        <img src="lotsOfConsoles.jpg" class="systemPic" id="lotsOfConsoles" alt="Most of the second generation consoles"> <!--https://steemit.com/gaming/@jpperc/the-history-of-video-game-consoles-part-2-the-next-generation-->
                    </div>
                </div>
                
                <div class="systems" id="gen3">
                    <div class="columns systemImages">
                    <img class="systemPic" id="nes" src="nes.jpg" alt="Nintendo Entertainment System"> <!--https://en.wikipedia.org/wiki/Nintendo_Entertainment_System#/media/File:NES-Console-Set.jpg-->
                    </div>
                    <div class="columns games">
                        <div class="game1" id="game1gen3">
                            <h3 class="centerThis">Nintendo Entertainment System (1985)</h3>
                            <img src="smb3.jpg" class="gamePic" id="smb3" alt="Super Mario Bros. 3 game cartridge for NES"> <!--https://www.ebay.com/itm/PAC-MAN-ATARI-2600-VINTAGE-VIDEO-GAME-/162709262575-->
                        </div>
                        <div class="game2" id="game2gen3">
                            <h3 class="centerThis">SG-1000 (1983 JP/NZ only)</h3>
                            <img src="girlsGarden.jpg" class="gamePic" id="girlsGarden" alt="Girl's Garden cartridge for SG-1000"> <!--https://www.google.com/search?q=girl%27s+garden+sg+1000&sxsrf=ALeKk02jIIkzSSXijr6gUtZJX8DZ3f8JKA:1587720204463&source=lnms&tbm=isch&sa=X&ved=2ahUKEwiXoajW3oDpAhVNPK0KHVy6DVUQ_AUoAnoECCAQBA&biw=1920&bih=888#imgrc=4jXoCPUgGqTkuM-->
                        </div>
                    </div>
                    <div class="columns systemImages">
                        <img src="sg1000.jpg" class="systemPic" id="sg1000" alt="SG-1000"> <!--https://en.wikipedia.org/wiki/SG-1000#/media/File:Sega-SG-1000-Console-Set.jpg-->
                    </div>
                </div>
                
                <div class="systems" id="gen4">
                    <div class="columns systemImages">
                    <img class="systemPic" id="snes" src="snes.jpg" alt="Super Nintendo Entertainment System"> <!--https://en.wikipedia.org/wiki/Nintendo_Entertainment_System#/media/File:NES-Console-Set.jpg-->
                    </div>
                    <div class="columns games">
                        <div class="game1" id="game1gen4">
                            <h3 class="centerThis">Super Nintendo Entertainment System (1991)</h3>
                            <img src="donkeyKongCountry.jpg" class="gamePic" id="dkc" alt="Donkey Kong Country cartridge for the SNES"> <!--https://www.amazon.com/Donkey-Kong-Country-Super-Nintendo/dp/B00002SVFZ-->
                        </div>
                        <div class="game2" id="game2gen4">
                            <h3 class="centerThis">Sega Genesis (1989) / Nintendo Game Boy (1989)</h3>
                            <img src="sonicTheHedgehog.jpg" class="gamePic float" id="sonic" alt="Sonic the Hedgehog cartridge for Genesis"> <!--https://www.gamestop.com/video-games/retro-gaming/sega-genesis/games/products/sonic-the-hedgehog/10122635.html-->
                            <img src="tetris.jpg" class="gamePic float" id="tetris" alt="Tetris for the Game Boy"> <!--https://www.gamestop.com/video-games/retro-gaming/game-boy/games/products/tetris/10152452.html-->
                        </div>
                    </div>
                    <div class="columns systemImages">
                        <img src="segaGenesis.jpg" class="systemPic float multipleConsoles" id="genesis" alt="Sega Genesis"> <!--https://en.wikipedia.org/wiki/File:Sega-Genesis-Mk2-6button.jpg-->
                        <img src="gameBoy.jpg" class="systemPic float multipleConsoles" id="gb" alt="Nintendo Game Boy">
                    </div>
                </div>
                
                <div class="systems" id="gen5">
                    <div class="columns systemImages">
                    <img class="systemPic" id="n64" src="n64.jpg" alt="Nintendo 64"> <!--https://en.wikipedia.org/wiki/File:Nintendo-64-wController-L.jpg-->
                    </div>
                    <div class="columns games">
                        <div class="game1" id="game1gen5">
                            <h3 class="centerThis">Nintendo 64 (1996)</h3>
                            <img src="ocarinaOfTime.jpg" class="gamePic" id="ocarinaOfTime" alt="The Legend of Zelda: Ocarina of Time cartridge for the Nintendo 64"> <!--https://www.gamestop.com/video-games/retro-gaming/nintendo-64/games/products/the-legend-of-zelda-ocarina-of-time/10122505.html-->
                        </div>
                        <div class="game2" id="game2gen5">
                            <h3 class="centerThis">Sony PlayStation (1995)</h3>
                            <img src="ff7.jpg" class="gamePic" id="ff7" alt="Final Fantasy VII disc for the PlayStation"> <!--https://www.ebay.ie/itm/Final-Fantasy-VII-Disk-2-Sony-Playstation-PS1-DISK-2-ONLY-UK-PAL-/112749352964-->
                        </div>
                    </div>
                    <div class="columns systemImages">
                        <img src="ps.jpg" class="systemPic" id="ps" alt="PlayStation"> <!--https://en.wikipedia.org/wiki/PlayStation_(console)#/media/File:PSX-Console-wController.jpg-->
                    </div>
                </div>
                
                <div class="systems" id="gen6">
                    <div class="columns systemImages">
                    <img class="systemPic" id="xbox" src="xbox.jpg" alt="Xbox"> <!--https://en.wikipedia.org/wiki/Xbox_(console)#/media/File:Xbox-console.jpg-->
                    </div>
                    <div class="columns games">
                        <div class="game1" id="game1gen6">
                            <h3 class="centerThis">Microsoft Xbox (2001)</h3>
                            <img src="halo2.jpg" class="gamePic" id="halo2" alt="Halo 2 disc for the Xbox"> <!--https://www.mobygames.com/game/xbox/halo-2-limited-collectors-edition/cover-art/gameCoverId,38518/-->
                        </div>
                        <div class="game2" id="game2gen6">
                            <h3 class="centerThis">Sony PlayStation 2 (2000)</h3>
                            <img src="gtaSA.jpg" class="gamePic" id="gtaSA" alt="Grand Theft Auto: San Andreas"> <!--https://www.gamestop.com/video-games/retro-gaming/playstation-2/games/products/grand-theft-auto-san-andreas/10168311.html-->
                        </div>
                    </div>
                    <div class="columns systemImages">
                        <img src="ps2.jpg" class="systemPic" id="ps2" alt="PlayStation 2"> <!--https://en.wikipedia.org/wiki/PlayStation_2#/media/File:PS2-Versions.jpg-->
                    </div>
                </div>
                
                <div class="systems" id="gen7">
                    <div class="columns systemImages">
                    <img class="systemPic float multipleConsoles" id="xbox360" src="xbox360.jpg" alt="Xbox 360"> <!--https://en.wikipedia.org/wiki/File:Xbox-360-Pro-wController.jpg-->
                    <img class="systemPic float multipleConsoles" id="ps3" src="ps3.jpg" alt="PlayStation 3"> <!--https://en.wikipedia.org/wiki/PlayStation_3#/media/File:Sony-PlayStation-3-CECHA01-wController-L.jpg-->
                    </div>
                    <div class="columns games">
                        <div class="game1" id="game1gen7">
                            <h3 class="centerThis">Microsoft Xbox 360 (2005) / Sony PlayStation 3 (2006)</h3>
                            <img src="skyrim.jpg" class="gamePic float" id="skyrim" alt="Skrim disc for Xbox 360"> <!--https://www.mobygames.com/game/xbox360/elder-scrolls-v-skyrim-legendary-edition/cover-art/gameCoverId,608410/-->
                            <img src="lastOfUs.png" class="gamePic float" id="lastOfUs" alt="The Last of Us disc for PS3"> <!--https://www.pngfind.com/mpng/wxmixR_the-last-of-us-last-of-us-ps3/-->
                        </div>
                        <div class="game2" id="game2gen7">
                            <h3 class="centerThis">Nintendo Wii (2006) / Nintendo DS (2004)</h3>
                            <img src="wiiSports.jpg" class="gamePic float" id="wiiSports" alt="Wii Sports disc for the Wii"> <!--https://m15sales.com/products/wii-sports-nintendo-wii?variant=15383174873162-->
                            <img src="pokemonRuby.jpg" class="gamePic float" id="pokemonRuby" alt="Pokemon Ruby cartridge for the GBA"> <!--https://www.gamestop.com/video-games/retro-gaming/game-boy-advance/games/products/pokemon-ruby-version/10026293.html-->
                            <img src="nsmb.jpg" class="gamePic float" id="nsmb" alt="New Super Mario Bros cartridge for the DS"> <!--https://www.amazon.com/Super-Mario-Bros-Nintendo-3DS-Gifts/dp/B07NVP3MW1-->
                        </div>
                    </div>
                    <div class="columns systemImages">
                        <img src="wii.jpg" class="systemPic float multipleConsoles" id="wii" alt="Wii"> <!--https://en.wikipedia.org/wiki/File:Wii-console.jpg-->
                        <img src="ds.jpg" class="systemPic float multipleConsoles" id="ds" alt="DS Original"> <!--https://en.wikipedia.org/wiki/File:Nintendo-DS-Fat-Blue.jpg-->
                    </div>
                </div>
                
                <div class="systems" id="gen8">
                    <div class="columns systemImages">
                    <img class="systemPic float multipleConsoles" id="xb1" src="xb1.jpg" alt="Xbox One"> <!--https://en.wikipedia.org/wiki/File:Microsoft-Xbox-One-Console-Set-wKinect.jpg-->
                    <img class="systemPic float multipleConsoles" id="ps4" src="ps4.jpg" alt="PlayStation 4"> <!--https://en.wikipedia.org/wiki/File:PS4-Console-wDS4.jpg-->
                    </div>
                    <div class="columns games">
                        <div class="game1" id="game1gen8">
                            <h3 class="centerThis">Microsoft Xbox One (2013) / Sony PlayStation 4 (2013)</h3>
                            <img src="halo5.jpg" class="gamePic float" id="halo5" alt="Halo 5 disc for Xbox One"> <!--https://everybitgaming.co.uk/product/3276/halo-5-guardians-disc-only-->
                            <img src="uncharted4.jpg" class="gamePic float" id="uncharted4" alt="Uncharted 4: A Thief's End disc for PS4"> <!--https://www.ebay.com/p/175944296-->
                        </div>
                        <div class="game2" id="game2gen8">
                            <h3 class="centerThis">Nintendo Switch (2017)</h3>
                            <img src="ssbu.jpg" class="gamePic" id="ssbu" alt="Super Smash Bros Ultimate cartridge for the Switch"> <!--https://www.pinterest.co.uk/pin/281897257912664109/-->
                        </div>
                    </div>
                    <div class="columns systemImages">
                        <img src="ns1.jpg" class="systemPic ns float multipleConsoles" alt="Switch"> <!--https://en.wikipedia.org/wiki/File:Nintendo-Switch-Console-Docked-wJoyConRB.jpg-->
                        <img src="ns2.jpg" class="systemPic ns float multipleConsoles" alt="Switch"> <!--https://en.wikipedia.org/wiki/File:Nintendo-Switch-wJoyCons-BlRd-Standing-FL.jpg-->
                    </div>
                </div>
                
                <div class="systems" id="gen9">
                    <div class="columns systemImages">
                    <img class="systemPic float multipleConsoles" id="xbsx" src="xbsx.jpg" alt="Xbox Series X"> <!--https://www.techradar.com/nz/news/heres-how-microsofts-xbox-series-x-could-revolutionise-business-computing-->
                    <img class="systemPic float multipleConsoles" id="ps5" src="ps5.jpg" alt="PlayStation 5"> <!--https://www.gamespot.com/articles/ps5-controller-the-playstation-5-dualsense-brings-/1100-6475754/-->
                    </div>
                    <div class="columns games">
                        <div class="game1" id="game1gen9">
                            <h3 class="centerThis">Microsoft Xbox Series X (2020) / Sony PlayStation 5 (2020)</h3>
                            <img src="haloInfinite.jpg" class="gamePic float" id="haloInfinite" alt="Halo Infinite box art for XBSX"> <!--https://en.wikipedia.org/wiki/Halo_Infinite#/media/File:Halo_Infinite.jpg-->
                            <img src="godfall.jpg" class="gamePic float" id="godfall" alt="Godfall title drop for PS5"> <!--https://www.godfall.com/-->
                        </div>
                        <div class="game2" id="game2gen9">
                            <h3 class="centerThis">???</h3>
                            <img src="axiomVerge2.jpg" class="gamePic float" id="axiomVerge2" alt="Axiom Verge 2 title drop"> <!--https://www.vg247.com/2019/12/10/axiom-verge-2-announced-switch-2020/-->
                            <img src="hla.jpg" class="gamePic float" id="hla" alt="Half Life: Alyx title drop for VR"> <!--https://repack-games.com/half-life-alyx-free-download/-->
                        </div>
                    </div>
                    <div class="columns systemImages">
                        <img src="pc.jpg" class="systemPic float multipleConsoles" id="pc" alt="PC open"> <!--https://www.techradar.com/news/the-best-gaming-pc-->
                        <img src="valveIndex.jpg" class="systemPic float multipleConsoles" id="valveIndex" alt="Valve Index full VR kit"> <!--https://uploadvr.com/valve-index-price-specs/-->
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="textField pointyClicky" id="resetButton" onclick="reset()">Reset</button>
    </body>
</html>