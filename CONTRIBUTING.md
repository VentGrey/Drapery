# Idioma

* La interfaz que se le presente al usuario estará escrita en español (El proyecto se migrará al idioma Inglés una vez sea desplegado inicialmente).
* El código y todos sus elementos deberán estar en idioma Inglés (Ej: Variables, Funciones, Clases, etc).
* La documentación para el usuario será escrita en español.

# Derechos de código

Todo el código expresado aquí es propiedad de su autor, en su respectiva rama del proyecto, una vez el código sea unido a la rama `master` del proyecto principal
pasará a estar bajo la [Licencia MIT](LICENSE) .

# Fuente

La fuente utilizada en el código es `Fira Sans`.

# Estilo de código

* HTML / PHP + HTML
    * Todo el código dentro de archivos con la extensión `.html` o cualquier archivo con la extensión `.php` que contenga elementos HTML dentro de si deberá tener una estructura ordenada / estructurada, puede utilizar un [Estilizador de HTML](https://htmlformatter.com/)para mejorar la estética de su código.

* PHP 7
    * Todos los archivos solo deberían de estar codificados en `UTF-8`, sin `BOM`.
    * Siempre utilizar la zona horaria UTC para establecer fecha y hora.
    * Cada archivo de biblioteca `.php` deberá contener _SOLAMENTE_ una clase.
    * Cada archivo de biblioteca `.php` deberá estar libre de efectos negativos.
    * Preferir las palabras en singular (Ej:`objeto`, `stylesheet`, `user`) en lugar de utilizar sus versiones en plural.
    * Utilize la `nomeclatura_serpiente` para nombrar variables.
    * Evite llamar funciones en un namespace global.

* CSS
    * El archivo de estilado principal es `style.css`.
    * Utilizamos bootstrap, procure utilizarlo lo menos posible, de hecho es mejor si nos ayuda a deshacernos del uso de esta biblioteca utilizando código CSS preciso en las clases principales.
    * Las clases e identificadores deberán llevar un nombre que los relacione con la función que desempeñan, siempre en minúsculas y separadas por un guión medio "`-`" si se trata de dos palabras.
    * Las llaves deberán ser colocadas a un espacio de separación del identificador de clase/id.
    * Se deberán comentar las secciones a las cuales pertenece el código CSS que se esté editando:
```css
/* Estilo de la página de inicio de sesión */

p.username-field {
    float: left;
    font-weight: normal;
    font-family: 'Fira Sans', sans-serif;
    font-size: 18px;
    color: #000000;
}

p.password-field {
    float: left;
    font-weight: normal;
    font-family: 'Fira Sans', sans-serif;
    font-size: 18px;
    color: #7c7978;
    padding: 5px;
}

/* Fin del estilo de la página de inicio de sesión */
```

# Uso del logo

El logo fué creado con Logomakr.com y no se ha pagado una licencia por lo que deberá ser nombrado en el footer de las páginas (al menos hasta que paguemos 19 dólares o hagamos uno profesionalmente).

<div align="center">
    <img src="img/drapery-logo.png" height="100">
</div>
