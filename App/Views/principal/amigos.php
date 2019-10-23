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
                        <input type="text" name="search" placeholder="Search...">
                        <button type="submit"><i class="la la-search"></i></button>
                    </form>
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="principal.html" title="">
                                <span><img src="/public/images/icon1.png" alt=""></span>
                                Home
                            </a>
                        </li>

                        <li>
                            <div class="badge-notificacoes invisivel">
                                <span class="badge badge-notificacoes-quantidade"></span>
                            </div>
                            <a href="#" title="">
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
                            <li><a href="perfildousuario.html" title="">Meu Perfil</a></li>
                            <li><a href="editar%20info.html" title="">Editar meu Perfil</a></li>

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
                                            <h3><?php  echo \App\Lib\Auth::usuario()->usuario; ?></h3>
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
                                            <a href="perfildousuario.html" title="">Ver Perfil</a>
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
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                    <div class="company_profile_info">
                                                        <div class="company-up-info">
                                                            <img src="http://via.placeholder.com/91x91" alt="">
                                                            <h3>John Doe</h3>
                                                            <h4>Designer Gráfico</h4>
                                                            <ul>
                                                                <li><a href="#" title="" class="follow">Adicionar</a></li>
                                                                <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                                                <li><a href="#" title="" class="hire-us">Contratar</a></li>
                                                            </ul>
                                                        </div>
                                                        <a href="perfildousuario2.html" title="" class="view-more-pro">Ver Perfil</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                    <div class="company_profile_info">
                                                        <div class="company-up-info">
                                                            <img src="http://via.placeholder.com/91x91" alt="">
                                                            <h3>John Doe</h3>
                                                            <h4>Designer Gráfico</h4>
                                                            <ul>
                                                                <li><a href="#" title="" class="follow">Adicionar</a></li>
                                                                <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                                                <li><a href="#" title="" class="hire-us">Contratar</a></li>
                                                            </ul>
                                                        </div>
                                                        <a href="perfildousuario2.html" title="" class="view-more-pro">Ver Perfil</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                    <div class="company_profile_info">
                                                        <div class="company-up-info">
                                                            <img src="http://via.placeholder.com/91x91" alt="">
                                                            <h3>John Doe</h3>
                                                            <h4>Designer Gráfico</h4>
                                                            <ul>
                                                                <li><a href="#" title="" class="follow">Adicionar</a></li>
                                                                <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                                                <li><a href="#" title="" class="hire-us">Contratar</a></li>
                                                            </ul>
                                                        </div>
                                                        <a href="perfildousuario2.html" title="" class="view-more-pro">Ver Perfil</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="top-profiles">
                                        <div class="pf-hd">
                                            <h3>Top Perfis</h3>
                                            <i class="la la-ellipsis-v"></i>
                                        </div>
                                        <div class="profiles-slider">
                                            <div class="user-profy">
                                                <img src="http://via.placeholder.com/57x57" alt="">
                                                <h3>John Doe</h3>
                                                <span>Designer Gráfico</span>
                                                <ul>
                                                    <li><a href="#" title="" class="followw">Adicionar</a></li>
                                                    <li><a href="#" title="" class="envlp"><img src="/public/images/envelop.png" alt=""></a></li>
                                                    <li><a href="#" title="" class="hire">Contratar</a></li>
                                                </ul>
                                                <a href="perfildousuario2.html" title="">Visualizar Perfil</a>
                                            </div>
                                            <div class="user-profy">
                                                <img src="http://via.placeholder.com/57x57" alt="">
                                                <h3>John Doe</h3>
                                                <span>Designer Gráfico</span>
                                                <ul>
                                                    <li><a href="#" title="" class="followw">Adicionar</a></li>
                                                    <li><a href="#" title="" class="envlp"><img src="/public/images/envelop.png" alt=""></a></li>
                                                    <li><a href="#" title="" class="hire">Contratar</a></li>
                                                </ul>
                                                <a href="perfildousuario2.html" title="">Visualizar Perfil</a>
                                            </div>
                                            <div class="user-profy">
                                                <img src="http://via.placeholder.com/57x57" alt="">
                                                <h3>John Doe</h3>
                                                <span>Designer Gráfico</span>
                                                <ul>
                                                    <li><a href="#" title="" class="followw">Adicionar</a></li>
                                                    <li><a href="#" title="" class="envlp"><img src="/public/images/envelop.png" alt=""></a></li>
                                                    <li><a href="#" title="" class="hire">Contratar</a></li>
                                                </ul>
                                                <a href="perfildousuario2.html" title="">Visualizar Perfil</a>
                                            </div>
                                            <div class="user-profy">
                                                <img src="http://via.placeholder.com/57x57" alt="">
                                                <h3>John Doe</h3>
                                                <span>Designer Gráfico</span>
                                                <ul>
                                                    <li><a href="#" title="" class="followw">Adicionar</a></li>
                                                    <li><a href="#" title="" class="envlp"><img src="/public/images/envelop.png" alt=""></a></li>
                                                    <li><a href="#" title="" class="hire">Contratar</a></li>
                                                </ul>
                                                <a href="perfildousuario2.html" title="">Visualizar Perfil</a>
                                            </div>
                                            <div class="user-profy">
                                                <img src="http://via.placeholder.com/57x57" alt="">
                                                <h3>John Doe</h3>
                                                <span>Designer Gráfico</span>
                                                <ul>
                                                    <li><a href="#" title="" class="followw">Adicionar</a></li>
                                                    <li><a href="#" title="" class="envlp"><img src="/public/images/envelop.png" alt=""></a></li>
                                                    <li><a href="#" title="" class="hire">Contratar</a></li>
                                                </ul>
                                                <a href="perfildousuario2.html" title="">Visualizar Perfil</a>
                                            </div>
                                            <div class="user-profy">
                                                <img src="http://via.placeholder.com/57x57" alt="">
                                                <h3>John Doe</h3>
                                                <span>Designer Gráfico</span>
                                                <ul>
                                                    <li><a href="#" title="" class="followw">Adicionar</a></li>
                                                    <li><a href="#" title="" class="envlp"><img src="/public/images/envelop.png" alt=""></a></li>
                                                    <li><a href="#" title="" class="hire">Contratar</a></li>
                                                </ul>
                                                <a href="perfildousuario2.html" title="">Visualizar Perfil</a>
                                            </div>
                                        </div>
                                    </div>


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