<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="index.css">
</head>

<?php 
include "header.php"; 
include "connect-db.php";
connectdb(); 
?>


<h2 class="main-title">Ventas de Casas y Departamentos Exclusivos de Lujo</h2>

<section>
    <h2 class="section-title">Más sobre nosotros</h2>
    <div class="section-container">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock-dollar" viewBox="0 0 24 24">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M13 21h-6a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2h10" />
                <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                <path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
                <path d="M19 21v1m0 -8v1" />
            </svg>
            <h2>SEGURIDAD</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem possimus autem</p>
        </div>

        <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cash" viewBox="0 0 24 24">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M7 9m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />
                <path d="M14 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2" />
            </svg>
            <h2>Precio</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem possimus autem</p>
        </div>

        <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock" viewBox="0 0 24 24">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                <path d="M12 7v5l3 3" />
            </svg>
            <h2>Tiempo</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem possimus autem</p>
        </div>
    </div>
</section>

<main>
    <h2>Casas y Depas en venta</h2>
    <div>
        <h2>Casa en el Lago</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa velit natus error, nihil adipisci temporibus
            pariatur iste eligendi ullam nostrum magni minima saepe veniam accusantium fugiat et tenetur dolore
            quibusdam.</p>
    </div>
    <button class="button"> Ver todas</button>
</main>

<section>
    <h2>ENCUENTRA LA CASA DE TU SUEÑOS</h2>
    <P>Llena el parrafo y un asesor se comunicara contigo de inmediato</P>
    <button class="button">Contactanos</button>
</section>

<section>
    <div>
        <H2>NUESTRO BLOG</H2>
        <div class="blog-entry">
            imagen
            <h2>terraza en la casa de tu seueño</h2>
            <p>Escrito el: "fecha" por : "Users"</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, porro nisi numquam quam, rerum enim
                dolorum inventore sunt ipsam corporis saepe, optio accusamus voluptas. Dolorem labore reiciendis
                similique earum tempore!</p>
        </div>
    </div>
    <div>
        <h2>GUIA PARA LA DECORACION DE TU HOGAR</h2>
        <div class="blog-entry">
            imagen
            <h2>terraza en la casa de tu seueño</h2>
            <p>Escrito el: "fecha" por : "Users"</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, porro nisi numquam quam, rerum enim
                dolorum inventore sunt ipsam corporis saepe, optio accusamus voluptas. Dolorem labore reiciendis
                similique earum tempore!</p>
        </div>
    </div>

    <div class="testimonial">
        <h2>TESTIMONIOS</h2>
        <p>Escrito el: "fecha" por : "Users"</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam expedita, fugiat eos dolorum deserunt ab
            quos voluptatem adipisci maiores? Enim autem a quos consectetur accusamus commodi illo doloribus sit vitae!
        </p>
    </div>
</section>

<?php include "footer.php"?>

</html>

