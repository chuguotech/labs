//goroutine multi tron token assets
package main

import (
	"bytes"
	"context"
	"encoding/json"
	"fmt"
	"io/ioutil"
	"net/http"
	"strconv"
	"time"

	"github.com/go-redis/redis/v8"
)

var ctx = context.Background()

type Trx struct {
	Balance int64
}

func main() {
	start := time.Now()
	addresses := []string{
		"here input your token address",
	}
	ch := make(chan string)

	rdb := redis.NewClient(&redis.Options{
		Addr:     "localhost:6379",
		Password: "",
		DB:       0,
	})
	rdb.Set(ctx, "coin_trx", 0, 0)

	for _, address := range addresses {
		url := "https://api.trongrid.io/wallet/getaccount"
		go fetch(rdb, url, address, ch)
	}

	for i := 0; i < len(addresses); i++ {
		fmt.Print(<-ch)
	}

	elapsed := time.Since(start)
	sum, _ := rdb.Get(ctx, "coin_trx").Result()
	fmt.Printf("\nTotal Asset: %s trx", sum)
	fmt.Print("\nTotal Time: ", elapsed)
}

func fetch(rdb *redis.Client, url string, address string, ch chan string) {
	postBody, _ := json.Marshal(map[string]string{
		"address": address,
		"visible": "true",
	})
	responseBody := bytes.NewBuffer(postBody)
	resp, _ := http.Post(url, "application/json", responseBody)
	defer resp.Body.Close()
	body, _ := ioutil.ReadAll(resp.Body)
	var trx Trx
	json.Unmarshal([]byte(body), &trx)
	balance := trx.Balance / 1000000
	now, _ := rdb.Get(ctx, "coin_trx").Result()
	_now, _ := strconv.ParseInt(now, 10, 64)
	rdb.Set(ctx, "coin_trx", balance+_now, 0)
	ch <- fmt.Sprintf("\nAddrerss: %s Balance: %d", address, balance)
}
