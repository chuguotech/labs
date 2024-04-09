/*
示例来源URL
https://docs.microsoft.com/zh-cn/learn/modules/go-control-flow/4-use-defer-statement?ns-enrollment-type=LearningPath&ns-enrollment-id=learn.languages.go-first-steps

可以根据需要推迟任意多个函数。 defer 语句按逆序运行，先运行最后一个，最后运行第一个。
*/
package main

import "fmt"

func main() {
	for i := 1; i <= 4; i++ {
		defer fmt.Println("defered", -i)
		fmt.Println("regular", i)
	}
}
