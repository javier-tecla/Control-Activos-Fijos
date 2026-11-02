@extends('layouts.admin')

@section('title', 'Admin Dashboard')
@section('active_nav', 'dashboard')
@section('breadcrumbs', 'Workspace | Dashboard')

@section('content')
<section class="hero">
    <div class="hero-text">
        <span class="eyebrow" id="heroDate">{{ now()->format('l · F j · Y') }}</span>
        <h1 class="hero-title">Panel de <span class="accent">Administración</span></h1>
        <p class="hero-sub">Página inicial base (Starter). Comienza a agregar tus propios módulos, tablas y componentes.</p>
    </div>
    <div class="hero-actions">
        <button class="btn btn--primary">
            <svg viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg>
            Acción Principal
        </button>
    </div>
</section>

<section class="kpi-grid" aria-label="Key metrics">
    <article class="kpi-card c-primary">
        <div class="kpi-top">
            <div class="kpi-identity">
                <div class="kpi-icon primary">
                    <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg>
                </div>
                <div class="kpi-label">Usuarios</div>
            </div>
            <span class="kpi-pill up">+12%</span>
        </div>
        <div class="kpi-value">1,248</div>
        <div class="kpi-compare">Total registrados en la plataforma</div>
    </article>

    <article class="kpi-card c-success">
        <div class="kpi-top">
            <div class="kpi-identity">
                <div class="kpi-icon success">
                    <svg viewBox="0 0 24 24"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                </div>
                <div class="kpi-label">Ingresos</div>
            </div>
            <span class="kpi-pill up">+8%</span>
        </div>
        <div class="kpi-value">$14,250</div>
        <div class="kpi-compare">Total del mes actual</div>
    </article>
</section>

<div class="grid">
    <section class="col-12 card">
        <div class="card-head">
            <div class="card-title-wrap">
                <span class="eyebrow">Starter</span>
                <h2 class="card-title">Sección en blanco</h2>
            </div>
        </div>
        <div style="padding: 1.5rem 0; color: var(--t-muted);">
            <p>Este es tu punto de partida limpio. Puedes colocar aquí tus tablas Eloquent, formularios, tarjetas o componentes Blade.</p>
        </div>
    </section>
</div>
@endsection
