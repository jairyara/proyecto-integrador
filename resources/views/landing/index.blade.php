@extends('layout.landing')

@section('pageTitle', 'Inicio')

@php

$attr = [
  [],
  [],
  []
];

@endphp

@section('landing')
    <section class="hero" id="hero">
        <img src="{{ asset('assets/bg-hero.png') }}" alt="Fondo">
        <div class="hero__content container-element">
            <article class="hero__content--info">
                <h1>
                    Encuentra retos de Seguridad Informática, aprende, enseña
                </h1>
                <button class="btn btn-primary">registrarse</button>
            </article>
        </div>
    </section>
    <section class="about" id="platform">
        <div class="about__content container-element">
            <h2 class="title-landing">Sobre la plataforma</h2>
            <div class="about__content--description">
                <article data-aos="zoom-in" data-aos-duration="1000">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has
                        survived not only five centuries, but also the leap into electronic typesetting, remaining
                        essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                        containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <figure>
                        <img src="{{asset('assets/img1.png')}}" alt="Code" title="Code"/>
                    </figure>
                </article>
                <article data-aos="zoom-in" data-aos-duration="1000" >
                    <p class="col-7">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has
                        survived not only five centuries, but also the leap into electronic typesetting, remaining
                        essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                        containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <figure>
                        <img src="{{asset('assets/img2.png')}}" alt="Terminal" title="Terminal"/>
                    </figure>
                </article>
            </div>
        </div>
    </section>
    <section class="leads" id="leads">
        <div class="leads__content container-element">
            <h2 class="title-landing">¿Qué te ofrece la plataforma?</h2>
            <article data-aos="fade-right" data-aos-duration="1000" class="leads__content--info">
                <div>
                    <li>Retos en diferentes areas de la seguridad informática.</li>
                    <li>Únete a una comunidad que quiere aprender al igual que tú.</li>
                    <li>Participa en los foros y ayuda a otros.</li>
                    <li>Crea conocimiento a partir del debate con otros compañeros de la comunidad.</li>
                    <li>Crea contactos profesionales en el área</li>
                    <li>Accede a cualquier hora</li>
                </div>
                <figure>
                    <img src="{{ asset('assets/leads.png') }}" alt="Comunidad aprendiendo">
                </figure>
            </article>
        </div>
    </section>

    <section class="pricing" id="pricing">
        <div class="pricing__content container-element">
            <h2 class="title-landing">Precios</h2>
            <section data-aos="fade-left" data-aos-duration="1000" class="pricing__content--elements">
                <article class="pricing-card">
                    <div class="pricing-header">
                        <h2>Gratis</h2>
                        <p>Eleva tus conocimientos en ethical hacking</p>
                        <h3><span>$0</span> / por mes</h3>
                        <button class="btn btn-primary">Registrarse</button>
                    </div>
                    <div class="pricing-footer">
                        <h4>Gratis para siempre</h4>
                        <ul>
                            <li>Características gratis</li>
                            <li>Características gratis</li>
                            <li>Características gratis</li>
                            <li>Características gratis</li>
                        </ul>
                    </div>
                </article>
                <article class="pricing-card">
                    <div class="pricing-header">
                        <h2>Premium</h2>
                        <p>Accede a las mejores herramientas</p>
                        <h3><span>TBD</span> / por mes</h3>
                        <button class="btn btn-primary">Hackea ya!</button>
                    </div>
                    <div class="pricing-footer">
                        <h4>Pago recurrente mensual</h4>
                        <ul>
                            <li>Características premium</li>
                            <li>Características premium</li>
                            <li>Características premium</li>
                            <li>Características premium</li>
                        </ul>
                    </div>
                </article>
                <article class="pricing-card">
                    <div class="pricing-header">
                        <h2>Universidades</h2>
                        <p>Dále a tus estudiantes las herramientas para llegar al siguiente nivel en ethical hacking</p>
                        <button class="btn btn-primary">Contactar ventas</button>
                    </div>
                    <div class="pricing-footer">
                        <h4>TBD</h4>
                        <ul>
                            <li>Características universidades</li>
                            <li>Características universidades</li>
                            <li>Características universidades</li>
                            <li>Características universidades</li>
                        </ul>
                    </div>
                </article>
            </section>
        </div>
    </section>

    <section class="opinions" id="opinions">
        <div class="opinions__content container-element">
            <h2 class="title-landing">
                Opiniones
            </h2>
            <section class="opinions__content--wrapper">
                <x-opinion-card></x-opinion-card>
            </section>
        </div>
    </section>

    <section class="requirements" id="requirements">
        <div class="requirements__content container-element">
            <h2 class="title-landing">
                Requerimientos
            </h2>
            <ul>
                <li>Entusiasmo por aprender</li>
                <li>Nociones teóricas de seguridad informática</li>
                <li>Gusto por los retos</li>
                <li>Ganas de aportar y crear comunidad</li>
                <li>Mejora continua</li>
            </ul>
        </div>
    </section>
    <section class="team" id="team">
        <div class="team__content container-element">
            <h2 class="title-landing">
                Equipo de trabajo
            </h2>
            <section class="team__content--list d-flex align-items-center justify-content-between w-75 mx-auto">
                <article class="card-team bg-gray-200 rounded">
                    <figure class="m-0">
                        <img src="./assets/p1.png" alt="Manuel Pacheco" title="Manuel Pacheco">
                    </figure>
                    <div class="p-4">
                        <h3>
                            Manuel Pacheco
                        </h3>
                        <h4>
                            Programador
                        </h4>
                        <p>
                            Me gustan los gatos
                        </p>
                    </div>
                </article>
                <article class="card-team bg-gray-200 rounded">
                    <figure class="m-0">
                        <img src="./assets/p2.png" alt="David Suaza" title="David Suaza">
                    </figure>
                    <div class="p-4">
                        <h3>
                            David Suaza
                        </h3>
                        <h4>
                            Programador
                        </h4>
                        <p>
                            Me gustan los gatos
                        </p>
                    </div>
                </article>
                <article class="card-team bg-gray-200 rounded">
                    <figure class="m-0">
                        <img src="./assets/p3.png" alt="Jair Yara" title="Jair Yara">
                    </figure>
                    <div class="p-4">
                        <h3>
                            Jair Yara
                        </h3>
                        <h4>
                            Programador
                        </h4>
                        <p>
                            Me gustan los gatos
                        </p>
                    </div>
                </article>
            </section>
        </div>
    </section>

@stop
