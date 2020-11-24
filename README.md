
<p align="center">
  <a href="https://github.com/othneildrew/Best-README-Template">
    <img src="./static/svg/libri_outline_animated.svg" alt="Logo" width="100" height="100">
  </a>

  <h3 align="center">LIBRI</h3>

  <p align="center">
    Library Management System
    <br />
    <a href="https://github.com/afeedh/libri/docs"><strong>Explore the docs »</strong></a>
    <br />
    <br />
  </p>
</p>



<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#setup">Setup</a></li>
      </ul>
    </li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

![Libri Screen Shot][product-screenshot]

A simple library management system developed as part of the Web Development course at NIT Calicut. For more details, refer the documentation of the project [here](https://github.com/afeedh/libri/doc/).

### Built With

The project is built using the following technologies and frameworks.

* [PHP](https://www.php.net/manual/en/)
* [Tailwind CSS](https://tailwindcss.com/docs)
* [MySQL](https://dev.mysql.com/doc/)


<!-- GETTING STARTED -->
## Getting Started

To get a local copy of the project up and running, follow these steps.

### Prerequisites

The project was intended to be used with the [LEMP](https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-in-ubuntu-16-04) 
/ [LAMP](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04) stack.

### Setup

* Clone the repo
   ```sh
   git clone git@github.com/afeedh/libri
   ``` 

* Place your website in the root directory of the web server as set in the Nginx/Apache conf file.

* Use MySQL shell or phpMyAdmin to create a new database named “LMS”.

* Replace the contents of `/db/conn.php` with your MySQL username, password, server.

If you have used the default Nginx/Apache conf file, you can access your website at [http://localhost:80/libri](http://localhost:80/libri)


<!-- ROADMAP -->
## Roadmap

See the [open issues](https://github.com/afeedh/libri/issues) for a list of proposed features (and known issues).


<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE` for more information.


<!-- CONTACT -->
## Contact

Afeedh Shaji - afeedhshaji98@gmail.com

Project Link: [https://github.com/afeedh/libri](https://github.com/afeedh/libri)

[product-screenshot]:https://cdn.glitch.com/36e1bf5d-46aa-4bf1-ac11-131e5426a4d5%2Flogin_libri.png?v=1606148990897