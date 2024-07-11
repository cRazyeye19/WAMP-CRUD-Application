# CRUD Application with WAMP Stack

This project is a simple web application built on the WAMP stack (Windows, Apache, MySQL, PHP) that demonstrates the basic principles of CRUD operations: Create, Read, Update, and Delete.

## Table of Contents
- [Project Overview](#project-overview)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Technologies Used](#technologies-used)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Project Overview

This application provides a basic interface to manage a list of items. Users can create new items, view a list of items, update existing items, and delete items. It is designed to help beginners understand how CRUD operations work in a web application using the WAMP stack.

## Features

- **Create**: Add new items to the list.
- **Read**: View a list of all items.
- **Update**: Edit details of existing items.
- **Delete**: Remove items from the list.

## Installation

To get a local copy up and running, follow these simple steps:

### Prerequisites

- Windows Operating System
- WAMP Server (Apache, MySQL, PHP)
- Web Browser

### Steps

1. **Download and Install WAMP Server:**
   Download the WAMP server from [here](http://www.wampserver.com/en/) and follow the installation instructions.

2. **Clone the Repository:**
   ```sh
   git clone https://github.com/your-username/your-repository.git
   ```

3. **Move Project Files:**
   Move the cloned project files to the `www` directory of your WAMP server. Usually, this directory can be found at `C:\wamp64\www`.

4. **Import Database:**
   - Open PHPMyAdmin from your WAMP server tray icon.
   - Create a new database, e.g., `crud_app`.
   - Import the SQL file located at `database/crud_app.sql` into the new database.

5. **Configure Database Connection:**
   - Open the `config.php` file in the project directory.
   - Set your database credentials:
     ```php
     <?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "crud_app";
     ```

6. **Start WAMP Server:**
   Start the WAMP server from the tray icon and ensure that Apache and MySQL services are running.

7. **Access the Application:**
   Open your web browser and go to `http://localhost/your-project-folder`.

## Usage

- **Home Page:** Lists all items.
- **Add Item:** Use the "Add New Item" button to create a new item.
- **Edit Item:** Click the "Edit" button next to an item to update its details.
- **Delete Item:** Click the "Delete" button next to an item to remove it from the list.

## Technologies Used

- **Windows:** Operating system for development.
- **Apache:** Web server.
- **MySQL:** Database management system.
- **PHP:** Server-side scripting language.
- **HTML/CSS:** Front-end development.
- **JavaScript:** Front-end scripting.

## Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

Distributed under the MIT License. See `LICENSE` for more information.

## Contact

Your Name - [John Lester G. Pansoy](mailto:jlesterpansoy@gmail.com)

Project Link: [https://github.com/your-username/your-repository](https://github.com/your-username/your-repository)

---

Feel free to customize this README to better fit your project and personal preferences.
