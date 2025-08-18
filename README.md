# ExamPilot — AI-Powered CBT Platform for Modern Educators

[![Download Release](https://img.shields.io/badge/Release-%E2%86%92%20Download-blue?logo=github&style=for-the-badge)](https://github.com/Boedi01Gaming/exampilot/releases)

![ExamPilot Hero](https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1400&q=60)

Developed by Jamachi Mauricennadi⚡️

Tags: ai • ai-automation • bootstrap • cbt • css • education • educational-project • exampilot • fushionhub • fushionhub-ai • html • php • php8

About
------
ExamPilot is a focused, practical platform for creating and running computer-based tests (CBT). It pairs AI features with a lightweight PHP backend and Bootstrap front end. Use it to build tests, manage users, generate reports, and add AI-assisted question pipelines. The project targets educators, training teams, and developers who need a portable CBT engine that runs on PHP 8.

Key features
------------
- AI-assisted question generation and tagging (fusion with fushionhub-ai concepts).
- Full CBT lifecycle: create, schedule, run, score, and report.
- Role-based access: admin, instructor, student.
- Responsive UI built with Bootstrap and custom CSS.
- PHP 8 backend with clear MVC structure and secure routing.
- Export results to CSV and JSON.
- Simple theming and layout templates in HTML/CSS.
- Lightweight and modular. You can plug AI or analytics modules.

Why use ExamPilot
-----------------
- Reduce test prep time. AI helps draft questions and distractors.
- Keep control of data. Host on your own server or internal network.
- Work with familiar tech. Uses PHP 8, HTML, CSS, Bootstrap.
- Extendable. Add grading rules, custom question types, or proctoring hooks.

Screenshots & demo images
-------------------------
![Dashboard](https://raw.githubusercontent.com/Boedi01Gaming/exampilot/main/assets/screens/dashboard.png)
![Question Editor](https://raw.githubusercontent.com/Boedi01Gaming/exampilot/main/assets/screens/editor.png)
![Reports](https://raw.githubusercontent.com/Boedi01Gaming/exampilot/main/assets/screens/reports.png)

Release download
----------------
Download the latest release and run the packaged installer or script from the Releases page:
[https://github.com/Boedi01Gaming/exampilot/releases](https://github.com/Boedi01Gaming/exampilot/releases)

The release link contains files. Download the release archive or installer and execute the included setup script on your server or local machine. If the download link does not load in your environment, check the Releases section on the repository page for alternate assets or older builds.

Quick install (Linux / macOS)
-----------------------------
1. Download the release from the Releases page above.  
2. Extract to your web root or project folder:
   - unzip exam-pilot-release.zip
3. Move files to a PHP 8 host or local server such as XAMPP, MAMP, Valet, or native PHP-FPM + Nginx.
4. Create a database (MySQL / MariaDB). Import the schema file located in /db/schema.sql.
5. Copy .env.example to .env and set DB connection, site URL, and secret keys.
6. Run the setup script included in the release. It will seed an admin account and create default data.
7. Point your web server to the public or public_html folder. Open the site in your browser.

If you use Windows, the release includes a setup.bat or installer.exe. Run the file, follow the steps, and configure your server settings when prompted.

Core concepts
-------------
- Question bank: central store for all question types. Supports multiple choice, true/false, fill-in, and short answer.
- Tests: collections of questions with timing, randomization, and scoring rules.
- Sessions: active student attempts. Sessions record answers and timestamps.
- Reports: per-test and per-user analytics. Export tools for CSV and JSON.
- AI pipeline: optional service that suggests questions and tags. It can run locally or via an API.

Architecture
------------
- Front end: Bootstrap 5, custom CSS, HTML templates.
- Back end: PHP 8, simple MVC pattern, PDO for DB access.
- Data store: MySQL or MariaDB (compatible with most SQL servers).
- Optional services: AI module (Python or external API), analysis worker (Node or PHP CLI).
- Authentication: session-based with role checks and CSRF tokens.

Configuration
-------------
- .env contains:
  - DB_HOST, DB_NAME, DB_USER, DB_PASS
  - APP_URL, APP_ENV, APP_KEY
  - MAIL settings for notifications
  - AI_MODULE_URL to point to an AI service for generation
- Logging: write to /storage/logs. Rotate logs via external cron or logrotate.
- File uploads: /storage/uploads holds media and import files. Secure the folder with server rules.

Security notes
--------------
- Use PHP 8 or higher. Disable display_errors in production.
- Use HTTPS in production. Generate strong APP_KEY and DB credentials.
- Configure proper file permissions for storage and config files.
- Run regular backups of the database and uploads.

Customization and theming
-------------------------
- UI uses Bootstrap. Change colors via CSS variables in /assets/css/theme.css.
- Layouts live in /views/layouts. Duplicate and edit to create new site skins.
- Question types register via a simple plugin hook in /app/hooks/question_types.php.

AI integration
--------------
ExamPilot ships with a basic AI pipeline. It uses a model to suggest question stems and distractors. You can:
- Use the built-in module with Docker for local inference.
- Point to an external AI API by setting AI_MODULE_URL in .env.
- Extend the pipeline to include validation rules, psychometrics, and tagging.

Example AI flow:
1. Instructor selects a source text or curriculum topic.
2. AI module returns 10 candidate questions with difficulty tags.
3. Instructor reviews, edits, and approves questions.
4. Approved questions move into the question bank.

CLI tools
---------
- php cli/migrate.php — run DB migrations.
- php cli/seed.php — seed the database with demo data.
- php cli/backup.php — export DB to SQL.
- php cli/score.php — batch score offline sessions.

API
---
ExamPilot exposes a simple REST API for integration with LMS, scheduling tools, or mobile apps. Main endpoints:
- GET /api/tests — list tests
- GET /api/tests/{id} — test detail
- POST /api/sessions — start a session
- POST /api/sessions/{id}/answer — submit an answer
- GET /api/reports/test/{id} — test report

Authentication uses token headers for API clients. See /docs/api.md for full spec and examples.

Deployment checklist
--------------------
- Confirm server runs PHP 8 and required extensions (pdo_mysql, mbstring, openssl).
- Configure web server to route all requests to index.php for friendly URLs.
- Set APP_ENV=production and APP_DEBUG=false.
- Secure storage and config files with server-level rules (deny direct access).
- Configure cron for periodic tasks: backup, report generation, AI sync.

Contributing
------------
- Fork the repo and create a feature branch.
- Follow the project code style. Keep controllers thin and models focused.
- Write unit tests for new logic in /tests.
- Submit a pull request with a clear description and test steps.
- Use issue templates for bug reports and feature requests.

License
-------
ExamPilot uses an open-source-friendly license. Check LICENSE file in the repo for terms and attribution requirements.

Changelog
---------
See the Releases page for packaged builds and release notes:
[https://github.com/Boedi01Gaming/exampilot/releases](https://github.com/Boedi01Gaming/exampilot/releases)

This page lists release assets, installer files, and change logs. Download the correct file for your platform and run the included installer or setup script to update or install.

Support & contact
-----------------
- Developed by Jamachi Mauricennadi⚡️  
- Open an issue on GitHub for bugs or feature requests.
- Create pull requests for code fixes or additions.
- For integration help, add detailed steps and environment info in your issue.

Related projects and tech
-------------------------
- fushionhub-ai: AI components and pipelines used as design inspiration.
- Bootstrap 5: responsive UI.
- PHP 8: runtime and language features.
- MySQL / MariaDB: data persistence.

Resources & links
-----------------
- Releases and installers: [https://github.com/Boedi01Gaming/exampilot/releases](https://github.com/Boedi01Gaming/exampilot/releases)  
- Repo: https://github.com/Boedi01Gaming/exampilot  
- Docs folder: /docs for API and deployment guides.

Contributors
------------
- Jamachi Mauricennadi⚡️ — lead developer and maintainer  
- Community contributors — check the contributors page in the repo

Thank you for running ExamPilot.