@extends('layouts.navbar')

@section('content')
<div class="alert alert-success" role="alert">
    Reglamentos <i class="bi bi-2-circle"></i>
</div>
<div class="container my-4">
    <div class="row">
        <div class="bd-example d-md-flex">
            <div class="overflow-auto p-3 mb-3 mb-md-0 me-md-3 bg-body-tertiary" style="max-width: 260px; max-height: 100px;">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                        Este es un ejemplo de uso </font>
                </font><code>.overflow-auto</code>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">en un elemento con dimensiones establecidas de ancho y alto. </font>
                    <font style="vertical-align: inherit;">Por diseño, este contenido se desplazará verticalmente.
                    </font>
                </font>
            </div>
            <div class="overflow-scroll p-3 bg-body-tertiary" style="max-width: 260px; max-height: 100px;">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                        Este es un ejemplo de uso </font>
                </font><code>.overflow-scroll</code>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">en un elemento con dimensiones establecidas de ancho y alto.
                    </font>
                </font>
            </div>
        </div>
    </div>
</div>
<div class="container my-4">
    <div class="row">
        <div class="col-4">
            <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
                <nav class="nav nav-pills flex-column">
                    <a class="nav-link" href="#item-1">Artículo 1</a>
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link ms-3 my-1" href="#item-1-1">Artículo 1-1</a>
                        <a class="nav-link ms-3 my-1" href="#item-1-2">Artículo 1-2</a>
                    </nav>
                    <a class="nav-link" href="#item-2">Artículo 2</a>
                    <a class="nav-link" href="#item-3">Artículo 3</a>
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link ms-3 my-1" href="#item-3-1">Artículo 3-1</a>
                        <a class="nav-link ms-3 my-1" href="#item-3-2">Artículo 3-2</a>
                    </nav>
                </nav>
            </nav>
        </div>
        <div class="col-8">
            <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
                <div id="item-1">
                    <h4>Artículo 1</h4>
                    <p>Este es un contenido de marcador de posición para la página scrollspy. Tenga en cuenta que a medida que se desplaza hacia abajo en la página, se resalta el enlace de navegación correspondiente. Se repite en todo el ejemplo del componente. Seguimos agregando más copias de ejemplo aquí para enfatizar el desplazamiento y el resaltado.Tenga en cuenta que el complemento de JavaScript intenta elegir el elemento correcto entre todos los que pueden estar visibles. Múltiples objetivos de scrollspy visibles al mismo tiempo pueden causar algunos problemas.</p>
                </div>
                <div id="item-1-1">
                    <h5>Artículo 1-1</h5>
                    <p>Este es un contenido de marcador de posición para la página scrollspy. Tenga en cuenta que a medida que se desplaza hacia abajo en la página, se resalta el enlace de navegación correspondiente. Se repite en todo el ejemplo del componente. Seguimos agregando más copias de ejemplo aquí para enfatizar el desplazamiento y el resaltado.Tenga en cuenta que el complemento de JavaScript intenta elegir el elemento correcto entre todos los que pueden estar visibles. Múltiples objetivos de scrollspy visibles al mismo tiempo pueden causar algunos problemas.</p>
                </div>
                <div id="item-1-2">
                    <h5>Artículo 1-2</h5>
                    <p>Este es un contenido de marcador de posición para la página scrollspy. Tenga en cuenta que a medida que se desplaza hacia abajo en la página, se resalta el enlace de navegación correspondiente. Se repite en todo el ejemplo del componente. Seguimos agregando más copias de ejemplo aquí para enfatizar el desplazamiento y el resaltado.Tenga en cuenta que el complemento de JavaScript intenta elegir el elemento correcto entre todos los que pueden estar visibles. Múltiples objetivos de scrollspy visibles al mismo tiempo pueden causar algunos problemas.</p>
                </div>
                <div id="item-2">
                    <h4>Artículo 2</h4>
                    <p>Este es un contenido de marcador de posición para la página scrollspy. Tenga en cuenta que a medida que se desplaza hacia abajo en la página, se resalta el enlace de navegación correspondiente. Se repite en todo el ejemplo del componente. Seguimos agregando más copias de ejemplo aquí para enfatizar el desplazamiento y el resaltado.Tenga en cuenta que el complemento de JavaScript intenta elegir el elemento correcto entre todos los que pueden estar visibles. Múltiples objetivos de scrollspy visibles al mismo tiempo pueden causar algunos problemas.</p>
                </div>
                <div id="item-3">
                    <h4>Artículo 3</h4>
                    <p>Este es un contenido de marcador de posición para la página scrollspy. Tenga en cuenta que a medida que se desplaza hacia abajo en la página, se resalta el enlace de navegación correspondiente. Se repite en todo el ejemplo del componente. Seguimos agregando más copias de ejemplo aquí para enfatizar el desplazamiento y el resaltado.Tenga en cuenta que el complemento de JavaScript intenta elegir el elemento correcto entre todos los que pueden estar visibles. Múltiples objetivos de scrollspy visibles al mismo tiempo pueden causar algunos problemas.</p>
                </div>
                <div id="item-3-1">
                    <h5>Artículo 3-1</h5>
                    <p>Este es un contenido de marcador de posición para la página scrollspy. Tenga en cuenta que a medida que se desplaza hacia abajo en la página, se resalta el enlace de navegación correspondiente. Se repite en todo el ejemplo del componente. Seguimos agregando más copias de ejemplo aquí para enfatizar el desplazamiento y el resaltado.Tenga en cuenta que el complemento de JavaScript intenta elegir el elemento correcto entre todos los que pueden estar visibles. Múltiples objetivos de scrollspy visibles al mismo tiempo pueden causar algunos problemas.</p>
                </div>
                <div id="item-3-2">
                    <h5>Artículo 3-2</h5>
                    <p>Este es un contenido de marcador de posición para la página scrollspy. Tenga en cuenta que a medida que se desplaza hacia abajo en la página, se resalta el enlace de navegación correspondiente. Se repite en todo el ejemplo del componente. Seguimos agregando más copias de ejemplo aquí para enfatizar el desplazamiento y el resaltado.Tenga en cuenta que el complemento de JavaScript intenta elegir el elemento correcto entre todos los que pueden estar visibles. Múltiples objetivos de scrollspy visibles al mismo tiempo pueden causar algunos problemas.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection