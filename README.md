## sisold


## Configuracao do virtual host do site sisold idoso

`ATENCAO` esses arquivo ja estao criado na pasta:

	framework/portal.conf
	framework/portal_admin.conf

Criar o arquivo `portal.conf` no caminho:

    /etc/apache2/sites-available/portal.conf
 /etc/apache2/sites-available/portal.admin.conf

O arquivo `portal.conf` devera conter a seguinte estrutura:

```
<VirtualHost *:80>
  ServerName portal
  DocumentRoot /var/www/sisold/portal

  <Directory /var/www/sisold/portal>
    <IfModule mod_rewrite.c>
      Options -MultiViews
      RewriteEngine On
      RewriteCond %{REQUEST_FILENAME} !-f
      RewriteRule ^ index.php [L]
    </IfModule>
  </Directory>
</VirtualHost>


```

O arquivo `portal.admin.conf` devera manter a seguinte estrutura:

<VirtualHost *:80>
  ServerName portal.admin
  DocumentRoot /var/www/sisold/admin

  <Directory /var/www/sisold/admin>
    <IfModule mod_rewrite.c>
      Options -MultiViews
      RewriteEngine On
      RewriteCond %{REQUEST_FILENAME} !-f
      RewriteRule ^ index.php [L]
    </IfModule>
  </Directory>
</VirtualHost


```


Após criar o arquivo `portal.conf`, você deverá executar os seguintes comandos:
	
	cd /etc/apache2/sites-available
    a2ensite portal.conf
    service apache2 reload

Agora que voce ja criou o arquivo e fez reload do apache2 voce deve inserir um excecao de URL no arquivo `hosts` no caminho:

	/etc/

Exemplo de comando para edicao do arquivo `hosts`:
	
	vi /etc/hosts

No arquivo `hosts`, voce devera inserir a seguinte linha:

	127.0.0.1   portal.dev

Caso todo o procedimento esteja correto voce ja deve conseguir acessar o projeto pela URL:

	portal.dev

Agora voce deve repetir o mesmo procedimento para o admin do portal idoso o que muda e o nome do arquivo `portal.admin.conf` e no hosts devera ficar:

	127.0.0.1   admin.dev
