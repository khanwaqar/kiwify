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
                        <h2>Criar nova conta</h2>
                        <p class="mt-2 text-center text-base leading-5 text-gray-600">
                            Ou
                            <a href="./login.php" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                              entrar na sua conta existente
                            </a>
                        </p>
                    </div>
                </header>
                <form method = "post" action = "./actions/register.php">
                    <div class="card">
                        <div class="card-body">
                            <form action="" autocomplete="off">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Repetir e-mail</label>
                                    <input type="email" class="form-control" name="retype_email">
                                </div>
                                <div class="form-group">
                                    <label>Senha</label>
                                    <input type="password" class="form-control" name="password">
                                </div>

                                <div class="mt-6">
                                    <label class="relative flex items-start mt-2">
                                        <div class="flex items-center h-5"><input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out cursor-pointer"></div>
                                        <div class="ml-2 text-sm leading-5">
                                        <span class="font-medium text-gray-700">Eu li e aceito os <a href="https://kiwify.com.br/termos-de-uso" target="_blank" class="underline"> termos de uso</a>, <a href="https://kiwify.com.br/licenca-de-uso-software" target="_blank" class="underline"> termos de licença de uso de software</a>, <a href="https://kiwify.com.br/politica-de-conteudo" target="_blank" class="underline"> política de conteúdo</a> da Kiwify </span> <!---->
                                        </div>
                                    </label>
                                </div>
                                <div class="mt-6">
                                <button type="submit" id="sendlogin" class="btn btn-primary btn-block">Criar conta</button></div>
                            </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </body>
</html>