
# iOnline Plus

iOnline Plus, is a Laravel 11 y Filamentphp version of the tradicional iOnline project.

## Dependencias
- php 8.2

## Development Roadmap
- [X] Agenda Telefónica
- [ ] Partes
- [-] Autoridades
- [ ] Documentos ( fix editor )
- [ ] Solitud de firma (Autoridades) (Approval)
- [ ] Sgr (Cuco)

### Migration Tasks
 - [ ] php artisan make:model Document/Parte -m
 - [ ] copiar / hacer modelo y migración
 - [ ] php artisan make:filament-resource Document/Parte
 - [ ] php artisan make:policy Document/PartePolicy --model=Document/Parte
 - [ ] configurar policy con acceso
 - [ ] configurar recurso, menú e icono
 - [ ] hacer RelationManager si corresponde


## Deployment

To deploy this project run

```bash
  git clone https://github.com/cl-ssi/ionline-plus
  cd ionline-plus
  composer install
  copy .env.example .env
  php artisan migrate --seed
  php artisan serve
```

## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

`API_KEY`  (php artisan key:generate)

`DB_CONNECTION`=mysql
`DB_HOST`=ades
`DB_PORT`=3306
`DB_DATABASE`=ionline
`DB_USERNAME`=
`DB_PASSWORD`=

## Contributing

Contributions are always welcome!

Send your pull request

## Authors

- [Servicio de Salud Tarapacá](https://github.com/cl-ssi)
