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
                                    <div class="user-picy">
                                        <div class="lds-facebook" style="background: #ffffff;border-radius: 50%;"><div></div><div></div><div></div></div>
                                    </div>
                                    <div class="post-st">
                                        <ul>
                                            <li><a class="post_project" href="#" title="">Postar um Projeto</a></li>
                                            <li><a class="post-jb active" href="#" title="">Poste uma Vaga</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="posts-section">
                                    <div class="post-bar">
                                        <div class="post_topbar">
                                            <div class="usy-dt">
                                                <img src="http://via.placeholder.com/50x50" alt="">
                                                <div class="usy-name">
                                                    <h3>John Doe</h3>
                                                    <span><img src="/public/images/clock.png" alt="">3 minutos atrás</span>
                                                </div>
                                            </div>
                                            <div class="ed-opts">
                                                <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                <ul class="ed-options">
                                                    <li><a href="#" title="">Editar uma postagem</a></li>
                                                    <li><a href="#" title="">Não foi Salvo</a></li>
                                                    <li><a href="#" title="">Liberar</a></li>
                                                    <li><a href="#" title="">Fechar</a></li>
                                                    <li><a href="#" title="">Esconder</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="epi-sec">
                                            <ul class="descp">
                                                <li><img src="/public/images/icon8.png" alt=""><span>Codificador Épico</span></li>
                                                <li><img src="/public/images/icon9.png" alt=""><span>India</span></li>
                                            </ul>
                                            <ul class="bk-links">
                                                <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="job_descp">
                                            <h3>Desenvolverdor Wordpress Senior</h3>
                                            <ul class="job-dt">
                                                <li><a href="#" title="">Integral</a></li>
                                                <li><span>R$90 / hr</span></li>
                                            </ul>

                                            <ul class="skill-tags">
                                                <li><a href="#" title="">HTML</a></li>
                                                <li><a href="#" title="">PHP</a></li>
                                                <li><a href="#" title="">CSS</a></li>
                                                <li><a href="#" title="">Javascript</a></li>
                                                <li><a href="#" title="">Wordpress</a></li>
                                            </ul>
                                        </div>
                                        <div class="job-status-bar">
                                            <ul class="like-com">
                                                <li>
                                                    <a href="#"><i class="la la-heart"></i>Curtir</a>
                                                    <img src="/public/images/liked-img.png" alt="">
                                                    <span>25</span>
                                                </li>
                                                <li><a href="#" title="" class="com"><img src="/public/images/com.png" alt=""> Comentário 15</a></li>
                                            </ul>
                                            <a><i class="la la-eye"></i>Visualizações 50</a>
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