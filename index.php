<?php

require_once "url.php";

//Service
/*website*/
$SW1 = json_decode(file_get_contents( $url . 'json/SW1.php'));
$SW3 = json_decode(file_get_contents( $url . 'json/SW3.php'));
/*db*/
$SD1 = json_decode(file_get_contents( $url . 'json/SD1.php'));
/*api*/
/*host*/
/*other*/
$SO1 = json_decode(file_get_contents( $url . 'json/SO1.php'));
//Server
//NomDomaine
//Client

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Tyrolium API</title>
    <meta charset="utf-8">
    <link href="https://tyrolium.fr/Contenu/Image/Tyrolium Site.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://tyrolium.fr/Contenu/Image/Tyrolium Site.png" alt="" width="34" class="d-inline-block align-text-top">
      Tyrolium Status 
    </a>
  </div>
</nav>

<br>

<h4 class="container">Tyrolium Online Services</h4>

<ol class="list-group container">

  <li class="list-group-item d-flex justify-content-between align-items-start  list-group-item-primary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">- <u>WebSite</u></div>

      <!-- SW1 = Tyrolium.fr -->
        <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <div class="fw-bold"><?php echo $SW1->title ?></div>
            <?php echo $SW1->description ?><br> <a href="json/<?php echo $SW1->id ?>.php">API</a> <a href="<?php echo $SW1->api->hostname ?>">SITE</a></div>
            <?php if($SW1->api->online){?>
               <span class="badge bg-success rounded-pill">
                 O
            <?php }else{ ?>
               <span class="badge bg-danger rounded-pill"> 
                 X
            <?php }?>
        </li>

        <!-- SW2 = TyroServ.fr -->
        <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
        <div class="ms-2 me-auto">
            <div class="fw-bold">TyroServ.fr</div>
            The Official TyroServ Website<br> 
            <a href="https://tyroserv.fr/">SITE</a>
            </div><span class="badge bg-success rounded-pill">
                 O
            </span>
        </li>

        <!-- SW3 = Wonderlium.yt -->
        <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
        <div class="fw-bold"><?php echo $SW3->title ?></div>
            <?php echo $SW3->description ?><br> <a href="json/<?php echo $SW3->id ?>.php">API</a> <a href="<?php echo $SW3->api->hostname ?>">SITE</a></div>
            <?php if($SW3->api->online){?>
               <span class="badge bg-success rounded-pill">
                 O
            <?php }else{ ?>
               <span class="badge bg-danger rounded-pill"> 
                 X
            <?php }?>
        </li>

        <!-- SW5 = selemusium.xyz -->
        <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
        <div class="ms-2 me-auto">
        <div class="fw-bold">Selemusium.xyz</div>
              The Official Sélémusium Website<br>
              <a href="https://selemusium.xyz/">SITE</a>
              </div><span class="badge bg-success rounded-pill">
                 O
            </span>
        </li>

        <!-- SW4 = status.tyrolium.fr -->
        <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
        <div class="fw-bold">Status.Tyrolium.fr</div>
              WebSite Status Service and Server<br>
              <a href="http://status.tyrolium.fr/">SITE</a>
              </div><span class="badge bg-success rounded-pill">
                 O
            </span>
        </li>
                   
        <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
        <div class="ms-2 me-auto">
        <div class="fw-bold">SolidServ.fr</div>
              The Official SolidServ Website<br>
              <a href="https://SolidServ.fr/">SITE</a>
              </div><span class="badge bg-success rounded-pill">
                 O
            </span>
        </li>
                   
        <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
        <div class="fw-bold">www.TyroDiscord.xyz</div>
              The Official TyroDiscord Website<br>
              <a href="https://www.tyrodiscord.xyz/">SITE</a>
              </div><span class="badge bg-success rounded-pill">
                 O
            </span>
        </li>

        
    </div>
  </li>  


  <li class="list-group-item d-flex justify-content-between align-items-start  list-group-item-primary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">- <u>Data Base</u></div>

      <!-- SD1 = DB Tyrolium.fr -->
      <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
            <div class="fw-bold"><?php echo $SD1->title; ?></div>
            <?php echo $SD1->description; ?> <br> <a href="json/<?php echo $SD1->id ?>.php">API</a></div>
            <?php if($SD1->api->online){?>
               <span class="badge bg-success rounded-pill">
                 O
            <?php }else{ ?>
               <span class="badge bg-danger rounded-pill"> 
                 X
            <?php }?> </span>
        </li>

        <!-- SD2 = DB TyroServ-User -->
      <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
        <div class="ms-2 me-auto">
            <div class="fw-bold">DB TyroServ-User</div>
            Data Base stocked TyroServ User
            </div><span class="badge bg-success rounded-pill">
                 O
            </span>
        </li>

        <!-- SD3 = DB TyroServ-LogConnecte -->
        <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <div class="fw-bold">DB TyroServ-LogConnecte</div>
            Data Base stocked TyroServ Connections Launcher
            </div><span class="badge bg-success rounded-pill">
                 O
            </span>
        </li>

          <!-- SD4 = DB TyroServ-Login -->
        <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
        <div class="ms-2 me-auto">
            <div class="fw-bold">DB TyroServ-Login</div>
            Data Base stocked TyroServ /Login & /register
            </div><span class="badge bg-success rounded-pill">
                 O
            </span>
        </li>

        <!-- SD5 = DB TyroServ-Login -->
        <li class="list-group-item d-flex justify-content-between align-items-start ">
        <div class="ms-2 me-auto">
            <div class="fw-bold">DB Member-Tyrolium</div>
            Data Base stocked List Member Tyrolium
            </div><span class="badge bg-success rounded-pill">
                 O
            </span>
        </li>

        <!-- SD6 = DB Sélémusium-Music -->
        <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
        <div class="ms-2 me-auto">
            <div class="fw-bold">DB Sélémusium-Music</div>
            Data Base stocked List Music Sélémusium
            </div><span class="badge bg-success rounded-pill">
                 O
            </span>
        </li>

        <!-- SD7 = DB Sélémusium-Login -->
        <li class="list-group-item d-flex justify-content-between align-items-start ">
        <div class="ms-2 me-auto">
            <div class="fw-bold">DB Sélémusium-Login</div>
            Data Base stocked List Admin Membre Sélémusium
            </div><span class="badge bg-success rounded-pill">
                 O
            </span>
        </li>
        
        <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
        <div class="ms-2 me-auto">
            <div class="fw-bold">DB SolidServ-User</div>
            Data Base stocked SolidServ User
            </div><span class="badge bg-success rounded-pill">
                 O
            </span>
        </li>

    </div>
  </li>

  <li class="list-group-item d-flex justify-content-between align-items-start  list-group-item-primary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">- <u>API</u></div>

            <!-- SA1 = API User/TyroServ.fr -->
        <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <div class="fw-bold">API User/TyroServ.fr</div>
                Api Connecte DB TyroServ in TyroServ.fr<br> 
            </div><span class="badge bg-success rounded-pill">
                 O
            </span>
        </li>

        <!-- SA2 = API MC-Server/TyroServBot & Tyrolium Status -->
        <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
        <div class="ms-2 me-auto">
            <div class="fw-bold">API MC-Server/TyroServBot</div>
                Api Connecte Server Minecraft in TyroServBot<br> 
            </div><span class="badge bg-success rounded-pill">
                 O
            </span>
        </li>


    </div>
  </li>

  <li class="list-group-item d-flex justify-content-between align-items-start  list-group-item-primary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">- <u>Hosting File</u></div>
        
      <!-- SH1 = Host Instance Minecraft -->
      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <div class="fw-bold">Host Instance Minecraft</div>
                Hosting update instance /.Tyrolium/<br> 
            </div><span class="badge bg-success rounded-pill">
                 O
            </span>
        </li>

        <!-- SH2 = Host Instance Launcher Minecraft -->
        <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
        <div class="ms-2 me-auto">
            <div class="fw-bold">Host Instance Launcher Minecraft</div>
                Hosting update instance Launcher Minecraft<br> 
            </div><span class="badge bg-success rounded-pill">
                 O
            </span>
        </li>

        <!-- SH3 = Host Download Launcher Minecraft -->
        <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <div class="fw-bold">Host Download Launcher Minecraft</div>
                Hosting File Launcher.exe and Launcher.jar<br> 
            </div><span class="badge bg-success rounded-pill">
                 O
            </span>
        </li>

        <!-- SH3 = Host Download Launcher Minecraft -->
        <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
        <div class="ms-2 me-auto">
            <div class="fw-bold">Host Picture Tyrolium</div>
                Hosting File Picture in Tyrolium<br> 
            </div><span class="badge bg-success rounded-pill">
                 O
            </span>
        </li>
    </div>
  </li>    
  <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-primary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">- <u>Other</u></div>
      

      <!-- SO1 = Server Minecraft TyroServ -->
      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <div class="fw-bold"><?php echo $SO1->title; ?></div>
            <?php echo $SO1->description; ?> <br> <a href="json/<?php echo $SO1->id ?>.php">API</a></div>
            <?php if($SO1->api->online){?>
               <span class="badge bg-success rounded-pill">
                 O
            <?php }else{ ?>
               <span class="badge bg-danger rounded-pill"> 
                 X
            <?php }?> </span>
        </li>

        <!-- SO2 = TyroBot -->
        <li class="btnApi list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">TyroBot</div>
       The Official Tyrolium Discord Bot<br> 
    </div><span class="badge bg-success rounded-pill">
                 O
            </span>
  </li>

  <!-- SO3 = TyroServBot -->
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">TyroServBot</div>
      The Official TyroServ Discord Bot<br>
    </div><span class="badge bg-success rounded-pill">
                 O
            </span>
  </li>
        
  <li class="btnApi list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">SolidServBot</div>
       The Official SolidServ Discord Bot<br> 
    </div><span class="badge bg-success rounded-pill">
                 O
            </span>
    </div>
  </li>

  <!-- SO4 = TyroDiscordRPCSwitch -->
  <li class="btnApi list-group-item d-flex justify-content-between align-items-start ">
    <div class="ms-2 me-auto">
      <div class="fw-bold">TyroDiscordRPCSwitch</div>
       Applications Discord in Switch<br> 
    </div><span class="badge bg-success rounded-pill">
                 O
            </span>
    </div>
  </li>
                   
  

  <!-- SO5 = Panel -->
  <li class="btnApi list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Owner Panel</div>
       Admin & Owner Panel and gestion permission<br> 
    </div><span class="badge bg-success rounded-pill">
                 O
            </span>
    </div>
  </li>
    
<li class="btnApi list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">WHMC Panel</div>
       Admin & Owner Panel SolidServ <br> 
    </div><span class="badge bg-success rounded-pill">
                 O
            </span>
    </div>
  </li>
    
<li class="btnApi list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Pterodactyl Panel</div>
       Game Panel SolidServ <br> 
    </div><span class="badge bg-success rounded-pill">
                 O
            </span>
    </div>
  </li>



  

        

        


  


</ol>

<hr>

<h4 class="container">Tyrolium Servers</h4>

<ol class="list-group container">
  <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">proxy601</div>
      Strasbourg - France 🇫🇷<br>
    </div><span class="badge bg-success rounded-pill">
                 O
            </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark">
    <div class="ms-2 me-auto">
      <div class="fw-bold">cloud101</div>
      Gravelines - France 🇫🇷<br> 
    </div><span class="badge bg-success rounded-pill">
                 O
            </span>
  </li>
<li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">cloud102</div>
      Gravelines - France 🇫🇷<br> 
    </div><span class="badge bg-success rounded-pill">
                 O
            </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark">
    <div class="ms-2 me-auto">
      <div class="fw-bold">vps201</div>
      Gravelines - France 🇫🇷<br>
    </div><span class="badge bg-success rounded-pill">
                 O
            </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">vps202</div>
      Gravelines - France 🇫🇷<br> 
    </div><span class="badge bg-success rounded-pill">
                 O
            </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark">
    <div class="ms-2 me-auto">
      <div class="fw-bold">vps203</div>
        Tokyo - Japon 🇯🇵<br>
    </div><span class="badge bg-danger rounded-pill">
                 X
            </span>
  </li>
    <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
        <div class="ms-2 me-auto">
            <div class="fw-bold">serv301</div>
            Frankfurt am Main - Allemagne 🇩🇪<br>
        </div><span class="badge bg-success rounded-pill">
                 O
            </span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark">
        <div class="ms-2 me-auto">
            <div class="fw-bold">serv302</div>
            Strasbourg - France 🇫🇷<br>
        </div><span class="badge bg-success rounded-pill">
                 O
            </span>
    </li>
</ol>

<br>

<h4 class="container">Tyrolium Domain Name</h4>

<ol class="list-group container">
  <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark">
    <div class="ms-2 me-auto">
      <div class="fw-bold">tyrolium.fr</div>
    </div>
    <span class="badge bg-success rounded-pill">
                 O
            </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">tyroserv.fr</div>
    </div>
    <span class="badge bg-success rounded-pill">
                 O
            </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark">
    <div class="ms-2 me-auto">
      <div class="fw-bold">wonderlium.yt</div>
    </div>
    <span class="badge bg-success rounded-pill">
                 O
            </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">selemusium.xyz</div>
    </div>
    <span class="badge bg-success rounded-pill">
                 O
            </span>
  </li>
    <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark">
        <div class="ms-2 me-auto">
            <div class="fw-bold">tyromail.fr</div>
        </div>
        <span class="badge bg-success rounded-pill">
                 O
            </span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
        <div class="ms-2 me-auto">
            <div class="fw-bold">solidserv.fr</div>
        </div>
        <span class="badge bg-success rounded-pill">
                 O
            </span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark">
        <div class="ms-2 me-auto">
            <div class="fw-bold">solidserv.xyz</div>
        </div>
        <span class="badge bg-success rounded-pill">
                 O
            </span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
        <div class="ms-2 me-auto">
            <div class="fw-bold">tyrodiscord.xyz</div>
        </div>
        <span class="badge bg-success rounded-pill">
                 O
            </span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark">
        <div class="ms-2 me-auto">
            <div class="fw-bold">useritium.fr</div>
        </div>
        <span class="badge bg-success rounded-pill">
                 O
            </span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
        <div class="ms-2 me-auto">
            <div class="fw-bold">gamenium.fr</div>
        </div>
        <span class="badge bg-success rounded-pill">
                 O
            </span>
    </li>
</ol>

<hr>

<h4 class="container">VPN Services</h4>

<ol class="list-group container">

      <!-- SN1 = vpn401 -->
      <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark">
        <div class="ms-2 me-auto">
            <div class="fw-bold">VPN 401</div>
            Virtual Private Network | USER ID #50101 (Gravelines - France 🇫🇷)<br> 
            </div><span class="badge bg-success rounded-pill">
                 O
            </span>
        </li>
      <!-- SN2 = vpn402 -->  
      <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
        <div class="ms-2 me-auto">
            <div class="fw-bold">VPN 402</div>
            Virtual Private Network | USER ID #50201 (Tokyo - Japon 🇯🇵)<br> 
            </div><span class="badge bg-danger rounded-pill">
                 X
            </span>
        </li> 

        <!-- SN3 = vpn403 -->
        <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark">    
        <div class="ms-2 me-auto">
            <div class="fw-bold">VPN 403</div>
            Virtual Private Network | USER ID #50202 (Tokyo - Japon 🇯🇵)<br> 
            </div><span class="badge bg-danger rounded-pill">
                 X
            </span>
        </li>   

</ol>

<br>

<h4 class="container">Client Servers</h4>

<ol class="list-group container">
  <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark">
    <div class="ms-2 me-auto">
      <div class="fw-bold">193.70.112.***</div>
      Client ID : 1601<br>
    </div>
    <span class="badge bg-success rounded-pill">
                 O
            </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">193.70.0.***</div>
      Client ID : 1602<br>
    </div>
            <span class="badge bg-success rounded-pill">
                 O
            </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark">
    <div class="ms-2 me-auto">
      <div class="fw-bold">193.70.37.**</div>
      Client ID : 1603<br> 
    </div>
                    <span class="badge bg-success rounded-pill">
                 O
            </span>
  </li>

    <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
        <div class="ms-2 me-auto">
            <div class="fw-bold">193.91.30.**</div>
            Client ID : 1604<br>
        </div>
        <span class="badge bg-success rounded-pill">
                 O
            </span>
    </li>

    <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark">
        <div class="ms-2 me-auto">
            <div class="fw-bold">193.70.32.**</div>
            Client ID : 1605<br>
        </div>
        <span class="badge bg-success rounded-pill">
                 O
            </span>
    </li>
    
    <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
        <div class="ms-2 me-auto">
            <div class="fw-bold">51.91.227.**</div>
            Client ID : 1606<br>
        </div>
        <span class="badge bg-success rounded-pill">
                 O
            </span>
    </li>
    
    <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark">
        <div class="ms-2 me-auto">
            <div class="fw-bold">51.91.227.**</div>
            Client ID : 1607<br>
        </div>
        <span class="badge bg-success rounded-pill">
                 O
            </span>
    </li>
    
    <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
        <div class="ms-2 me-auto">
            <div class="fw-bold">51.91.227.**</div>
            Client ID : 1608<br>
        </div>
        <span class="badge bg-success rounded-pill">
                 O
            </span>
    </li>
    
    <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark">
        <div class="ms-2 me-auto">
            <div class="fw-bold">51.91.227.**</div>
            Client ID : 1609<br>
        </div>
        <span class="badge bg-success rounded-pill">
                 O
            </span>
    </li>
    
    <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
        <div class="ms-2 me-auto">
            <div class="fw-bold">51.91.227.**</div>
            Client ID : 1610<br>
        </div>
        <span class="badge bg-success rounded-pill">
                 O
            </span>
    </li>
    
    <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark">
        <div class="ms-2 me-auto">
            <div class="fw-bold">51.91.227.**</div>
            Client ID : 1611<br>
        </div>
        <span class="badge bg-success rounded-pill">
                 O
            </span>
    </li>

  
</ol>

<hr>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  </body>
</html>