# Tutorial
- Abrir vscode ver se ta logado no ubuntu ( canto inferior esquerdo) file open folder: file open folder: selecione tudo e apaga

- /var/www/html e da um ok. Após, terminal novo terminal. 
git clone LINK_GITHUB da um enter. novamente file open folder: seleciona tudo e apaga

- /var/www/html/curso_php_26 e da um ok. Após, terminal novo terminal verifica se esta em: /var/www/html/curso_php_26.

# Tutorial
- Abrir vscode ver se ta logado no ubuntu ( canto inferior esquerdo) file open folder: file open folder: selecione tudo e apaga

- /var/www/html e da um ok. Após, terminal novo terminal. 
git clone LINK_GITHUB da um enter. novamente file open folder: seleciona tudo e apaga

- /var/www/html/curso_php_26 e da um ok. Após, terminal novo terminal verifica se esta em: /var/www/html/curso_php_26.

# MariaDB

CREATE DATABASE curso_php_26;

CREATE USER 'aluno'@localhost IDENTIFIED BY '1234';

GRANT ALL PRIVILEGES ON *.* TO 'aluno'@localhost IDENTIFIED BY '1234';

https://phoenixnap.com/kb/how-to-create-mariadb-user-grant-privileges#:~:text=To%20create%20a%20new%20MariaDB,to%20a%20local%20MySQL%20server.

select u.* from usuario as u 
inner join pessoa fisica as pf ON u.id = pf.usuario_alteracao

select u.* from usuario as u 
left join pessoa fisica as pf ON u.id = pf.usuario_alteracao

select u.* from usuario as u 
right join pessoa_fisica as pf ON u.id = pf .usuario_alteracao

set session sql_mode = 'No_engine_substitution';


