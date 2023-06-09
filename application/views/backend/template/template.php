<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Navegação</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Painel Administrativo</a>
            </div>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?= base_url('admin/categoria') ?>"><i class="fa fa-sitemap fa-fw"></i> Categorias</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/postagem') ?>"><i class="fa fa-edit fa-fw"></i> Postagens</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/usuario') ?>"><i class="fa fa-wrench fa-fw"></i> Usuários</a>
                        </li>
                        <li>
                            <a href="#" class="text-danger"><i class="fa fa-sign-out fa-fw"></i> Sair do Sistema</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>