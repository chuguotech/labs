package main

func main() {
	name := "Zhang"
	updateName(&name)
	println(name)
}

func updateName(name *string) {
	*name = "Wang"
}
