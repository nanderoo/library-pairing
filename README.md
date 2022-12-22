# Background

We have added a dashboard widget to our customer facing application that should display search results for various
keywords that the customer has previously selected. This widget is critical to the customer experience and must be populated with the
relevant data as soon as possible.

We must create an API client that aggregates the results ourselves because the API does not allow us to specify 
multiple queries in a single request. The OpenAPI specification for this API is available in `./swagger.yml`.


# Task

Implement the `\Challenge\ClientInterface`.

Aside from adhering to the provided contract, the client should meet the following criteria:
1. Uses the endpoints available in the OpenAPI specification
2. The `searchWithSyncEndpoints` method should only dispatch requests to the `/query` endpoints.
3. The `searchWithAsyncEndpoints` method should only dispatch requests to the `/queryAsync` endpoints.
4. Both methods should return as many results as are available up until `$maxNumResults`. For example, if `$maxNumResults === 10`, ten or fewer results should be returned. It does not matter which results are returned.


# Additional

- Feel free to use libraries for common functionality, such as
  - HTTP/IO
  - Serialization
  - Basically anything that you would expect to find in a framework