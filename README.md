# Hospital Management System

A web-based hospital management system built as a Software Engineering 
course project. Supports three user roles with separate dashboards and 
role-based access control.

## Roles

- **Admin / Receptionist** — manages patients, doctors, and appointments
- **Doctor** — views assigned patients and checkup records
- **Patient** — logs in to view personal medical records

## Features

- Role-based authentication and session management
- Patient, doctor, and checkup search
- PDF report generation via TCPDF
- MySQL database with full schema included

## Built with

- PHP
- MySQL
- HTML / CSS / JavaScript
- TCPDF

## Run locally

Requirements: PHP 7+, MySQL, a local server like XAMPP or Laragon.

1. Clone the repo and place it in your server's web root (`htdocs` or `www`)
2. Import the SQL file from the `DATABASE FILE` folder into MySQL
3. Update `db-conn.php` with your database credentials
4. Open `http://localhost/Hospital-System` in your browser

## Note

This was built as a university project for a Software Engineering course.
