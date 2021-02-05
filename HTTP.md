# HTTP

The Hypertext Transfer Protocol (HTTP) is designed to enable communications between clients and servers.

HTTP works as a request-response protocol between a client and server.

Example: A client (browser) sends an HTTP request to the server; then the server returns a response to the client. The response contains status information about the request and may also contain the requested content.

## HTTP Methods

   - GET
   - POST
   - PUT
   - HEAD
   - DELETE
   - PATCH
   - OPTIONS

The two most common HTTP methods are: GET and POST.

### The GET Method

GET is used to request data from a specified resource.

GET is one of the most common HTTP methods.

Note that the query string (name/value pairs) is sent in the URL of a GET request:
```/test/demo_form.php?name1=value1&name2=value2```

Some other notes on GET requests:

 -   GET requests can be cached
 -   GET requests remain in the browser history
 -   GET requests can be bookmarked
 -   GET requests should never be used when dealing with sensitive data
 -   GET requests have length restrictions
 -   GET requests are only used to request data (not modify)

### The POST Method

POST is used to send data to a server to create/update a resource.

The data sent to the server with POST is stored in the request body of the HTTP request:
```
POST /test/demo_form.php HTTP/1.1
Host: w3schools.com
name1=value1&name2=value2
```
POST is one of the most common HTTP methods.

Some other notes on POST requests:

-    POST requests are never cached
-    POST requests do not remain in the browser history
-    POST requests cannot be bookmarked
-    POST requests have no restrictions on data length

### The PUT Method

If we want to update an existing resource, PUT method should be used for this operation.PUT method has some features as compare to the POST method and we should keep those in mind

- PUT method is idempotent.This means the client can send the same request multiple time and as per HTTP spec, this has exactly the same effect as sending once. (This is for us to make sure PUT behaves correctly every time)
- Think of PUT method as putting a resource – This means completely replacing whatever is available at the given URL with the given data/ information.
- If a new resource created by PUT request, we should tell client by sending a correct response (201 Created code).

idempotent is the main difference between the expectations of PUT versus a POST request.We need to follow this property while designing our REST API.

Let’s take some example of PUT method URI

    HTTPS PUT http://www.javadevjournal.com/customers/1/addresses/123 (Modify the address with an ID of 123)
    HTTPS PUT http://www.javadevjournal.com/customers/123
    
### DELETE Method

DELETE method should be used to remove a given resource.Similar to PUT method, DELETE operation is idempotent.If a resource is deleted any later request will change anything in the system and it should return 404 response.DELETE can be a long-running or asynchronous request.Let’s take some example of DELETE method URI

    HTTPS DELETE http://www.javadevjournal.com/customers/1
    HTTPS DELETE http://www.javadevjournal.com/customers/1/addresses/123
    
### PATCH METHOD

Partial update to a resource should happen through PATCH method.To differentiate between PATCH and PUT method, PATCH request used to partially change a given resource while PUT used to replace existing resource.There are few things to keep in mind while using PATCH method.

  -  Support for PATCH in browsers, servers and web applications are not universal, this can post some challenges.
  -  Request payload for Patch is not simple and a client is required to send information to differentiate between the new and original documents.
 

  
