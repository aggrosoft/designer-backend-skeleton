# Shirtnetwork Designer Backend

This backend will handle configuration files, font management and uploading files for
the [shirtnetwork](https://www.shirtnetwork.com) designer. This backend is used for all implementations. Feel free to adapt
this skeleton to your own needs.

:exclamation: **We recommend using the [nodejs based version](https://www.github.com/aggrosoft/designer-backend-skeleton-node) whenever possible**

## Installation

Use git to clone the repository

```bash
git clone https://github.com/aggrosoft/designer-backend-skeleton.git
```

Then install the dependencies using composer inside the created folder

```bash
composer install
```

## Configuration

The repository comes with a config.inc.sample.php file, copy this file to config.inc.php and 
adjust it to your needs. If you do not copy the file before first request it will be created
automatically. Files are stored in the var/ subfolders by default.

Point your webserver to serve the root of the application, it is pre configured to work with
apache webserver. We recommend using a subdomain or a separate domain for the app e.g.: https://config.example.org

## Usage

Depending on your consuming system you will need to configure upload and config urls. Use as following:

**Upload Endpoint** 

https://config.example.org/files

**Config Endpoint**

https://config.example.org

Fire up the settings interface to define fonts:

https://config.example.org/settings/fonts

## Security

:exclamation: Be sure to add at least one user in the auth section of the config file, 
otherwise authentication is skipped and everybody will be able to modify your settings.
 
Also be sure to set allowed-origins in config.inc.php so only specific endpoints can upload files and configurations.

## NGINX

You can use NGINX as a webserver, as the designer backend is a slim application you will have to configure NGINX as following

```nginxconfig
server {
    listen 80;
    server_name example.com;
    index index.php;
    error_log /path/to/example.error.log;
    access_log /path/to/example.access.log;
    root /path/to/public;

    location / {
        try_files $uri /index.php$is_args$args;
    }

    location ~ \.php {
        try_files $uri =404;
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_param SCRIPT_NAME $fastcgi_script_name;
        fastcgi_index index.php;
        fastcgi_pass 127.0.0.1:9000;
    }
}
``` 

:exclamation: 
Since nginx will not route `/config` routes using this method you can rename `config.inc.php` to `cfg.inc.php` 
as a workaround. See the [Slim v4 Documentation](http://www.slimframework.com/docs/v4/start/web-servers.html)
for further information.
Contributions to improving the nginx config are very welcome.

## Cron

To cleanup old uploaded files including their metadata the server ships with a symfony console command. Execute as following

```bash
bin/console uploads:cleanup
```

This will delete all files older than 30 days, if the file was manifested it is valid 3 years instead.

## Updating

Similar to installing, if you did not change the skeleton do the following:

```bash
git pull
composer update
```

Omit git pull if you did any changes to the skeleton.

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
