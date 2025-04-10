# Sistema de Gestión de Reservas de Campos de Golf (SGRCG)

Este proyecto es una aplicación web desarrollada en Laravel 11 que permite gestionar campos de golf, jugadores y sus reservas. El sistema incluye operaciones CRUD completas para cada entidad y está protegido mediante autenticación con Laravel Breeze.

## Requisitos del Sistema

- PHP 8.2 o superior
- Composer
- Node.js y npm
- Base de datos MySQL
- Git

## Instalación

Sigue estos pasos para configurar el proyecto en tu entorno local:

1. **Clonar el repositorio**:
   ```bash
   git clone https://github.com/danielcleves/CampoGolf.git
   cd CampoGolf
   ```

2. **Instalar dependencias de PHP**:
   ```bash
   composer install
   ```

3. **Instalar dependencias de JavaScript**:
   ```bash
   npm install
   ```

4. **Configurar el entorno**:
   - Copiar el archivo `.env.example` a `.env`:
     ```bash
     cp .env.example .env
     ```
   - Generar la clave de aplicación:
     ```bash
     php artisan key:generate
     ```

5. **Ejecutar migraciones**:
   ```bash
   php artisan migrate
   ```

## Ejecución

Una vez completada la instalación, sigue estos pasos para poner en marcha el sistema:

1. **Iniciar servidor Vite (opcional para desarrollo)**:
   ```bash
   npm run dev
   ```

2. **Iniciar el servidor de desarrollo**:
   ```bash
   php artisan serve
   ```

## Estructura del Proyecto

- **Modelos principales**:
  - `App\Models\Campo` - Gestión de campos de golf
  - `App\Models\Jugador` - Gestión de jugadores
  - `App\Models\Reserva` - Gestión de reservas

- **Controladores**:
  - `App\Http\Controllers\CampoController`
  - `App\Http\Controllers\JugadorController`
  - `App\Http\Controllers\ReservaController`

- **Vistas**:
  - Recursos Blade en `resources/views/`

## Uso del Sistema

1. **Autenticación**:
   - Registrarse como nuevo usuario en `/register`
   - Iniciar sesión en `/login`

2. **Gestión de Campos**:
   - Listar campos: `/campos`
   - Crear nuevo campo: `/campos/create`
   - Editar campo existente: `/campos/{id}/edit`

3. **Gestión de Jugadores**:
   - Listar jugadores: `/jugadores`
   - Crear nuevo jugador: `/jugadores/create`
   - Editar jugador existente: `/jugadores/{id}/edit`

4. **Gestión de Reservas**:
   - Listar reservas: `/reservas`
   - Crear nueva reserva: `/reservas/create`
   - Editar reserva existente: `/reservas/{id}/edit`
