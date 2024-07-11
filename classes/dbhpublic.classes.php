<?php

class DbhPublic extends Dbh {
    public function getConnection() {
        return $this->connect();
    }
}
