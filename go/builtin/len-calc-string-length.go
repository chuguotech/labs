package main

import (
	"fmt"
)

func main() {
	s0 := ""
	s1 := "a"
	s2 := "¥"
	s3 := "芒"
	s4 := "🥭"
	s5 := s0 + s1 + s2 + s3 + s4
	fmt.Printf("空字符串的长度：%d\n", len(s0))
	fmt.Printf("a的长度：%d\n", len(s1))
	fmt.Printf("¥的长度：%d\n", len(s2))
	fmt.Printf("芒的长度：%d\n", len(s3))
	fmt.Printf("🥭的长度：%d\n", len(s4))
	fmt.Printf("a¥芒🥭的长度：%d\n", len(s5))
}
