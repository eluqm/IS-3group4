![](https://img.shields.io/badge/license-MIT-green) ![](https://img.shields.io/github/commit-activity/y/eluqm/IS-3group4) ![](https://img.shields.io/github/contributors/eluqm/IS-3group4) ![](https://img.shields.io/github/last-commit/eluqm/IS-3group4) ![](https://img.shields.io/github/languages/code-size/eluqm/IS-3group4) ![](https://img.shields.io/tokei/lines/github/eluqm/IS-3group4) ![](https://img.shields.io/github/stars/eluqm/IS-3group4?style=social)

# Ingenieria de Software III - Grupo 04

***

## Integrantes

1. Rodrigo Jesus Santisteban Pachari
2. Jack Christopher Huaihua Huayhua
3. Luis Felipe Sante Taipe
4. Juan Diego Valdivia Mendoza
5. Maryori Lizeth Hilares Angelo
6. Vanessa Mayra Macedo Huaman

## Proyecto "Tatleon WEB"

### Problem Statement

En la Universidad Nacional de San Agustín, los estudiantes no cuentan con acceso a ciertas herramientas que podrían ser útiles para un adecuado desenvolvimiento académico y profesional, como la divulgación de los trabajos realizados, material de los profesores y alumnos, entre otros. Al no tener acceso a tales herramientas, los alumnos principalmente no disponen de una guía de como hacer ciertas actividades ni de poder manejar información importante para sus deberes, etc. Esto puede reducir la calidad educativa de los universitarios en varios aspectos incluyendo las actividades pedagógicas para los docentes, que podrían dificultarse cuando no pueden acceder a algún recurso académico, alguna opinión o cuando no pueden difundir sus trabajos y que otros puedan aprender a través de ello y así mejorar la calidad de los conocimientos en los universitarios. Además, la información que se ofrece esta organizada por semanas más no por temas o categorías, haciendo que la búsqueda de estos materiales para el universitario. También el hecho de que este material no esté abierta al público en general para motivar el autoaprendizaje y también como guía al momento de que alumnos postulen a una carrera profesional. 
Por ello la construcción de Tatleon Web como repositorio académico beneficiaría al organizar esta información (libros, revistas, papers, etc.) la cual serviría para la etapa académica de postulación, pregrado y posgrado no solo de la UNSA sino de todo público que decida aprender. Esto ayudará a cubrir la desorganización de la información e incertidumbre académica al momento de querer estudiar temas más avanzados o repasar las bases de uno de manera autodidacta.

### Descripción de la propuesta

Se presenta como propuesta de solución a Tatleon Web, una sitio web donde los estudiantes de la UNSA podrán acceder a herramientas que faciliten su aprendizaje e interactuar con ellas, además las personas que no estudian en la UNSA también podrán acceder a recursos importantes para realizar un aprendizaje autodidacta.
Las primeras funciones previstas a desarrollar son:
• Enlaces: Los estudiantes podrán subir sus trabajos para que puedan ser apreciados por los demás estudiantes y sirvan de guía.
• Recursos: Los estudiantes de años superiores u otras carreras universitarias que ya hayan llevado un curso podrán compartir recursos académicos útiles como libros, PDFs, PPTs, videos, etc.,para los estudiantes que estén llevando o estén por llevar ese curso.

### Recursos Humanos

La division de cada integrante para que aporte en un  ́ambito en espec ́ıfico es muy importante ya que de esta manera podemos distribuir el trabajo de una manera muchas más f ́acil y equitativa por eso usando la metodolog ́ıa Scrum decidimos distribuir todo el Delta Team de la siguiente manera:

#### Scrum Master

El Scrum Master de nuestro equipo es Jack Christopher Huaihua Huayhua es por eso que
decidimos ponerlo como nuestro Scrum Master para que pueda guiarnos y al mismo tiempo resolver
cualquier problema que surja.

#### Product Owner

El Product Owner de nuestro equipo es Rodrigo Jesus Santisteban Pachari, quien ser ́a la voz
del cliente, en otras palabras ser ́a el enlace entre un cliente y nuestro equipo de desarrollo. Lleva
la visi ́on del producto y lo que se necesita desarrollar, adem ́as de gestionar los comentarios de los
usuarios.

#### Scrum Team

El Scrum Team estará compuesto por Luis Felipe Sante Taipe, Juan Diego Valdivia Mendoza, Maryori Lizeth Hilares Angelo y Vanessa Mayra Macedo Huaman que serán los encargados de convertir Product BackLog, en software entregable. En este caso decidimos dividir el trabajo de cada uno de nosotros en tres partes.

* Diseñador: El encargado de generar el diseño del sistema es Luis Felipe Sante Taipe quien va a generar el diseño arquitectónico y diseño detallado del sistema con base en los requisitos.
* Programadores: Los encargados son Juan Diego Valdivia Mendoza y Vanessa Mayra Macedo Huaman que tienen la capacidad de convertir los requisitos del sistema en código fuente ejecutable utilizando uno o más lenguajes de programación, así como herramientas de apoyo.
* Testers: El encargado de poner a prueba el software es Maryori Lizeth Hilares Angelo con el objetivo de corregir errores y entregar un producto de buena calidad.

### Análisis de requisitos

Para este paso se realizó una lluvia de ideas por parte de todos los integrantes del equipo:
   <p align="center">
    <img src="/imagenes/miro.png">
  </p>

### Sprint Backlog

Para él Scrum Taskboard de Tatleon Web usamos Trello:
https://trello.com/invite/b/83HOxMpz/25cea3974d7c352e55f3a7d4091d9074/proyecto-is-iii
   <p align="center">
    <img src="/imagenes/trello.png">
  </p>

### Mockups

https://www.figma.com/file/KXg9J8ZPBHuc95geISk21W/Prototipos?node-id=0%3A1
   <p align="center">
    <img src="/imagenes/prototipo1.png">
    <img src="/imagenes/prototipo2.png">
    <img src="/imagenes/prototipo3.png">
  </p>

# Casos de Prueba

## Test Suite: Account Controller Test

| N°  | Escenario de Caso de Prueba                                 | Resultado Esperado                                             | Resultado Real                                                 | Pass/Fail |
| --- | ----------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | --------- |
| 1   | Account Controller does not displays account view to guests | Los invitados no pueden acceder a la vista "cuenta"            | Los invitados no pueden acceder a la vista "cuenta"            | Pass      |
| 2   | Account Controller displays the account view to users       | Los usuarios registrados si pueden acceder a la vista "cuenta" | Los usuarios registrados si pueden acceder a la vista "cuenta" | Pass      |
| 3   | Save school of user works                                   | El usuario puede establecer la escuela en la que estudia       | El usuario puede establecer la escuela en la que estudia       | Pass      |

## Test Suite: Authentication Controller Test

| N°  | Escenario de Caso de Prueba                      | Resultado Esperado                                                   | Resultado Real                                                       | Pass/Fail |
| --- | ------------------------------------------------ | -------------------------------------------------------------------- | -------------------------------------------------------------------- | --------- |
| 4   | Login screen can be rendered                     | La vista de Inicio de Sesión se muestra a todos                      | La vista de Inicio de Sesión se muestra a todos                      | Pass      |
| 5   | Users can authenticate using the login screen    | Los usuarios pueden autenticarse usando la vista de Inicio de Sesión | Los usuarios pueden autenticarse usando la vista de Inicio de Sesión | Pass      |
| 6   | Users can not authenticate with invalid password | Los usuarios no pueden autenticarse con una contraseña inválida      | Los usuarios no pueden autenticarse con una contraseña inválida      | Pass      |

## Test Suite: Comment Controller Test

| N°  | Escenario de Caso de Prueba                                    | Resultado Esperado                                               | Resultado Real                                                   | Pass/Fail |
| --- | -------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | --------- |
| 7   | Comment Controller does not display add comment view to guests | Los invitados no pueden acceder a la vista 'agregar comentarios' | Los invitados no pueden acceder a la vista 'agregar comentarios' | Pass      |
| 8   | Comment Controller displays add comment view to users          | Los usuarios pueden acceder a la vista 'agregar comentarios'     | Los usuarios pueden acceder a la vista 'agregar comentarios'     | Pass      |
| 9   | Comment Controller save comment works                          | Se pueden guardar los comentarios                                | Se pueden guardar los comentarios                                | Pass      |

## Test Suite: Course Controller Test

| N°  | Escenario de Caso de Prueba                                   | Resultado Esperado                                                 | Resultado Real                                                     | Pass/Fail |
| --- | ------------------------------------------------------------- | ------------------------------------------------------------------ | ------------------------------------------------------------------ | --------- |
| 10  | Course Controller displays course view                        | La vista de los cursos se muestra a todos                          | La vista de los cursos se muestra a todos                          | Pass      |
| 11  | Course Controller does not display user course view to guests | Los invitados no pueden ver la vista de los cursos de los usuarios | Los invitados no pueden ver la vista de los cursos de los usuarios | Pass      |
| 12  | Course Controller does not display add comment view to guests | Los invitados no pueden acceder a la vista 'agregar comentarios'   | Los invitados no pueden acceder a la vista 'agregar comentarios'   | Pass      |
| 13  | Course Controller displays add ressource view to users        | Los usuarios pueden acceder a la vista 'añadir recursos'           | Los usuarios pueden acceder a la vista 'añadir recursos'           | Pass      |
| 14  | Course Controller save resource works                         | Se pueden guardar los recursos                                     | Se pueden guardar los recursos                                     | Pass      |

## Test Suite: Email Verification Test

| N°  | Escenario de Caso de Prueba               | Resultado Esperado                                     | Resultado Real                                         | Pass/Fail |
| --- | ----------------------------------------- | ------------------------------------------------------ | ------------------------------------------------------ | --------- |
| 15  | Email verification screen can be rendered | La vista de Verificación de Correo se muestra a todos  | La vista de Verificación de Correo se muestra a todos  | Pass      |
| 16  | Email can be verified                     | El correo puede ser verificado                         | El correo puede ser verificado                         | Pass      |
| 17  | Email is not verified with invalid hash   | El correo no puede ser verificado con un hash inválido | El correo no puede ser verificado con un hash inválido | Pass      |

## Test Suite: Password Confirmation Test

| N°  | Escenario de Caso de Prueba                     | Resultado Esperado                                          | Resultado Real                                              | Pass/Fail |
| --- | ----------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- | --------- |
| 18  | Confirm password screen can be rendered         | El mensaje de confirmación de contraseña se muestra a todos | El mensaje de confirmación de contraseña se muestra a todos | Pass      |
| 19  | Password can be confirmed                       | La contraseña puede confirmarse a todos                     | La contraseña puede confirmarse a todos                     | Pass      |
| 20  | Password is not confirmed with invalid_password | Las contraseñas no válidas se muestra a todos               | Las contraseñas no válidas se muestra a todos               | Pass      |

## Test Suite: Password Reset Test

| N°  | Escenario de Caso de Prueba                | Resultado Esperado                                                      | Resultado Real                                                          | Pass/Fail |
| --- | ------------------------------------------ | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | --------- |
| 21  | Reset password link screen can be rendered | La vista de Enlace de Restablecimiento de Contraseña se muestra a todos | La vista de enlace de Restablecimiento de Contraseña se muestra a todos | Pass      |
| 22  | Reset password link can be requested       | Todos pueden solicitar restablecimiento de contraseña                   | Todos pueden solicitar restablecimiento de contraseña                   | Pass      |
| 23  | Reset password screen can be rendered      | La vista de Restablecimiento de Contraseña se muestra a todos           | La vista de Restablecimiento de Contraseña se muestra a todos           | Pass      |
| 24  | Password can be reset with valid token     | Todos pueden reestablecer su contraseña con un token válido             | Todos pueden reestablecer su contraseña con un token válido             | Pass      |

## Test Suite: Access Link Repository Test

| N°  | Escenario de Caso de Prueba                  | Resultado Esperado                                                            | Resultado Real                                                                | Pass/Fail |
| --- | -------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | --------- |
| 25  | Add link repository without being logged in  | Los invitados no podrán agregar enlaces a la vista de respositorio de enlaces | Los invitados no podrán agregar enlaces a la vista de respositorio de enlaces | Pass      |
| 26  | Add link repository having logged in         | Los usuarios podrán agregar enlaces  a la vista de respositorio de  enlaces   | Los usuarios podrán agregar enlaces a la vista de respositorio de enlaces     | Pass      |
| 27  | See link repository without having logged in | La vista de Repositorio de Enlaces se muestra a todos                         | La vista de Repositorio de Enlaces se muestra a todos                         | Pass      |
| 28  | See links repository having logged in        | La vista de Repositorio de Enlaces se muestra a todos                         | La vista de Repositorio de Enlaces se muestra a todos                         | Pass      |


## Licencia

Tatleon Web es distribuido bajo la [Licencia MIT](https://opensource.org/licenses/MIT).
