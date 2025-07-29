# ❄️ FROSTSPIRE — A Themed Blog Universe

> "Facemash sparked the fire — Frostspire built the world."

Frostspire is a PHP + MySQL powered blog platform, inspired by the creative energy of *The Social Network* and driven by the ambition to bring design, storytelling, and backend development together in a single immersive webspace.

---

## 🌀 Features

- 🌐 Fully functioning PHP-based website
- 🔐 User authentication system (login/register/logout)
- 🏛️ Distinct chamber-based page structure (Gate, Antechamber, Vault, Echo, Spire)
- 📝 Post creation, storage & dynamic retrieval using SQL
- 🎨 Themed UI based on custom CSS for each chamber:
  - `Gitae` (login hub)
  - `Vault` (admin archive)
  - `Echos` (blog post display)
  - `Antechamber` (central bridge)
  - `Spire` (council zone)

---

## 🛠️ Tech Stack

| Technology | Purpose                  |
|------------|--------------------------|
| PHP        | Server-side scripting    |
| MySQL      | Database management      |
| HTML/CSS   | Frontend structure/design|
| XAMPP      | Local server environment |
| Git        | Version control          |

---

## 🗂️ Folder Structure
frostspire/
├── gate_files/ # Image/media assets for the Gate
├── config.php # Database connection config
├── register.php # User registration page
├── login (gate).php # Login/authentication page
├── logout.php # Session destroyer
├── create.php # Post creation form
├── echo.php # Displays blog posts
├── vault.php # User & post database viewer
├── spire.php # Advisory/council page
├── anthe.php # Page router/hub
└── index.php # Entry point (redirects to Gate)

---

## 💬 Inspiration

While watching *The Social Network*, a particular scene — the creation of *Facemash* — sparked curiosity:  
*“What if I built something of my own?”*

That moment was the genesis of Frostspire.

With no prior backend experience, I learned PHP and MySQL from scratch, wired them together, and slowly gave form to this world — one chamber at a time.

> That’s how Frostspire came into existence.

---

## 🔓 Login Details (Demo)

- **Default Admin**  
  `Username: frostadmin`  
  `Password: spirekey123`

- Or [Register your own user](register.php)

---

## 🚀 Setup (Run Locally)

1. Install **XAMPP**
2. Start **Apache** and **MySQL**
3. Clone this repo into `htdocs`:

   ```bash
   git clone https://github.com/YOUR-USERNAME/frostspire.git
4.Import the SQL schema via phpMyAdmin

5.Go to http://localhost/frostspire


