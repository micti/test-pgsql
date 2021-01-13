# Docker

    docker-compose up -d

# Benchmark

    ab -n1000 -c100 http://localhost:9210/

# Example result

```
This is ApacheBench, Version 2.3 <$Revision: 1879490 $>
Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
Licensed to The Apache Software Foundation, http://www.apache.org/

Benchmarking localhost (be patient)
Completed 100 requests
Completed 200 requests
Completed 300 requests
Completed 400 requests
Completed 500 requests
Completed 600 requests
Completed 700 requests
Completed 800 requests
Completed 900 requests
Completed 1000 requests
Finished 1000 requests


Server Software:        Apache/2.4.38
Server Hostname:        localhost
Server Port:            9210

Document Path:          /
Document Length:        3 bytes

Concurrency Level:      100
Time taken for tests:   10.534 seconds
Complete requests:      1000
Failed requests:        0
Total transferred:      195000 bytes
HTML transferred:       3000 bytes
Requests per second:    94.93 [#/sec] (mean)
Time per request:       1053.417 [ms] (mean)
Time per request:       10.534 [ms] (mean, across all concurrent requests)
Transfer rate:          18.08 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    2   3.6      1      21
Processing:    46 1000 567.8    918    4186
Waiting:       25 1000 567.8    917    4186
Total:         46 1002 567.0    918    4186

Percentage of the requests served within a certain time (ms)
  50%    918
  66%   1005
  75%   1089
  80%   1192
  90%   1716
  95%   2135
  98%   2747
  99%   3089
 100%   4186 (longest request)
```
