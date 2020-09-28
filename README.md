# phprom
a prometheus metric datastore for php apps

---
### prerequisites
- install the [client](https://github.com/chaseisabelle/phprom-client)
    - `composer require chaseisabelle/phprom-client`

---
### usage
- from command line: `go run cmd/v1/main.go --address=0.0.0.0:3333`
- get the latest image from [docker](https://hub.docker.com/repository/docker/chaseisabelle/phprom)
    - `docker run phprom ./phprom --address=0.0.0.0:3333`

---
### api
- [grpc](https://grpc.io/) interface
