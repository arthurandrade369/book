<?php

interface Publication
{
    public function open();

    public function close();

    public function browse($pages);

    public function nextPage();

    public function returnPage();
}
