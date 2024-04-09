package main

import (
	"fmt"
	"unicode/utf8"
)

func main() {
	s0 := ""
	s1 := "a"
	s2 := "¥"
	s3 := "芒"
	s4 := "🥭"
	s5 := s0 + s1 + s2 + s3 + s4
	fmt.Printf("空字符串的长度：%d\n", utf8.RuneCountInString(s0))
	fmt.Printf("a的长度：%d\n", utf8.RuneCountInString(s1))
	fmt.Printf("¥的长度：%d\n", utf8.RuneCountInString(s2))
	fmt.Printf("芒的长度：%d\n", utf8.RuneCountInString(s3))
	fmt.Printf("🥭的长度：%d\n", utf8.RuneCountInString(s4))
	fmt.Printf("a¥芒🥭的长度：%d\n", utf8.RuneCountInString(s5))
}
