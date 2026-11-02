<aside class="d-sidebar">
    <!-- Brand / Logotipo Personalizable -->
    <div class="brand">
        <a href="{{ route('dashboard') }}" style="display: flex; align-items: center; gap: 12px; text-decoration: none; color: inherit;">
            <div class="brand-logo">
                @if (file_exists(public_path('img/logo.png')))
                    <img src="{{ asset('img/logo.png') }}" alt="{{ config('app.name', 'Logo') }}">
                @elseif (file_exists(public_path('img/logo.svg')))
                    <img src="{{ asset('img/logo.svg') }}" alt="{{ config('app.name', 'Logo') }}">
                @else
                    {{-- Logo por defecto (icono o inicial de la app) --}}
                    <svg viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#ffffff" d="M14.747 9.125c.527-1.426 1.736-2.573 3.317-2.573c1.643 0 2.792 1.085 3.318 2.573l6.077 16.867c.186.496.248.931.248 1.147c0 1.209-.992 2.046-2.139 2.046c-1.303 0-1.954-.682-2.264-1.611l-.931-2.915h-8.62l-.93 2.884c-.31.961-.961 1.642-2.232 1.642c-1.24 0-2.294-.93-2.294-2.17c0-.496.155-.868.217-1.023l6.233-16.867zm.34 11.256h5.891l-2.883-8.992h-.062l-2.946 8.992z"/>
                    </svg>
                @endif
            </div>
            <div class="brand-text">
                <div class="brand-name">{{ config('app.name', 'Adminator') }}</div>
                <div class="brand-tag">Panel Admin</div>
            </div>
        </a>
    </div>

    <!-- Sección Principal -->
    <nav class="nav-section">
        <div class="nav-label">Workspace</div>

        <a class="nav-link {{ request()->routeIs('dashboard') ? 'is-active' : '' }}" href="{{ route('dashboard') }}">
            <svg viewBox="0 0 24 24"><path d="M3 12 12 3l9 9"/><path d="M5 10v10h14V10"/></svg>
            <span>Dashboard</span>
        </a>

        <a class="nav-link" href="{{ url('/') }}">
            <svg viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            <span>Ver Sitio Web</span>
        </a>
    </nav>

    <!-- Sección de Módulos (Ejemplo con Submenú desplegable) -->
    <nav class="nav-section">
        <div class="nav-label">Administración</div>

        <div class="nav-item-group" data-nav-group>
            <a class="nav-link" href="javascript:void(0)" data-nav-toggle>
                <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                <span>Gestión</span>
                <svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="m9 18 6-6-6-6"/></svg>
            </a>
            <div class="nav-submenu">
                <a href="#usuarios">Usuarios</a>
                <a href="#roles">Roles y Permisos</a>
                <a href="#ajustes">Configuración</a>
            </div>
        </div>

        <div class="nav-item-group" data-nav-group>
            <a class="nav-link" href="javascript:void(0)" data-nav-toggle>
                <svg viewBox="0 0 24 24"><path d="M3 20V4M7 20v-6M11 20v-10M15 20v-4M19 20V8"/></svg>
                <span>Reportes</span>
                <svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="m9 18 6-6-6-6"/></svg>
            </a>
            <div class="nav-submenu">
                <a href="#ventas">Ventas</a>
                <a href="#visitas">Analíticas</a>
            </div>
        </div>
    </nav>

    <!-- Footer del Sidebar con usuario -->
    <div class="sidebar-footer">
        <div class="workspace">
            <div class="workspace-avatar">AD</div>
            <div class="workspace-text">
                <div class="workspace-name">{{ auth()->user()->name ?? 'Administrador' }}</div>
                <div class="workspace-role">{{ auth()->user()->email ?? 'admin@example.com' }}</div>
            </div>
            <svg class="workspace-chev" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="m7 9 5-5 5 5"/><path d="m7 15 5 5 5-5"/>
            </svg>
        </div>
    </div>
</aside>
