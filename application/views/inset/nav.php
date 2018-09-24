    <nav id="menu-topo" class="navbar navbar-expand-md">
        <!-- BOTÃO DE MENU COM BAIXA RESOLUÇÃO -->
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#menu-institucional" aria-controls="menu-institucional" aria-expanded="false" aria-label="Toggle navigation" style="background: #f08600">
            <i class="fa fa-align-justify"></i>
        </button><!-- FIM BOTÃO -->
        
        <!-- LOGO / HOME -->
        <a href="<?= base_url() ?>" class="navbar-brand d-flex align-items-start m-0 mr-2" title="gameDeveloper">
            <img src="./assets/img/logo/gameDeveloper - Logotipo.png" alt="game developer">
        </a><!-- FIM LOGO / HOME -->
        
        <!-- ÁREA DE PESQUISA DO MENU -->
        <div id="menu-items" class="collapse navbar-collapse">
            <div id="menu-search" class="d-flex align-items-center">
                <form class="w-100">
                    <div class="form-row w-100 m-0">
                        <div class="col-12 p-0">
                            <div class="input-group w-100 m-0">
                                <input type="search" id="" class="form-control" name="" placeholder="Pesquisar...">
                                
                                <div class="input-group-prepend">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            
            <!-- ACESSO DO USUÁRIO -->
            <div id="acessoUser" class="navbar-nav ml-auto">
                <a href="#" class="btnAcesso-Desl d-flex align-items-center justify-content-center" title="Logar e cadastrar usuário">
                    <i class="fa fa-user-circle mr-2" style="font-size: 1.5rem"></i>
                    
                    <span>
                        Seja bem-vindo, <strong>Usuário</strong><br>
                        <small>Clique para logar/cadastrar!</small>
                    </span>
                </a>
            </div><!-- FIM ACESSO USUÁRIO -->
        </div>
        
        <!-- MENU INSTITUCIONAL -->
        <div id="menu-institucional" class="navbar-collapse collapse">
            <ul id="navigation" class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="">O PROJETO</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="">UPDATES</a></li>
                <li class="nav-item"><a class="nav-link" href="">FÓRUM</a></li>
                <li class="nav-item"><a class="nav-link" href="">CONTATO</a></li>
            </ul>
        </div><!-- FIM MENU INSTITUCIONAL -->
    </nav>