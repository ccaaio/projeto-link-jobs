<input type="hidden" id="id-logado" value="<?php  echo \App\Lib\Auth::usuario()->id; ?>">
<input type="hidden" id="id-amigo">
<input type="hidden" id="nome-amigo">
<input type="hidden" id="nome-logado" value="<?php  echo \App\Lib\Auth::usuario()->usuario; ?>">
<style>
    .user-account {
        width: 165px !important;
    }

    nav {
        width: 56%;
    }

    .user-info a {
        white-space: nowrap !important;
        width: 91px !important;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
    }
</style>
<div class="wrapper">
    <header>
        <div class="container">
            <div class="header-data">
                <div class="logo">
                    <a href="principal.html" title=""><img src="/public/images/logo.png" alt=""></a>
                </div>
                <div class="search-bar">
                    <form>
                        <input type="text" name="country" id="country" placeholder="&#xF007; Digite o nome do amigo..." class="typeahead" style="font-family:Arial, FontAwesome">
                        <div id="countryList"></div>
                        <button type="submit"><i class="la la-search"></i></button>
                    </form>
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="/principal/" title="">
                                <span><img src="/public/images/icon1.png" alt=""></span>
                                Home
                            </a>
                        </li>

                        <li>
                            <div class="badge-notificacoes invisivel">
                                <span class="badge badge-notificacoes-quantidade"></span>
                            </div>
                            <a href="/principal/amigos" title="">
                                <span><img src="/public/images/icon4.png" alt=""></span>
                                Amigos
                            </a>

                        </li>
                    </ul>
                </nav>
                <div class="menu-btn">
                    <a href="#" title=""><i class="fa fa-bars"></i></a>
                </div>
                <div class="user-account">
                    <div class="user-info">
                        <img class="foto-perfil-navbar" src="/public/images/perfil/profile-default.png" alt="">
                        <a title=""><?php  echo \App\Lib\Auth::usuario()->usuario; ?></a>
                        <i class="la la-sort-down"></i>
                    </div>
                    <div class="user-account-settingss">


                        <h3>Configurações</h3>
                        <ul class="us-links">
                            <li><a href="/perfil/" title="">Meu Perfil</a></li>
                            <li><a href="/perfil/editar" title="">Editar meu Perfil</a></li>

                        </ul>
                        <h3 class="tc"><a href="/login/sair" title=""><i class="la la-sign-out" style="color: #e44d3a;"></i> Sair</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="main-section">
            <div class="container">
                <div class="main-section-data">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 pd-left-none no-pd">
                            <div class="main-left-sidebar no-margin">
                                <div class="user-data full-width">
                                    <div class="user-profile">
                                        <div class="username-dt">
                                            <div class="usr-pic">
                                                <div class="lds-facebook" style="background: #a81300;border-radius: 50%;margin-top: 2em;"><div></div><div></div><div></div></div>
                                            </div>
                                        </div>
                                        <div class="user-specs">
                                            <h3 id="nome-user-logado-titulo"><?php  echo \App\Lib\Auth::usuario()->usuario; ?></h3>
                                            <span><?php  echo \App\Lib\Auth::usuario()->profissao; ?></span>
                                        </div>
                                    </div>
                                    <ul class="user-fw-status">
                                        <li>
                                            <h4>Seguindo</h4>
                                            <span>2348</span>
                                        </li>
                                        <li>
                                            <h4>Seguidores</h4>
                                            <span>53K</span>
                                        </li>
                                        <li>
                                            <a href="/perfil/" title="">Ver Perfil</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="suggestions full-width">
                                    <div class="sd-title">
                                        <h3>Sugestões</h3>
                                        <i class="la la-ellipsis-v"></i>
                                    </div>
                                    <div class="suggestions-list">
                                        <div id="content-sugestoes" style="text-align: center;">
                                            <div class="lds-facebook"><div></div><div></div><div></div></div>
                                        </div>
                                        <div class="view-more">
                                            <a href="#" title="">Ver Mais</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-8 no-pd">
                            <div class="main-ws-sec">
                                <div class="post-topbar">
                                    <h3>Solicitações de Amizades</h3>
                                </div>
                                <div class="posts-section">
                                    <div class="post-bar">
                                        <div class="companies-list">
                                            <div id="content-solicitacoes-amizade" class="row">

                                            </div>
                                        </div>

                                    </div>
                                    <div class="post-topbar">
                                        <h3>Amigos</h3>
                                    </div>
                                    <div class="post-bar">
                                        <div class="companies-list">
                                            <div id="content-amigos" class="row">

                                            </div>
                                        </div>

                                    </div>

                                    <div class="top-profiles">
                                        <div class="pf-hd">
                                            <h3>Você deveria conhecer:</h3>
                                            <i class="la la-ellipsis-v"></i>
                                        </div>
                                        <div class="profiles-slider" id="content-voce-deveria">
                                            <div class="process-comm">
                                                <div class="spinner">
                                                    <div class="bounce1"></div>
                                                    <div class="bounce2"></div>
                                                    <div class="bounce3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="post-popup pst-pj">
        <div class="post-project">
            <h3>Postar um Projeto</h3>
            <div class="post-project-fields">
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" name="title" placeholder="Título">
                        </div>
                        <div class="col-lg-12">
                            <div class="inp-field">
                                <select>
                                    <option>Categorias</option>
                                    <option>Categoria 1</option>
                                    <option>Categoria 2</option>
                                    <option>Categoria 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="skills" placeholder="Habilidades">
                        </div>
                        <div class="col-lg-12">
                            <div class="price-sec">

                                <div class="price-br">
                                    <input type="text" name="price1" placeholder="Preço">
                                    <i class="la la-dollar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <textarea name="description" placeholder="Descrição"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <ul>
                                <li><button class="active" type="submit" value="post">Postar</button></li>
                                <li><a href="#" title="">Cancelar</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <a href="#" title=""><i class="la la-times-circle-o"></i></a>
        </div>
    </div>

    <div class="post-popup job_post">
        <div class="post-project">
            <h3>Post a job</h3>
            <div class="post-project-fields">
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" name="title" placeholder="Título">
                        </div>
                        <div class="col-lg-12">
                            <div class="inp-field">
                                <select>
                                    <option>Categorias</option>
                                    <option>Categoria 1</option>
                                    <option>Categoria 2</option>
                                    <option>Categoria 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="skills" placeholder="Habilidades">
                        </div>
                        <div class="col-lg-6">
                            <div class="price-br">
                                <input type="text" name="price1" placeholder="Preço">
                                <i class="la la-dollar"></i>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="inp-field">
                                <select>
                                    <option>Integral</option>
                                    <option>Meio Período</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <textarea name="description" placeholder="Descrição"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <ul>
                                <li><button class="active" type="submit" value="post">Postar</button></li>
                                <li><a href="#" title="">Cancelar</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <a href="#" title=""><i class="la la-times-circle-o"></i></a>
        </div>
    </div>
</div>