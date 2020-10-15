# образ
FROM elasticsearch:7.6.2
RUN \
    elasticsearch-plugin install analysis-icu && \
    elasticsearch-plugin install analysis-phonetic
# пробрасываем на 9200 порт
EXPOSE 9200
