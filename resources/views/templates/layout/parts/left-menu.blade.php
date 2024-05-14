<ul class="navbar-nav" id="navbar-nav">
    <li class="nav-item">
        <a class="nav-link menu-link" href="{{ route('dashboard') }}" role="button" aria-expanded="false"
            aria-controls="sidebarDashboards">
            <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Início</span>
        </a>
    </li> <!-- end Dashboard Menu -->
    @if (@Auth::user()->isAluno())
    <li class="nav-item">
        <a class="nav-link menu-link" href="{{ route('aluno.dadosPessoais') }}" role="button" aria-expanded="false"
            aria-controls="sidebarDashboards">
            <i class="ri-user-line"></i> <span data-key="t-dashboards">Meu Perfil</span>
        </a>
    </li> <!-- end Dashboard Menu -->
    <li class="nav-item">
        <a class="nav-link menu-link" href="{{ route('aluno.plano') }}" role="button" aria-expanded="false"
            aria-controls="sidebarDashboards">
            <i class="ri-user-line"></i> <span data-key="t-dashboards">O Meu Plano</span>
        </a>
    </li> <!-- end Dashboard Menu -->

    <li class="nav-item">
        <a class="nav-link menu-link" href="{{ route('aluno.historico') }}" role="button" aria-expanded="false"
            aria-controls="sidebarDashboards">
            <i class="ri-todo-line"></i> <span data-key="t-dashboards">Histórico</span>
        </a>
    </li> <!-- end Dashboard Menu -->
    
    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
            <i class="ri-file-edit-fill"></i> <span data-key="t-multi-level">Minhas Medidas</span>
        </a>
        <div class="collapse menu-dropdown" id="sidebarMultilevel">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="{{ route('aluno.instrucoes') }}" class="nav-link" data-key="t-calendar"> Instruções </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('medida.create') }}" class="nav-link" data-key="t-calendar"> Nova Medida </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('fotografia.create') }}" class="nav-link" data-key="t-calendar"> Novas Fotografias </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('medida.evolucao') }}" class="nav-link" data-key="t-chat"> Ver Evolução </a>
                </li>                
            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse"
            role="button" aria-expanded="false" aria-controls="sidebarForms">
            <i class="ri-file-list-3-line"></i> <span data-key="t-forms">Agenda</span>
        </a>
        <div class="collapse menu-dropdown" id="sidebarForms">
            <ul class="nav nav-sm flex-column">

                <li class="nav-item">
                    <a href="{{ route('agenda.index') }}" class="nav-link"
                        data-key="t-form-select"> Agenda Individual </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('agenda.index') }}" class="nav-link" data-key="t-form-select">
                         Agenda em Grupo
                    </a>
                </li>

            </ul>
        </div>
    </li> 

    <li class="nav-item">
        <a class="nav-link menu-link collapsed" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
            <i class="ri-apps-2-line"></i> <span data-key="t-apps">eBooks</span>
        </a>
        <div class="menu-dropdown collapse" id="sidebarApps" style="">
            <ul class="nav nav-sm flex-column">

                <li class="nav-item">
                    <a href="#sidebarEmail" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEmail" data-key="t-email">
                        Fase 1
                    </a>
                    <div class="menu-dropdown collapse" id="sidebarEmail" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('aluno.receitasfase1') }}" class="nav-link" data-key="t-mailbox"> E-book de Receitas </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aluno.suplementofase1') }}" class="nav-link collapsed" role="button" aria-expanded="false" aria-controls="sidebaremailTemplates" data-key="t-email-templates">
                                    Suplementos
                                </a>
            
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#sidebarEcommerce" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce" data-key="t-ecommerce">
                        Fase 2
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarEcommerce">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-ecommerce-products.html" class="nav-link" data-key="t-products"> E-book de Receitas </a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-product-details.html" class="nav-link" data-key="t-product-Details"> Suplementos </a>
                            </li>
                                                                            
                        </ul>
                    </div>
                </li>     
                
                <li class="nav-item">
                    <a href="apps-file-manager.html" class="nav-link"> <span data-key="t-file-manager">Desbloqueio Metabólico</span></a>
                </li>

            </ul>
        </div>
    </li>
  
    <li class="nav-item">
        <a class="nav-link menu-link collapsed" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
            <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Mentoria</span>
        </a>
        <div class="menu-dropdown collapse" id="sidebarAuth" style="">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="#sidebarSignIn" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignIn" data-key="t-signin"> Módulo 1 (Conciência)
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarSignIn">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('aluno.mentoria.modulo1.aula1') }}" class="nav-link" data-key="t-basic"> Aula 1 - Tomada de Consciência</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aluno.mentoria.modulo1.aula2') }}" class="nav-link" data-key="t-cover"> Aula 2 - Cartão de Fortalecimento</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aluno.mentoria.modulo1.aula3') }}" class="nav-link" data-key="t-basic"> Aula 3 - Envolve a família no processo</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aluno.mentoria.modulo1.aula4') }}" class="nav-link" data-key="t-cover"> Aula 4 - Medições de controle</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aluno.mentoria.modulo1.aula5') }}" class="nav-link" data-key="t-basic"> Aula 5 - Objetivos reais</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#sidebarSignUp" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignUp" data-key="t-signup"> Módulo 2 (Fase 1)
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarSignUp">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('aluno.mentoria.modulo2.aula1') }}" class="nav-link" data-key="t-basic"> Aula 1 - Pirâmide Nutricional </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aluno.mentoria.modulo2.aula2') }}" class="nav-link" data-key="t-cover"> Aula 2 - Hábitos que transformam </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aluno.mentoria.modulo2.aula3') }}" class="nav-link" data-key="t-basic"> Aula 3 - O que comer </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aluno.mentoria.modulo2.aula4') }}" class="nav-link" data-key="t-cover"> Aula 4 - As conjugações alimentares </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aluno.mentoria.modulo2.aula5') }}" class="nav-link" data-key="t-cover"> Aula 5 - Cozinhar para a família </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#sidebarResetPass" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarResetPass" data-key="t-password-reset"> Módulo 3 (Nutrientes e Calorias)
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarResetPass">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="auth-pass-reset-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-pass-reset-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#sidebarchangePass" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarchangePass" data-key="t-password-create">
                        Password Create
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarchangePass">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="auth-pass-change-basic.html" class="nav-link" data-key="t-basic">
                                    Basic </a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-pass-change-cover.html" class="nav-link" data-key="t-cover">
                                    Cover </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#sidebarLockScreen" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLockScreen" data-key="t-lock-screen"> Módulo 4 (Fase 2)
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLockScreen">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="auth-lockscreen-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-lockscreen-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#sidebarLogout" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLogout" data-key="t-logout"> Módulo 5 (O que precisas saber)
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLogout">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="auth-logout-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-logout-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#sidebarSuccessMsg" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSuccessMsg" data-key="t-success-message"> Módulo 6 (Manutenção)
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarSuccessMsg">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="auth-success-msg-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-success-msg-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                            </li>
                        </ul>
                    </div>
                </li>
                
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link menu-link collapsed" href="{{ route('aluno.chat') }}"  role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
            <i class="ri-group-2-line"></i> <span data-key="t-multi-level">Chat</span>
        </a>
        
    </li>
    @endif

    
    @if (@Auth::user()->isSecretaria())
    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false"
            aria-controls="sidebarApps">
            <i class="ri-apps-2-line"></i> <span data-key="t-apps">Pacientes</span>
        </a>
        <div class="collapse menu-dropdown" id="sidebarApps">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="{{ route('aluno.create') }}" class="nav-link" data-key="t-calendar"> Novo Paciente </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('aluno.index') }}" class="nav-link" data-key="t-chat">
                        Listar Pacientes </a>
                </li>

            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
            aria-expanded="false" aria-controls="sidebarLayouts">
            <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Empresas
        </a>
        <div class="collapse menu-dropdown" id="sidebarLayouts">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="{{ route('empresa.create') }}" class="nav-link" data-key="t-horizontal">Nova Empresa</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('empresa.index') }}" class="nav-link" data-key="t-detached">Listar Empresas</a>
                </li>

            </ul>
        </div>
    </li> <!-- end Dashboard Menu -->

    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button"
            aria-expanded="false" aria-controls="sidebarIcons">
            <i class="ri-compasses-2-line"></i> <span data-key="t-icons">Cursos</span>
        </a>
        <div class="collapse menu-dropdown" id="sidebarIcons">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="{{ route('curso.create') }}" class="nav-link" data-key="t-remix">Novo Curso</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('curso.index') }}" class="nav-link" data-key="t-boxicons">Listar Cursos</a>
                </li>
            </ul>
        </div>
    </li>
    

    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false"
            aria-controls="sidebarAuth">
            <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Turmas</span>
        </a>
        <div class="collapse menu-dropdown" id="sidebarAuth">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="{{ route('turma.create') }}" class="nav-link" role="button" aria-expanded="false"
                        aria-controls="sidebarSignIn" data-key="t-signin">
                        Nova Turma
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('turma.index') }}" class="nav-link" role="button" aria-expanded="false"
                        aria-controls="sidebarSignUp" data-key="t-signup">
                        Lisar Turmas
                    </a>
                </li>
            </ul>
        </div>
    </li>
    @endif
    @if (@Auth::user()->isNutricionista())
    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse"
            role="button" aria-expanded="false" aria-controls="sidebarForms">
            <i class="ri-file-list-3-line"></i> <span data-key="t-forms">Agenda</span>
        </a>
        <div class="collapse menu-dropdown" id="sidebarForms">
            <ul class="nav nav-sm flex-column">

                <li class="nav-item">
                    <a href="{{ route('agenda.index') }}" class="nav-link"
                        data-key="t-form-select"> Agenda Individual </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('agenda.index') }}" class="nav-link" data-key="t-form-select">
                         Agenda em Grupo
                    </a>
                </li>

            </ul>
        </div>
    </li> 
    @endif


    @if (@Auth::user()->isSecretaria())
        <li class="nav-item">
            <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse"
                role="button" aria-expanded="false" aria-controls="sidebarForms">
                <i class="ri-file-list-3-line"></i> <span data-key="t-forms">Agenda Individual</span>
            </a>
            <div class="collapse menu-dropdown" id="sidebarForms">
                <ul class="nav nav-sm flex-column">

                    <li class="nav-item">
                        <a href="{{ route('agenda.create') }}" class="nav-link"
                            data-key="t-form-select"> Nova Atividade </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('agenda.index') }}" class="nav-link" data-key="t-form-select">
                             Ver Atividades
                        </a>
                    </li>

                </ul>
            </div>
        </li> 

        <li class="nav-item">
            <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                <i class="ri-calendar-todo-fill"></i> <span data-key="t-multi-level">Agenda de Grupo</span>
            </a>
            <div class="collapse menu-dropdown" id="sidebarMultilevel">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a href="{{ route('secretaria.agendaGrupo') }}" class="nav-link"
                            data-key="t-form-select"> Nova Atividades </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('agenda.index') }}" class="nav-link" data-key="t-form-select">
                             Ver Atividades
                        </a>
                    </li>               
                </ul>
            </div>
        </li>
        
    @endif

   

</ul>
