/*
示例来源URL
https://docs.microsoft.com/zh-cn/learn/modules/go-control-flow/3-use-for-loops

分号 (;) 分隔 for 循环的三个组件：
在第一次迭代之前执行的初始语句（可选）。
在每次迭代之前计算的条件表达式。 该条件为 false 时，循环会停止。
在每次迭代结束时执行的后处理语句（可选）。

*/

package main

import (
	"fmt"
	"math/rand"
	"time"
)

func main() {
	var num int64
	rand.Seed(time.Now().Unix())
	for num != 5 {
		num = rand.Int63n(15)
		fmt.Println(num)
	}
}
