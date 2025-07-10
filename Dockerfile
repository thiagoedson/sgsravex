# Etapa de build usando Node para compilar arquivos
FROM node:lts as build
WORKDIR /app
COPY package.json package-lock.json ./
RUN npm ci
COPY . .
RUN npx grunt concat uglify && rm -rf node_modules

# Etapa de runtime com PHP e Apache
FROM php:8.1-apache
WORKDIR /var/www/html
COPY --from=build /app /var/www/html
EXPOSE 80
CMD ["apache2-foreground"]
