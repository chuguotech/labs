package main

import "log"

func main() {
	log.SetPrefix("main()")
	log.Print("Am a log")
	log.Fatal("Fatal log")
}
