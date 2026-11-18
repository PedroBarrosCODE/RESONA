<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ficha 5 - Avaliação com estrelas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="bg-light">
    <header class="bg-primary text-white py-3">
        <div class="container">
            <span class="fs-5">Ficha 5</span>
        </div>
    </header>

    <main class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-5">
                <div class="card shadow-sm">
                    <div class="card-body p-4 text-center">
                        <h1 class="h3 mb-4">Avalie</h1>

                        <?php
                        if (isset($_SESSION['msg'])) {
                            echo '<div class="alert alert-info">' . $_SESSION['msg'] . '</div>';
                            unset($_SESSION['msg']);
                        }
                        ?>

                        <form method="POST" action="processa.php" enctype="multipart/form-data">
                            <div class="estrelas">
                                <input type="radio" id="vazio" name="estrela" value="" checked>

                                <label for="estrela_um" title="1 estrela"><i class="fa"></i></label>
                                <input type="radio" id="estrela_um" name="estrela" value="1">

                                <label for="estrela_dois" title="2 estrelas"><i class="fa"></i></label>
                                <input type="radio" id="estrela_dois" name="estrela" value="2">

                                <label for="estrela_tres" title="3 estrelas"><i class="fa"></i></label>
                                <input type="radio" id="estrela_tres" name="estrela" value="3">

                                <label for="estrela_quatro" title="4 estrelas"><i class="fa"></i></label>
                                <input type="radio" id="estrela_quatro" name="estrela" value="4">

                                <label for="estrela_cinco" title="5 estrelas"><i class="fa"></i></label>
                                <input type="radio" id="estrela_cinco" name="estrela" value="5">
                            </div>

                            <input type="submit" value="Registar" class="btn btn-primary px-4 mt-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
