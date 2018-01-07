# PHP WordPress Notice library

[![Latest Stable Version](https://poser.pugx.org/josantonius/WP_Notice/v/stable)](https://packagist.org/packages/josantonius/WP_Notice) [![Latest Unstable Version](https://poser.pugx.org/josantonius/WP_Notice/v/unstable)](https://packagist.org/packages/josantonius/WP_Notice) [![License](https://poser.pugx.org/josantonius/WP_Notice/license)](LICENSE) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/6a34553cc861491db0cc50894c4c05cf)](https://www.codacy.com/app/Josantonius/WP_Notice?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Josantonius/WP_Notice&amp;utm_campaign=Badge_Grade) [![Total Downloads](https://poser.pugx.org/josantonius/WP_Notice/downloads)](https://packagist.org/packages/josantonius/WP_Notice) [![Travis](https://travis-ci.org/Josantonius/WP_Notice.svg)](https://travis-ci.org/Josantonius/WP_Notice) [![WP](https://img.shields.io/badge/WordPress-Standar-1abc9c.svg)](https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/) [![CodeCov](https://codecov.io/gh/Josantonius/WP_Notice/branch/master/graph/badge.svg)](https://codecov.io/gh/Josantonius/WP_Notice)

[English version](README.md)

Mostrar avisos en el panel de administración de WordPress.

---

- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Métodos disponibles](#métodos-disponibles)
- [Cómo empezar](#cómo-empezar)
- [Uso](#uso)
- [Tests](#tests)
- [Tareas pendientes](#-tareas-pendientes)
- [Contribuir](#contribuir)
- [Repositorio](#repositorio)
- [Licencia](#licencia)
- [Copyright](#copyright)

---

## Requisitos

Esta biblioteca es soportada por versiones de **PHP 5.6** o superiores y es compatible con versiones de **HHVM 3.0** o superiores.

## Instalación 

La mejor forma de instalar esta extensión es a través de [Composer](http://getcomposer.org/download/).

Para instalar **PHP WP_Notice library**, simplemente escribe:

    $ composer require Josantonius/WP_Notice

El comando anterior sólo instalará los archivos necesarios, si prefieres **descargar todo el código fuente** puedes utilizar:

    $ composer require Josantonius/WP_Notice --prefer-source

También puedes **clonar el repositorio** completo con Git:

    $ git clone https://github.com/Josantonius/WP_Notice.git

O **instalarlo manualmente**:

[Download WP_Notice.php](https://raw.githubusercontent.com/Josantonius/WP_Notice/master/src/class-wp-notice.php):

    $ wget https://raw.githubusercontent.com/Josantonius/WP_Notice/master/src/class-wp-notice.php

## Métodos disponibles

Métodos disponibles en esta biblioteca:

### - Generar notificación de éxito:

```php
WP_Notice::success($message, $dismissable);
```

| Atributo | Descripción | Tipo de dato | Requerido | Por defecto
| --- | --- | --- | --- | --- |
| $message | Mensaje para la notificación. | string | Sí | |
| $dismissable | Notificación con opción para ocultar. | boolean | No | true |

**@return** (boolean true)

### - Generar notificación para avisos:

```php
WP_Notice::warning($message, $dismissable);
```

| Atributo | Descripción | Tipo de dato | Requerido | Por defecto
| --- | --- | --- | --- | --- |
| $message | Mensaje para la notificación. | string | Sí | |
| $dismissable | Notificación con opción para ocultar. | boolean | No | true |

**@return** (boolean true)

### - Generar notificación para errores:

```php
WP_Notice::error($message, $dismissable);
```

| Atributo | Descripción | Tipo de dato | Requerido | Por defecto
| --- | --- | --- | --- | --- |
| $message | Mensaje para la notificación. | string | Sí | |
| $dismissable | Notificación con opción para ocultar. | boolean | No | true |

**@return** (boolean true)

## Cómo empezar

Para utilizar esta clase con **Composer**:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\WP_Notice;
```

Si la instalaste **manualmente**, utiliza:

```php
require_once __DIR__ . '/class-wp-notice.php';

use Josantonius\WP_Notice\WP_Notice;
```

## Uso

Ejemplo de uso para esta librería:

### - Generar notificación de éxito:

```php
WP_Notice::success('Success example');
WP_Notice::success('Success not dismissable', false);
```

### - Generar notificación para avisos:

```php
WP_Notice::warning('Warning example');
WP_Notice::warning('Warning not dismissable', false);
```

### - Generar notificación para errores:

```php
$error = new \WP_Error('error', 'Example of error creation from WP_Error');

WP_Notice::error($error);
WP_Notice::error('Example of error creation without going through WP_Error');
WP_Notice::error('Error not dismissable', false);
```

![image](resources/images/notices-en-espanol.png)

## Tests 

Para ejecutar las [pruebas](tests) necesitarás [Composer](http://getcomposer.org/download/) y seguir los siguientes pasos:

    $ git clone https://github.com/Josantonius/WP_Notice.git
    
    $ cd WP_Notice

    $ composer install

Ejecutar pruebas unitarias con [PHPUnit](https://phpunit.de/):

    $ composer phpunit

Ejecutar pruebas de estándares de código para [WordPress](https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/) con [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    $ composer phpcs

Ejecutar pruebas con [PHP Mess Detector](https://phpmd.org/) para detectar inconsistencias en el estilo de codificación:

    $ composer phpmd

Ejecutar todas las pruebas anteriores:

    $ composer tests

## ☑ Tareas pendientes

- [ ] Añadir nueva funcionalidad.
- [ ] Mejorar pruebas.
- [ ] Mejorar documentación.
- [ ] Refactorizar código para las reglas de estilo de código deshabilitadas. Ver [phpmd.xml](phpmd.xml) y [.php_cs.dist](.php_cs.dist).

## Contribuir

Si deseas colaborar, puedes echar un vistazo a la lista de
[issues](https://github.com/Josantonius/WP_Notice/issues) o [tareas pendientes](#-tareas-pendientes).

**Pull requests**

* [Fork and clone](https://help.github.com/articles/fork-a-repo).
* Ejecuta el comando `composer install` para instalar dependencias.
  Esto también instalará las [dependencias de desarrollo](https://getcomposer.org/doc/03-cli.md#install).
* Ejecuta el comando `composer fix` para estandarizar el código.
* Ejecuta las [pruebas](#tests).
* Crea una nueva rama (**branch**), **commit**, **push** y envíame un
  [pull request](https://help.github.com/articles/using-pull-requests).

## Repositorio

La estructura de archivos de este repositorio se creó con [PHP-Skeleton](https://github.com/Josantonius/PHP-Skeleton).

## Licencia

Este proyecto está licenciado bajo **licencia MIT**. Consulta el archivo [LICENSE](LICENSE) para más información.

## Copyright

2017 -2018 Josantonius, [josantonius.com](https://josantonius.com/)

Si te ha resultado útil, házmelo saber :wink:

Puedes contactarme en [Twitter](https://twitter.com/Josantonius) o a través de mi [correo electrónico](mailto:hello@josantonius.com).
