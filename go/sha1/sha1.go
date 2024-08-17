package main

import (
	"crypto/sha1"
	"fmt"
)

func main() {
	// 要计算哈希的字符串
	str := "314159"

	// 创建一个sha1.Digest类型的变量，用于存储哈希值
	hash := sha1.New()

	// 将字符串写入哈希函数中
	hash.Write([]byte(str))

	// 计算哈希值
	sum := hash.Sum(nil)

	// 将哈希值转换为字符串并打印出来
	fmt.Printf("%x\n", sum)
}
