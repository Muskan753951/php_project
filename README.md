# 📚 Library Management System (PHP + MySQL)

A complete web-based Library Management System built using **PHP**, **MySQL**, and **HTML/CSS**. It supports both **Admin** and **Student** roles with essential library functionalities like book issuing, return tracking, fines for late submissions, and student record management.

---

## 🔑 Features

### 👩‍🎓 Student Panel
- ✅ Student Login/Logout
- 📖 View Available Books
- 📚 Issue Book
- 🕒 Track Issued Books & Return Dates
- 💸 Auto Fine Calculation for Late Returns
- ✏️ Update Profile

### 👨‍💼 Admin Panel
- ✅ Admin Login/Logout
- ➕ Add/Edit/Delete Books
- 👨‍🎓 Manage Student Records
- 📚 Issue/Return Books to/from Students
- ⏰ Track Expired Books
- 💰 View & Update Fines
- 📊 Dashboard for Summary (Issued, Returned, Overdue, etc.)

---

## 🛠️ Tech Stack

- 💻 **Frontend**: HTML, CSS, Bootstrap (optional)
- 🔙 **Backend**: PHP (Core)
- 🗄️ **Database**: MySQL

---

## 📂 Project Structure

```bash
library-management/
│
├── admin/                # Admin dashboard files
├── student/              # Student dashboard files
├── includes/             # DB connection, functions, sessions
├── css/                  # Stylesheets
├── js/                   # JavaScript files (if any)
├── images/               # Logos or images
├── database.sql          # MySQL database dump
├── index.php             # Login page
└── README.md
