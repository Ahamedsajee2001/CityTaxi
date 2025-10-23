# CityTaxi
# 🚖 City Taxi Web-Based Reservation System

A web application developed for **City Taxi (PVT) Ltd** to provide a convenient and efficient taxi booking experience for passengers and drivers.

---

## 📌 Project Overview
This system allows users to:
- Register and log in as passengers or drivers.
- Book taxis online and receive instant confirmations.
- Track drivers in real time using an integrated location service.
- Make secure online payments for rides.
- Rate drivers and provide feedback after each trip.

Administrators can:
- Manage drivers and passenger accounts.
- View analytics and performance reports.
- Handle manual bookings from telephone operators.
- Monitor trip and payment data through a dedicated dashboard.

---

## 🧠 Technologies Used
- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP / Java  
- **Database:** MySQL  
- **Frameworks:** Lean Software Development methodology  
- **Tools:** MS Project, UML diagrams, ISO/IEC 12207:2008 standards  

---

## 🧩 Features
✅ Online taxi booking  
✅ User authentication and profile management  
✅ Real-time driver tracking  
✅ Online payment integration  
✅ Admin dashboard with analytics  
✅ Customer feedback and rating system  
✅ Manual booking option via call center  

---

## 👥 Team Members
| Name | Role | Type |
|------|------|------|
| M.N.A. Sajee | Project Manager | Part-time |
| A.A. Aneek | Database Administrator | Part-time |
| D.L. Ahamed Althaf | Back-End Developer | Full-time |
| Athnan Ahamed | Front-End Developer | Full-time |
| Gopal Sajithan | QA Analyst | Full-time |
| D. Andrew | UI/UX Designer | Part-time |

---

---

## 📅 Project Duration
🗓️ **Timeline:** 3 months (2023–2024)  
💰 **Budget:** £82,355  

---

## 🛠️ Maintenance Plan
- Regular system updates and bug fixes  
- Database backup and security patching  
- Adding new features based on feedback  
- Monitoring server performance  

---

## 🧾 License
This project is developed for educational and demonstration purposes as part of the **Advanced Software Engineering** coursework at *London Metropolitan University*.  

---

## 👨‍💻 Author
**Mohammed Najimudeen Ahamed Sajee**  
📧 [MNA0190@my.londonmet.ac.uk](mailto:MNA0190@my.londonmet.ac.uk)  
🎓 BEng (Hons) in Software Engineering  



## 🧰 Project Structure
CityTaxiReservationSystem/
│
├── 📁 frontend/
│   ├── 📁 assets/
│   │   ├── css/
│   │   │   ├── style.css
│   │   │   └── responsive.css
│   │   ├── js/
│   │   │   ├── main.js
│   │   │   └── booking.js
│   │   ├── images/
│   │   │   ├── logo.png
│   │   │   └── banner.jpg
│   │   └── fonts/
│   │
│   ├── 📁 pages/
│   │   ├── index.html           → Homepage / booking UI
│   │   ├── login.html           → Passenger & Driver login
│   │   ├── register.html        → User registration page
│   │   ├── booking.html         → Booking interface
│   │   ├── driver-dashboard.html→ Driver dashboard
│   │   ├── admin-dashboard.html → Admin control panel
│   │   └── about.html           → Project or company info
│   │
│   └── 📁 components/
│       ├── navbar.html
│       ├── footer.html
│       └── modals.html
│
│
├── 📁 backend/
│   ├── 📁 config/
│   │   └── db_config.php        → Database connection setup
│   │
│   ├── 📁 models/
│   │   ├── user.php             → User data model
│   │   ├── driver.php           → Driver data model
│   │   ├── booking.php          → Booking data model
│   │   └── payment.php          → Payment handling logic
│   │
│   ├── 📁 controllers/
│   │   ├── authController.php   → Handles login/register
│   │   ├── bookingController.php→ Manages booking requests
│   │   ├── driverController.php → Manages driver activities
│   │   ├── paymentController.php→ Handles online payments
│   │   └── adminController.php  → Admin monitoring logic
│   │
│   ├── 📁 routes/
│   │   ├── api.php              → API endpoints
│   │   └── web.php              → Page routing rules
│   │
│   ├── 📁 helpers/
│   │   ├── validation.php
│   │   └── utils.php
│   │
│   └── index.php                → Main backend entry point
│
│
├── 📁 database/
│   ├── city_taxi.sql            → MySQL database dump
│   ├── schema.png               → Database ER diagram
│   └── migrations/              → SQL table creation scripts
│
│
├── 📁 docs/
│   ├── Assessment_Report.pdf    → Original report
│   ├── README.md                → Documentation for GitHub
│   ├── PROJECT_STRUCTURE.txt    → This structure file
│   ├── LICENSE.txt
│   └── presentation.pptx        → Optional project slides
│
│
├── 📁 tests/
│   ├── unit/
│   │   ├── bookingTest.php
│   │   ├── userAuthTest.php
│   │   └── driverTest.php
│   └── integration/
│       └── paymentIntegrationTest.php
│
│
├── .gitignore                   → Ignore node_modules, env, etc.
├── README.md                    → Main project overview
├── package.json                 → (If using npm for frontend libs)
├── composer.json                → (If using PHP Composer)
├── .env.example                 → Environment variable template
└── LICENSE                      → License info

