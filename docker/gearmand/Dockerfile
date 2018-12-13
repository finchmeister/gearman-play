FROM debian:jessie

RUN apt-get update
RUN apt-get install -y gearman-job-server

EXPOSE 4730

CMD ["gearmand"]