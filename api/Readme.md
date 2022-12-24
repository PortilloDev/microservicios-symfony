composer create-project symfony/skeleton project ^5.1.0

mv project/* .

composer require monolog doctrine phpunit 

composer require --dev browser-kit maker (browser para testing funcional, maker crear comandos y archivos symfony)

composer require api (instalar API Platform)

composer require symfony/security-core symfony/uid

composer require lexik/jwt-authentication-bundle
---

API Platform

La API Platform es un framework de construcción de APIs, hecho con PHP, HTML y JavaScript. Se proporciona como un proyecto completo e independiente, pero también se puede embeber en proyectos ya funcionales. Pudiéndose utilizar también como un componente único al usar sólo su cor