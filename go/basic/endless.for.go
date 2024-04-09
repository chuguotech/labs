/*
示例来源URL
https://docs.microsoft.com/zh-cn/learn/modules/go-control-flow/3-use-for-loops
*/

package main

import (
	"fmt"
	"math/rand"
	"time"
)

func main() {
	var num int32
	sec := time.Now().Unix()

	//随机数播种
	rand.Seed(sec)

	//无限for循环,因为for后面没有条件判断表达式
	for {

		if num = rand.Int31n(10); num == 5 {

			fmt.Println("finish!")

			//循环体中必须要有break,否则程序将无法结束
			break
		} else {
			fmt.Println(num)
		}
	}
	fmt.Println(num)
}
