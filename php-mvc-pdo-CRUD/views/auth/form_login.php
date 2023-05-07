<div class="bg-light min-vh-100 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card-group d-block d-md-flex row">
              <div class="card col-md-7 p-4 mb-0">
                <div class="card-body">
                  <h1>Iniciar sesion</h1>
                  <form action="?c=auth&m=login" method="post" >
                    <p class="text-medium-emphasis">Iniciar sesión en su cuenta</p>
                    <div class="input-group mb-3"><span class="input-group-text">
                        <svg class="icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                        </svg></span>
                      <input name="email" class="form-control" type="email" placeholder="Correo electronico">
                    </div>
                    <div class="input-group mb-4"><span class="input-group-text">
                        <svg class="icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                        </svg></span>
                      <input class="form-control" name="password" type="password" placeholder="Contraseña">
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <button class="btn btn-primary px-4" type="submit">Iniciar sesion</button>
                      </div>
                      <div class="col-6 text-end">
                        <button class="btn btn-link px-0" type="button">¿Has olvidado tu contraseña?</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="card col-md-5 text-white bg-primary py-5">
                <div class="card-body text-center">
                  <div>
                    <h2>Inscribirse</h2>
                    <button class="btn btn-lg btn-outline-light mt-3" type="button">¡Regístrate ahora!</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>