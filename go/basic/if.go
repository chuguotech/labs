package main

import "fmt"

func getnumber() int {
	return -1
}

func main() {
	if num := getnumber(); num < 0 {
		fmt.Println(num, "is negative")
	} else if num < 10 {
		fmt.Println(num, "has 1 digit")
	} else {
		fmt.Println(num, "has multiple digits")
	}
}
