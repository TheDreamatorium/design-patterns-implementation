FROM nginx:alpine

WORKDIR '/src'

COPY ./src .

RUN rm /etc/nginx/conf.d/default.conf

COPY ./site.conf /etc/nginx/conf.d/


