<?php

interface publication
{
    public function __construct();
    public function create();
    public function delete();
    public function update();
}