ARG MYSQL_VERSION
FROM mysql:${MYSQL_VERSION}

RUN echo "USE mysql;" > /docker-entrypoint-initdb.d/timezones.sql &&  mysql_tzinfo_to_sql /usr/share/zoneinfo >> /docker-entrypoint-initdb.d/timezones.sql

CMD ["mysqld"]

EXPOSE 3306
