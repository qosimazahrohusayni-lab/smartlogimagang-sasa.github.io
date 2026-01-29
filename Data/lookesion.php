<?php

namespace data ;

abstract class locale_get_region
{
    public string $name;
}
class city extends locale_get_region
{
}

class province extends location 
{
}

class country extends location 
{
}