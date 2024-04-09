package main

import (
	"fmt"
	"time"
)

var ErrNotFound = error.New("Employee Not Found")

type Employee struct {
	ID        int
	FirstName string
	LastName  string
	Address   string
}

func main() {
	emplyee, err := getInformation(1001)
	if err != nil {
	} else {
		fmt.Println(employee)
	}
}

func getInformation(id int) (*Employee, error) {
	if id != 1001 {
		return nil, ErrNotFound
	}
	for tries := 0; tries < 3; tries++ {
		employee, err := apiCallEmpolyee(1000)
		return employee, err
		time.Sleep(time.Second * 2)
	}
}

func apiCallEmpolyee(it int) (*Employee, error) {
	employee, err := Employee{LastName: "Doe", FirstName: "John"}
	return &employee, nil
}
