# LaravelWeb — Tienda Online

## Descripción del proyecto

Proyecto desarrollado con Laravel 13.

Se trata de una tienda online con:

- Página Inicio
- Productos
- Ofertas
- Contacto
- Navbar responsive
- Multiidioma (Español / English / Galego)
- Base de datos SQLite
- Deploy en Render

---

## Tecnologías utilizadas

- Laravel 13
- PHP 8.3
- SQLite
- Tailwind CSS
- Vite
- GitHub
- Docker
- Render

---

## Configuración del entorno

### Instalar dependencias PHP

```bash
composer install
```

### Instalar dependencias frontend

```bash
npm install
```

### Crear base de datos SQLite

Crear archivo:

```plaintext
database/database.sqlite
```

Configurar `.env`:

```env
DB_CONNECTION=sqlite
```

### Ejecutar migraciones

```bash
php artisan migrate
```

### Ejecutar seeders

```bash
php artisan db:seed
```

### Generar APP_KEY

```bash
php artisan key:generate
```

### Ejecutar servidor Laravel

```bash
php artisan serve
```

### Ejecutar Vite

```bash
npm run dev
```

---

## Funcionalidades implementadas

### Sistema multiidioma

Idiomas implementados:

- Español
- English
- Galego

Archivos utilizados:

```plaintext
lang/es/messages.php
lang/en/messages.php
lang/gl/messages.php
```

Middleware creado:

```plaintext
SetLocale.php
```

---

### Base de datos

Motor utilizado:

```plaintext
SQLite
```

Migraciones ejecutadas:

```bash
php artisan migrate
```

Seeder utilizado:

```bash
php artisan db:seed
```

---

### GitHub

Repositorio utilizado para control de versiones.

Comandos empleados:

```bash
git init
git add .
git commit
git push
```

---

### Deploy Cloud

Deploy realizado mediante:

- GitHub
- Docker
- Render

URL pública:

https://laravelweb-sd0k.onrender.com

---

## Capturas de pantalla

### Página Inicio

[INSERTAR CAPTURA]

### Página Productos

[INSERTAR CAPTURA]

### Página Ofertas

[INSERTAR CAPTURA]

### Página Contacto

[INSERTAR CAPTURA]

### Cambio de idioma

[INSERTAR CAPTURA]

---

## Autor

Proyecto realizado por Alexei.
