<?php

namespace App;

class LitteralQueryBuilder implements QueryBuilderInterface{

    private $query;
    private $hasWhere = false;

    public function __construct(){
        $this->query = '';
    }

    public function select(array $fields): QueryBuilderInterface{
        $this->query .= 'Je sélectionne les champs ' . implode(', ', $fields);
        return $this;
    }

    public function from(string $table): QueryBuilderInterface{
        $this->query .= ' de la table ' . $table;
        return $this;
    }

    public function where(string $field, string $value, string $operator = '=', string $conjunction = 'et'): QueryBuilderInterface {
        if (!$this->hasWhere) {
            $this->query .= ' où';
            $this->hasWhere = true;
        } else {
            $this->query .= ' ' . $conjunction;
        }
        
        $this->query .= ' ' . $field . ' ' . $operator . ' ' . $value;
        return $this;
    }

    public function orderBy(string $field, string $order = 'ascendant'): QueryBuilderInterface{
        $this->query .= ' trié par ' . $field . ' ' . $order;
        return $this;
    }

    public function getQuery(): string{
        return $this->query.';';
    }
}