<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            <div class="footer-logo">
                <img src="/assets/logo.png" alt="Logo">
            </div>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <!-- Dashboard -->
            <li class="nav-item {{ is_active_class(['dashboard']) }}">
                <a href="{{ url('dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="grid"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>

            <!-- Chat -->
            <li class="nav-item {{ is_active_class(['apps/chat']) }}">
                <a href="{{ url('/apps/chat') }}" class="nav-link">
                    <i class="link-icon" data-feather="message-square"></i>
                    <span class="link-title">Chat</span>
                </a>
            </li>

            <!-- Menu Category -->
            <li class="nav-item nav-category">Menu</li>

            <!-- Calendar -->
            <li class="nav-item {{ is_active_class(['apps/calendar']) }}">
                <a href="{{ url('/apps/calendar') }}" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Calendar</span>
                </a>
            </li>

            <!-- User Stories -->
            <li class="nav-item {{ is_active_class(['user-stories/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#user-stories" role="button" aria-expanded="false"
                    aria-controls="user-stories">
                    <i class="link-icon" data-feather="book"></i>
                    <span class="link-title">User Stories</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="user-stories">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('/user-stories/create') }}" class="nav-link">Ajouter une User Story</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/user-stories') }}" class="nav-link">Liste des User Stories</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Backlog -->
            <li class="nav-item {{ is_active_class(['backlog-items/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#backlog-items" role="button" aria-expanded="false"
                    aria-controls="backlog-items">
                    <i class="link-icon" data-feather="list"></i>
                    <span class="link-title">Backlog</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="backlog-items">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('/backlog-items/create') }}" class="nav-link">Ajouter un Élément</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/backlog-items') }}" class="nav-link">Liste des Éléments</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Sprints -->
            <li class="nav-item {{ is_active_class(['sprints/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#sprints" role="button" aria-expanded="false"
                    aria-controls="sprints">
                    <i class="link-icon" data-feather="repeat"></i>
                    <span class="link-title">Sprints</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="sprints">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('/sprints/create') }}" class="nav-link">Ajouter un Sprint</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/sprints') }}" class="nav-link">Liste des Sprints</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Menbres du projet -->
            <li class="nav-item {{ is_active_class(['projects/menbers/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#menbres" role="button" aria-expanded="false"
                    aria-controls="menbres">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Membres du projet</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="menbres">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('/menbres/ajout-menbres') }}" class="nav-link">Ajout d'un membre</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/menbres/listes') }}" class="nav-link">Liste des membres</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Tâches à réaliser -->
            <li class="nav-item {{ is_active_class(['tâche/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#tache" role="button" aria-expanded="false"
                    aria-controls="tache">
                    <i class="link-icon" data-feather="layers"></i>
                    <span class="link-title">Tâches à réaliser</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="tache">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('/tâche/ajout-de-tache') }}" class="nav-link">Ajout d'une tâche</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/tâche/liste-taches') }}" class="nav-link">Liste des tâches</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Mailbox -->
            <li class="nav-item {{ is_active_class(['apps/mailbox']) }}">
                <a href="{{ url('/apps/mailbox') }}" class="nav-link">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Mailbox</span>
                </a>
            </li>

            <!-- Nouveau projet -->
            <li class="nav-item {{ is_active_class(['projects/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#nouveau-p" role="button" aria-expanded="false"
                    aria-controls="nouveau-p">
                    <i class="link-icon" data-feather="plus-square"></i>
                    <span class="link-title">Nouveau projet</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="nouveau-p">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('/projects/create') }}" class="nav-link">Création du projet</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/projects/index') }}" class="nav-link">Liste des projets</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/projects/show') }}" class="nav-link">Édition du projet</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/projects/delete') }}" class="nav-link">Suppression du projet</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/projects/backlog') }}" class="nav-link">Backlog de Produit</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Contactez-nous -->
            <li class="nav-item {{ is_active_class(['contactez-nous']) }}">
                <a href="{{ url('/contactez-nous') }}" class="nav-link">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Contactez-nous</span>
                </a>
            </li>

            <!-- Déconnecter -->
            <li class="nav-item nav-category">Déconnecter</li>
            <li class="nav-item">
                <a href="{{ url('/auth/login') }}" class="nav-link">
                    <i class="link-icon" data-feather="log-out"></i>
                    <span class="link-title">Déconnexion</span>
                </a>
            </li>
        </ul>

        <hr>

        <!-- Create New Project Button -->
        
        <!-- Settings Sidebar -->
        <nav class="settings-sidebar">
            <div class="sidebar-body">
                <a href="#" class="settings-sidebar-toggler">
                    <i data-feather="settings"></i>
                </a>
                <h6 class="text-muted">Sidebar:</h6>
                <div class="form-group border-bottom">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight"
                                value="sidebar-light" checked>
                            Light
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark"
                                value="sidebar-dark">
                            Dark
                        </label>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</nav>
