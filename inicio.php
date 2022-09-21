<!-------
<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Por favor inicia sesión");
            </script>
        ';
        header("location: index.php");
        session_destroy();
        die();
    }
    session_destroy();
?>
--------->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>GameStore</title>
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <header>
        <ul class="nav justify-content-center" style="background-color: #240230;">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">
                    <img src="resources/images/icon.png" alt="GameStore">
                </a>
            </li>
        </ul>
        <nav class="navbar-brand" style="background-color: #240230; padding-top: 3px;">
            <div class="container-fluid">
                <a class="navbar-brand" href="contactanos.php">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="button">Contáctanos</button>
                    </div>
                </a>
            </div>
        </nav>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                // Variables
                const baseDeDatos = [
                    {
                        id: 1,
                        nombre: 'Budokai Tenkaichi 3',
                        precio: 15.30,
                        imagen: "resources/images/fsdef.jpg"
                    },
                    {
                        id: 2,
                        nombre: 'TERRARIA',
                        precio: 9.99,
                        imagen: 'resources/images/header.jpg'
                    },
                    {
                        id: 3,
                        nombre: 'TEKKEN 7',
                        precio: 49.99,
                        imagen: 'resources/images/download.jpg'
                    },
                    {
                        id: 4,
                        nombre: 'MINECRAFT',
                        precio: 29.99,
                        imagen: 'resources/images/gdaf.jpg'
                    },
                    {
                        id: 5,
                        nombre: 'Smash Bros Ultimate',
                        precio: 46.79,
                        imagen: 'resources/images/1_US.jpg'
                    },
                    {
                        id: 6,
                        nombre: 'Dead By Daylight',
                        precio: 11.99,
                        imagen: 'resources/images/ukyr.png'
                    },
                ];

                let carrito = [];
                const divisa = '€';
                const DOMitems = document.querySelector('#items');
                const DOMcarrito = document.querySelector('#carrito');
                const DOMtotal = document.querySelector('#total');
                const DOMbotonVaciar = document.querySelector('#boton-vaciar');

                // Funciones

                /**
                 * Dibuja todos los productos a partir de la base de datos. No confundir con el carrito
                 */
                function renderizarProductos() {
                    baseDeDatos.forEach((info) => {
                        // Estructura
                        const miNodo = document.createElement('div');
                        miNodo.classList.add('card', 'col-sm-4');
                        // Body
                        const miNodoCardBody = document.createElement('div');
                        miNodoCardBody.classList.add('card-body');
                        // Titulo
                        const miNodoTitle = document.createElement('h5');
                        miNodoTitle.classList.add('card-title');
                        miNodoTitle.textContent = info.nombre;
                        // Imagen
                        const miNodoImagen = document.createElement('img');
                        miNodoImagen.classList.add('img-fluid');
                        miNodoImagen.setAttribute('src', info.imagen);
                        // Precio
                        const miNodoPrecio = document.createElement('p');
                        miNodoPrecio.classList.add('card-text');
                        miNodoPrecio.textContent = `${info.precio}${divisa}`;
                        // Boton 
                        const miNodoBoton = document.createElement('button');
                        miNodoBoton.classList.add('btn', 'btn-primary');
                        miNodoBoton.textContent = '+';
                        miNodoBoton.setAttribute('marcador', info.id);
                        miNodoBoton.addEventListener('click', anyadirProductoAlCarrito);
                        // Insertamos
                        miNodoCardBody.appendChild(miNodoImagen);
                        miNodoCardBody.appendChild(miNodoTitle);
                        miNodoCardBody.appendChild(miNodoPrecio);
                        miNodoCardBody.appendChild(miNodoBoton);
                        miNodo.appendChild(miNodoCardBody);
                        DOMitems.appendChild(miNodo);
                    });
                }

                /**
                 * Evento para añadir un producto al carrito de la compra
                 */
                function anyadirProductoAlCarrito(evento) {
                    // Anyadimos el Nodo a nuestro carrito
                    carrito.push(evento.target.getAttribute('marcador'))
                    // Actualizamos el carrito 
                    renderizarCarrito();

                }

                /**
                 * Dibuja todos los productos guardados en el carrito
                 */
                function renderizarCarrito() {
                    // Vaciamos todo el html
                    DOMcarrito.textContent = '';
                    // Quitamos los duplicados
                    const carritoSinDuplicados = [...new Set(carrito)];
                    // Generamos los Nodos a partir de carrito
                    carritoSinDuplicados.forEach((item) => {
                        // Obtenemos el item que necesitamos de la variable base de datos
                        const miItem = baseDeDatos.filter((itemBaseDatos) => {
                            // ¿Coincide las id? Solo puede existir un caso
                            return itemBaseDatos.id === parseInt(item);
                        });
                        // Cuenta el número de veces que se repite el producto
                        const numeroUnidadesItem = carrito.reduce((total, itemId) => {
                            // ¿Coincide las id? Incremento el contador, en caso contrario no mantengo
                            return itemId === item ? total += 1 : total;
                        }, 0);
                        // Creamos el nodo del item del carrito
                        const miNodo = document.createElement('li');
                        miNodo.classList.add('list-group-item', 'text-right', 'mx-2');
                        miNodo.textContent = `${numeroUnidadesItem} x ${miItem[0].nombre} - ${miItem[0].precio}${divisa}`;
                        // Boton de borrar
                        const miBoton = document.createElement('button');
                        miBoton.classList.add('btn', 'btn-danger', 'mx-5');
                        miBoton.textContent = 'X';
                        miBoton.style.marginLeft = '1rem';
                        miBoton.dataset.item = item;
                        miBoton.addEventListener('click', borrarItemCarrito);
                        // Mezclamos nodos
                        miNodo.appendChild(miBoton);
                        DOMcarrito.appendChild(miNodo);
                    });
                    // Renderizamos el precio total en el HTML
                    DOMtotal.textContent = calcularTotal();
                }

                /**
                 * Evento para borrar un elemento del carrito
                 */
                function borrarItemCarrito(evento) {
                    // Obtenemos el producto ID que hay en el boton pulsado
                    const id = evento.target.dataset.item;
                    // Borramos todos los productos
                    carrito = carrito.filter((carritoId) => {
                        return carritoId !== id;
                    });
                    // volvemos a renderizar
                    renderizarCarrito();
                }

                /**
                 * Calcula el precio total teniendo en cuenta los productos repetidos
                 */
                function calcularTotal() {
                    // Recorremos el array del carrito 
                    return carrito.reduce((total, item) => {
                        // De cada elemento obtenemos su precio
                        const miItem = baseDeDatos.filter((itemBaseDatos) => {
                            return itemBaseDatos.id === parseInt(item);
                        });
                        // Los sumamos al total
                        return total + miItem[0].precio;
                    }, 0).toFixed(2);
                }

                /**
                 * Varia el carrito y vuelve a dibujarlo
                 */
                function vaciarCarrito() {
                    // Limpiamos los productos guardados
                    carrito = [];
                    // Renderizamos los cambios
                    renderizarCarrito();
                }

                // Eventos
                DOMbotonVaciar.addEventListener('click', vaciarCarrito);

                // Inicio
                renderizarProductos();
                renderizarCarrito();
            });
        </script>
    </header>
    <section>
        <div class="container"">
            <br><br>
            <div class="row" style="background-color: white;">
                <!-- Elementos generados a partir del JSON -->
                <main id="items" class="col-sm-8 row"></main>
                <!-- Carrito -->
                <aside class="col-sm-4">
                    <h2>Carrito</h2>
                    <!-- Elementos del carrito -->
                    <ul id="carrito" class="list-group"></ul>
                    <hr>
                    <!-- Precio total -->
                    <p class="text-right">Total: <span id="total"></span>&euro;</p>
                    <button id="boton-vaciar" class="btn btn-danger">Vaciar</button>
                </aside>
            </div>
        </div>
    </section>
    <br><br>
    <div class="container-fluid">
        <a class="navbar-brand" href="resources/php/cerrar_sesion.php">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="button">Cerrar sesión</button>
            </div>
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>