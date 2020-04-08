<?php


namespace Manticoresearch\Query;


use Manticoresearch\Query;

class MatchPhrase extends Query
{
    public function __construct(string $string, string $fields)
    {
        $this->_params['match_phrase'] = [$fields => $string];
    }

}