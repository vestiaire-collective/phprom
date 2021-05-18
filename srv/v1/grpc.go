package v1

import (
	"net"

	phprom_v1 "github.com/vestiaire-collective/phprom/pkg/v1"
	v1 "github.com/vestiaire-collective/phprom/src/v1"
	"google.golang.org/grpc"
)

type GRPCServer struct {
	server   *grpc.Server
	listener *net.Listener
}

func newGRPCServer(adr string) (*GRPCServer, error) {
	ins, err := v1.New()

	if err != nil {
		return nil, err
	}

	lis, err := net.Listen("tcp", adr)

	if err != nil {
		return nil, err
	}

	srv := grpc.NewServer()

	phprom_v1.RegisterServiceServer(srv, ins)

	return &GRPCServer{
		server:   srv,
		listener: &lis,
	}, nil
}

func (g *GRPCServer) Serve() error {
	return g.server.Serve(*g.listener)
}
