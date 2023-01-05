<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<link rel="stylesheet" href="css/style.css">
<div class="container"> 
    <div class="row"> 
        <div class="col-md-6"> 
            <div class="card"> 
                <form action="<?php echo base_url('/login') ?>" method="POST"class="box"> 
                    <div>
                        <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
                    </div>
                    <h1>Clínica Ginecologíca Dra. Ileana Ayala</h1> 
                    <p class="text-muted">Ingresa tus credenciales</p> 
                    <input type="text" name="Usuario" placeholder="Usuario" required=""> 
                    <input type="password" name="Password" placeholder="Contraseña" required="">
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                </form> 
            </div> 
        </div> 
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>