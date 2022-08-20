# PHP WordPress Notice library

[![Latest Stable Version](https://poser.pugx.org/josantonius/wp-notice/v/stable)](https://packagist.org/packages/josantonius/wp-notice)
[![License](https://poser.pugx.org/josantonius/wp-notice/license)](LICENSE)

[English version](README.md)

Mostrar avisos en el panel de administración de WordPress.

---

- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Métodos disponibles](#métodos-disponibles)
- [Cómo empezar](#cómo-empezar)
- [Uso](#uso)
- [Tests](#tests)
- [Patrocinar](#patrocinar)
- [Licencia](#licencia)

---

## Requisitos

Esta biblioteca es soportada por versiones de **PHP 5.6** o superiores y es compatible con versiones de **HHVM 3.0** o superiores.

## Instalación

La mejor forma de instalar esta extensión es a través de [Composer](http://getcomposer.org/download/).

Para instalar **PHP WP_Notice library**, simplemente escribe:

    composer require josantonius/wp-notice

El comando anterior sólo instalará los archivos necesarios, si prefieres **descargar todo el código fuente** puedes utilizar:

    composer require josantonius/wp-notice --prefer-source

También puedes **clonar el repositorio** completo con Git:

    git clone https://github.com/josantonius/wp-notice.git

O **instalarlo manualmente**:

[Download WP_Notice.php](https://raw.githubusercontent.com/josantonius/wp-notice/master/src/class-wp-notice.php):

    wget https://raw.githubusercontent.com/josantonius/wp-notice/master/src/class-wp-notice.php

## Métodos disponibles

Métodos disponibles en esta biblioteca:

### - Generar notificación de éxito

```php
WP_Notice::success($message, $dismissable);
```

| Atributo | Descripción | Tipo de dato | Requerido | Por defecto
| --- | --- | --- | --- | --- |
| $message | Mensaje para la notificación. | string | Sí | |
| $dismissable | Notificación con opción para ocultar. | boolean | No | true |

**@return** (boolean true)

### - Generar notificación para avisos

```php
WP_Notice::warning($message, $dismissable);
```

| Atributo | Descripción | Tipo de dato | Requerido | Por defecto
| --- | --- | --- | --- | --- |
| $message | Mensaje para la notificación. | string | Sí | |
| $dismissable | Notificación con opción para ocultar. | boolean | No | true |

**@return** (boolean true)

### - Generar notificación para errores

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

### - Generar notificación de éxito

```php
WP_Notice::success('Success example');
WP_Notice::success('Success not dismissable', false);
```

### - Generar notificación para avisos

```php
WP_Notice::warning('Warning example');
WP_Notice::warning('Warning not dismissable', false);
```

### - Generar notificación para errores

```php
$error = new \WP_Error('error', 'Example of error creation from WP_Error');

WP_Notice::error($error);
WP_Notice::error('Example of error creation without going through WP_Error');
WP_Notice::error('Error not dismissable', false);
```

![image](resources/images/notices-en-espanol.png)

## Tests

Para ejecutar las [pruebas](tests) necesitarás [Composer](http://getcomposer.org/download/) y seguir los siguientes pasos:

    git clone https://github.com/josantonius/wp-notice.git
    
    cd WP_Notice

    composer install

Ejecutar pruebas unitarias con [PHPUnit](https://phpunit.de/):

    composer phpunit

Ejecutar pruebas de estándares de código para [WordPress](https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/) con [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    composer phpcs

Ejecutar pruebas con [PHP Mess Detector](https://phpmd.org/) para detectar inconsistencias en el estilo de codificación:

    composer phpmd

Ejecutar todas las pruebas anteriores:

    composer tests

## Patrocinar

Si este proyecto te ayuda a reducir el tiempo de desarrollo,
[puedes patrocinarme](https://github.com/josantonius/lang/es-ES/README.md#patrocinar)
para apoyar mi trabajo :blush:

## Licencia

Este repositorio tiene una licencia [MIT License](LICENSE).

Copyright © 2017-2022, [Josantonius](https://github.com/josantonius/lang/es-ES/README.md#contacto)
