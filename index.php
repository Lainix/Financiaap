<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body background="https://www.cetys.mx/educon/wp-content/uploads/2021/04/1500x844_decidir_finanzas_empresa.jpg">
  <section class="section">
    <div class="hero-body">
      <div class="container">
        <div class="columns is-vcentered">
          <div class="column is-4 is-offset-4">
            <div>
            <form action="home.php" method="post">
                <div>
                  <div class="flex-card auth-card is-light-raised light-bordered card-overflow">
                    <div class="auth-card-header header-primary is-dark">
                      <a href="#"><img src="Financiapp.png" alt=""></a>
                    </div>
                    <div class="field pb-10">
                      <div class="control has-icons-right">
                        <input class="input is-large" type="text" placeholder="Usuario">
                      </div>
                    </div>
                    <div class="field">
                      <div class="control has-icons-right">
                        <input class="input is-large" type="password" placeholder="Contraseña">
                      </div>
                    </div>
                    <div class="pt-10 pb-10">
                      <button onclick="location.href='archivo.php'" 
                        class="button button-cta is-info btn-align is-fullwidth is-bold rounded raised no-lh login-btn mb-1">Ingresar</button>
                    </div>
                  </div>
              </form>
            </div>
          </div>

        </div>
      </div>
  </section>
</body>

</html>