package main

import (
	"fmt"
	"net/http"
	"time"
)

func main() {

	start := time.Now()
	apis := []string{
		"https://www.cnn.com",
		"https://www.aol.com",
		"https://www.abc.efg",
		"https://www.yahoo.com",
	}
	ch := make(chan string)
	for _, api := range apis {
		go request(api, ch)
	}
	for i := 0; i < len(apis); i++ {
		fmt.Print(<-ch)

	}
	elapsed := time.Since(start)
	fmt.Printf("Down, It took %s seconds\n", elapsed.Seconds())
}

func request(api string, ch chan string) {
	_, err := http.Get(api)
	if err != nil {
		ch <- fmt.Sprintf("ERROR: %s is down\n", api)
		return
	}
	ch <- fmt.Sprintf("Success %s is up and running !\n", api)
}
