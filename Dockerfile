FROM golang:latest AS phprom

COPY ./ /go/src/github.com/vestiaire-collective/phprom

WORKDIR /go/src/github.com/vestiaire-collective/phprom/cmd/v1

RUN go get -v && go build -o /phprom && rm -rf /go

CMD ["/phprom"]
