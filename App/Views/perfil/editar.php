<style>
    .cover-sec > label.upload-capa {
        display: inline-block;
        color: #e44d3a;
        font-size: 16px;
        background-color: #fff;
        border: 1px solid #e44d3a;
        position: absolute;
        top: 30px;
        right: 0;
        padding: 10px 15px;
        font-weight: 600;
        margin-right: 15px;
        cursor: pointer !important;
    }
</style>

<body>

<div id="chama-modal-upload-foto-perfil" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Alterar Foto de Perfil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="" method="post" action="/perfil/uploadFoto" enctype="multipart/form-data">
            <div class="modal-body">
                        <input id="id_user2" name="usuario" type="hidden" value="<?php  echo \App\Lib\Auth::usuario()->id; ?>">
                        <input type="file" id="upload-" name="save-foto-user" class="">

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="save-foto">Salvar Foto</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
            </form>
        </div>
    </div>
</div>

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



    <form class="form-upload-capa-perfil" method="post" action="/perfil/uploadCapaPerfil" enctype="multipart/form-data">
        <section class="cover-sec">
            <button class="btn btn-lg btn-danger btn-block btn-upload d-none" name="save-capa" type="submit" style="position: absolute;top: 0;bottom: 0;left: 0;right: 0;margin: auto;height: 70px;cursor: alias;"><i class="la la-check" style="font-size: 1.2em;margin-right: 0.3em;"></i> CLIQUE PARA CARREGAR A FOTO SELECIONADA!</button>
            <div class="lds-facebook loader-capa" style="position: absolute !important; top: 0 !important; z-index: 999 !important; bottom: 0 !important; right: 0 !important; left: 0 !important; margin: auto !important;">
                <div></div><div></div><div></div>
            </div>
            <input id="id_user" name="id_user" type="hidden" value="<?php  echo \App\Lib\Auth::usuario()->id; ?>">
            <img id="img-capa" src="/public/images/capa-default2.png" alt="CAPA DO PERFIL DO USUÁRIO" title="CAPA DO PERFIL DO USUÁRIO" style="width: 1600px !important; max-width: 1600px !important; height: 400px !important; max-height: 400px !important;">
            <label for="upload-capa" class="upload-capa"><i class="fa fa-camera" style="margin-right: 0.3em;"></i>Alterar Imagem</label>
            <input type="file" id="upload-capa" name="save-capa-user" class="d-none">
        </section>
    </form>


    <main>
        <div class="main-section">
            <div class="container">
                <div class="main-section-data">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="main-left-sidebar">
                                <div class="user_profile">
                                    <div class="user-pro-img chama-modal-upload-foto-perfil" data-toggle="modal" data-target="#chama-modal-upload-foto-perfil">
                                        <img id="img-usuario-foto-perfil" src="http://via.placeholder.com/170x170" alt="" style="width: 170px !important; max-width: 170px !important; height: 170px !important; max-height: 170px !important;">
                                        <a href="#" title=""><i class="fa fa-camera"></i></a>
                                    </div>
                                    <div class="user_pro_status">

                                        <ul class="flw-status">
                                            <li>
                                                <span>Seguindo</span>
                                                <b>32348</b>
                                            </li>
                                            <li>
                                                <span>Seguidores</span>
                                                <b>53K</b>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="suggestions full-width">
                                    <div class="sd-title">
                                        <h3>Visualizações do seu perfil</h3>
                                        <i class="la la-ellipsis-v"></i>
                                    </div>
                                    <div class="suggestions-list">
                                        <div class="suggestion-usd">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                            <div class="sgt-text">
                                                <h4>Jessica William</h4>
                                                <span>Designer Gráfico</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        <div class="suggestion-usd">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                            <div class="sgt-text">
                                                <h4>John Doe</h4>
                                                <span>Desenvolvedor PHP</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        <div class="suggestion-usd">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                            <div class="sgt-text">
                                                <h4>Felipe Camargo</h4>
                                                <span>Desenvolverdor Java</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        <div class="suggestion-usd">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                            <div class="sgt-text">
                                                <h4>Bill Gates</h4>
                                                <span>Desenvolvedor C & C++</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        <div class="suggestion-usd">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                            <div class="sgt-text">
                                                <h4>Jessica William</h4>
                                                <span>Designer Gráfico</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        <div class="suggestion-usd">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                            <div class="sgt-text">
                                                <h4>John Doe</h4>
                                                <span>Desenvolvedor PHP</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        <div class="view-more">
                                            <a href="#" title="">Ver Mais</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="main-ws-sec">
                                <div class="user-tab-sec">
                                    <h3><?php  echo \App\Lib\Auth::usuario()->usuario; ?></h3> &nbsp;&nbsp;&nbsp;<span class="badge badge-danger" style="cursor: pointer;"><i class="fas fa-pencil-alt"></i></span>
                                    <div class="star-descp">
                                        <span><?php  echo \App\Lib\Auth::usuario()->profissao; ?></span>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                        </ul>

                                    </div>
                                    <div class="tab-feed st2">
                                        <ul>

                                            <li data-tab="info-dd">
                                                <a href="#" title="">
                                                    <img src="images/ic2.png" alt="">
                                                    <span>Informações</span>
                                                </a>
                                            </li>


                                            <li data-tab="portfolio-dd">
                                                <a href="#" title="">
                                                    <img src="images/ic3.png" alt="">
                                                    <span>Portfólio</span>
                                                </a>
                                            </li>
                                            <li data-tab="payment-dd">
                                                <a href="#" title="">
                                                    <img src="images/ic6.png" alt="">
                                                    <span>Pagamento</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="product-feed-tab" id="info-dd">
                                    <div class="user-profile-ov">
                                        <h3><a href="#" title="" class="overview-open">Visão Geral</a> <a href="#" title="" class="overview-open"><i class="fa fa-pencil"></i></a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sapien ante, ultricies et imperdiet id, semper vitae lacus. Pellentesque a enim vitae ligula condimentum consequat ut in nulla</p>
                                    </div>
                                    <div class="user-profile-ov st2">
                                        <h3><a href="#" title="" class="exp-bx-open">Experiência</a><a href="#" title="" class="exp-bx-open"><i class="fa fa-pencil"></i></a> <a href="#" title="" class="exp-bx-open"><i class="fa fa-plus-square"></i></a></h3>
                                        <h4>Web designer <a href="#" title=""><i class="fa fa-pencil"></i></a></h4>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sapien ante, ultricies et imperdiet id, semper vitae lacus. Pellentesque a enim vitae ligula condimentum consequat ut in nulla </p>
                                        <h4> UI / UX Designer <a href="#" title=""><i class="fa fa-pencil"></i></a></h4>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sapien ante, ultricies et imperdiet id, semper vitae lacus. Pellentesque a enim vitae ligula condimentum consequat ut in nulla</p>
                                        <h4>Desenvolvedor PHP <a href="#" title=""><i class="fa fa-pencil"></i></a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sapien ante, ultricies et imperdiet id, semper vitae lacus. Pellentesque a enim vitae ligula condimentum consequat ut in nulla</p>
                                        <p class="no-margin">  </p>
                                    </div>
                                    <div class="user-profile-ov">
                                        <h3><a href="#" title="" class="ed-box-open">Educação</a> <a href="#" title="" class="ed-box-open"><i class="fa fa-pencil"></i></a> <a href="#" title=""><i class="fa fa-plus-square"></i></a></h3>
                                        <h4>Master em Ciência de Dados</h4>
                                        <span>2015 - 2018</span>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sapien ante, ultricies et imperdiet id, semper vitae lacus. Pellentesque a enim vitae ligula condimentum consequat ut in nulla </p>
                                    </div>
                                    <div class="user-profile-ov">
                                        <h3><a href="#" title="" class="lct-box-open">Localização</a> <a href="#" title="" class="lct-box-open"><i class="fa fa-pencil"></i></a> <a href="#" title=""><i class="fa fa-plus-square"></i></a></h3>
                                        <h4>São Paulo</h4>
                                        <p>Av Ibirapuera, 1000 - SP </p>
                                    </div>
                                    <div class="user-profile-ov">
                                        <h3><a href="#" title="" class="skills-open">Habilidades</a> <a href="#" title="" class="skills-open"><i class="fa fa-pencil"></i></a> <a href="#"><i class="fa fa-plus-square"></i></a></h3>
                                        <ul>
                                            <li><a href="#" title="">HTML</a></li>
                                            <li><a href="#" title="">PHP</a></li>
                                            <li><a href="#" title="">CSS</a></li>
                                            <li><a href="#" title="">Javascript</a></li>
                                            <li><a href="#" title="">Wordpress</a></li>
                                            <li><a href="#" title="">Photoshop</a></li>
                                            <li><a href="#" title="">Illustrator</a></li>
                                            <li><a href="#" title="">Corel Draw</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-feed-tab" id="saved-jobs">
                                    <div class="posts-section">
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="http://via.placeholder.com/50x50" alt="">
                                                    <div class="usy-name">
                                                        <h3>John Doe</h3>
                                                        <span><img src="images/clock.png" alt="">3 minutos atrás</span>
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
                                                    <li><img src="images/icon8.png" alt=""><span>Codificador Épico</span></li>
                                                    <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                                </ul>
                                                <ul class="bk-links">
                                                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="job_descp">
                                                <h3>Desenvolvedor Wordpress Senior</h3>
                                                <ul class="job-dt">
                                                    <li><a href="#" title="">Integral</a></li>
                                                    <li><span>$90 / hr</span></li>
                                                </ul>
                                                <p>. <a href="#" title="">ver mais</a></p>
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
                                                        <img src="images/liked-img.png" alt="">
                                                        <span>25</span>
                                                    </li>
                                                    <li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comentarios 15</a></li>
                                                </ul>
                                                <a><i class="la la-eye"></i>Visualizações 50</a>
                                            </div>
                                        </div>
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="http://via.placeholder.com/50x50" alt="">
                                                    <div class="usy-name">
                                                        <h3>John Doe</h3>
                                                        <span><img src="images/clock.png" alt="">3 minutos atrás</span>
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
                                                    <li><img src="images/icon8.png" alt=""><span>Codificador Épico</span></li>
                                                    <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                                </ul>
                                                <ul class="bk-links">
                                                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="job_descp">
                                                <h3> Desenvolvedor Wordpress Senior</h3>
                                                <ul class="job-dt">
                                                    <li><a href="#" title="">Integral</a></li>
                                                    <li><span>R$90 / hr</span></li>
                                                </ul>
                                                <p>. <a href="#" title="">view more</a></p>
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
                                                        <img src="images/liked-img.png" alt="">
                                                        <span>25</span>
                                                    </li>
                                                    <li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comentarios 75</a></li>
                                                </ul>
                                                <a><i class="la la-eye"></i>Visualizações 150</a>
                                            </div>
                                        </div>
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="http://via.placeholder.com/50x50" alt="">
                                                    <div class="usy-name">
                                                        <h3>John Doe</h3>
                                                        <span><img src="images/clock.png" alt="">3 minutos atrás</span>
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
                                                    <li><img src="images/icon8.png" alt=""><span>Codificador Épico</span></li>
                                                    <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                                </ul>
                                                <ul class="bk-links">
                                                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="job_descp">
                                                <h3>Senior Wordpress Developer</h3>
                                                <h3> Desenvolvedor Wordpress Senior</h3>
                                                <ul class="job-dt">
                                                    <li><a href="#" title="">Integral</a></li>
                                                    <li><span>R$90 / hr</span></li>
                                                </ul>
                                                <p>. <a href="#" title="">view more</a></p>
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
                                                        <img src="images/liked-img.png" alt="">
                                                        <span>25</span>
                                                    </li>
                                                    <li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comentarios 65</a></li>
                                                </ul>
                                                <a><i class="la la-eye"></i>Visualizações 450</a>
                                            </div>
                                        </div><!--post-bar end-->
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="http://via.placeholder.com/50x50" alt="">
                                                    <div class="usy-name">
                                                        <h3>John Doe</h3>
                                                        <span><img src="images/clock.png" alt="">3 minutos atrás</span>
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
                                                    <li><img src="images/icon8.png" alt=""><span>Codificador Épico</span></li>
                                                    <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                                </ul>
                                                <ul class="bk-links">
                                                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="job_descp">

                                                <h3> Desenvolvedor Wordpress Senior</h3>
                                                <ul class="job-dt">
                                                    <li><a href="#" title="">Integral</a></li>
                                                    <li><span>R$90 / hr</span></li>
                                                </ul>
                                                <p>. <a href="#" title="">view more</a></p>
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
                                                        <img src="images/liked-img.png" alt="">
                                                        <span>25</span>
                                                    </li>
                                                    <li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comentarios 175</a></li>
                                                </ul>
                                                <a><i class="la la-eye"></i>Visualizações 650</a>
                                            </div>
                                        </div>
                                        <div class="process-comm">
                                            <a href="#" title=""><img src="images/process-icon.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-feed-tab" id="my-bids">
                                    <div class="posts-section">
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="http://via.placeholder.com/50x50" alt="">
                                                    <div class="usy-name">
                                                        <h3>John Doe</h3>
                                                        <span><img src="images/clock.png" alt="">3 minutos atrás</span>
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
                                                    <li><img src="images/icon8.png" alt=""><span>Desenvolvedor Frontend </span></li>
                                                    <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                                </ul>
                                                <ul class="bk-links">
                                                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                    <li><a href="#" title="" class="bid_now">De um lance</a></li>
                                                </ul>
                                            </div>
                                            <div class="job_descp">
                                                <h3>Site simples </h3>
                                                <ul class="job-dt">
                                                    <li><span>R$300 - R$350</span></li>
                                                </ul>
                                                <p>. <a href="#" title="">ver mais</a></p>
                                                <ul class="skill-tags">
                                                    <li><a href="#" title="">HTML</a></li>
                                                    <li><a href="#" title="">PHP</a></li>
                                                    <li><a href="#" title="">CSS</a></li>
                                                    <li><a href="#" title="">Javascript</a></li>
                                                    <li><a href="#" title="">Wordpress</a></li>
                                                    <li><a href="#" title="">Photoshop</a></li>
                                                    <li><a href="#" title="">Illustrator</a></li>
                                                    <li><a href="#" title="">Corel Draw</a></li>
                                                </ul>
                                            </div>
                                            <div class="job-status-bar">
                                                <ul class="like-com">
                                                    <li>
                                                        <a href="#"><i class="la la-heart"></i>Curtidas</a>
                                                        <img src="images/liked-img.png" alt="">
                                                        <span>25</span>
                                                    </li>
                                                    <li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comentários 15</a></li>
                                                </ul>
                                                <a><i class="la la-eye"></i>Visualizações 50</a>
                                            </div>
                                        </div>
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="http://via.placeholder.com/50x50" alt="">
                                                    <div class="usy-name">
                                                        <h3>John Doe</h3>
                                                        <span><img src="images/clock.png" alt="">3 minutos atrás</span>
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
                                                    <li><img src="images/icon8.png" alt=""><span>Desenvolvedor Frontend</span></li>
                                                    <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                                </ul>
                                                <ul class="bk-links">
                                                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                    <li><a href="#" title="" class="bid_now">De um lance</a></li>
                                                </ul>
                                            </div>
                                            <div class="job_descp">
                                                <h3>Aplicativo de compras IOS</h3>
                                                <ul class="job-dt">
                                                    <li><span>R$390 - R$1150</span></li>
                                                </ul>
                                                <p>. <a href="#" title="">ver mais</a></p>
                                                <ul class="skill-tags">
                                                    <li><a href="#" title="">HTML</a></li>
                                                    <li><a href="#" title="">PHP</a></li>
                                                    <li><a href="#" title="">CSS</a></li>
                                                    <li><a href="#" title="">Javascript</a></li>
                                                    <li><a href="#" title="">Wordpress</a></li>
                                                    <li><a href="#" title="">Photoshop</a></li>
                                                    <li><a href="#" title="">Illustrator</a></li>
                                                    <li><a href="#" title="">Corel Draw</a></li>
                                                </ul>
                                            </div>
                                            <div class="job-status-bar">
                                                <ul class="like-com">
                                                    <li>
                                                        <a href="#"><i class="la la-heart"></i>Curtidas</a>
                                                        <img src="images/liked-img.png" alt="">
                                                        <span>25</span>
                                                    </li>
                                                    <li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comentários 15</a></li>
                                                </ul>
                                                <a><i class="la la-eye"></i>Visualizações 50</a>
                                            </div>
                                        </div>
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="http://via.placeholder.com/50x50" alt="">
                                                    <div class="usy-name">
                                                        <h3>John Doe</h3>
                                                        <span><img src="images/clock.png" alt="">3 minutos atrás</span>
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
                                                    <li><img src="images/icon8.png" alt=""><span>Desenvolvedor Frontend</span></li>
                                                    <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                                </ul>
                                                <ul class="bk-links">
                                                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                    <li><a href="#" title="" class="bid_now">De um lance</a></li>
                                                </ul>
                                            </div>
                                            <div class="job_descp">
                                                <h3>Site simples 2 </h3>
                                                <ul class="job-dt">
                                                    <li><span>R$300 - R$350</span></li>
                                                </ul>
                                                <p>. <a href="#" title="">ver mais</a></p>
                                                <ul class="skill-tags">
                                                    <li><a href="#" title="">HTML</a></li>
                                                    <li><a href="#" title="">PHP</a></li>
                                                    <li><a href="#" title="">CSS</a></li>
                                                    <li><a href="#" title="">Javascript</a></li>
                                                    <li><a href="#" title="">Wordpress</a></li>
                                                    <li><a href="#" title="">Photoshop</a></li>
                                                    <li><a href="#" title="">Illustrator</a></li>
                                                    <li><a href="#" title="">Corel Draw</a></li>
                                                </ul>
                                            </div>
                                            <div class="job-status-bar">
                                                <ul class="like-com">
                                                    <li>
                                                        <a href="#"><i class="la la-heart"></i>Curtidas</a>
                                                        <img src="images/liked-img.png" alt="">
                                                        <span>25</span>
                                                    </li>
                                                    <li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comentários 215</a></li>
                                                </ul>
                                                <a><i class="la la-eye"></i>Visualizações 550</a>
                                            </div>
                                        </div>
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="http://via.placeholder.com/50x50" alt="">
                                                    <div class="usy-name">
                                                        <h3>John Doe</h3>
                                                        <span><img src="images/clock.png" alt="">3 minutos atrás</span>
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
                                                    <li><img src="images/icon8.png" alt=""><span>Desenvolvedor Frontend</span></li>
                                                    <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                                </ul>
                                                <ul class="bk-links">
                                                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                    <li><a href="#" title="" class="bid_now">De um lance</a></li>
                                                </ul>
                                            </div>
                                            <div class="job_descp">
                                                <h3>Aplicativo de compras IOS</h3>
                                                <ul class="job-dt">
                                                    <li><span>R$390 - R$1150</span></li>
                                                </ul>
                                                <p>. <a href="#" title="">ver mais</a></p>
                                                <ul class="skill-tags">
                                                    <li><a href="#" title="">HTML</a></li>
                                                    <li><a href="#" title="">PHP</a></li>
                                                    <li><a href="#" title="">CSS</a></li>
                                                    <li><a href="#" title="">Javascript</a></li>
                                                    <li><a href="#" title="">Wordpress</a></li>
                                                    <li><a href="#" title="">Photoshop</a></li>
                                                    <li><a href="#" title="">Illustrator</a></li>
                                                    <li><a href="#" title="">Corel Draw</a></li>
                                                </ul>
                                            </div>
                                            <div class="job-status-bar">
                                                <ul class="like-com">
                                                    <li>
                                                        <a href="#"><i class="la la-heart"></i>Curtidas</a>
                                                        <img src="images/liked-img.png" alt="">
                                                        <span>25</span>
                                                    </li>
                                                    <li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comentários 200</a></li>
                                                </ul>
                                                <a><i class="la la-eye"></i>Visualizações 1550</a>
                                            </div>
                                        </div><!--post-bar end-->
                                        <div class="process-comm">
                                            <a href="#" title=""><img src="images/process-icon.png" alt=""></a>
                                        </div><!--process-comm end-->
                                    </div><!--posts-section end-->
                                </div><!--product-feed-tab end-->
                                <div class="product-feed-tab" id="portfolio-dd">
                                    <div class="portfolio-gallery-sec">
                                        <h3>Portfolio</h3>
                                        <div class="gallery_pf">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="http://via.placeholder.com/271x174" alt="">
                                                        <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="http://via.placeholder.com/170x170" alt="">
                                                        <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="http://via.placeholder.com/170x170" alt="">
                                                        <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="http://via.placeholder.com/170x170" alt="">
                                                        <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="http://via.placeholder.com/170x170" alt="">
                                                        <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="http://via.placeholder.com/170x170" alt="">
                                                        <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="http://via.placeholder.com/170x170" alt="">
                                                        <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="http://via.placeholder.com/170x170" alt="">
                                                        <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="http://via.placeholder.com/170x170" alt="">
                                                        <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="http://via.placeholder.com/170x170" alt="">
                                                        <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                            </div>
                                        </div><!--gallery_pf end-->
                                    </div><!--portfolio-gallery-sec end-->
                                </div><!--product-feed-tab end-->
                                <div class="product-feed-tab" id="payment-dd">
                                    <div class="billing-method">
                                        <ul>
                                            <li>
                                                <h3>Adicionar método de pagamento</h3>
                                                <a href="#" title=""><i class="fa fa-plus-circle"></i></a>
                                            </li>
                                            <li>
                                                <h3>Ver atividade</h3>
                                                <a href="#" title="">Visualizar tudo</a>
                                            </li>
                                            <li>
                                                <h3>Total</h3>
                                                <span>R$0.00</span>
                                            </li>
                                        </ul>
                                        <div class="lt-sec">
                                            <img src="images/lt-icon.png" alt="">
                                            <h4>Todas as suas transações são salvas aqui</h4>
                                            <a href="#" title="">Clique aqui</a>
                                        </div>
                                    </div><!--billing-method end-->
                                    <div class="add-billing-method">
                                        <h3>Adicionar Forma de Pagamento</h3>
                                        <h4><img src="images/dlr-icon.png" alt=""><span>Utilizando a LinkJobs o pagamento é garantido</span></h4>
                                        <div class="payment_methods">
                                            <h4>Cartão de Débito e Crédito</h4>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="cc-head">
                                                            <h5>Número do Cartão</h5>
                                                            <ul>
                                                                <li><img src="images/cc-icon1.png" alt=""></li>
                                                                <li><img src="images/cc-icon2.png" alt=""></li>
                                                                <li><img src="images/cc-icon3.png" alt=""></li>
                                                                <li><img src="images/cc-icon4.png" alt=""></li>
                                                            </ul>
                                                        </div>
                                                        <div class="inpt-field pd-moree">
                                                            <input type="text" name="cc-number" placeholder="">
                                                            <i class="fa fa-credit-card"></i>
                                                        </div><!--inpt-field end-->
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="cc-head">
                                                            <h5>Primeiro nome</h5>
                                                        </div>
                                                        <div class="inpt-field">
                                                            <input type="text" name="f-name" placeholder="">
                                                        </div><!--inpt-field end-->
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="cc-head">
                                                            <h5>Último nome</h5>
                                                        </div>
                                                        <div class="inpt-field">
                                                            <input type="text" name="l-name" placeholder="">
                                                        </div><!--inpt-field end-->
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="cc-head">
                                                            <h5>Data de validade</h5>
                                                        </div>
                                                        <div class="rowwy">
                                                            <div class="row">
                                                                <div class="col-lg-6 pd-left-none no-pd">
                                                                    <div class="inpt-field">
                                                                        <input type="text" name="f-name" placeholder="">
                                                                    </div><!--inpt-field end-->
                                                                </div>
                                                                <div class="col-lg-6 pd-right-none no-pd">
                                                                    <div class="inpt-field">
                                                                        <input type="text" name="f-name" placeholder="">
                                                                    </div><!--inpt-field end-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="cc-head">
                                                            <h5>Código de Segurança <i class="fa fa-question-circle"></i></h5>
                                                        </div>
                                                        <div class="inpt-field">
                                                            <input type="text" name="l-name" placeholder="">
                                                        </div><!--inpt-field end-->
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <button type="submit">Continuar</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <h4>Adicionar conta Paypal</h4>
                                        </div>
                                    </div><!--add-billing-method end-->
                                </div><!--product-feed-tab end-->
                            </div><!--main-ws-sec end-->
                        </div>
                        <div class="col-lg-3">
                            <div class="right-sidebar">
                                <div class="message-btn">
                                    <a href="#" title=""><i class="fa fa-envelope"></i>Mensagens</a>
                                </div>
                                <div class="widget widget-portfolio">
                                    <div class="wd-heady">
                                        <h3>Portfólio</h3>
                                        <img src="images/photo-icon.png" alt="">
                                    </div>
                                    <div class="pf-gallery">
                                        <ul>
                                            <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                            <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                            <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                            <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                            <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                            <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                            <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                            <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                            <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                            <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                            <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                            <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footy-sec mn no-margin">
            <div class="container">
                <ul>
                    <li><a href="#" title="">Ajuda</a></li>
                    <li><a href="#" title="">Política de Privacidade</a></li>
                    <li><a href="#" title="">Carreira</a></li>
                    <li><a href="#" title="">Fórum</a></li>
                    <li><a href="#" title="">Fale Conosco</a></li>
                </ul>
                <p><img src="images/copy-icon2.png" alt="">Copyright 2019 - Universidade Presbiteriana Mackenzie</p>
            </div>
        </div>
    </footer>

    <div class="overview-box" id="overview-box">
        <div class="overview-edit">
            <h3>Ver tudo</h3>
            <span>5000 caracteres restantes</span>
            <form>
                <textarea></textarea>
                <button type="submit" class="save">Salvar</button>
                <button type="submit" class="cancel">Cancelar</button>
            </form>
            <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
        </div>
    </div>


    <div class="overview-box" id="experience-box">
        <div class="overview-edit">
            <h3>Experiência</h3>
            <form>
                <input type="text" name="subject" placeholder="Subject">
                <textarea></textarea>
                <button type="submit" class="save">Salvar</button>
                <button type="submit" class="save-add">Save & adicionar mais</button>
                <button type="submit" class="cancel">Cancelar</button>
            </form>
            <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
        </div>
    </div>

    <div class="overview-box" id="education-box">
        <div class="overview-edit">
            <h3>Education</h3>
            <form>
                <input type="text" name="school" placeholder="School / University">
                <div class="datepicky">
                    <div class="row">
                        <div class="col-lg-6 no-left-pd">
                            <div class="datefm">
                                <input type="text" name="from" placeholder="From" class="datepicker">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                        <div class="col-lg-6 no-righ-pd">
                            <div class="datefm">
                                <input type="text" name="to" placeholder="To" class="datepicker">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="text" name="degree" placeholder="Degree">
                <textarea placeholder="Description"></textarea>
                <button type="submit" class="save">Salvar</button>
                <button type="submit" class="save-add">Salvar & adicionar mais</button>
                <button type="submit" class="cancel">Cancelar</button>
            </form>
            <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
        </div>
    </div>

    <div class="overview-box" id="location-box">
        <div class="overview-edit">
            <h3>Localização</h3>
            <form>
                <div class="datefm">
                    <select>
                        <option>Country</option>
                        <option value="pakistan">Paquistão</option>
                        <option value="england">Inglaterra</option>
                        <option value="india">India</option>
                        <option value="usa">Estados Unidos</option>
                    </select>
                    <i class="fa fa-globe"></i>
                </div>
                <div class="datefm">
                    <select>
                        <option>City</option>
                        <option value="london">Londres</option>
                        <option value="new-york">Nova York</option>
                        <option value="sydney">Sydney</option>
                        <option value="chicago">Chicago</option>
                    </select>
                    <i class="fa fa-map-marker"></i>
                </div>
                <button type="submit" class="save">Salvar</button>
                <button type="submit" class="cancel">Cancelar</button>
            </form>
            <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
        </div>
    </div>

    <div class="overview-box" id="skills-box">
        <div class="overview-edit">
            <h3>Skills</h3>
            <ul>
                <li><a href="#" title="" class="skl-name">HTML</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
                <li><a href="#" title="" class="skl-name">php</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
                <li><a href="#" title="" class="skl-name">css</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
            </ul>
            <form>
                <input type="text" name="skills" placeholder="Skills">
                <button type="submit" class="save">Salvar</button>
                <button type="submit" class="save-add">Save & adicionar mais</button>
                <button type="submit" class="cancel">Cancelar</button>
            </form>
            <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
        </div>
    </div>

    <div class="overview-box" id="create-portfolio">
        <div class="overview-edit">
            <h3>Criar Portfólio</h3>
            <form>
                <input type="text" name="pf-name" placeholder="Portfolio Name">
                <div class="file-submit">
                    <input type="file" name="file">
                </div>
                <div class="pf-img">
                    <img src="http://via.placeholder.com/60x60" alt="">
                </div>
                <input type="text" name="website-url" placeholder="htp://www.example.com">
                <button type="submit" class="save">Salvar</button>
                <button type="submit" class="cancel">Cancelar</button>
            </form>
            <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal" id="modal-capa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Carregando a foto da Capa...</h5>
            </div>
            <div class="modal-body">
                Estamos quase lá, aguarde o término do carregamento... a foto será carreganda em instantes!
            </div>
        </div>
    </div>
</div>

</body>