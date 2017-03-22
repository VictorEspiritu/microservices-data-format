FROM php:7.1-cli
STOPSIGNAL SIGKILL
WORKDIR /opt

#install protoc
RUN apt-get update && apt-get install -y -q git rake ruby-ronn zlib1g-dev && apt-get clean

RUN mkdir -p /tmp/protoc && \
    curl -L https://github.com/google/protobuf/releases/download/v3.0.0/protoc-3.0.0-linux-x86_64.zip > /tmp/protoc/protoc.zip && \
    cd /tmp/protoc && \
    unzip protoc.zip && \
    cp /tmp/protoc/bin/protoc /usr/local/bin && \
    cd /tmp && \
    rm -r /tmp/protoc
