# Image with Node v.7 and JAVA (great fix for the jre-8 dep issue)
FROM karthikiyengar/node-nightwatch

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && apt-get install mc -y

WORKDIR /var/www
COPY package.json /var/www
RUN sudo npm install
RUN sudo npm install nightwatch -g
# COPY . /var/www 
CMD tail -f /dev/null
ENV DEBIAN_FRONTEND teletype