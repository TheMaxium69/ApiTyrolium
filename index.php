<?php
$API_ARRAY = json_decode(file_get_contents('http://localhost/Status/api/app.php'));

var_dump($API_ARRAY)
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://tyrolium.fr/Contenu/Image/Tyrolium Site.png" alt="" width="34" class="d-inline-block align-text-top">
      Tyrolium Status Server
    </a>
  </div>
</nav>

<br>

<h4>Nos Services en lignes</h4>

<ol class="list-group">

  <li class="list-group-item d-flex justify-content-between align-items-start  list-group-item-primary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">- <u>WebSite</u></div>
        <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <div class="fw-bold">Tyrolium.fr</div>
            The Official Tyrolium Website</div>
            <span class="badge bg-danger rounded-pill">X</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
        <div class="ms-2 me-auto">
            <div class="fw-bold">TyroServ.fr</div>
            The Official TyroServ Website<br> 
            </div>
            <span class="badge bg-danger rounded-pill">X</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <div class="fw-bold">Wonderlium.yt</div>
            The Official Wonderlium Website<br> 
            </div>
            <span class="badge bg-danger rounded-pill">X</span>
        </li>

    </div>
  </li>  


  <li class="list-group-item d-flex justify-content-between align-items-start  list-group-item-primary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">- <u>DB</u></div>


      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <div class="fw-bold">DB Tyrolium.fr</div>
                Data Base stocked "Nous Contacter"
            </div>
            <span class="badge bg-danger rounded-pill">X</span>
        </li>

      <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
        <div class="ms-2 me-auto">
            <div class="fw-bold">DB TyroServ-User</div>
            Data Base stocked TyroServ User
            </div>
            <span class="badge bg-danger rounded-pill">X</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <div class="fw-bold">DB TyroServ-LogConnecte</div>
            Data Base stocked TyroServ Connections Launcher
            </div>
            <span class="badge bg-danger rounded-pill">X</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
        <div class="ms-2 me-auto">
            <div class="fw-bold">DB TyroServ-Login</div>
            Data Base stocked TyroServ /Login & /register
            </div>
            <span class="badge bg-danger rounded-pill">X</span>
        </li>


    </div>
  </li>

  <li class="list-group-item d-flex justify-content-between align-items-start  list-group-item-primary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">- <u>API</u></div>


        <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <div class="fw-bold">API User/TyroServ.fr</div>
                Api Connecte DB TyroServ in TyroServ.fr<br> 
            </div>
            <span class="badge bg-danger rounded-pill">X</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
        <div class="ms-2 me-auto">
            <div class="fw-bold">API MC-Server/TyroServBot</div>
                Api Connecte Server Minecraft in TyroServBot<br> 
            </div>
            <span class="badge bg-danger rounded-pill">X</span>
        </li>


    </div>
  </li>

  <li class="list-group-item d-flex justify-content-between align-items-start  list-group-item-primary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">- <u>Hosting File</u></div>
        
      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <div class="fw-bold">Host Instance Minecraft</div>
                Hosting update instance /.tyrolium/<br> 
            </div>
            <span class="badge bg-danger rounded-pill">X</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
        <div class="ms-2 me-auto">
            <div class="fw-bold">Host Instance Launcher Minecraft</div>
                Hosting update instance Launcher Minecraft<br> 
            </div>
            <span class="badge bg-danger rounded-pill">X</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <div class="fw-bold">Host Download Launcher Minecraft</div>
                Hosting File Launcher.exe and Launcher.jar<br> 
            </div>
            <span class="badge bg-danger rounded-pill">X</span>
        </li>

    </div>
  </li>

  <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-primary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">- <u>Other</u></div>
      
      <?php $API_SO1 = json_decode(file_get_contents('http://localhost/Status/api/SO1.php')); ?>
      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            
            <div class="fw-bold"><?php echo $API_SO1->title; ?></div>
            <?php echo $API_SO1->description; ?></div>
            <?php if($API_SO1->result){?>
               <span class="badge bg-success rounded-pill">
                 O
            <?php }else{ ?>
               <span class="badge bg-danger rounded-pill"> 
                 X
            <?php }?> </span>
        </li>

        <li class="btnApi list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">TyroBot</div>
       The Official Tyrolium Discord Bot<br> 
    </div>
    <span class="badge bg-danger rounded-pill">X</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">TyroServBot</div>
      The Official TyroServ Discord Bot<br>
    </div>
    <span class="badge bg-success rounded-pill">O</span>
  </li>

  <li class="btnApi list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">TyroDiscordRPCSwitch</div>
       Applications Discord in Switch<br> 
    </div>
    <span class="badge bg-success rounded-pill">O</span>
    </div>
  </li>

  

        

        


  


</ol>

<hr>

<h4>Nos Serveurs</h4>

<ol class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark">
    <div class="ms-2 me-auto">
      <div class="fw-bold">cloud101</div>
    </div>
    <span class="badge bg-danger rounded-pill">X</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">vps201</div>
    </div>
    <span class="badge bg-success rounded-pill">O</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark">
    <div class="ms-2 me-auto">
      <div class="fw-bold">vps202</div>
    </div>
    <span class="badge bg-success rounded-pill">O</span>
  </li>
</ol>

<br>

<h4>Nos Nom de Domaine</h4>

<ol class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark">
    <div class="ms-2 me-auto">
      <div class="fw-bold">tyrolium.fr</div>
    </div>
    <span class="badge bg-danger rounded-pill">X</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">tyroserv.fr</div>
    </div>
    <span class="badge bg-success rounded-pill">O</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark">
    <div class="ms-2 me-auto">
      <div class="fw-bold">wonderlium.yt</div>
    </div>
    <span class="badge bg-success rounded-pill">O</span>
  </li>
</ol>

<hr>

<h4>Nos Clients</h4>

<ol class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark">
    <div class="ms-2 me-auto">
      <div class="fw-bold">193.70.112.***</div>
    </div>
    <span class="badge bg-success rounded-pill">O</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-secondary">
    <div class="ms-2 me-auto">
      <div class="fw-bold">193.70.0.***</div>
    </div>
    <span class="badge bg-success rounded-pill">O</span>
  </li>
</ol>

<hr>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  </body>
</html>