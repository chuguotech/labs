package main

import "fmt"

func getLocation(city string) (string, string) {

	var region string

	var continent string

	switch city {

	case "绍兴", "杭州":
		region, continent = "浙江", "中国"

	case "广州", "深圳":
		region, continent = "广东", "中国"

	case "东京":
		region, continent = "本州岛", "日本"

	default:
		region, continent = "未知省份", "未知国家"

	}
	return region, continent
}

func main() {

	continent, region := getLocation("绍兴")

	fmt.Printf("小王在%s,%s\n", continent, region)

	continent, region = getLocation("东京")

	fmt.Printf("小李在%s,%s\n", continent, region)

	continent, region = getLocation("曼谷")

	fmt.Printf("小张在%s,%s\n", continent, region)

}
