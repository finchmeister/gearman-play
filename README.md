# Gearman Play

Build the images

```
docker build -t gearman -f docker/gearmand/Dockerfile .
docker build -t php-7-gearman -f docker/php/Dockerfile .

```

Run the code

```
docker network create -d bridge my-net
docker run --network=my-net -it --rm --name gearman-server gearman
docker run --network=my-net -it --rm --name php-7-gearman-worker -v "$PWD":/usr/src/myapp -w /usr/src/myapp php-7-gearman php worker.php
docker run --network=my-net -it --rm --name php-7-gearman-client -v "$PWD":/usr/src/myapp -w /usr/src/myapp php-7-gearman php client.php
```

Tidy up
```
docker stop php-7-gearman-worker
docker stop gearman-server
docker network rm my-net
```

References:

- Dockerfile https://gist.github.com/djsipe/30d971272c4a604078d813ffb1d0b4a6#gistcomment-2268330