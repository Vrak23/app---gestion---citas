# 🏥 SANAR+ | Sistema de Gestión Hospitalaria Premium

<p align="center">
  <img src="public/imágenes/assets/Logo_Citas.jpeg" width="150" alt="SANAR+ Logo" style="border-radius: 20px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);">
</p>

SANAR+ es una plataforma moderna y robusta diseñada para transformar la administración de clínicas y hospitales. Enfocada en la experiencia del usuario (UX) y una arquitectura backend sólida, permite gestionar citas, pacientes y personal médico de manera eficiente y segura.

---

## 🌟 Características Principales

- **Autenticación Multi-Factor:** Login tradicional y acceso social vía **GitHub**, Google y Facebook (vía Socialite).
- **Dashboard de Alto Rendimiento:** Visualización en tiempo real de estadísticas clave (Pacientes, Citas, Médicos).
- **Gestión Clínica Completa:** Control total sobre Citas, Diagnósticos, Tratamientos y Medicamentos.
- **Exportación Inteligente:** Descarga de reportes de citas en formato CSV para análisis administrativo.
- **Landing Page Premium:** Interfaz pública diseñada con animaciones modernas y enfoque en conversión.
- **Arquitectura Escalable:** Desarrollado con el patrón MVC de Laravel 11.

---

## 🛠️ Stack Tecnológico

- **Backend:** PHP 8.2+ / Laravel 11
- **Frontend:** Blade Templating / Tailwind CSS
- **Base de Datos:** MySQL / SQLite
- **Autenticación:** Laravel Breeze + Laravel Socialite
- **Diseño:** Custom CSS con enfoque en Glassmorphism y Animaciones Fluidas

---

## 🚀 Instalación y Configuración

Siga estos pasos para desplegar el proyecto localmente:

1. **Clonar el repositorio:**
   ```bash
   git clone https://github.com/Vrak23/app---gestion---citas.git
   cd app---gestion---citas
   ```

2. **Instalar dependencias:**
   ```bash
   composer install
   npm install && npm run build
   ```

3. **Configurar el entorno:**
   - Copiar `.env.example` a `.env`
   - Configurar la base de datos y las credenciales de Socialite (GitHub/Google).
   ```bash
   php artisan key:generate
   ```

4. **Migraciones y Seeders:**
   ```bash
   php artisan migrate:fresh --seed
   ```

5. **Iniciar el servidor:**
   ```bash
   php artisan serve
   ```

---

## 👥 Equipo de Desarrollo

| Integrante | Rol | Responsabilidades Clave |
| :--- | :--- | :--- |
| **Integrante 1** | Backend Principal | Arquitectura, BD, Migraciones, Modelos, APIs e Integración. |
| **Integrante 2** | Frontend Dashboard | Blade, UI Components, Tablas, Formularios y Layouts. |
| **Integrante 3** | Landing Page | Diseño UI/UX, welcome.blade.php, Animaciones y Responsive. |
| **Integrante 4** | Auth & Documentation | Socialite, Seeders, Testing, QA y Documentación Técnica. |

---

## 📸 Vista Previa

| Landing Page | Dashboard Administrativo |
| :---: | :---: |
| <img src="public/imágenes/assets/medical_login.png" width="300"> | <img src="public/imágenes/assets/Logo_Citas.jpeg" width="300"> |

---
<p align="center">© 2026 SANAR + | Innovación al servicio de tu salud.</p>
