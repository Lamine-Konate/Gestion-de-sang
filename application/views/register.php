<!-- CSS only -->
<?php include('includes/header.php') ?>
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">-->
<style>
.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
</style>
<form action="" method="POST" autocomplete="off">
<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="<?php echo base_url()?>/https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Registration form</h3>
                <?php echo validation_errors("<div class='alert alert-danger'>,</div>")?>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="nom">Nom</label>
                      <input type="text" id="nom" name='nom' class="form-control form-control-lg" />
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="prenom_user">Prenom</label>
                      <input type="text" id="prenom_user" name='prenom_user' class="form-control form-control-lg" />
                    </div>
                  </div>
                </div>
                
                <div class="form-outline mb-4">
                  <label class="form-label" for="email_user">Address Email</label>
                  <input type="email" id="email_user" name='email_user' class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="password_user">Mot de passe</label>
                  <input type="password" id="password_user" name='password_user' class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label"  for="comfirmepsd">Confirmation</label>
                  <input type="password" id="comfirmepsd" name='confirmepsd' class="form-control form-control-lg" />
                </div>
             
                <div class="form-outline mb-4">
                  <label class="form-label" for="tel_user">Tel</label>
                  <input type="phone" id="tel_user" name='tel_user' class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="localite_user">Localité</label>
                  <input type="text" id="localite_user" name='localite_user' class="form-control form-control-lg" />
                </div>
               <!-- <div class="row">
                  <div class="col-md-6 mb-4">
                    <label for="groupeSanguin">Groupe Sanguin</label>
                    <select class="form-control" id="groupeSanguin" name="groupeSanguin">
                      <option value="1">A+</option>
                      <option value="1">A-</option>
                      <option value="2">B+</option>
                      <option value="2">B-</option>
                      <option value="3">O+</option>
                      <option value="3">O-</option>
                      <option value="4">AB-</option>
                      <option value="4">AB+</option>
                    </select>
                  </div>        
                </div> -->

                <div class="d-flex justify-content-end pt-3">
                  <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                  <button type="submit" class="btn btn-warning btn-lg ms-2" class="registera">Submit form</button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
<?php include('includes/footer.php')?>