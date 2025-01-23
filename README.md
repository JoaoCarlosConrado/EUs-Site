# EUs-Site

Site dos Encontros Universitários - Campus Russas

**1°** - Clone o repositório:<br>
\# git clone https://github.com/wilken-hub/EUs-Site.git

**2°** - Acesse o diretório EUs-Site:<br>
\# cd EUs-Site/

**3°** - Crie a rede docker (net_backend) para os containers do site e banco:<br>
\# docker network create net_backend

**4°** - Execute o container do banco, substituindo "SENHA_ROOT" por sua senha root:<br>
\# docker run --name mysql_eu --restart=always --network=net_backend -v /home/mysql/conf.d:/etc/mysql/conf.d -v /home/mysql/data:/var/lib/mysql -v /etc/localtime:/etc/localtime:ro -e MYSQL_ROOT_PASSWORD=SENHA_ROOT -d mysql:8.4

**5°** - Acesse o phpMyAdmin, do site em produção, e faça o backup do bd dos encontros universitários (eu_db):<br>
http://200.129.62.33:8006<br>
Copie o sql do banco para o seu container (mysql_eu):<br>
\# docker cp eu_db.sql mysql_eu:/eu_db.sql<br>
Em seguida, restaure o banco para o seu mysql local:<br>
\# docker exec -it mysql_eu mysql -u root -p<br>
CREATE DATABASE eu_db;<br>
USE eu_db;<br>
SOURCE /eu_db.sql;<br>
SHOW TABLES;<br>

Obs: Verifique se o comando "SHOW TABLES;" mostrou as tabelas corretamente!  

**6°** - Crie um usuário e dê privilégios ao banco recém criado, substituindo "SENHA_USER" por sua senha de acesso local:<br>
CREATE USER 'user-eu'@'%' IDENTIFIED BY 'SENHA_USER';<br>
GRANT ALL PRIVILEGES ON eu_db.* TO 'user-eu'@'%';<br>
FLUSH PRIVILEGES;<br>
exit;

**7°** - Crie o arquivo .env, dentro de EUs-Site, contendo suas credencias de acesso ao banco. No seguinte formato:<br>
DB_TYPE='mysql'<br>
DB_HOST='mysql_eu'<br>
DB_USER='user-eu'<br>
DB_PASSWORD='SENHA_USER'<br>
DB_NAME='eu_db'<br>
DB_PORT=3306

**8°** - Crie a imagem docker do Apache2 e, em seguida, execute o container:<br>
\# docker build -t apache2_eu:1.0 .<br>
\# docker run -d --name apache2_eu --restart=always --network=net_backend -p 8080:80 apache2_eu:1.0

**9°** - Acesse o site!<br>
http://localhost:8080/

