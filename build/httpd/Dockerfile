FROM httpd:2.4

ENV DEBIAN_FRONTEND noninteractive
ARG DOMAIN_NAME

RUN apt-get update
RUN apt-get -y --no-install-recommends install openssl ca-certificates

RUN mkdir -p /etc/ssl/certs
RUN mkdir -p /tmp_certs
COPY ./certificates/* /tmp_certs
RUN if [[ -e /tmp_certs/selfsigned.crt ]]; then \
       if [[ - e /tmp_certs/selfsigned.key]] ; then \
          cp /tmp_certs/selfsigned.key /etc/ssl/certs/selfsigned.key; \
          cp /tmp_certs/selfsigned.crt /etc/ssl/certs/selfsigned.crt; \
       else \
          openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/certs/selfsigned.key -out /etc/ssl/certs/selfsigned.crt -subj '/C=GB/ST=Scotland/L=Glasgow/O=McLeanDigital/OU=Development/CN=${DOMAIN_NAME}'; \
       fi \
   else  \

       openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/certs/selfsigned.key -out /etc/ssl/certs/selfsigned.crt -subj '/C=GB/ST=Scotland/L=Glasgow/O=McLeanDigital/OU=Development/CN=${DOMAIN_NAME}'; \
   fi

COPY ./httpd/httpd.conf /usr/local/apache2/conf/httpd.conf
COPY ./httpd/httpd-vhosts.conf /usr/local/apache2/conf/extra/httpd-vhosts.conf

COPY ./certificates/proxyman_ca.crt /usr/local/share/ca-certificates/proxyman_ca.crt
RUN chmod 644 /usr/local/share/ca-certificates/proxyman_ca.crt && update-ca-certificates
