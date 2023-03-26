CREATE DATABASE task_manager;

USE task_manager;

CREATE TABLE categories (
  category_id INT AUTO_INCREMENT PRIMARY KEY,
  category_name VARCHAR(255) NOT NULL,
  category_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  category_updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE users (
  user_id INT AUTO_INCREMENT PRIMARY KEY,
  user_name VARCHAR(255) NOT NULL,
  user_email VARCHAR(255) NOT NULL,
  user_password VARCHAR(255) NOT NULL,
  user_permission TINYINT(1) DEFAULT 0,
  user_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  user_updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE tags (
  tag_id INT AUTO_INCREMENT PRIMARY KEY,
  tag_name VARCHAR(255) NOT NULL,
  tag_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  tag_updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE tasks (
  task_id INT AUTO_INCREMENT PRIMARY KEY,
  task_name VARCHAR(255) NOT NULL,
  category_id INT NOT NULL,
  user_id INT NOT NULL,
  task_status TINYINT(1) NOT NULL DEFAULT 0,
  task_description TEXT,
  task_due_date DATE,
  task_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  task_updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE task_tags (
  task_id INT NOT NULL,
  tag_id INT NOT NULL,
  PRIMARY KEY (task_id, tag_id)
  
);

ALTER TABLE tasks ADD FOREIGN KEY (category_id) REFERENCES categories(category_id);
ALTER TABLE tasks ADD FOREIGN KEY (user_id) REFERENCES users(user_id);
ALTER TABLE task_tags ADD FOREIGN KEY (task_id) REFERENCES tasks(task_id);
ALTER TABLE task_tags ADD FOREIGN KEY (tag_id) REFERENCES tags(tag_id);