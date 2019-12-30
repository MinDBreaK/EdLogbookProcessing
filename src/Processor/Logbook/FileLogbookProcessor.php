<?php


namespace App\Processor\Logbook;


use Symfony\Component\HttpFoundation\File\File;

class FileLogbookProcessor
{
    private $eventProcessor;

    public function __construct(EventLogbookProcessor $eventProcessor)
    {
        $this->eventProcessor = $eventProcessor;
    }

    /**
     * @param File[] $files
     */
    public function processFiles(iterable $files): void
    {
        foreach ($files as $file) {
            if ($file->isFile() && $file->isReadable()) {
                $this->processFile($file);
            }
        }
    }

    public function processFile(File $file): void
    {
        $fo = $file->openFile();

        while (!$fo->eof()) {
            $line = $fo->fgets();
            $this->eventProcessor->processRawEvent($line);
        }

        dd($file);
    }
}