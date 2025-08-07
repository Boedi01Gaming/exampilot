USE exampilot;

-- Add the SQL database dump for frontend content here.

CREATE TABLE IF NOT EXISTS home_page (
 id INT AUTO_INCREMENT PRIMARY KEY,
    slide_index VARCHAR(255),
    slide_thumb VARCHAR(255),
    slide_title VARCHAR(255),
    slide_description TEXT,
    main_image VARCHAR(255),
    layer_title VARCHAR(255),
    layer_subtitle TEXT,
    button1_text VARCHAR(255),
    button1_link VARCHAR(255),
    button2_text VARCHAR(255),
    button2_link VARCHAR(255),
    service1_image VARCHAR(255),
    service1_icon VARCHAR(255),
    service1_title VARCHAR(255),
    service1_link VARCHAR(255),
    service2_image VARCHAR(255),
    service2_icon VARCHAR(255),
    service2_title VARCHAR(255),
    service2_link VARCHAR(255),
    service3_image VARCHAR(255),
    service3_icon VARCHAR(255),
    service3_title VARCHAR(255),
    service3_link VARCHAR(255),
    online_course_bg VARCHAR(255),
    online_course_title VARCHAR(255),
    online_course_subtitle TEXT,
    students_count INT,
    courses_count INT,
    instructors_count INT,
    upcoming_events_title VARCHAR(255),
    upcoming_events_subtitle TEXT,
    testimonial_bg VARCHAR(255),
    testimonial_title VARCHAR(255),
    testimonial_subtitle TEXT,
    recent_news_title VARCHAR(255),
    recent_news_subtitle TEXT
);

CREATE TABLE IF NOT EXISTS settings (
 id INT AUTO_INCREMENT PRIMARY KEY,
 site_title VARCHAR(255),
 site_description TEXT,
 site_email VARCHAR(255),
 site_phone VARCHAR(50),
 site_address TEXT,
 facebook_link VARCHAR(255),
 twitter_link VARCHAR(255),
 linkedin_link VARCHAR(255),
 instagram_link VARCHAR(255),
 logo_image VARCHAR(255),
 favicon_image VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS frontend (
 id INT AUTO_INCREMENT PRIMARY KEY,
 app_name VARCHAR(255),
 page_slug VARCHAR(255),
 page_title VARCHAR(255),
 page_content LONGTEXT,
 meta_description TEXT,
 meta_keywords TEXT
);
