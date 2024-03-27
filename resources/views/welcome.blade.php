@extends('layouts.app')

@section('content')
    <header>
        <section class="seccion-principal">
                <h1>DEMYA CORPORATION</h1>
                <p>¡Bienvenido a DEMYA CORPORATION! Somos un equipo de programadores expertos dedicados a ofrecer soluciones de software personalizadas para satisfacer las necesidades de nuestros clientes. Únete a nuestra comunidad para conocer más sobre nuestros proyectos y servicios.</p>
        </section>
    </header>
    <main>
        <section>
            <div class="contenedor">
                <a href="#" class="btn btn-2">Proyectos
                    <span></span>
                    <span></span>
                </a>
                <a href="#" class="btn btn-3">Contactenos</a>
                <a href="#" class="btn btn-5">Conocenos</a>
            </div>
        </section>
        <section id="contac">
            <article class="cont-contacto">
                <h2>Contacto</h2>
                <p>¿Tienes alguna pregunta o comentario? ¡Contáctanos!</p>
                <form action="#" method="post">
                    <input type="text" name="nombre" placeholder="Nombre" required>
                    <input type="email" name="email" placeholder="Correo electrónico" required>
                    <textarea name="mensaje" placeholder="Mensaje" rows="5" required></textarea>
                    <button type="submit">Enviar</button>
                </form>
            </article>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection
