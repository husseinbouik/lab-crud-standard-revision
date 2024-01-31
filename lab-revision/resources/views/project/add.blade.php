<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquette Prototype</title>
    <!-- head -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
 <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdn.tiny.cloud/1/d2nq8cur7uv9c3ovyevwee5l5e5k2ym6hodsnpuuy1hyy1yf/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- head -->
</head>
<body class="sidebar-mini" style="height: auto;">

    <div class="wrapper">


        <!-- nav -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- nav -->

         <!-- aside -->
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="../dist/img/solicoders-logo.png" class="brand-image img-circle elevation-3" alt="Group Image">
                <span class="brand-text font-weight-light text-center">Gestion Prototype</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{route('projects.index')}}" class="nav-link ">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Projets
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="././tache/index.html" class="nav-link ">
                                <i class="fa-solid fa-users pl-1 pr-1"></i>
                                <p>
                                    Taches
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../member/index.html" class="nav-link ">
                                <i class="fa-solid fa-users pl-1 pr-1"></i>
                                <p>
                                    Members
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>



        <div class="content-wrapper" style="min-height: 1302.4px;">

            <div class="content-header">
                <!-- <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Projets</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Ajouter Projet</li>
                                <li class="breadcrumb-item"><a href="./index.html">Accueil</a> </li>
                            </ol>
                        </div>
                    </div>
                </div> -->
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Ajouet Projet</h3>
                                </div>
                                <form action="{{route('projects.store')}}" method="POST" >
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Titre </label>
                                            <input name="titre" type="text" class="form-control"
                                                id="exampleInputEmail1" placeholder="Enter email">
                                                @error('titre')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Description</label>
                                            <input name="description" type="text" class="form-control"
                                                id="exampleInputPassword1" placeholder="Description">
                                                @error('description')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputPassword1">date debut</label>
                                            <input name="date_debut" type="date" class="form-control"
                                                id="exampleInputPassword1" placeholder="date debut">
                                                @error('date_debut')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">date fin</label>
                                            <input name="date_fin" type="date" class="form-control"
                                                id="exampleInputPassword1" placeholder="date fin">
                                                @error('date_fin')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                        </div>

                                    </div>

                                    <div class="card-footer">
                                        <a href="./index.html" class="btn btn-default">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>

    </div>





 <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

</body>

</html>
