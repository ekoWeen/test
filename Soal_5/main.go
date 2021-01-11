package main

import (
	"encoding/json"
	"fmt"
	"log"
	"os"
)

type Data struct {
	Header string `json:"X-RANDOM"`
	Body   string `json:"counter"`
}

func mkData() {
	var jsonString = `[
		{"X-RANDOM": "93f9h3dx", "counter": "1"},
		{"X-RANDOM": "fe9g83jm", "counter": "2"},
		{"X-RANDOM": "igrijd9p", "counter": "3"}
	]`
	var jsonData = []byte(jsonString)

	var data []Data

	var err = json.Unmarshal(jsonData, &data)
	if err != nil {
		fmt.Println(err.Error())
		return
	}

	f, err := os.OpenFile("server.log", os.O_RDWR|os.O_CREATE|os.O_APPEND, 0666)
	if err != nil {
		log.Fatalf("error opening file: %v", err)
	}
	defer f.Close()

	log.SetOutput(f)

	log.Println(log.LstdFlags)
	log.Println("{counter:", data[0].Body, ",", "X-RANDOM:", data[0].Header, "}")
	log.Println("{counter:", data[1].Body, ",", "X-RANDOM:", data[1].Header, "}")
	log.Println("{counter:", data[2].Body, ",", "X-RANDOM:", data[2].Header, "}")
}

// func handleReq() {
// 	r := mux.NewRouter().StrictSlash(true)

// 	r.HandleFunc("/datas", mkData).Methods("POST")

// 	fmt.Println("Application running")
// 	log.Fatal(http.ListenAndServe(":8080", r))
// }
func main() {
	// handleReq()
	mkData()
}
