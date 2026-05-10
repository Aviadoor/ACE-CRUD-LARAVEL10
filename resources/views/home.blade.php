@extends('layouts.plantillahome')
@section('title', 'A.C. Enterprises S.A.C. - Herramientas Industriales')

@push('styles')
    @vite(['resources/css/home.css']) 
@endpush

@section('header')
    <header>
        <h1>A.C. Enterprises S.A.C.</h1>
        <p>Herramientas y Accesorios Industriales</p>
    </header>
@endsection


@section('content')
    <section class="hero">
        <h1>Al Servicio de la Industria desde el 2001</h1>
        <h2>Encuentra todo en herramientas, accesorios, productos de seguridad industrial y químicos.</h2>
        <a href="https://wa.me/51958588262" class="btn-whatsapp">¡Cotiza por WhatsApp al 958588262!</a>
    </section>

    <section class="services">
        <div class="card">
            <h3>Herramientas</h3>
            <p>Taladros, sierras, esmeriles, hidrolavadoras y equipos completos de jardinería y medición.</p>
        </div>
        <div class="card">
            <h3>Accesorios</h3>
            <p>Brocas, cinceles, discos diamantados, fresas y punteras para cualquier proyecto industrial.</p>
        </div>
        <div class="card">
            <h3>Seguridad Industrial</h3>
            <p>Cascos, guantes anticorte, protección visual y ropa térmica para un trabajo seguro.</p>
        </div>
        <div class="card">
            <h3>Químicos</h3>
            <p>Aerosoles para mantenimiento, tratamiento de efluentes y análisis de aguas.</p>
        </div>
    </section>

    <section class="brands">
        <h2>Marcas con las que trabajamos</h2>
        <p>Somos distribuidores de <strong>Makita, Nalco, Tivoly y Ambro-sol</strong>.</p>
    </section>  
@endsection