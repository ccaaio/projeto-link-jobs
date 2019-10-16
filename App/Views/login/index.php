<body class="sign-in">
    <div class="wrapper">


        <div class="sign-in-page">
            <div class="signin-popup">
                <div class="signin-pop">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="cmp-info">
                                <img src="/public/images/cm-main-img.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="login-sec">
                                <ul class="sign-control">
                                    <li data-tab="tab-1" class="current"><a href="#" title="">Entrar</a></li>
                                    <li data-tab="tab-2"><a href="#" title="">Cadastre-se!</a></li>
                                </ul>
                                <div class="sign_in_sec current" id="tab-1">

                                    <h3>Faça seu Login</h3>
                                    <form action="/login/entrar" method="post">
                                        <div class="row">
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="text" name="username" placeholder="E-mail">
                                                    <i class="la la-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="password" name="senha" placeholder="Senha">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="checky-sec">
                                                    <div class="fgt-sec">
                                                        <input type="checkbox" name="cc" id="c1">
                                                        <label for="c1">
                                                            <span></span>
                                                        </label>
                                                        <small>Lembrar de mim</small>
                                                    </div>
                                                    <a href="principal.html" title="">Esqueceu sua senha?</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <button type="submit" value="submit">Entrar</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <div class="sign_in_sec" id="tab-2">
                                    <div class="signup-tab">
                                        <ul>
                                            <li data-tab="tab-3" class="current"><a href="#" title="">Usuário</a></li>
                                            <li data-tab="tab-4"><a href="#" title="">Empresa</a></li>
                                        </ul>
                                    </div>
                                    <div class="dff-tab current" id="tab-3">
                                        <form action="/login/salvar" method="post">
                                            <div class="row">
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="text" name="titulo" placeholder="Nome Completo">
                                                        <i class="la la-user"></i>
                                                    </div>
                                                    <div class="sn-field">
                                                        <input type="text" name="email" placeholder="Seu principal e-mail">
                                                        <i class="la la-mail-forward"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="text" name="data_nascimento" placeholder="Data de Nascimento">
                                                        <i class="la la-globe"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="text" name="inicio_trabalho" placeholder="Quando Iniciou na Area">
                                                        <i class="la la-globe"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="text" name="cidade" placeholder="Cidade">
                                                        <i class="la la-globe"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="text" name="salario" placeholder="Salário">
                                                        <i class="la la-globe"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="password" name="senha" placeholder="Senha">
                                                        <i class="la la-lock"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="checky-sec st2">
                                                        <div class="fgt-sec">
                                                            <input type="checkbox" name="cc" id="c2">
                                                            <label for="c2">
                                                                <span></span>
                                                            </label>
                                                            <small>Sim, eu li e concordo com os Termos de Uso do LinkJobs.</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <button type="submit" value="submit">Vamos começar!</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="dff-tab" id="tab-4">
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="text" name="company-name" placeholder="Nome da Empresa">
                                                        <i class="la la-building"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="text" name="country" placeholder="País">
                                                        <i class="la la-globe"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="password" name="password" placeholder="Senha">
                                                        <i class="la la-lock"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="password" name="repeat-password" placeholder="Repita a Senha">
                                                        <i class="la la-lock"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="checky-sec st2">
                                                        <div class="fgt-sec">
                                                            <input type="checkbox" name="cc" id="c3">
                                                            <label for="c3">
                                                                <span></span>
                                                            </label>
                                                            <small>Sim, eu li e concordo com os Termos de Uso do LinkJobs.</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <button  type="submit" value="submit">Vamos começar!</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>