<?php
namespace App\extension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class TwigExtension extends AbstractExtension
{
public function getFilters()
{
return [
new TwigFilter('boolToInt', [$this, 'boolToInt']),
];
}

public function boolToInt($value)
{
return $value ? 1 : 0;
}
}

