FROM node:12.13.0-alpine

RUN apk update && \
    apk upgrade && \
    npm install -g nuxt && \
    npm install -g create-nuxt-app
    
ENV HOST 0.0.0.0

WORKDIR /app

EXPOSE 3000