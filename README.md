# 7Graus Assessment

## How to run

### Pre-Requisites

1. Use Linux, Windows WSL or Windows Git Bash (for makefile use);
2. Makefile installed;
3. Docker installed;
4. PHP-CLI installed (for composer);
5. Composer installed.

### Running

Having in mind that all the software mentioned above are installed, download this repository content to a folder (by making a clone of this repository or dowloading the repository zip file and uncompressing it).

After, install the composer dependencies, create the docker image and run it, with makefile as showed below:

```
make install
make run
```

This 2 commands will put the application locally online on port 8080.

To use it, you just have to access localy the endpoint with the desired object and pass the query strings with the needed data.

Ex:


```
http://localhost:8080/circle&radius=1.0
```

The other two endpoints uses width and height as query strings:

```
http://localhost:8080/shape&width=3.0&height=2.0
http://localhost:8080/retangle&width=3.0&height=2.0
```

It will return a json file with the ID, area and TYPE constant of the object.

## The execution/development

With a lack of time, I focused on develop the geometrical code solution using the most simple organization to make a more reusable code aspects.

To demonstrate the running application I prefered use the PHP CLI server because it saved me some time due to the time I could spend doing some workarounds to run a NGINX or Apache server.

I also developed a little API server to show a little more code organization and the pratical use of the code developed.

Enjoy!