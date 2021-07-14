<?php

class PdfExporter implements ExportInterface
{
    public function export() : string
    { 
        return 'exporting pdf files...';  
    }
}
