

<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Gestion des projets</title>

      <!-- Custom styles for this template -->
      <link href="css/sidebar.css" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <!-- font style -->
      <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <!-- icons -->
      <script src="https://kit.fontawesome.com/a49736fb0d.js" crossorigin="anonymous"></script>
      <!-- bootstrap css -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   </head>
   <body>
      <header class="app-header app-header-dark">
         <!-- .top-bar -->
         <div class="top-bar">
            <!-- .top-bar-brand -->
            <div class="top-bar-brand">
               <!-- toggle aside menu -->
               <button class="hamburger hamburger-squeeze mr-2 menu-toggle" type="button">
               <span class="hamburger-box">
               <span class="hamburger-inner"></span>
               </span>
               </button>
               <!-- /toggle aside menu -->
               <a href="index.html">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="28" viewbox="0 0 351 100">
               </a>
            </div>
            <!-- /.top-bar-brand -->
            <!-- .top-bar-list -->
            <div class="top-bar-list">
               <!-- .top-bar-item -->
               <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
                  <!-- toggle menu -->
                  <button class="hamburger hamburger-squeeze menu-toggle" type="button" >
                  <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                  </span>
                  </button>
                  <!-- /toggle menu -->
               </div>
               <!-- /.top-bar-item -->
               <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
                  <!-- .btn-account -->
                  <div class="dropdown d-none d-md-flex">
                     <button class="btn-account" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        <!-- <button class="btn-account" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
                        <!-- <span class="user-avatar user-avatar-md">
                           <img src="assets/images/avatars/profile.jpg" alt="">
                           </span> -->
                        <span class="account-summary pr-lg-4 d-none d-lg-block">
                        <span class="account-name">Nom d'utilisateur</span>
                        <span class="account-description">Administrateur</span>
                        </span>
                     </button>
                     <!-- .dropdown-menu -->
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                        <!-- <div class="dropdown-menu"> -->
                        <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
                        <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
                        <a class="dropdown-item" href="">
                        <i class="dropdown-icon fas fa-user-cog"></i>
                        Profil</a>
                        <a class="dropdown-item" href="">
                        <span class="dropdown-icon oi oi-account-logout"></span>
                        <i class="dropdown-icon fas fa-sign-out-alt"></i>
                        Se déconnecter
                        </a>
                     </div>
                     <!-- /.dropdown-menu -->
                  </div>
                  <!-- /.btn-account -->
               </div>
               <!-- /.top-bar-item -->
            </div>
            <!-- /.top-bar-list -->
         </div>
         <!-- /.top-bar -->
      </header>
      <div class="d-flex" id="wrapper">
         <!-- Sidebar -->
         <aside class=" app-aside-light " id="sidebar-wrapper">
            <!-- .aside-content -->
            <div class="aside-content">
               <!-- .aside-header -->
               <header class="aside-header d-block d-md-none">
                  <!-- .btn-account -->
                  <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside">
                     <!-- <span class="user-avatar user-avatar-lg">
                        <img src="assets/images/avatars/profile.jpg" alt="">
                        </span> -->
                     <span class="account-icon">
                     <span class="fa fa-caret-down fa-lg"></span>
                     </span>
                     <span class="account-summary">
                     <span class="account-name">Nom utilisateur</span>
                     <span class="account-description">Administrateur</span>
                     </span>
                  </button>
                  <!-- /.btn-account -->
                  <!-- .dropdown-aside -->
                  <div id="dropdown-aside" class="dropdown-aside collapse">
                     <!-- dropdown-items -->
                     <div class="pb-3">
                        <a class="dropdown-item" href="">
                        <i class="dropdown-icon fas fa-user-cog"></i>
                        Profil
                        </a>
                        <a class="dropdown-item" href="">
                        <i class="dropdown-icon fas fa-sign-out-alt"></i>
                        Se déconnecter
                        </a>
                        <!-- <div class="dropdown-divider"></div> -->
                     </div>
                     <!-- /dropdown-items -->
                  </div>
                  <!-- /.dropdown-aside -->
               </header>
               <!-- /.aside-header -->
               <div class="list-group list-group-flush ">
                  <!-- .aside-menu -->
                  <div class="aside-menu overflow-hidden">
                     <!-- .stacked-menu -->
                     <nav id="stacked-menu" class="stacked-menu">
                        <!-- .menu -->
                        <ul class="menu">
                           <!-- .menu-item -->
                           <li class="menu-item">
                              <a href="index.html" class="menu-link active">
                              <span class="menu-icon fas fa-home"></span>
                              <span class="menu-text">Accueil</span>
                              </a>
                           </li>
                           <!-- /.menu-item -->
                           <li class="menu-item has-child">
                              <a href="#" class="menu-link " data-bs-toggle="collapse" data-bs-target="#students-collapse" aria-expanded="true">
                              <span class="menu-icon fas fa-users"></span>
                              <span class="menu-text dropdown-toggle">AS 2020-2021</span>
                              </a> <!-- child menu -->
                              <div class="ml-4 show collapse " id="students-collapse">
                                 <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="" class="link-dark text-muted" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Changer de promo</a></li>
                                 </ul>
                              </div>
                           </li>
                           <!-- Modal promo -->
                           <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="staticBackdropLabel">Choix de la promotion</h5>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                       Selectionner une promotion
                                       <form class="mt-2">
                                          <div class="form-check">
                                             <input class="form-check-input" type="radio" name="promoName" id="checkPromo1">
                                             <label class="form-check-label" for="flexRadioDefault1">
                                             Année spéciale
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input" type="radio" name="promoName" id="checkPromo2" checked>
                                             <label class="form-check-label" for="flexRadioDefault2">
                                             Deuxième année
                                             </label>
                                          </div>
                                          <select class="form-select mt-3" aria-label="Default select year">
                                             <option value="2021" selected>2020-2021</option>
                                             <option value="2020">2019-2020</option>
                                          </select>
                                       </form>
                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                       <button type="button" class="btn btn-primary">Changer</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- .menu-header Organisation -->
                           <li class="menu-header">Ordre de passage </li>
                           <!-- /.menu-header Organisation -->
                           <li class="menu-item">
                              <a href="index.html" class="menu-link">
                              <span class="menu-icon fas fa-calendar-day"></span>
                              <span class="menu-text">Calendrier</span>
                              </a>
                           </li>
                           <li class="menu-item">
                              <a href="index.html" class="menu-link">
                              <span class="menu-icon fas fa-eye"></span>
                              <span class="menu-text">Consulter</span>
                              </a>
                           </li>
                           <li class="menu-item has-child">
                              <a href="#" class="menu-link " data-bs-toggle="collapse" data-bs-target="#edition-collapse" aria-expanded="true">
                              <span class="menu-icon fas fa-edit"></span>
                              <span class="menu-text dropdown-toggle">Editer</span>
                              </a> <!-- child menu -->
                              <div class="ml-4 collapse " id="edition-collapse">
                                 <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark text-muted">le jury</a></li>
                                    <li><a href="#" class="link-dark text-muted">groupes A/B</a></li>
                                 </ul>
                              </div>
                           </li>
                           <!-- .menu-header Organisation -->
                           <li class="menu-header">Gestion des notes </li>
                           <!-- /.menu-header Organisation -->
                           <li class="menu-item">
                              <a href="index.html" class="menu-link">
                              <span class="menu-icon fas fa-th-list"></span>
                              <span class="menu-text">Liste des groupes</span>
                              </a>
                           </li>
                           <li class="menu-item">
                              <a href="index.html" class="menu-link">
                              <span class="menu-icon fas fa-users"></span>
                              <span class="menu-text">Liste des étudiants</span>
                              </a>
                           </li>
                           <!-- .menu-header Organisation -->
                           <li class="menu-header">Gestion des encadrants </li>
                           <!-- /.menu-header Organisation -->
                           <li class="menu-item">
                              <a href="index.html" class="menu-link">
                              <span class="menu-icon fas fa-users"></span>
                              <span class="menu-text">Liste des encadrants</span>
                              </a>
                           </li>
                           <!-- .menu-header -->
                           <li class="menu-header">Gestion globale</li>
                           <!-- /.menu-header -->
                           <li class="menu-item has-child">
                              <a href="#" class="menu-link " data-bs-toggle="collapse" data-bs-target="#access-collapse" aria-expanded="true">
                              <span class="menu-icon fas fa-user-lock"></span>
                              <span class="menu-text dropdown-toggle">Accès au site</span>
                              </a> <!-- child menu -->
                              <div class="ml-4 collapse" id="access-collapse">
                                 <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark text-muted">Définir les dates</a></li>
                                    <li><a href="#" class="link-dark text-muted">Accès personalisé</a></li>
                                    <li><a href="#" class="link-dark text-muted">Gestion des utilisateurs</a></li>
                                 </ul>
                              </div>
                           </li>

                           <li class="menu-item has-child">
                              <a href="#" class="menu-link " data-bs-toggle="collapse" data-bs-target="#email-collapse" aria-expanded="true">
                              <span class="menu-icon fas fa-envelope"></span>
                              <span class="menu-text dropdown-toggle">Email</span>
                              <span class="badge badge-warning">2</span>
                              </a> <!-- child menu -->
                              <div class="ml-4 collapse" id="email-collapse">
                                 <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                   <li><a href="#" class="link-dark text-muted">Envoyer un email</a></li>
                                    <li><a href="#" class="link-dark text-muted">Boite de reception</a></li>
                                 </ul>
                              </div>
                           </li>
                        </ul>
                        <!-- /.menu -->
                     </nav>
                     <!-- /.stacked-menu -->
                  </div>
                  <!-- /.aside-menu -->
               </div>
            </div>
         </aside>
         <!-- /#sidebar-wrapper -->
         <!-- Page Content -->
         <div id="page-content-wrapper">
            <div class="app-main">
               <div class="container-fluid pt-4">

                 <!-- CONTENU DE LA PAGE A PLACER ICI -->

               </div>
            </div>
         </div>
         <!-- /#page-content-wrapper -->
      </div>
      <!-- /#wrapper -->

      <!-- Theme JavaScript (NE PAS EFFACER) -->
      <!-- <script src="js/theme.min.js"></script> -->

      <!-- Bootstrap JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Jquery online (NE PAS EFFACER) -->
      <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
      <!-- Menu Toggle Script -->
      <script>
         $(".menu-toggle").click(function(e) {
           e.preventDefault();
           $("#wrapper").toggleClass("toggled");
         });

      </script>
   </body>
</html>
