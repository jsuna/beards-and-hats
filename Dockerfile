FROM centos:centos6

# Enable EPEL for Node.js
RUN		rpm -Uvh http://download.fedoraproject.org/pub/epel/6/i386/epel-release-6-8.noarch.rpm

#Install Node.js and npm
RUN		yum install -y npm

COPY . /src/practice_app/men-beards-and-hats

RUN cd /src/practice_app/men-beards-and-hats; npm install

EXPOSE 8080

CMD ["node", "/src/practice_app/men-beards-and-hats/index.js "]