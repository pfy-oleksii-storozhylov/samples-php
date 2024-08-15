# SimpleActivity sample

This sample demonstrates a basic single Activity Workflow.

From the root of the project, run the following command:

```bash
docker-compose build

docker-compose up

docker-compose exec app php app.php simple-activity
```

Logs
```
temporal                | {"level":"info","ts":"2024-08-15T10:25:24.364Z","msg":"history client encountered error","service":"matching","error":"Not enough hosts to serve the request","service-error-type":"serviceerror.Unavailable","logging-call-at":"metric_client.go:104"}
temporal                | {"level":"info","ts":"2024-08-15T10:25:24.364Z","msg":"Current reachable members","component":"service-resolver","service":"history","addresses":["172.20.0.6:7234"],"logging-call-at":"service_resolver.go:279"}
samples-php-app-1       | stop signal received, grace timeout is: 30 seconds
samples-php-app-1       | 2024-08-15T10:25:24+0000      INFO    server          destroy signal received {"timeout": "30s"}
samples-php-app-1       | 2024-08-15T10:25:24+0000      INFO    server          destroy signal received {"timeout": "1m0s"}
samples-php-app-1       | 2024-08-15T10:25:24+0000      INFO    service         stop signal received, grace timeout is: 30 seconds
samples-php-app-1       | 2024-08-15T10:25:24+0000      INFO    temporal        Stopped Worker  {"Namespace": "default", "TaskQueue": "default", "WorkerID": "default:07bec01c-907c-4850-b22b-8eadd9a78237"}
samples-php-app-1       | 2024-08-15T10:25:24+0000      INFO    temporal        Stopped Worker  {"Namespace": "default", "TaskQueue": "337f48407b50", "WorkerID": "337f48407b50:3402927c-b4a1-45f7-9344-d827a21ace4b"}
samples-php-app-1       | 2024-08-15T10:25:24+0000      INFO    service         2024-08-15T10:25:24+0000        INFO    server          destroy signal received {"timeout": "30s"}
samples-php-app-1       | 2024-08-15T10:25:24+0000      WARN    temporal        Failed to poll for task.        {"Namespace": "default", "TaskQueue": "interceptors", "WorkerID": "interceptors:787d356f-4814-4ff0-8ced-331af9fe2820", "WorkerType": "WorkflowWorker", "Error": "worker stopping"}
samples-php-app-1       | 2024-08-15T10:25:24+0000      INFO    temporal        Stopped Worker  {"Namespace": "default", "TaskQueue": "interceptors", "WorkerID": "interceptors:787d356f-4814-4ff0-8ced-331af9fe2820"}
samples-php-app-1       | 2024-08-15T10:25:24+0000      INFO    service         2024-08-15T10:25:24+0000        INFO    server          destroy signal received {"timeout": "1m0s"}
samples-php-app-1       | 2024-08-15T10:25:25+0000      INFO    service         service was stopped     {"name": "interceptors", "command": "/usr/local/bin/rr serve -c ./src/Interceptors/.rr.yaml"}
temporal                | {"level":"info","ts":"2024-08-15T10:25:27.417Z","msg":"Current reachable members","component":"service-resolver","service":"frontend","addresses":["172.20.0.6:7233"],"logging-call-at":"service_resolver.go:279"}
temporal                | {"level":"info","ts":"2024-08-15T10:25:27.419Z","msg":"Current reachable members","component":"service-resolver","service":"frontend","addresses":["172.20.0.6:7233"],"logging-call-at":"service_resolver.go:279"}
samples-php-app-1       | 2024-08-15T10:25:27+0000      INFO    temporal        Task processing failed with error       {"Namespace": "default", "TaskQueue": "default", "WorkerID": "default:07bec01c-907c-4850-b22b-8eadd9a78237", "WorkerType": "ActivityWorker", "Error": "grpc: the client connection is closing"}
```