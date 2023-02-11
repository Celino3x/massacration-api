<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Massacration | Registration</title>
</head>
<body>
    <video autoplay loop muted plays-inline class="back-video">
        <source src="img/fire.mp4" type="video/mp4">
    </video>
    <div class="page-wrapper bg-form p-t-100 p-b-100 font-robo">
        <div class="container wrapper wraooer--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration</h2>
                    <form action="_inserir_visitante.php" method="POST" enctype="multipart/form-data">
                        <div class="input-group">
                            <input placeholder="Nome" type="text" class="input--style-2">
                        </div>
                        <div class="input-group">
                            <input placeholder="intérprete" type="text" class="input--style-2">
                        </div>
                        <div class="input-group">
                            <input placeholder="Função" type="text" class="input--style-2">
                        </div>
                        <div class="row row-space">
                            <div class="col-6">
                                <div class="input-group">
                                    <input type="number" placeholder="Ano" class="input--style-2 js-datepicker">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <select name="status" id="" class="input--style-2 select2-hidden-accessible">
                                        <option disabled="disabled" selected="selected" value="Status">Status na Banda</option>    
                                        <option value="Ativo">Ativo</option>
                                        <option value="Inativo">Inativo</option>
                                        <option value="Falecido">Falecido</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h4>Bio</h4>
                            <p>Massacration is a Brazilian fictional heavy metal band created by Brazilian comedians and musicians Bruno Sutter, Fausto Fanti, Marco Antônio Alves, Adriano Pereira and Felipe Torres, all members of the comedy group Hermes e Renato.</p>
                        </div>

                        <div class="mb-3">                            
                            <input id="foto_mass" name="foto_mass" type="file" class="input--style-2 form-control" aria-describedby="foto_mass">
                        </div>

                        <div class="p-t-30">
                            <button class="btn btn--rdius btn--red" type="submit">Cadastrar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>