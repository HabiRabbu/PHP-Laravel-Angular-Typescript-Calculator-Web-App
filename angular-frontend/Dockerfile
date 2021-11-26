FROM node:latest as node

WORKDIR /app

COPY conf/entrypoint.sh /entrypoint.sh

EXPOSE 4200

CMD ["/bin/bash", "/entrypoint.sh"]
