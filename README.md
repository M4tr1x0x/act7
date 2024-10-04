# Robotics School Platform

## Descripción del Proyecto
Esta plataforma ha sido diseñada para ayudar a una escuela de robótica a gestionar cursos, grupos de estudiantes y kits de robótica. Los administradores, profesores y estudiantes pueden interactuar con la plataforma para gestionar clases, asignar estudiantes a cursos y utilizar kits de robótica asociados.

## Instrucciones para poblar la base de datos
El proyecto incluye seeders y un factory para poblar la base de datos con usuarios, kits de robótica y cursos.

### Seeders:
1. **Usuarios**:
   - Se han creado tres usuarios:
     - **Admon** (email: admon@robotics.com)
     - **Tecmilenio** (email: tecmilenio@robotics.com)
     - **Student** (email: student@robotics.com)

2. **Kits de Robótica**:
   - StarterKit
   - Educational Robotics Kit
   - Kit5

### Factory:
- Se han generado 100 cursos usando datos ficticios mediante **FakerPHP**.

### Comandos para ejecutar los seeders:
- Para ejecutar los seeders y poblar la base de datos:
  
  ```bash
  php artisan db:seed
