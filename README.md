# Simple container scaling demo
A simple demo to scale containers while load balancing them using the scale option of Docker-Compose.
## How?
Start the container stack using the following command: 
```bash 
docker-compose up -d 
``` 
When you want to scale the load generator containers (e.g.: 5 containers) you just run it again using the scale option: 
```bash 
docker-compose up -d --scale loadgen=5
```
