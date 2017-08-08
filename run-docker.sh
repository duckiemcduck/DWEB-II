sudo docker run -d -v "$(pwd)":/var/www/html/ duckiemcduck/apache-php
echo "Servidor docker rodando em: http://172.17.0.2/"
firefox http://172.17.0.2/ &

