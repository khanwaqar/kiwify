<!DOCTYPE html>
<html lang="pt-BR" data-n-head="%7B%22lang%22:%7B%221%22:%22pt-BR%22%7D%7D">
    <head>
        <title>Kiwify</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="css/style.css" rel="stylesheet" id="style-css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->


<!-- no additional media querie or css is required -->
    </head>
    <body>
        <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <header>
                    <div class="logo">
                        <img class="img-fluid" src="https://dashboard.kiwify.com.br/_nuxt/img/kiwify-green-logo.2af0e50.png">
                    </div>
                    <div class="text-center">
                        <h2>Entrar na sua conta
                        </h2>
                        <p class="mt-2 text-center text-base leading-5 text-gray-600">
                            Ou
                            <a href="./index.php" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                                fazer cadastro
                            </a>
                        </p>
                    </div>
                </header>
                <div class="card">
                    <div class="card-body">
                        <form action="./actions/login.php" method = "post" autocomplete="off">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email">
                                <small style="display: none;">Email format is incorrect</small>
                            </div>
                            <div class="form-group">
                                <label>Senha</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="mt-2 flex items-center justify-end"><div class="text-sm leading-5"><a href="/ResetPassword" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                                Esqueceu a senha?
                              </a></div></div>

                              <div class="mt-6">
                            <button type="submit" id="sendlogin" class="btn btn-primary btn-block">Entrar</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>