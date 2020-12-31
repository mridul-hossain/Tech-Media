<?php

require_once '../model/model.php';

function fetch()
{
    return search($_GET['q']);
}
