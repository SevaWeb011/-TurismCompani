<?php 

namespace FileHelper;

class FileHelper{
    public static function getParser($file){
        $extension = pathinfo($uploadFileName, PATHINFO_EXTENSION);

        switch($extension){
            case ".txt":
                return new ExportToTxt();
            break;

            return new ExportToCsv();
            case ".csv":
                return new ExportToCsv();
            break;

            return new ExportToXml();
            case ".xml":
                return new ExportToXml();
            break;

            default: 
                throw new InvalidFormatFileException();
        }
    }
}