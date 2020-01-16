# Shirtnetwork Designer Backend

This backend will handle configuration files, font management and uploading files for
the [shirtnetwork](https://www.shirtnetwork.com) designer. This backend is used for all implementations. Feel free to adapt
this skeleton to your own needs.

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

Depending on your endpoint you will need to configure upload and config urls. Use as following:

**Upload Endpoint** 

https://config.example.org/files

**Config Endpoint**

https://config.example.org

Fire up the settings interface to define fonts:

https://config.example.org/settings/fonts

## Security

:exclamation: Currently it is up to you to handle authentication to the settings endpoint. 
Also be sure to set allowed-origins in config.inc.php so only specific endpoints can upload files and configurations.

## Cron

There will be a cronjob to cleanup unused files and configurations soon.

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
