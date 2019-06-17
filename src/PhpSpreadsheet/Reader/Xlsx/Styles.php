<?php

namespace PhpOffice\PhpSpreadsheet\Reader\Xlsx;

use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class Styles
{
    private $styleXml;

    private $worksheet;

    public function __construct(\SimpleXMLElement $styleXml, Worksheet $workSheet)
    {
        $this->styleXml = $styleXml;
        $this->worksheet = $workSheet;
    }

}
