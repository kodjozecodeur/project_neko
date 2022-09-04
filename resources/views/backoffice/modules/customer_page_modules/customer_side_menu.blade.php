<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <img src="assets/images/logo.svg" alt="" srcset="">
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item active ">
                    <a href="{{ route('customer.dashboard') }}" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Tableau de bord</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('customer.offers') }}" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Les Offres disponibles</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('customer.wash_session') }}" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Ma séance</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('customer.account_settings') }}" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Mon compte</span>
                    </a>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
