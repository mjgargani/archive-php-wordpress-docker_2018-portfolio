docker compose up -d

wget -mkEpnp -nd -P static -e robots=off "http://localhost:8080"

docker compose down -v
