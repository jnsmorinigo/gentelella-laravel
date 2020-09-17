# Referencias para version en formato "major.minor.revision.entrega"

Cada uno de estos números tienen el siguiente significado:
_ major: indica la versión principal del software, consistiendo en un conjunto de
funcionalidades concretas que son recogidas y cubiertas en dicha versión.
_ minor: indican funcionalidad menor cubierta en la versión de software entregada.
_ revision: se modifican cuando hay revisiones de código ante fallos de la aplicación.
_ entrega: este dígito tiene el objetivo de llevar la cuenta del número de veces que una
entrega se rechaza, por incumplimiento de algún requisitos de la gestión de entregas
o del proyecto.
Criterios para la modificación de versiones:
_ major: nuevas funcionalidades claves de la aplicación respecto a la versión anterior
debido a la inclusión de nuevos requerimientos para el sistema, como la inclusión
de nuevos módulos o una revisión completa de los existentes.
_ minor: cambios significativos en la forma en la que se ofrece la funcionalidad
existente, corrección de grandes fallos del sistema o nuevas versiones evolutivas
que modifican significativamente la funcionalidad ofrecida.
_ revision: se modifica por cada entrega de software que se realice.
_ entrega: al rechazarse una entrega se incrementa este contador en la siguiente.
Cuando la entrega se aceptase se crearía un tag público que solo conservaría los
tres primeros dígitos (mayor, minor, revision).

# V1.2.0.0

-   Se agrega el changelog y las configuraciones necesarias para el multidioma entr español e ingles.

# V1.1.0.0

-   Se agrega gentelella al proyecto.

# V1.0.0.0

-   Se crea el proyecto laravel 7.
-   Se agrega laravel/ui para el login y registro.
