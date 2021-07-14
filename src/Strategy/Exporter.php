<?php 
class Exporter 
{
    private ExportInterface $exportable;

    public function setExportable(ExportInterface $exportable)
    {
        $this->exportable = $exportable;
    }

    public function executeExport() : string
    {
        return $this->exportable->export();
    }
}
