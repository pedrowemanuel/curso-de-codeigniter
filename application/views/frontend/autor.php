    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    <?= $titulo ?> -
                    <small><?= $subtitulo ? $subtitulo : $subtitulodb ?></small>
                </h1>
                <div class="col-md-4">
                    <img class="img-responsive img-circle" src="http://placehold.it/200x200" alt="">
                </div>
                <div class="col-md-8 ">
                    <h2>
                    <?= $autor->nome ?>
                    </h2>
                    <hr>
                    <p><?= $autor->historico ?></p>
                    <hr>
                </div>
            </div>
