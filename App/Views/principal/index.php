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

                                    <?php
                                    if(!count($aViewVar['aListaVagas'])){
                                        ?>
                                        <div class="alert alert-warning" role="alert">Você não publicou nada ainda...</div>
                                        <?php
                                    } else {
                                    ?>
                                    <?php
                                    foreach($aViewVar['aListaVagas'] as $aListaVaga) {
                                        ?>
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="http://via.placeholder.com/50x50" alt="">
                                                    <div class="usy-name">
                                                        <h3><?php echo $aListaVaga['nomeUsuario']; ?></h3>
                                                        <span><img src="/public/images/clock.png" alt=""><?php echo $aListaVaga['dataHora']; ?></span>
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
                                                    <li><img src="/public/images/icon8.png" alt=""><span><?php echo $aListaVaga['categoria']; ?></span></li>
                                                    <li><img src="/public/images/icon9.png" alt=""><span>Brasil</span></li>
                                                </ul>
                                                <ul class="bk-links">
                                                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="job_descp">
                                                <h3><?php echo $aListaVaga['titulo']; ?></h3>
                                                <p><?php echo $aListaVaga['descricao']; ?></p>
                                                <ul class="job-dt">
                                                    <li><a href="#" title=""><?php echo $aListaVaga['integral']; ?></a></li>
                                                    <li><span>R$ <?php echo $aListaVaga['preco']; ?> / hr</span></li>
                                                </ul>

                                                <ul class="skill-tags">
                                                    <li><a href="#" title=""><?php echo $aListaVaga['habilidade']; ?></a></li>
                                                </ul>
                                            </div>
                                            <div class="job-status-bar">
                                                <ul class="like-com">
                                                    <li>
                                                        <a href="#"><i class="la la-heart"></i>Curtir</a>
                                                        <!-- <img src="/public/images/liked-img.png" alt=""> -->
                                                        <span>25</span>
                                                    </li>
                                                    <li><a href="#" title="" class="com"><img src="/public/images/com.png" alt=""> Comentário 0</a></li>
                                                </ul>
                                                <a><i class="la la-eye"></i>Visualizações 0</a>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                        ?>
                                        <?php
                                    }
                                    ?>



                                        <!-- template postagem -->
                       <!--
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
                           -->
                                    <div class="top-profiles">
                                        <div class="pf-hd">
                                            <h3>Você deveria conhecer</h3>
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
                                    <option class="text-capitalize" val="Categorias">Categorias</option>
                                    <option class="text-capitalize" val="Categoria ">Categoria 1</option>
                                    <option class="text-capitalize" val="Categoria ">Categoria 2</option>
                                    <option class="text-capitalize" val="Categoria ">Categoria 3</option>
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
            <h3>Postar uma Vaga</h3>
            <div class="post-project-fields">
                <form method="post" action="/perfil/salvarVaga">
                    <input type="hidden" name="id_usuario" value="<?php echo \App\Lib\Auth::usuario()->id; ?>">
                    <input type="hidden" name="nomeUsuario" value="<?php echo \App\Lib\Auth::usuario()->usuario; ?>">
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" name="titulo" placeholder="Título">
                        </div>
                        <div class="col-lg-12">
                            <div class="inp-field">
                                <select name="categoria">
                                    <option class="text-capitalize" val="algorithm">algorithm</option>
                                    <option class="text-capitalize" val="AngularJS">AngularJS</option>
                                    <option class="text-capitalize" val="artificial intelligence">artificial intelligence</option>
                                    <option class="text-capitalize" val="backpropagation">backpropagation</option>
                                    <option class="text-capitalize" val="Bayes' Theorem">Bayes' Theorem</option>
                                    <option class="text-capitalize" val="Bayesian network">Bayesian network</option>
                                    <option class="text-capitalize" val="bias">bias</option>
                                    <option class="text-capitalize" val="Big Data">Big Data</option>
                                    <option class="text-capitalize" val="binomial distribution">binomial distribution</option>
                                    <option class="text-capitalize" val="chi-square test">chi-square test</option>
                                    <option class="text-capitalize" val="classification">classification</option>
                                    <option class="text-capitalize" val="clustering">clustering</option>
                                    <option class="text-capitalize" val="coefficient">coefficient</option>
                                    <option class="text-capitalize" val="computational linguistics">computational linguistics</option>
                                    <option class="text-capitalize" val="confidence interval">confidence interval</option>
                                    <option class="text-capitalize" val="continuous variable">continuous variable</option>
                                    <option class="text-capitalize" val="correlation">correlation</option>
                                    <option class="text-capitalize" val="covariance">covariance</option>
                                    <option class="text-capitalize" val="cross-validation">cross-validation</option>
                                    <option class="text-capitalize" val="D3">D3</option>
                                    <option class="text-capitalize" val="data engineer">data engineer</option>
                                    <option class="text-capitalize" val="data mining">data mining</option>
                                    <option class="text-capitalize" val="data science">data science</option>
                                    <option class="text-capitalize" val="data structure">data structure</option>
                                    <option class="text-capitalize" val="data wrangling">data wrangling</option>
                                    <option class="text-capitalize" val="decision trees">decision trees</option>
                                    <option class="text-capitalize" val="deep learning">deep learning</option>
                                    <option class="text-capitalize" val="dependent variable">dependent variable</option>
                                    <option class="text-capitalize" val="dimension reduction">dimension reduction</option>
                                    <option class="text-capitalize" val="discrete variable">discrete variable</option>
                                    <option class="text-capitalize" val="econometrics">econometrics</option>
                                    <option class="text-capitalize" val="feature">feature</option>
                                    <option class="text-capitalize" val="feature engineering">feature engineering</option>
                                    <option class="text-capitalize" val="GATE">GATE</option>
                                    <option class="text-capitalize" val="gradient boosting">gradient boosting</option>
                                    <option class="text-capitalize" val="gradient descent">gradient descent</option>
                                    <option class="text-capitalize" val="histogram">histogram</option>
                                    <option class="text-capitalize" val="independent variable">independent variable</option>
                                    <option class="text-capitalize" val="JavaScript">JavaScript</option>
                                    <option class="text-capitalize" val="k-means clustering">k-means clustering</option>
                                    <option class="text-capitalize" val="k-nearest neighbors">k-nearest neighbors</option>
                                    <option class="text-capitalize" val="latent variable">latent variable</option>
                                    <option class="text-capitalize" val="lift">lift</option>
                                    <option class="text-capitalize" val="linear algebra">linear algebra</option>
                                    <option class="text-capitalize" val="linear regression">linear regression</option>
                                    <option class="text-capitalize" val="logarithm">logarithm</option>
                                    <option class="text-capitalize" val="logistic regression">logistic regression</option>
                                    <option class="text-capitalize" val="machine learning">machine learning</option>
                                    <option class="text-capitalize" val="machine learning model">machine learning model</option>
                                    <option class="text-capitalize" val="Markov Chain">Markov Chain</option>
                                    <option class="text-capitalize" val="MATLAB">MATLAB</option>
                                    <option class="text-capitalize" val="matrix">matrix</option>
                                    <option class="text-capitalize" val="mean">mean</option>
                                    <option class="text-capitalize" val="Mean Absolute Error">Mean Absolute Error</option>
                                    <option class="text-capitalize" val="Mean Squared Error">Mean Squared Error</option>
                                    <option class="text-capitalize" val="median">median</option>
                                    <option class="text-capitalize" val="mode">mode</option>
                                    <option class="text-capitalize" val="model">model</option>
                                    <option class="text-capitalize" val="Monte Carlo method">Monte Carlo method</option>
                                    <option class="text-capitalize" val="moving average">moving average</option>
                                    <option class="text-capitalize" val="n">n-gram</option>
                                    <option class="text-capitalize" val="naive Bayes classifier">naive Bayes classifier</option>
                                    <option class="text-capitalize" val="neural network">neural network</option>
                                    <option class="text-capitalize" val="normal distribution">normal distribution</option>
                                    <option class="text-capitalize" val="NoSQL">NoSQL</option>
                                    <option class="text-capitalize" val="null hypothesis">null hypothesis</option>
                                    <option class="text-capitalize" val="objective function">objective function</option>
                                    <option class="text-capitalize" val="outlier">outlier</option>
                                    <option class="text-capitalize" val="overfitting">overfitting</option>
                                    <option class="text-capitalize" val="P ">P value</option>
                                    <option class="text-capitalize" val="PageRank">PageRank</option>
                                    <option class="text-capitalize" val="Pandas">Pandas</option>
                                    <option class="text-capitalize" val="perceptron">perceptron</option>
                                    <option class="text-capitalize" val="Perl">Perl</option>
                                    <option class="text-capitalize" val="pivot table">pivot table</option>
                                    <option class="text-capitalize" val="Poisson distribution">Poisson distribution</option>
                                    <option class="text-capitalize" val="posterior distribution">posterior distribution</option>
                                    <option class="text-capitalize" val="predictive analytics">predictive analytics</option>
                                    <option class="text-capitalize" val="predictive modeling">predictive modeling</option>
                                    <option class="text-capitalize" val="principal component analysis">principal component analysis</option>
                                    <option class="text-capitalize" val="prior distribution">prior distribution</option>
                                    <option class="text-capitalize" val="probability distribution">probability distribution</option>
                                    <option class="text-capitalize" val="Python">Python</option>
                                    <option class="text-capitalize" val="quantile, quartile">quantile, quartile</option>
                                    <option class="text-capitalize" val="R">R</option>
                                    <option class="text-capitalize" val="random forest">random forest</option>
                                    <option class="text-capitalize" val="regression">regression</option>
                                    <option class="text-capitalize" val="reinforcement learning">reinforcement learning</option>
                                    <option class="text-capitalize" val="Root Mean Squared Error">Root Mean Squared Error</option>
                                    <option class="text-capitalize" val="Ruby">Ruby</option>
                                    <option class="text-capitalize" val="S curve">S curve</option>
                                    <option class="text-capitalize" val="SAS">SAS</option>
                                    <option class="text-capitalize" val="scalar">scalar</option>
                                    <option class="text-capitalize" val="scripting">scripting</option>
                                    <option class="text-capitalize" val="serial correlation">serial correlation</option>
                                    <option class="text-capitalize" val="shell">shell</option>
                                    <option class="text-capitalize" val="spatiotemporal data">spatiotemporal data</option>
                                    <option class="text-capitalize" val="SPSS">SPSS</option>
                                    <option class="text-capitalize" val="SQL">SQL</option>
                                    <option class="text-capitalize" val="standard deviation">standard deviation</option>
                                    <option class="text-capitalize" val="standard normal distribution">standard normal distribution</option>
                                    <option class="text-capitalize" val="standardized score">standardized score</option>
                                    <option class="text-capitalize" val="Stata">Stata</option>
                                    <option class="text-capitalize" val="strata, stratified sampling">strata, stratified sampling</option>
                                    <option class="text-capitalize" val="supervised learning">supervised learning</option>
                                    <option class="text-capitalize" val="support vector machine">support vector machine</option>
                                    <option class="text-capitalize" val="t-distribution">t-distribution</option>
                                    <option class="text-capitalize" val="Tableau">Tableau</option>
                                    <option class="text-capitalize" val="time series data">time series data</option>
                                    <option class="text-capitalize" val="UIMA">UIMA</option>
                                    <option class="text-capitalize" val="unsupervised learning">unsupervised learning</option>
                                    <option class="text-capitalize" val="variance">variance</option>
                                    <option class="text-capitalize" val="vector">vector</option>
                                    <option class="text-capitalize" val="vector space">vector space</option>
                                    <option class="text-capitalize" val="Weka">Weka</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="habilidade" placeholder="Habilidades">
                        </div>
                        <div class="col-lg-6">
                            <div class="price-br">
                                <input type="text" name="preco" placeholder="Preço">
                                <i class="la la-dollar"></i>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="inp-field">
                                <select name="integral">
                                    <option class="text-capitalize" val="Integral">Integral</option>
                                    <option class="text-capitalize" val="Meio ">Meio Período</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <textarea name="descricao" placeholder="Descrição"></textarea>
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