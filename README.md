# PRA website

Website designed using statamic

## Deployment Notes

- Update ```.env``` variables with proper ```APP_URL```, ```APP_ENV``` to ```production```
- Add ```ASSET_URL=${APP_URL}```
- Run ```npm run build```
- On the server, run clear cache i.e
- ```php artisan optimize:clear```
- ```php artisan statamic:stache:clear```
- ```php artisan statamic:stache:warm```
- ```php artisan config:cache```
- ```php artisan route:cache```
- ```php artisan view:cache```
- If Deploying on sharehosting i.e. cpanel don't forget to remove the hot file. because it will trick the server thinking it is still in development mode
- From the file manager ```public/hot   ← DELETE THIS FILE```
- or from the terminal ```rm public/hot```

- ```https://realfavicongenerator.net/``` generate favicons
