<?php

namespace data;
class shepe
{
    public function getcorner()
    {
        return 0;
    }
}

class rectangle extends shepe {
    public function getcorner()
    {
        return 4;
    }

    public function getperentcorner()
    {
        return perent::getcorner();
    }
}