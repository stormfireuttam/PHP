# HTTP Status Codes

REST API uses the Status-Line part of the HTTP response to inform API client of their request’s overarching result. While designing our REST API, it’s is very important to send a correct response back to the customer.Response code help client in 

-    Understanding status of the given request.
-    It helps a client to take a correct step in the process.

As part of the RESTful design, we should clearly inform the client if they can move to next step or they need to take any corrective steps.HTTP defines over 40 standard status codes used to convey status back to the client.

A good status code also allows the developers to get their way out of the failed call.

All these status codes grouped into 5 different categories

Status Code Category	Description	Example
- ***1XX*** - Informational	Informational indicates a provisional response	100 (Continue ) , 101
- ***2XX*** - Successful	This class of status code indicates that the client’s request was successfully received, understood, and accepted.	200 (OK), 201(Created), 202 (Accepted)
- ***3XX*** - Redirection	This class of status code indicates that further action required by the user agent to fulfill the request 	301 (Moved Permanently), 302, 304 
- ***4XX*** - Client Error	The 4xx class of status code is intended for cases where the client seems to have erred 	400 ( Bad Request), 401, 403, 404, 405
- ***5XX*** - Server Error	Response status codes beginning with the digit “5” tell cases where the server is aware that it has erred or is incapable of performing the request 	500 (Internal Server Error), 502, 503, 505

Before finishing this post, let’s cover some of the most commonly used HTTP statuses in the REST API.
6.1  ***200 (OK)*** -> This status indicates the REST API successfully processes the request.200 response code include response body

-    For GET request, 200 should contain requested resource.
-    POST request should contain the result of the action performed (e.g new user-created).

6.2  ***201 (Created)*** -> REST API should response with 201 response code when a new resource created in the collection.

6.3  ***202 (Accepted)*** -> For the long-running process, REST API should return 202 as a valid response. 202 inform the client that request is accepted by the API but not yet completed.

6.4  ***301 (Moved Permanently)*** -> 301 status tell that request REST API resource has been moved to a new URI. As part of the 301 response, REST API should also include the new URI for the customer.

6.5  ***304 (Not Modified)*** -> This indicates REST client that requested content has not been modified and if applicable, they can use cache copy of the content.Using this saves bandwidth and reprocessing on both the server and client.This is achieved by using added headers like If-Modified-Since or If-None-Match.

6.6  ***400 (Bad Request)*** -> This is a generic error which indicates REST client that request does not meet the required criteria.The client should not repeat the request without changes.

6.7  ***401 (Unauthorized)*** -> A 401 error response indicates that the client tried to run on a protected resource without providing the proper authorization.

6.8 ***403 (Forbidden)*** -> A 403 error response indicates that the client’s request formed correctly, but the REST API refuses to honor it i.e. the user does not have the necessary permissions for the resource

6.9 ***404 (Not Found)***
