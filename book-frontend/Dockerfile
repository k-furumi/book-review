FROM node:16-alpine
# Set up work directory
WORKDIR /var/www/web

ENV HOST 0.0.0.0

RUN apk update && \
    apk add --no-cache git python3

ENV TZ Asia/Tokyo

COPY . /var/www/

RUN npm install


CMD ["sh", "-c", "npm run dev"]
