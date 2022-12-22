<?php

namespace Challenge;

interface ClientInterface
{
    /**
     * @param string[] $queries
     * @return string[]
     */
    public function searchWithSyncEndpoints(array $queries, int $maxNumResults): array;

    /**
     * @param string[] $queries
     * @return string[]
     */
    public function searchWithAsyncEndpoints(array $queries, int $maxNumResults): array;
}