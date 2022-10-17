<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
<form action="<?= base_url('Welcome/registerNow')?>" method="POST" autocomplete="off">
<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Registration form</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="nom" class="form-control form-control-lg" />
                      <label class="form-label" for="nom">Nom</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="prenom" class="form-control form-control-lg" />
                      <label class="form-label" for="prenom">Prenom</label>
                    </div>
                  </div>
                </div>
                
                <div class="form-outline mb-4">
                  <input type="email" id="email" class="form-control form-control-lg" />
                  <label class="form-label" for="email">Address Email</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="password" id="password" class="form-control form-control-lg" />
                  <label class="form-label" for="password">Mot de passe</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="password" id="comfirmepsd" class="form-control form-control-lg" />
                  <label class="form-label" for="comfirmepsd">Confirmation</label>
                </div>
                
                
                
                <div class="form-outline mb-4">
                  <input type="text" id="localite" class="form-control form-control-lg" />
                  <label class="form-label" for="localite">Localité</label>
                </div>
                
                <div class="form-outline mb-4">
                  <input type="phone" id="tel" class="form-control form-control-lg" />
                  <label class="form-label" for="tel">Tel</label>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <select class="select">
                      <option value="1">A+</option>
                      <option value="1">A-</option>
                      <option value="2">B+</option>
                      <option value="2">B-</option>
                      <option value="3">O+</option>
                      <option value="3">O-</option>
                      <option value="4">AB-</option>
                      <option value="4">AB+</option>
                    </select>
                    <p>Groupe Sanguin</p>
                  </div>        
                </div>

                <div class="d-flex justify-content-end pt-3">
                  <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                  <button type="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
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