# dependency-inversion
Example of Dependency inversión with PHP-DI, Fastroute and Mysql


* Install  
    1.- Clone  
    ```bash
    git clone https://github.com/gouh/dependency-inversion.git
    ```

    2.- Go to ".docker" folder and build docker images with docker-compose  
    ```bash
    docker-compose build
    ```
    This will build nginx, php and mysql images for proyect with all env vars


    3.- Run the enviroment (check your .env file)  
    ```bash
    docker-compose up -d
    ```
