SPANISH V.

## 🌸 Descripción

Este proyecto forma parte de una serie de sprints realizados en IT Academy - Barcelona Activa.

Este Sprint corresponde al 07.

Objetivos: 
- Creación de un Login, Logout y Registro.
- Trabajar la conexión con una API.

Este repositorio va unido al repositiorio de front: [Aqui](https://github.com/ImLauraGS/starwars-front.git)

## 💻 Tecnologias usadas

<div>
<img alt="Static Badge" src="https://img.shields.io/badge/Laravel-10.10-blue">
<br>
<img alt="Static Badge" src="https://img.shields.io/badge/PHP-8.1-blue">
<br>
</div>


## ⚙️ Instalación

Aquí tienes una breve descripción de cómo poder ver nuestro proyecto. Para ejecutarlo necesitas tener conocimientos previos sobre como funciona Mamp/Xamp y tener instalado composer.

1. Clona el repositorio tanto de back como de front.

```bash
git clone https://github.com/ImLauraGS/starwars-front.git
git clone https://github.com/ImLauraGS/starwars-back.git
``` 
2. Instalar dependencias.

```bash
composer i
``` 

3. Crear la base de datos en phpMyAdmin, por ejemplo. En mi caso, la he llamado "starwars".

4. Configurar el archivo .env:

```bash
DB_DATABASE=starwars
DB_USERNAME=root
DB_PASSWORD=
``` 
Ten en cuenta, que a veces en MAC y si usas MAMP, es posible que la contraseña del usuario root sea "root".

5. Migra las tablas a la base de datos:

```bash
php artisan migrate
``` 

6. Levantar el servidor (recuerda tener XAMP/MAMP encendido):

```bash
php artisan serve
``` 
IMPORTANTE: Este backend se utiliza con el frontend: [Aqui](https://github.com/ImLauraGS/starwars-front.git)


## 🔗 Autora

![Laura](https://avatars.githubusercontent.com/ImLauraGS?s=50) 
Laura G. 
[LinkedIn](https://www.linkedin.com/in/laura-gil-solano/)


_______________________________________________________________________

ENGLISH V.

## 🌸 Description

This project is part of a series of sprints carried out at IT Academy - Barcelona Activa.

This Sprint corresponds to 07.

Objectives:

- Creation of a Login, Logout, and Registration.
- Work on the connection with an API..

This repository is linked to the frontend repository: [Here](https://github.com/ImLauraGS/starwars-front.git)

## 💻 Technologies Used

<div>
<img alt="Static Badge" src="https://img.shields.io/badge/Laravel-10.10-blue">
<br>
<img alt="Static Badge" src="https://img.shields.io/badge/PHP-8.1-blue">
<br>
</div>


## ⚙️ Installation
Here is a brief description of how to view our project. To run it, you need prior knowledge of how Mamp/Xamp works and have Composer installed.

 1. Clone both the backend and frontend repositories.

 ```bash
git clone https://github.com/ImLauraGS/starwars-front.git
git clone https://github.com/ImLauraGS/starwars-back.git
``` 

2. Install dependencies.

```bash
composer i
``` 
3. Create the database in phpMyAdmin, for example. In my case, I called it "starwars".

4. Configure the .env file:
```bash
DB_DATABASE=starwars
DB_USERNAME=root
DB_PASSWORD=
``` 
Keep in mind that sometimes on a MAC, if you are using MAMP, the password for the root user might be "root".

5. Migrate the tables to the database:

```bash
php artisan migrate
``` 

3. Start the server (remember to have XAMP/MAMP running).

```bash
php artisan serve
``` 

 IMPORTANT: This backend is used with the frontend: [Here](https://github.com/ImLauraGS/starwars-front.git)

## 🔗 Author
 ![Laura](https://avatars.githubusercontent.com/ImLauraGS?s=50) 
 Laura G. 
 [LinkedIn](https://www.linkedin.com/in/laura-gil-solano/)