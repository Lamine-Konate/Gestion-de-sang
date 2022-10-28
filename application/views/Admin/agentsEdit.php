     
    
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="margin-left:240px;">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Modification</h4>
                    </div>
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
              

                
                 <!--Ajout d'un nouvel agent-->
            <div class="row">
                        <div class="">
                    </div>
                
                    <?php extract($edit);?>
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="<?php echo base_url('Admin/update/'.$id_agent);?>" method="post">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Nom</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="nom_agent" placeholder="Entrez votre nom Svp!" value="<?php echo $nom_agent;?>"
                                                class="form-control p-0 border-0">   </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Prénom</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="prenom_agent" placeholder="Entrez votre prénom Svp!" value="<?php echo $prenom_agent;?>" 
                                                class="form-control p-0 border-0">   </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Mail</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text"  name="email_agent" placeholder="Entrez votre mail Svp!" value="<?php echo $email_agent;?>"
                                                class="form-control p-0 border-0">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Mot de passe</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Entrez votre mot de passe Svp!" name="password_agent" value="<?php echo $password_agent;?>"  class="form-control p-0 border-0">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Profession</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Entrez votre profession Svp!"  name="profession_agent" value="<?php echo $profession_agent;?>" class="form-control p-0 border-0">
                                        </div>
                                    </div>
                                  
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" type="submit">Modifier</button>
                                        </div>
                                  
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
 