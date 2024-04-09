/*
示例来源URL

https://docs.microsoft.com/zh-cn/learn/modules/go-control-flow/4-use-defer-statement?ns-enrollment-type=LearningPath&ns-enrollment-id=learn.languages.go-first-steps

使用defer延迟执行关闭文件函数

*/

package main

import (
	"io"
	"os"
)

func main() {
	f, err := os.Create("/tmp/notes.txt")
	if err != nil {
		return
	}
	//延迟关闭文件
	defer f.Close()
	if _, err = io.WriteString(f, "Learning Go!"); err != nil {
		return
	}
	f.Sync()
}
